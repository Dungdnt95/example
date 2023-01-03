<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        $array = ["B\$u\$i\$ld", "\$t\$\$h\$e", "N\$e\$x\$t", "E\$\$ra", "\$\$o\$f\$", "S\$\$of\$t\$wa\$r\$e", "De\$\$ve\$l\$op\$me\$n\$t"];
        $new_array = [];
        foreach ($array as $value) {
            array_push($new_array, str_replace('$', '', $value));
        }
        dd(implode(" ", $new_array));
    }
}
