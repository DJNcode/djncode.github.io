<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $reasonCategory = $_POST['Reason'];
    $reason = $_POST['magic'];
    $message = $_POST['message'];

    $mailTo = "jaidevsingh226@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $reasonCategory, $reason, $txt, $headers);
    header("Location: contact.html?mailsent");
}
