<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
//use DB;

class AboutController extends Controller
{
    public function index() {
        //$content = DB::table('pages')->where('slug', 'about-wende')->get();
        $content = Page::where('slug', '=', 'about-wende')->firstOrFail();
        return view('about', compact('content'));
    }
}
