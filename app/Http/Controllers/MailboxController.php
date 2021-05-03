<?php

namespace App\Http\Controllers;

use App\Models\Mailbox;
use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function index(){
        $mails = Mailbox::all();
        return view('admin.mailbox.email', compact('mails'));
    }
    public function store(Request $request){
        request()->validate([
            "name" => ["required"],
            "email" => ["required"],
            "subject" => ["required"],
            "message" => ["required"],
        ]);
        $mail = new Mailbox();
        $mail->name = $request->name;
        $mail->mail = $request->mail;
        $mail->subject = $request->subject;
        $mail->message = $request->message;
        $mail->save();
        return redirect('/#contact')->with('success', 'Your message has been sent');
    }
    public function destroy(Mailbox $id){
        $id->delete();
        return redirect()->route('mailbox.destroy');
    }
}
