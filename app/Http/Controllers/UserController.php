<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->select([
                'name',
                'email',
                'email_verified_at',
                'created_at',
                'updated_at',
            ])
            // ->where('email', '4d47f4ed-f70f-47e9-be1c-9462bbcedbab@example.com')
            ->orderBy('id')
            ->paginate(5);

        return view('users.index', compact('users'));
    }
}
