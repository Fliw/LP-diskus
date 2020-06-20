<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use Auth;
class comentController extends Controller
{
    public function buatKomen(Request $request)
    {
    	$comment = new Comment;
    	$comment->komen = $request->jawaban;
    	//menyimpan id u
    	$comment->user_id= auth()->users()->id;

    	$post->comment()->save($comment);

    	return back();
    }
}
