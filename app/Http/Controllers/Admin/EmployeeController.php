<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use App\Company;
use App\Http\Requests\EmployeeRequest;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::paginate(10);

        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::orderByDesc('id')->get(['name', 'id'])->pluck('name', 'id');
        return view('admin.employees.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\EmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        Employee::create($request->all());
        return redirect()->route('admin.employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('admin.employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $companies = Company::orderByDesc('id')->get(['name', 'id'])->pluck('name', 'id');
        return view('admin.employees.edit', compact('employee','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\EmployeeRequest  $request
     * @param  Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        Employee::updateOrCreate(['id' => $employee->id], $request->all());
        return redirect()->route('admin.employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back();
    }
}
