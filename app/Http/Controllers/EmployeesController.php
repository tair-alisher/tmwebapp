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

    public function index(EmployeesRepo $repo)
    {
        $employees = $repo->getItemsByLocale(app()->getLocale());

        return view('employees.index')
            ->with('employees', $employees);
    }

    public function show($slug)
    {
        $employee = Employee::whereTranslation('slug', $slug)
            ->firstOrFail();

        if (!$employee->slug) { abort(404); }

        if ( $employee->translate()->where('slug', $slug)->first()->locale != app()->getLocale() ) {
            return redirect()->route('employees.show', $employee->translate()->slug);
        }

        return view('employees.show')
            ->with('employee', $employee);
    }

    /* ********** admin projects ********** */

    public function employees(EmployeesRepo $repo, $locale)
    {
        \Auth::user()->userIs('employees_admin');
        $employees = $repo
            ->getItemsByLocale($locale);

        return view('employees.employees')
            ->with('locale', $locale)
            ->with('employees', $employees);
    }

    public function createForm($locale)
    {
        \Auth::user()->userIs('employees_admin');
        return view('employees.create')
            ->with('locale', $locale);
    }

    public function create(Request $request, EmployeesRepo $repo, $locale)
    {
        \Auth::user()->userIs('employees_admin');
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

        $filename = 'default.png';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $filename = $repo->makeUniqueFilename($image);
            $image->move(public_path('images/employees'), $filename);
        }

        $employee_id = $repo->create([
            'email' => $request['email'],
            'image' => $filename
        ]);

        $slug = $repo->toSlug($request['name']) . '-' . $locale;

        $translation_id = $repo->createTranslation([
            'employee_id' => $employee_id,
            'locale' => $locale,
            'name' => $request['name'],
            'slug' => $slug,
            'info' => '',
            'position' => $request['position'],
            'degree' => $request['degree'] == null ? '' : $request['degree']
        ]);

        return redirect()
            ->route('admin.employees.edit_translation_form', ['translation_id' => $translation_id]);
    }

    public function editForm(EmployeesRepo $repo, $employee_id)
    {
        \Auth::user()->userIs('employees_admin');
        $employee = $repo->find($employee_id);

        return view('employees.edit')
            ->with('employee', $employee);
    }

    public function edit(Request $request, EmployeesRepo $repo, $employee_id)
    {
        \Auth::user()->userIs('employees_admin');
        $rules = [
            'email' => 'required|max:191',
            'created_at' => 'required'
        ];
        $messages = [
            'email.required' => 'Email адрес обязателен для заполнения.',
            'email.max' => 'Длина email адреса превышает допустимую.',
            'created_at.required' => 'Дата создания необходима для заполнения.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $oldFileName = $repo->getImage($employee_id);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $filename = $repo->makeUniqueFilename($image);
            $image->move(public_path('images/employees'), $filename);

            if (strlen($oldFileName) > 0 && $oldFileName != 'default.png') {
                $filepath = public_path('images/employees/') . $oldFileName;
                $repo->deleteFile($filepath);
            }
        } else {
            $filename = $oldFileName;
        }

        $repo->update($employee_id, [
            'email' => $request['email'],
            'created_at' => $request['created_at'],
            'image' => $filename
        ]);

        return redirect()
            ->route('admin.employees.edit_form', $employee_id)
            ->with('message', 'Изменения сохранены.');
    }

    public function createTranslationForm(EmployeesRepo $repo, $locale, $employee_id)
    {
        \Auth::user()->userIs('employees_admin');
        $translation_ru = $repo->getTranslationId('ru', $employee_id);
        $translation_de = $repo->getTranslationId('de', $employee_id);
        $translation_kg = $repo->getTranslationId('kg', $employee_id);

        return view('employees.create_translation')
            ->with('locale', $locale)
            ->with('employee_id', $employee_id)
            ->with('translation_ru', $translation_ru)
            ->with('translation_de', $translation_de)
            ->with('translation_kg', $translation_kg);
    }

    public function createTranslation(Request $request, EmployeesRepo $repo, $locale, $employee_id)
    {
        \Auth::user()->userIs('employees_admin');
        $rules = [
            'name' => 'required|max:191',
            'position' => 'required|max:191',
            'degree' => 'max:191',
            'info' => 'required'
        ];
        $messages = [
            'name.required' => 'Имя обязательно для заполнения.',
            'name.max' => 'Имя слишком длинное.',
            'position.required' => 'Наименование должности слишком длинное.',
            'degree.max' => 'Наиенование степени слишком длинное.',
            'info' => 'Информация о сотруднике обязательна для заполнения.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $slug = $repo->toSlug($request['name']) . '-' . $locale;
        $translation_id = $repo->createTranslation([
            'employee_id' => $employee_id,
            'locale' => $locale,
            'slug' => $slug,
            'name' => $request['name'],
            'position' => $request['position'],
            'degree' => $request['degree'] == null ? '' : $request['degree'],
            'info' => $request['info']
        ]);

        return redirect()
            ->route('admin.employees.edit_translation_form', ['translation_id' => $translation_id]);
    }

    public function editTranslationForm(EmployeesRepo $repo, $translation_id)
    {
        \Auth::user()->userIs('employees_admin');
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
        \Auth::user()->userIs('employees_admin');
        $rules = [
            'name' => 'required|max:191',
            'position' => 'required|max:191',
            'degree' => 'max:191',
            'info' => 'required'
        ];
        $messages = [
            'name.required' => 'Имя обязательно для заполнения.',
            'name.max' => 'Имя слишком длинное.',
            'degree.max' => 'Название степени слишком длинное.',
            'info.required' => 'Основаня информация необходима для заполнения.'
        ];
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
            ->route('admin.employees.edit_translation_form', ['translation_id' => $translation_id])
            ->with('message', 'Изменения сохранены.');
    }

    public function delete(EmployeesRepo $repo, $employee_id)
    {
        \Auth::user()->userIs('employees_admin');
        $repo->deleteTranslations($employee_id);
        $repo->delete($employee_id);

        return redirect()
            ->route('admin.employees', 'ru')
            ->with('message', 'Запись удалена.');
    }

    public function duplicate(EmployeesRepo $repo, $id)
    {
      $translation_id = $repo->duplicateTranslation($id);

      return redirect()
        ->route('admin.employees.edit_translation_form', $translation_id)
        ->with('message', 'Записи на других языках теперь заполнены аналогично.');
    }
}
