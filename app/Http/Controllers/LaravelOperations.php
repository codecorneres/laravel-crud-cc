<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\File;


class LaravelOperations extends Controller
{
    public function createTable()
    {
        return view('formLayout.createForm');
    }

    public function insertdata(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'user_email' => 'required|email',
            'user_phn' => 'required',
            'user_address' => 'required',
            'user_country' => 'required',
            'user_state' => 'required',
            'user_gender' => 'required',
            'user_qalification' => 'required',
            'addCourse' => 'required',
            'myfile' => 'required'
        ]);

        // Registration::create($request->all());
        $registrationData =  new Registration();
        //$registrationData->id=$request->input('id');
        $registrationData->FirstName = $request['first_name'];
        $registrationData->LastName = $request['last_name'];
        $registrationData->Email = $request['user_email'];
        $registrationData->PhoneNumber = $request['user_phn'];
        $registrationData->Address = $request['user_address'];
        $registrationData->Country =  $request['user_country'];
        $registrationData->State = $request['user_state'];
        $registrationData->Gender = $request['user_gender'];
        $registrationData->Qualification = $request['user_qalification'];
        $registrationData->Course = $request['addCourse'];

        // if ($request->hasFile('myfile')) {
        //     $file = $request->file('myfile');
        //     $extenstion = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extenstion;
        //     $file->move('uploads/students/', $filename);
        //     $registrationData->Adharcard = $filename;
        // }
        if ($request->hasFile('myfile')) {
            $files = $request->file('myfile');
            $adharCards = [];

            foreach ($files as $key => $file) {
                if ($file->isValid()) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '_' . $key . '.' . $extension;
                    $file->move('uploads/students/', $filename);
                    logger($filename);
                    $adharCards[] = $filename;
                }
            }
            $adharval = json_encode($adharCards);
            $registrationData->Adharcard = $adharval;
        }

        //$registrationData->Adharcard = 'dytdd';
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
        $customers->Gender = $request['user_gender'];
        $customers->Qualification = $request['user_qalification'];
        $customers->Course = $request['addCourse'];

        if ($request->hasFile('myfile')) {
            $files = $request->file('myfile');
            $adharCards = [];

            foreach ($files as $key => $file) {
                if ($file->isValid()) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '_' . $key . '.' . $extension;
                    $file->move('uploads/students/', $filename);
                    // logger($filename);
                    $adharCards[] = $filename;
                }
            }
            $adharval = json_encode($adharCards);
            $customers->Adharcard = $adharval;
        }


        // $customers->Adharcard = $request['myfile'];
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


    public function removeImage(Request $request)
    {
        $imageUrlToRemove = $request->imageUrl;
        $customer = Registration::find($request->customerId);

        if (File::exists(public_path('uploads/students/' . $imageUrlToRemove))) {
            //logger('exist');
            File::delete(public_path('uploads/students/' . $imageUrlToRemove));
        }

        $adharcard = json_decode($customer->Adharcard);

        $adharcard = array_filter($adharcard, function ($image) use ($imageUrlToRemove) {
            //logger($imageUrlToRemove);
            //logger($image);
            return $image !== $imageUrlToRemove;
        });

        $customer->Adharcard = json_encode(array_values($adharcard));
        $customer->save();
        return redirect()->back();
    }
}
