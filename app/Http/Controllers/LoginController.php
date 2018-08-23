<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $check = bcrypt($request->get('password'));
        if ($account != null){
            if (hash_equals($check, $account)) {
                return view('dangnhapthanhcong');
            }
            else {
                return view('dangnhapthatbai');
            }
        }
        else{
            return view('dangnhapthatbai');
        }
    }
}


