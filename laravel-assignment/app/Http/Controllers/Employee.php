<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;
use App\Models\DepartmentModel;

class Employee extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Emp = EmployeeModel::all();
        $data = compact('Emp');
        return view('Employee.showEmp')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Employee.addEmp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required',
            'contact' => 'required',
            'img' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        $Emp = new EmployeeModel();

        $Emp->EmployeeName = $request['name'];
        $Emp->Email = $request['email'];
        $Emp->Age = $request['age'];
        $Emp->Contact = $request['contact'];
        if($request->hasfile('img')){
           $files =  $request->file('img');

           $fileName = $files->getClientOriginalName();

           $folder = "assets/images/";
           $dbfileloc = $folder .$fileName; 
           $files->move($folder,$dbfileloc);
           $Emp->EmpImg = $dbfileloc; 
        }
        $Emp->save();
        return redirect()->route('employees.index')->with('status','Your Details Inserted!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $Emp = EmployeeModel::find($id); 
        $data = compact('Emp');
        return view('Employee.detailEmp')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Emp = EmployeeModel::find($id);
        $data = compact('Emp');
        return view('Employee.editEmp')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required',
            'contact' => 'required',
            'img' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        $Emp = EmployeeModel::find($id);

        $Emp->EmployeeName = $request['name'];
        $Emp->Email = $request['email'];
        $Emp->Age = $request['age'];
        $Emp->Contact = $request['contact'];
        if($request->hasfile('img')){
            $files =  $request->file('img');
 
            $fileName = $files->getClientOriginalName();
 
            $folder = "assets/images/";
            $dbfileloc = $folder .$fileName; 
            $files->move($folder,$dbfileloc);
            $Emp->EmpImg = $dbfileloc; 
         }
        $Emp->save();
        return redirect()->route('employees.index')->with('status','Employee Details Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Emp = EmployeeModel::find($id);
        $Emp->delete();
        return redirect()->route('employees.index')->with('delete','Product Deleted');
    }
}
