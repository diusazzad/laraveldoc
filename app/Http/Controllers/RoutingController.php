<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function redirectRoutes()
    {
        return "hello, World";
    }
    public function requiredParameters($user_id)
    {
        // Fetch user data from the database based on $user_id
        $user = User::find($user_id);

        // Check if the user exists
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Return the user data as JSON
        return response()->json(['user' => $user]);
    }
    public function optionalParameter(){

    }
    public function multipleOptionalParameter(){

    }
}
