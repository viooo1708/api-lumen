<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        return response()->json([
            'users' => [
                ['id' => 1, 'name' => "Vio"],
                ['id' => 2, 'name' => "Viona"],
                ['id' => 3, 'name' => "Upin"],
                ['id' => 4, 'name' => "Ipin"],
                ['id' => 5, 'name' => "Prabowo"]
            ]
            ]);
    }
}
