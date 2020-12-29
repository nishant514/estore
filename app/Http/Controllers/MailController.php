<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mail\SendMail;

class MailController extends Controller
{
function index()
{
return view('frontend/mail');
}
function send(Request $request)
{
$this->validate($request, [
'name' => 'required',
'email' => 'required|email',
'message' => 'required'
]);

$data = array(
'name' => $request->name,
'message' => $request->message,
'file' => $request->file
);

Mail::to('nishuchauhan0027@gmail.com')->send(new SendMail($data));
return back()->with('success', 'Thanks for contacting us!');

}
}
