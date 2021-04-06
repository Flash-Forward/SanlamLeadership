<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/thankyou';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'position' => ['required', 'string'],
            //'company' => ['required', 'string'],
            //'contact_no' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        \Mailchimp::subscribe('42b81fd5f2', $data['email'], ['FNAME' => $data['name'], 'LNAME' => $data['last_name']], false);
        $this->sendThankYouMail($data);
        $user = User::create([
            'name' => $data['name']." ".$data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'position' => "test",
            'company' => "test",
            'contact_no' => "0123",
            'user_roles_id' => $data['role'],
        ]);
        event(new Registered($user));
        return $user;
    }

    public function speaker()
    {
        return view('auth.speaker');
    }

    public function sendThankYouMail($data)
    {
        Mail::send('mail', $data, function($message) use($data)
        {
            $filename = "invite.ics";
            $meeting_duration = (3600 / 2); // 2 hours
            $meetingstamp = strtotime( "2021-04-08 18:00:00" . " UTC");
            $meetingstampEnd = strtotime( "2021-04-08 20:30:00" . " UTC");
            $dtstart = gmdate('Ymd\THis\Z', $meetingstamp);
            $dtend =  gmdate('Ymd\THis\Z', $meetingstampEnd);
            $todaystamp = gmdate('Ymd\THis\Z');
            $uid = date('Ymd').'T'.date('His').'-'.rand().'@flash-forward.co.za';
            $description = "Thriving Through Covid";
            $location = "https://ttc.welink.live/login";
            $titulo_invite = "Thriving Through Covid";
            $organizer = "CN=WeLink:ttc@flash-forward.co.za";
            
            // ICS
            $mail[0]  = "BEGIN:VCALENDAR";
            $mail[1] = "PRODID:-//Google Inc//Google Calendar 70.9054//EN";
            $mail[2] = "VERSION:2.0";
            $mail[3] = "CALSCALE:GREGORIAN";
            $mail[4] = "METHOD:REQUEST";
            $mail[5] = "BEGIN:VEVENT";
            $mail[6] = "DTSTART;TZID=Africa/Johannesburg:" . $dtstart;
            $mail[7] = "DTEND;TZID=Africa/Johannesburg:" . $dtend;
            $mail[8] = "DTSTAMP;TZID=Africa/Johannesburg:" . $todaystamp;
            $mail[9] = "UID:" . $uid;
            $mail[10] = "ORGANIZER;" . $organizer;
            $mail[11] = "CREATED:" . $todaystamp;
            $mail[12] = "DESCRIPTION:" . $description;
            $mail[13] = "LAST-MODIFIED:" . $todaystamp;
            $mail[14] = "LOCATION:" . $location;
            $mail[15] = "SEQUENCE:0";
            $mail[16] = "STATUS:CONFIRMED";
            $mail[17] = "SUMMARY:" . $titulo_invite;
            $mail[18] = "TRANSP:OPAQUE";
            $mail[19] = "END:VEVENT";
            $mail[20] = "END:VCALENDAR";
            
            $buyerOrDelegateInvite = implode("\r\n", $mail);
            header("text/calendar");
            
            $message->subject("Thank You For Registering!");
            $message->to($data["email"]);
            $message->attachData($buyerOrDelegateInvite, $filename, array('mime' => "text/calendar"));
            //$message->from('wrc@welink.live','WRC');
        });
    }


}
