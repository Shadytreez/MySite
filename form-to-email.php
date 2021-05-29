<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_Post['message'];
    $mailTo = "truman.nguyen@lc.cuny.edu";
    $header = "From: ".$mailFrom;
    $txt = "You got a email from ".$name.".\n\n".$message;
    
    mail($mailTo,$subject,$txt,$header)
    header("Location: contact.html?mailsend");    
}
?>
