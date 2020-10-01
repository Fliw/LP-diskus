<?php

namespace App\Http\Controllers;

use App\Comment;
use Auth;
use Illuminate\Http\Request;

class comentController extends Controller
{
	/**
	 *
	 *add comment with middlewared user
	 *
	 *@param var request
	 *@return back() 
	 *
	 */
    public function buatKomen(Request $request)
    {
        $comment = new Comment;
        $comment->komen = $request->jawaban;
        $comment->user_id = auth()->users()->id;
        $post->comment()->save($comment);

        return back();
    }
}
