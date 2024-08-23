<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function index()
    {
      $details = User::where('role', 'user')->get();

       
     return view('admin-pannel')->with('details',$details);
    }
    public function store(Request $request)
    {
      $request->validate([
        'email' => 'required|unique:users',
     
    ]);
        $details = new User;
        $details->name=$request->input('name');
        $details->lastname=$request->input('lastname');
        $details->email=$request->input('email');
        $details->mobile=$request->input('mobile');
        $details->designation=$request->input('designation');
        $details->slot=$request->input('slot');
        $details->referal=$request->input('referal');
        $details->password='null';
        $details->role='user';


        $details->save();
     
        return redirect('pricing');
      
       
// $to = $details->email; 


// $subject = 'Contact form mail test';

// $name = $request->input('name');
// $email='abishmehan3510@gmail.com';



// $message = "Hello ".$name." <br>
// Thank you for registering with Bluggle Webinars.<br>
// Date and Time of the lecture:<br>
// Jun 8, 2024 04:00 PM India <br><br>

// You can join directly through
// <a href='https://us05web.zoom.us/j/8799976670?pwd=ZscNdoCEfPu5uV0CiMamCqSMUWGLWU.1&omn=88174723532'>Click here to enter</a><br><br>


// Note: You should not share this link with others; As it is a link for you only.
// Passcode: 5LP3RG<br>

// You can add it to your calendar Add to Google calendar Add to Yahoo calendar<br>

// You can cancel your registration at any time.<br>

// If you need assistance, you can contact us at digital.support@blugglegroups.com<br>

// Best Regards from the Bluggle Webinar Team. <br>"
// ;



// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


// $headers .= 'From: '. $email . "\r\n";



// if(mail($to, $subject, $message, $headers)){
//   return back()->with('message','you have received a email invite');
// }
// else{
//   return back()->with('error','Something went wrong');
// }

    
    }

    public function index2(){
      return view('login');
    }
    public function login(Request $request)
    {
      $request->validate (
        [
            'email'=>'required|exists:users,email',
            'password'=>'required'
        ]
    );


    $email = $request->input('email');
    $password = $request->input('password');

    if (Auth::attempt(['email'=>$email,'password'=>$password])) {
        $user = User::where('email',$email)->first();
        Auth::login($user);
        return redirect($user->role);

    } else {
        return redirect('login')->withErrors('Invalid password!');
    }
    }
    
    public function logout(){
      Auth::logout();
      return redirect('/');
    }
    public function contactform(Request $request){
      
// Multiple recipients
$to = 'abishmehan3510@gmail.com'; // note the comma

// Subject
$subject = 'Contact form mail test';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Messages
$messages = 'Name : '. $name.
'<br>Email : '.$email.
'<br>Phone : '.$phone.
'<br>Message : '.$message;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '. $email . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

      if(mail($to, $subject, $messages, $headers)){
          return back()->with('message','Your message has been sent!');
      }
      else{
          return back()->with('error','Oops! Something went wrong!!');
      }

    }

    
}




