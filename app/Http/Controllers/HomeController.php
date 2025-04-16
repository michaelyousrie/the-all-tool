<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $apps = [];

        foreach(File::directories(app_path('Apps')) as $app) {
            $className = File::name($app);
            $className = "App\\Apps\\{$className}\\{$className}Controller";
            $appClass = (new $className());

            $apps[] = [
                'name'  => $appClass->name(),
                'descr' => $appClass->descr(),
                'link'  => $appClass->route()
            ];
        }

        return view('home', ['apps' => $apps]);
    }
}
