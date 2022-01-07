<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    //
    function registrationData(Request $req)
    {
        $registration= new Registration;
        $registration->user_type=$req->user_type;
        $registration->f_name=$req->f_name;
        $registration->l_name=$req->l_name;
        $registration->email=$req->email;
        $registration->password=$req->password;
        $registration->c_password=$req->c_password;
        $registration->gender=$req->gender;
        $registration->phone_no=$req->phone_no;
        $registration->institution=$req->institution;
        $registration->address=$req->address;

        if($registration->password==$registration->c_password){
            
            $registration->save();
            echo '<script>alert("Registration Succesfull!!!!!!!")</script>';
            return  view('index');

        }
        else{
            echo '<script>alert("Password does not match!!!!!!!")</script>';
  
            return  view('register');
        }

   


    }
}
