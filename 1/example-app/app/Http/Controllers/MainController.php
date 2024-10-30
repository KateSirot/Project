<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function review() {
        return view('review');
    }

    public function review_check(Request $request) {
        $valid = $request->validate([
            'name' => 'required|min:2|max:100',
            'email' => 'required|min:6|max:200',
            'rating' => 'required|min:1|max:2',
            'message' => 'required|min:4|max:1000'
            
        ]);
        
        // $review = new ();
        // $review->name = $request->input('name');
        // $review->email = $request->input('email');
        // $review->message = $request->input('message');

        // $review->save();

        return redirect()->route('review');
    }
}
?>