<?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email_subject = $_POST['subject'];
        $mailfrom = $_POST['email'];
        $message = $_POST['message'];
    }
    $to = "fikriash24@outlook.com";

    $headers = "From : ".$mailfrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message

    mail($to, $email_subject, $txt, $headers);

    header("Location : index.html");


?>