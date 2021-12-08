<!DOCTYPE html>

<?php
    $emailUser = $_POST['contactEmail'];
    $messageUser = "
        <html>
        <head>
            <title>Response email</title>
            <style>
                body {
                    background-color: lightblue;
                }
                div {
                    background-color: aqua;
                }
            </style>
        </head>
        <body>
            <div>
                <h1>WDV 341 Intro to PHP<h1>
                <p>Dear ". $_POST['contactName']. ",</p>
                <p>Thank you for expressing interest in my ". $_POST['contactReason']. " posting.</p>
                <p>Your responses have been sent to me and I will be reviewing your following comments:<br>".
                $_POST['comments']. "</p>
                <p>Sincerly,<br>
                Noah Clark</p>
            </div>
            <footer>
                <p>Email sent on: ". date("mm/dd/yyyy"). "</p>
            </footer>
        </body>
        </html>
    ";
    $headerUser =  'MIME-Version: 1.0' . "\r\n"; 
    $headerUser .= "Content-type:text/html;charset=UTF-8\r\n";
    $headerUser .= 'From: admin@npclarkdmacc.com';

    $messageAdmin = "New information from contact form\nContact Name: ". $_POST['contactName']. "\nContact Email: ". $emailUser."\nContact Reason: ". $_POST['contactReason'].
    "\nComments:\n". $_POST['comments']. "\nDate received: ". date("mm/dd/yyyy");

    mail($emailUser, "Automated Response", $messageUser, $headerUser);
    mail("admin@npclarkdmacc.com", "Contact Form", $messageAdmin, "From: admin@npclarkdmacc.com");
?>

<head>
    <title>Form Handler</title>
    <style>
        body {
            background-color: lightblue;
        }

        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>WDV341 Intro to PHP</h1>
    <?php
    if (mail($emailUser, "Automated Response", $messageUser, $headerUser)){
        echo "<h2>An email has been sent to your address!</h2>";
    }
    else {
        echo "<h2>An error has occured</h2>";
    }
    
    ?>
</body>
</html>