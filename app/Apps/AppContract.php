<?php
namespace App\Apps;

use App\Http\Controllers\Controller;

abstract class AppContract extends Controller
{
    abstract public function name(): string;
    abstract public function descr(): string;
    abstract public function route(): string;
}
