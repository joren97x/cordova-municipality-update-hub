<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function store(Request $request) {
        $email = $request->validate([
            'email' => ['required', 'email', 'unique:emails']
        ]);
        Email::create($email);
        return back();
    }

    public function destroy(Email $email) {
        $email->delete();
        return back();
    }

}
