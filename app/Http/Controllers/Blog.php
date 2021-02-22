<?php
/**
 * Created by PhpStorm.
 * User: tiago
 * Date: 18/11/2019
 * Time: 20:56
 */

namespace App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog_model;

class Blog extends Controller
{
    public function index()
    {
        $check = 0;
        $posts = Blog_model::get_posts();
        return view('/index_template')->with('check', $check)->with('posts', $posts);
    }
}