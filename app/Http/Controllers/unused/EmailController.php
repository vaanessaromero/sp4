<?php

namespace App\Http\Controllers\unused;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    //   
    public function send(Request $request){
    	$title = $request->input('title');
        $content = $request->input('content');

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('vlromero@up.edu.ph', 'Jane Frias');

            $message->to('vanessamaelromero@gmail.com');

        });

        return response()->json(['message' => 'Request completed']);   
	}
}
