<?php
session_start();
/* Form Handling*/
if (isset($_POST['submit'])) {
     $name = trim($_POST["name"]);
     $phone = trim($_POST["phone"]);
     $email = trim($_POST["email"]);
     $message = trim($_POST["message"]);

    if (strlen($name) >= 3 && strlen( $phone)==10 &&  $email!="")
    {
        $to = "
        samajkalyannashamukti@gmail.com";
        $subject = "Enquiry From  samajkalyannashamukti.com ";
        $headers =  'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From:  samajkalyannashamukti.com' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $full_message = "<html>
                            <head><title>Enquiry Data</title></head>
                            <body>
                            <table>
                                <tr>
                                <td>Name</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $name</td>
                                </tr>
                                <tr>
                                <td>Email Id</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $email</td>
                                </tr>
                                <tr>
                                <td>Phone No</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td>  $phone</td>
                                </tr>
                                <tr>
                                <td>Message</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $message</td>
                                </tr>
                                
                            </table>
                            </body>
                            </html>";
        $user = $email;
        $user_subject = "Thank You $name";
        $user_headers = 'From:  samajkalyannashamukti.com' . "\r\n";
        $user_message = "Dear $name.\nWelcome to  Samaj Kalyan Nasha Mukti Kendra \n We have got your query.We will reach you soon.\nThank You!";
        $uanswer = intval(trim($_POST["uanswer"]));
        
        if ($uanswer == $answer) {
            if (mail($to, $subject, $full_message, $headers)) {
                mail($user, $user_subject, $user_message, $user_headers);
                $_SESSION["response"] = "<h3>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>We have got your query. We will contact you soon.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone px-2 '></i><span>
                +91 9304516163</span></span></p>
                    <p>Thank You!</p></blockquote>";
            } 
            else
             {
                 $name . $mobile . $whatsapp . $email . $need . $message;
                $_SESSION["response"] = "<h3>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone px-2 '></i><span>
                +91 9304516163</span></span></p>
                    <p>Please, try again!</p><p>Thank You!</p></blockquote>";
            }
            header("Location:thanku.php");
        } 
       
       
  
        
    }
  

   
}
