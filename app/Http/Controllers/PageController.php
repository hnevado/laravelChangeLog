<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $changelogContent  = file_get_contents(public_path('changelog.txt'));
        $changelogContent=explode("\n",$changelogContent);

        return view("welcome",['changelogContent' => $changelogContent]);

    }
}
