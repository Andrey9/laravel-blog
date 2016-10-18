<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CommentRequest;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {
        $comment = new Comment($request->all());
        Auth::user()->comments()->save($comment);
        return back();
    }

    public function destroy($id)
    {
        Comment::destroy($id);
        return back();
    }
}
