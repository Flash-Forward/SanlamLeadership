<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use App\Jobs\SendEmailJob;


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
            //'name' => ['required', 'string', 'max:255'],
            //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
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
        $extra = json_encode($data);
        \Mailchimp::subscribe('c9fcb9f448', $data['edtEmail'], ['FNAME' => $data['edtName'], 'LNAME' => $data['edtSurname']], false);

        $user = User::create([
            'name' => $data['edtName'] . " " . $data['edtSurname'],
            'email' => $data['edtEmail'],
            'password' => Hash::make($data['edtPass']),
            'position' => "test",
            'company' => $data['edtCName'],
            'contact_no' => $data['edtMNum'],
            'extra' => $extra,
            'user_roles_id' => 2,
        ]);
        // event(new Registered($user));
        $this->sendThankYouMail($data);
        return $user;
    }

    public function speaker()
    {
        return view('auth.speaker');
    }

    public function sendThankYouMail($data)
    {
        // $mail_template = "email.sa";
        // try {
        //     \Mail::send($mail_template, $data, function ($message) use ($data) {
        //         $filename = "invite.ics";
        //         $meeting_duration = (3600 / 2); // 2 hours
        //         $meetingstamp = strtotime("2021-06-22 10:00:00" . " UTC");
        //         $meetingstampEnd = strtotime("2021-06-22 16:00:00" . " UTC");
        //         $dtstart = gmdate('Ymd\THis\Z', $meetingstamp);
        //         $dtend =  gmdate('Ymd\THis\Z', $meetingstampEnd);
        //         $todaystamp = gmdate('Ymd\THis\Z');
        //         $uid = date('Ymd') . 'T' . date('His') . '-' . rand() . '@flash-forward.co.za';
        //         $description = "Bryte: Business Partner Conference";
        //         $location = "https://bryte.welink.live/login";
        //         $titulo_invite = "Bryte: Business Partner Conference";
        //         $organizer = "CN=WeLink:bryte@flash-forward.co.za";

        //         // ICS
        //         $mail[0]  = "BEGIN:VCALENDAR";
        //         $mail[1] = "PRODID:-//Google Inc//Google Calendar 70.9054//EN";
        //         $mail[2] = "VERSION:2.0";
        //         $mail[3] = "CALSCALE:GREGORIAN";
        //         $mail[4] = "METHOD:REQUEST";
        //         $mail[5] = "BEGIN:VEVENT";
        //         $mail[6] = "DTSTART;TZID=Africa/Johannesburg:" . $dtstart;
        //         $mail[7] = "DTEND;TZID=Africa/Johannesburg:" . $dtend;
        //         $mail[8] = "DTSTAMP;TZID=Africa/Johannesburg:" . $todaystamp;
        //         $mail[9] = "UID:" . $uid;
        //         $mail[10] = "ORGANIZER;" . $organizer;
        //         $mail[11] = "CREATED:" . $todaystamp;
        //         $mail[12] = "DESCRIPTION:" . $description;
        //         $mail[13] = "LAST-MODIFIED:" . $todaystamp;
        //         $mail[14] = "LOCATION:" . $location;
        //         $mail[15] = "SEQUENCE:0";
        //         $mail[16] = "STATUS:CONFIRMED";
        //         $mail[17] = "SUMMARY:" . $titulo_invite;
        //         $mail[18] = "TRANSP:OPAQUE";
        //         $mail[19] = "END:VEVENT";
        //         $mail[20] = "END:VCALENDAR";

        //         $buyerOrDelegateInvite = implode("\r\n", $mail);
        //         header("text/calendar");

        //         $message->subject("Thank You For Registering!");
        //         $message->to($data["edtEmail"]);
        //         $message->attachData($buyerOrDelegateInvite, $filename, array('mime' => "text/calendar"));
        //         //$message->from('wrc@welink.live','WRC');
        //     });
        // } catch (\Exception $e) {
        //     //Log::error($e->getMessage());
        // }
        $mail_template = "email.".$data['country'];
        dispatch(new SendEmailJob($data["edtEmail"], $data["edtName"], $mail_template));
    }
}
