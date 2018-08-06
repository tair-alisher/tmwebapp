<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EmployeesRepo;
use App\Employee;
use Validator;

class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index')
            ->with('employees', $employees);
    }

    public function show($slug)
    {
        $employee = Employee::whereTranslation('slug', $slug)
            ->firstOrFail();

        if ( $employee->translate()->where('slug', $slug)->first()->locale != app()->getLocale() ) {
            return redirect()->route('employees.show', $employee->translate()->slug);
        }

        return view('employees.show')
            ->with('employee', $employee);
    }

    /* ********** admin projects ********** */

    public function employees(EmployeesRepo $repo, $locale)
    {
        $employees = $repo
            ->getItemsByLocale($locale)
            ->paginate(10);
        
        return view('employees.employees')
            ->with('locale', $locale)
            ->with('employees', $employees);
    }

    public function createForm($locale)
    {
        return view('employees.create')
            ->with('locale', $locale);
    }

    public function create(Request $request, EmployeesRepo $repo, $locale)
    {
        $rules = [
            'name' => 'required|max:191',
            'position' => 'required|max:191',
            'degree' => 'max:191',
            'email' => 'required|max:191'
        ];
        $messages = [
            'name.required' => 'Имя обязательно для заполнения.',
            'name.max' => 'Имя слишком длинное.',
            'position.required' => 'Должность обязательна для заполнения.',
            'position.max' => 'Назименование должности слишком длинное.',
            'degree.max' => 'Наименование степени слишком длинное.',
            'email.required' => 'Email адрес обязателен для заполнения.',
            'email.max' => 'Длина email адреса превышает допустимую.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $filename = '';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $filename = $repo->makeUniqueFilename($image);
            $image->move(public_path('images/employees'), $filename);
        }

        $employees_id = $repo->create([
            'email' => $request['email'],
            'image' => $filename
        ]);

        $slug = $repo->toSlug($request['name']) . '-' . $locale;

        $translation_id = $repo->create([
            'name' => $request['name'],
            'slug' => $slug,
            'position' => $request['position'],
            'degree' => $request['degree']
        ]);

        return redirect()
            ->route('admin.employees.edit_translation_form', ['translation_id' => $translation_id]);
    }

    public function editTranslationForm(EmployeesRepo $repo, $translation_id)
    {
        $employee = $repo->findTranslation($translation_id);

        $translation_ru = $repo->getTranslationId('ru', $employee->employee_id);
        $translation_de = $repo->getTranslationId('de', $employee->employee_id);
        $translation_kg = $repo->getTranslationId('kg', $employee->employee_id);

        return view('employees.edit_translation')
            ->with('employee', $employee)
            ->with('translation_ru', $translation_ru)
            ->with('translation_de', $translation_de)
            ->with('translation_kg', $translation_kg);
    }

    public function editTranslation(Request $request, EmployeesRepo $repo, $translation_id)
    {
        $rules = [];
        $messages = [];
        Validator::make($request->all(), $rules, $messages)->validate();

        $locale = $repo->getLocale($translation_id);
        $new_slug = $repo->toSlug($request['name']) . '-' . $locale;

        $repo->updateTranslation($translation_id, [
            'name' => $request['name'],
            'slug' => $new_slug,
            'position' => $request['position'],
            'degree' => $request['degree'] == null ? '' : $request['degree'],
            'info' => $request['info']
        ]);

        return redirect()
            ->route('admin.employees.edit_translation_form', ['translation_id' => $translation_id]);
    }
}
