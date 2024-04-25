<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        $user->name = $request->name;
        $user->save();
        Session::flash('message', 'Name updated!');
        return back();
    }
}
