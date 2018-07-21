<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\DB;
class Controller extends BaseController
{
    public function ind()
    {
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')->paginate(11);
        return view('post/index', ['posts' => $posts]);

    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


}
