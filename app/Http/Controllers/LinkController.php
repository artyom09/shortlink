<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    public function link() {
        $links = Link::get();
        return view('welcome')->with([
            'links' => $links,
        ]);
    }


    public function sendLink(Request $request) {
        $this->validate($request, [
            'link' => 'required',
        ]);

        $link = New Link;
        $link->link = $request->link;
        $link->shortlink =  Str::random(6);

        if ($link->save()) {
            echo $request->link;
        }

    }

    public function shortLink($link) {
        $full_link = Link::where('shortlink', $link)->first();
        return redirect($full_link->link);
    }
}
