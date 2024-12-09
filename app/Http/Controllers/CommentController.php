<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required|max:255',
            'comment' => 'required',
        ]);

        Comment::create([
            'user_name' => $request->user_name,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!');
    }

    public function index()
    {
        $comments = Comment::all(); // Mengambil semua komentar
        return view('dashboard', compact('comments'));
    }
}

