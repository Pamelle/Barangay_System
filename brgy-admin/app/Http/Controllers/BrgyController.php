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
        return view('login');
    }
    public function crud(){


            $request = app('db')->select('SELECT * FROM request WHERE active = "1"');
          
            return view('dashboard', compact('request'));
    }   
     public function history(){


            $history = app('db')->select('SELECT * FROM history');
          
            return view('history', compact('history'));
    }


    public function verify(){

            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = app('db')->select("SELECT * FROM login WHERE username='$username'");
            $pass = app('db')->select("SELECT * FROM login WHERE password='$password'");

            if(empty($user)){
                return "<script>alert('Wrong Username') </script> ". redirect()->route('login');
            }
            elseif(empty($pass)){
                return "<script>alert('Wrong Password') </script> ". redirect()->route('login');
            }else{
                 return "<script>alert('Welcome $username') </script> ". redirect()->route('dashboard');
            }

    }

    public function deleteUser(){
            $id = $_POST['delete-Id'];

            app('db')->table('request')->where('request_id', $id)->delete();
            return redirect()->route('dashboard');

    }    public function approve(){
            $id = $_POST['delete-Id'];
            $active = 0;
            app('db')->table('request')->where('request_id', $id)->update(['active' => $active]);
            return redirect()->route('dashboard');


    }
}
