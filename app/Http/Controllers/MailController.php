<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

	public function store(Request $request)
	{
		$all = $request->all();

		Mail::queue('emails.mailtemplate', compact('all'), function($message) use ($all) {
			$message->from($all['sender_email'])
					->to($all['recipient_email'])
					->subject($all['subject']);
		});
		return 'This email has been sent.';
    }
}
