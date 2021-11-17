<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    function getUser() {
        
            $user = User::orderBy('name', 'desc')->get();
            return $user;
        
    }

    function getUserProduct() {
        $user = User::join('user_product', 'user.id', '=', 'user_product.user_id')
        ->get();
        return $user;
    }

}
