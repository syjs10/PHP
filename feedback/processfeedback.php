
<?php
    //create short variable names
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    //set up some static infomation
    $toAddress = "syjs10@aliyun.com";

    $subject = "Feedback from web site";
    $mailContent = "Customer name: ".$name."\n".
                    "Customer email: ".$email."\n".
                    "customer comments: ". $feedback."\n";
    $fromAddress = "Form: syjs10@aliyun.com";
    if (!preg_match('/^[a-zA-Z0-9-_]+@[a-zA-Z0-9-_]+\.[a-zA-Z0-9-_]+$/', $email)) {
        echo "Please input right E-mail.";
    }

    //mail($toAddress, $subject, $mailContent, $fromAddress);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Feedback Submitted</title>
    </head>
    <body>
        <p>
            Your feedback has been sent.
        </p>
    </body>
</html>
