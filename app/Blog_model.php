<?php
/**
 * Created by PhpStorm.
 * User: tiago
 * Date: 18/11/2019
 * Time: 21:04
 */


namespace App;
use Illuminate\Support\Facades\DB;
class Blog_model
{
    public static function get_posts()
    {
        $posts = DB::table('microposts')->get();
        return $posts;
    }
}