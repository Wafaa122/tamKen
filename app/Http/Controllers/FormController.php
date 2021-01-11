<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Validation\Rule;

class FormController extends Controller
{

    public function index()
    {
        $items = \DB::table("form")->get();
        return view("form.index")->withItems($items);
    }


    public function create()
    {
        return view("form.create");
    }


    public function store(Request $request)
    {

       $request->validate([
        'full_name' => 'required|max:50',
        'email' => 'required|string|email|max:50',
        'mobile' => 'required|max:50',
        'gender' => [
            'required',
            Rule::in(['M', 'F']),
        ],

    ]);

    \DB::table("form")->insert([
        'full_name' => $request['full_name'],
        'email' => $request['email'],
        'mobile' => $request['mobile'],
        'gender' => $request['gender']
    ]);
   Session::flash("msg","Created Successfully");

    return redirect(route("form.index"));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

        $item = \DB::table("form")->find($id);
        if(!$item){

            \Session::flash("msg","Invalid Item ID");


            return redirect(route("form-index"));
        }
        return view("form.edit")->withItem($item);
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'full_name' => 'required|max:50',
            'email' => 'required|string|email|max:50',
            'mobile' => 'required|max:50',
            'gender' => [
                'required',
                Rule::in(['M', 'F']),
            ],


        ]);
        \DB::table("form")->where('id',$id)->update([
            'full_name' => $request['full_name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'gender' => $request['gender']
        ]);


        \Session::flash("msg","Updated Successfully");

        return redirect(route("form-index"));
    }

    public function destroy($id)
    {

    }
}
