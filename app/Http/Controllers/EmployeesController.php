<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
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
}
