<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class EmployeeController extends Controller
{

    public function index()
    {$items = DB::table("employee")->get();
        return view("employee.index")->with('items',$items);
    }


    public function create()
    {
        return view("employee.create");
    }


    public function store(Request $request)
    {
        request()->validate([
            'first_name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'email'=>'required|email|max:50',
            'phone'=>'required|max:50',
            'gender'=>'required|max:1',
        ]);

        DB::table("employee")->insert([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'gender' => $request['gender'],
            'EmpNo' => $request['EmpNo'],
            'active' => $request['active']?1:0
        ]);

        Session::flash("msg","Emplyee Created Successfully");

        return redirect(route("employee.create"));
    }


    public function show($id)
    {
        $item = DB::table("employee")->find($id);
        if(!$item){
            session()->flash("msg","Invalid Id");
            return redirect(route("employee.index"));
        }
        return view("employee.show",compact('item'));
    }


    public function edit($id)
    {
        $item = DB::table("employee")->find($id);
        if(!$item){
            session()->flash("msg","Invalid Id");
            return redirect(route("employee.index"));
        }
        return view("employee.edit",compact('item'));
    }


    public function update(Request $request, $id)
    {
        request()->validate([
            'first_name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'email'=>'required|email|max:50',
            'phone'=>'required|max:50',
            'gender'=>'required|max:1',
        ]);

        DB::table("employee")->where("id",$id)->update([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'gender' => $request['gender'],
            'EmpNo' => $request['EmpNo'],
            'active' => $request['active']?1:0
        ]);
        session()->flash("msg","Employee Updated Successfully");
        return redirect(route("employee.index"));
    }
    public function destroy($id)
    {
        DB::table("employee")->where("id",$id)->delete();
        session()->flash("msg","employee Deleted Successfully");
        return redirect(route("employee.index"));
    }
}
