<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $dataPerPage = 30;

    protected function getCurrentUserId()
    {
        return Auth::user()->id;
    }

    protected function getCurrentUser()
    {
        return Auth::user();
    }

    protected function isAdmin()
    {
        return Auth::user()->admin == 1;
    }

    protected function isBlock()
    {
        return Auth::user()->block != 0;
    }






}
