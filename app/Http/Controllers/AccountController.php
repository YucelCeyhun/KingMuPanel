<?php

namespace App\Http\Controllers;

use App\Account;
use App\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{

    public function create()
    {
        $serverInfo = $this->sendServerInfo();

        return view('register', compact('serverInfo'));
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

        return back()->with("succeed", true);
    }

    private function formValidate($request)
    {
        return $request->validate([
            'username' => 'min:4|max:10|required|unique:MEMB_INFO,memb___id',
            'password' => 'min:4|max:10|required',
        ]);
    }


    private function sendServerInfo()
    {
        $accCount = Account::with("characters")
            ->get()
            ->count();
        $charCount = Character::with('account')
            ->get()
            ->count();

        $gameServer = @fsockopen(env('SERVER_HOST'), 55901, $errorno, $errornoStr, 0.3);
        //$connectionServer = @fsockopen(env('SERVER_HOST'), 44405, $errorno, $errornoStr, 0.3);

        return compact('accCount', 'charCount', 'gameServer');


    }
}
