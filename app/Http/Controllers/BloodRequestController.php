<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BloodRequest;
use App\Donor;
use App\BloodBank;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class BloodRequestController extends Controller
{
   	public function store(Request $request) {
   		BloodRequest::create($request->all());

        $items = Donor::paginate(5);
        $items0 = BloodBank::all();
        $success = 1;

        // Import PHPMailer classes into the global namespace
        // These must be at the top of your script, not inside a function
        
        
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'kukurikapu321@gmail.com';                 // SMTP username
            $mail->Password = 'kukurikapu';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
    
            //Recipients
            $mail->setFrom('noreply@kublingtago.com', 'Kubling Tago');
            $mail->addAddress($to);     // Add a recipient              // Name is optional
                                    // Set email format to HTML
            $mail->Subject = 'An angel is in need of your help.';
            $mail->Body    = "Dear Donor, \n\n Thank you for supporting Life Drops. A person is asking help from you. If you can share some time to donate blood for his needs, it will be very much appreciated and you will be a part of a person's life. \n\n Sincerely,\nLife Drops Team";
    
            $mail->send();
            //echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

        return view('recipients.index', compact('items','items0', 'success'));  
   	}
}
