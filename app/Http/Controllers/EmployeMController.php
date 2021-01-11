<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;
use App\Models\City;
use Session;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\DepartmentRequest;
use App\Http\Requests\CityRequest;

class EmployeMController extends Controller
{

    public function index()
    {
        $items = Employee::get();
        return view("employeM.index", compact("items"));
    }
    public function create()
    {
        $departments = Department::get();
        $cities = City::get();
        return view("employeM.create", compact("departments","cities"));
    }

    public function store(EmployeeRequest $request)
    {


    //   if($request->hasFile('imgEmp')){
        //      $request->file('imgEmp');
    //       $fileName =  Storage::putFile('public/img',$request->file('imgEmp'));
    ////        $fileName = $request->imgEmp->store("public/images");
            //    $request['imgEmp'] = basename($fileName);
        // }
    // $fileName = $request->imgEmp->store("public/images");
    //  $request['imgEmp'] = basename($fileName);
        //    dd($request->all());

        $fileName = $request->imgEmp->store("public/images");
        $imgName  =  $request->imgEmp->hashName();
        $requestData= $request->all();
        $requestData['imgEmp'] =$imgName;


        Employee::create($requestData);
        Session::flash("msg","s: employe created successfully");
        return redirect(route("employes.index"));
    //  return redirect(route('employee.index'))->with('flash_message', 'This is my flash message!');
        }


    public function show($id)
    {
        $item = Employee::find($id);
        if(!$item){
            Session::flash("msg", "e: Invalid ID in URL");
            return redirect(route("employes.index"));
        }
        return view("employeM.show", compact("item", "id"));
    }
    public function edit($id)
    {
        $item = Employee::find($id);
        if(!$item){
            Session::flash("msg", "e: Invalid ID in URL");
            return redirect(route("employee.index"));
        }
        $departments = Department::get();
        $cities = City::get();
        return view("employeM.edit", compact("item", "id", "departments","cities"));
    }
    public function update(EmployeeRequest  $request, $id)
    {
        $fileName = $request->file->store("public/images");
        $imgName  =  $request->file->hashName();
        $requestData= $request->all();
        $requestData['imgEmp'] =$imgName;
        Employee::find($id)->update($requestData);
        dd(requestData);
       // Session::flash("msg","s: Employee updated successfully");
       // return redirect(route("employes.index"));
    }


    public function destroy($id)
    {
        $employe = Employee::find($id);
        $employe->delete();
        Session::flash("msg","w: Employee deleted successfully");
        return redirect(route("employes.index"));
    }
    public function uploadImg()
    {



    }
}
