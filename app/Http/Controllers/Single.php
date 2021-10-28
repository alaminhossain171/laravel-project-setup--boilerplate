<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Single extends Controller
{
    function __invoke(){
        return 'Thsi is invoke controller';
    }
}
