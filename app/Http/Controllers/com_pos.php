<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\post;

use Illuminate\Http\Request;

class com_pos extends Controller
{
    //
    public function index3(){
        return Comment::find(1);
    }
}
