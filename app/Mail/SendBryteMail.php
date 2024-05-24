<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendBryteMail extends Mailable  implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $name;
    protected $template;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $template)
    {
        $this->name = $name;
        $this->template = $template;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $filename = "invite.ics";
        $meeting_duration = (3600 / 2); // 2 hours
        $meetingstamp = strtotime("2024-06-13 13:30:00" . " UTC");
        $meetingstampEnd = strtotime("2024-06-13 16:30:00" . " UTC");
        $dtstart = gmdate('Ymd\THis\Z', $meetingstamp);
        $dtend =  gmdate('Ymd\THis\Z', $meetingstampEnd);
        $todaystamp = gmdate('Ymd\THis\Z');
        $uid = date('Ymd') . 'T' . date('His') . '-' . rand() . '@flash-forward.co.za';
        $description = 'Please click here to login to the Lexis Internal Launch"\n" https://lexisinternallaunch.welink.live/login';
        $location = "https://lexisinternallaunch.welink.live/login";
        $titulo_invite = "Lexis Internal Launch";
        $organizer = "CN=WeLink:lexis@welink.live";

        // ICS
        $mail[0]  = "BEGIN:VCALENDAR";
        $mail[1] = "PRODID:-//Google Inc//Google Calendar 70.9054//EN";
        $mail[2] = "VERSION:2.0";
        $mail[3] = "CALSCALE:GREGORIAN";
        $mail[4] = "METHOD:REQUEST";
        $mail[5] = "BEGIN:VEVENT";
        $mail[6] = "DTSTART;TZID=Africa/Johannesburg:" . substr($dtstart, 0, -1);
        $mail[7] = "DTEND;TZID=Africa/Johannesburg:" . substr($dtend, 0, -1);
        $mail[8] = "DTSTAMP;TZID=Africa/Johannesburg:" . substr($todaystamp, 0, -1);
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

        return $this->view($this->template)->with(['name' => $this->name])->subject("Thank You For Registering!")
            ->attachData($buyerOrDelegateInvite, $filename, array('mime' => "text/calendar"))  ;
    }
}
