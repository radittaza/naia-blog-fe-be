<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function about()
    {
        return view('about', [
            'postCount' => Post::count(),
            'categoryCount' => Category::count(),
            'userCount' => User::count(),
            'title' => 'About'
        ]);
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        Mail::raw($validated['message'], function ($mail) use ($validated) {
            $mail->to(config('mail.from.address'))
                ->subject($validated['subject'])
                ->replyTo($validated['email'], $validated['name']);
        });

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
