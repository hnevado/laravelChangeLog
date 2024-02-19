<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
    
        if (file_exists(public_path('changelog.txt'))) {
            $changelogContent=file_get_contents(public_path('changelog.txt'));
            $changelogContent=explode("\n",$changelogContent);
            $existe=true;
        }
        else 
        {
            $changelogContent=[];
            $changelogContent[] = "No existe el fichero changelog en la carpeta public";
            $existe=false;
        }
        return view("welcome",['changelogContent' => $changelogContent, 'existe' => $existe]);

    }
}
