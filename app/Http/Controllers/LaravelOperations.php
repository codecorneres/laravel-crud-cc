<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class LaravelOperations extends Controller
{
    public function createTable()
    {
        return view('formLayout.createForm');
    }

    public function insertdata(Request $request)
    {
        // echo '<pre/>';
        // print_r($request->all());
        $registrationData =  new Registration();
        //$registrationData->id=$request->input('id');
        $registrationData->FirstName = $request['first_name'];
        $registrationData->LastName = $request['last_name'];
        $registrationData->Email = $request['user_email'];
        $registrationData->Password = md5($request['user_password']);
        $registrationData->Address = $request['user_address'];
        $registrationData->Country =  $request['user_country'];
        $registrationData->State = $request['user_state'];
        $registrationData->save();
        return redirect('/customer-view');
    }

    public function getData()
    {
        $customers = Registration::all();
        $data = compact('customers');
        return view('formLayout.getdata')->with($data);
    }

    public function updateData($id, Request $request)
    {
        $customers = Registration::find($id);
        $customers->FirstName = $request['first_name'];
        $customers->LastName = $request['last_name'];

        $customers->Address = $request['user_address'];
        $customers->Country =  $request['user_country'];
        $customers->State = $request['user_state'];
        $customers->save();
        return redirect('/customer-view');
    }

    public function editForm($id)
    {
        $customers = Registration::find($id);
        return view('formLayout.update', compact('customers'));
    }

    public function destroy($id)
    {
        $crud = Registration::find($id);
        $crud->delete();
        return redirect()->back();
    }

    public function addData()
    {
        return view('formLayout.createForm');
    }
}
