<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; //always add this to fetch the data in the models

class EmployeeController extends Controller
{
    //This is to view the Data
    /**
     * 1. First fix the route of the pages
     * 2. Make sure that the model is ready and with $table and $fillable
     * 3. Create fetch in the index of the controller
     * 4. After Model,Controller, create @foreach to display the data in the table in the employee.index blade file.
     */
    public function index(){
        $employee = Employee::all();
        return view('pages.employee.index' , compact('employee'));
    }

    public function create(){
        return view('pages.employee.create');
    }

    public function store(Request $request){

        $employee = new Employee;
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->designation = $request->input('designation');
        $employee->save();

        return redirect('employee')->with('status', 'Employee Added Successfully');

    }
//pass the data in the parameter
    public function edit($id){

        $employee = Employee::find($id);
        return view('pages.employee.edit', compact('employee'));

    }
//find the id
    public function update(Request $request, $id){
        $employee = Employee::find($id);
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->designation = $request->input('designation');
        $employee->status = $request->input('status') == true ? '1':'0';
        $employee->update();

        return redirect('employee')->with('status', 'Employee updated succesfully');
    }

    public function delete($id){
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('employee')->with('status', 'Employee deleted succesfully');
    }
}
