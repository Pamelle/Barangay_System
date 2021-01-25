<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Response;
use Api\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use DB;
class BrgyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    //

    public function page(){
        return view('request');
    }

    public function verify(){

            $name = $_POST['name'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];
            $request = $_POST['request'];
            $purpose = $_POST['purpose'];
            $date = date('y-m-d h:i:s');
            $active = '1';
         

            app('db')->table('request')->insert(['name' => $name, 'address' => $address, 'contact' => $contact, 'request' => $request, 'purpose' => $purpose, 'date_requested' => $date, 'active' => $active]);

            return "<script>alert('Successfully sent $name') </script> ". redirect()->route('login');
    }
}
