<?php

namespace App\Http\Controllers;

use App\Account;
use App\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dangnhap');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param array $data
     * @return \Illuminate\Http\Response
     */
//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => 'required|string|max255',
//            'email' => 'required|string|email|max255|unique:users',
//            'password' => 'required|string|min6|confirmed',
//        ]);
//    }

    /**
     * @param array $data
     * @return \App\User
     */
    public function create()
    {
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
        return view('dangnhap');
    }
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dangnhap(Request $request)
    {
        $account = Account::where('name' ,'=',$request->get('name'))->first();
        $hashedPw = bcrypt($request->get('password'));
        if ($account != null){
            if (Hash::check($request->get('password'),$hashedPw)){
                return view('dangnhapthanhcong');
            }
            else{
                return view('dangnhapthatbai');
            }
        }
        else{
            return view('dangnhapthatbai');
        }
    }
}


