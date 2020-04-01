<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $formValidate = $this->formValidate($request);

        Account::create([
            'memb___id' => $formValidate['username'],
            'memb__pwd' => $formValidate['password'],
            'memb_name' => 'TEST',
            'sno__numb' => '123456789012345678',
            'bloc_code' => '0',
            'ctl1_code' => '0'
        ]);

        return back()->with("succeed",true);
    }

    private function formValidate($request){
        return $request->validate([
            'username' => 'min:4|max:10|required|unique:MEMB_INFO,memb___id',
            'password' => 'min:4|max:10|required',
        ]);
    }
}
