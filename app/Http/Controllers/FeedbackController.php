<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Feedback;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback-form');
    }

    public function send(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'comment' => 'required|string', 
        ]);

        // Send the feedback email using the Feedback Mailable
        Mail::to('comp3385@uwi.edu')->send(new Feedback(
            $request->input('name'),
            $request->input('email'),
            $request->input('comment') // Fixed field name
        ));

        // Redirect to the success page
        return redirect('/feedback/success');
    }
}

