<?php

    srand((double)microtime()*1000000);
    $marker = md5(uniqid(rand()));

    $receiver  = "address@gmail.com";
    $title = "Mail";
    $sender  = $_POST['name'];
    $sender .= $_POST['surname'];
    $sender_mail = $_POST['mail'];

    $message = $_POST['message'];

    $headers  = "From: $sender <$sender_mail>\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-Type: multipart/mixed;\n";
    $headers .= "\tboundary=\"___$marker==\"";

    $content ="--___$marker==\n";
    $content .="Content-Type: text/plain; charset=\"iso-8859-2\"\n";
    $content .="Content-Transfer-Encoding: 8bit\n";
    $content .="\n$message\n";

    if (mail($receiver,$title,$content,$headers))
    {
        print "Your message is sent.";
    } else {
        print "Your message is not sent.
        <br>Please go <a href=\"javascript:history.back();\">back</a> and send again.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="contact" action="mail.php" method="POST">
        <div class="field">
            <label class="fixed_width" for="name">Name:</label><input id="name" name="name" value="Name"/>
        </div>
        <div class="field">
            <label class="fixed_width" for="surname">Surname:</label><input id="surname" name="surname" value="Surname"/>
        </div>
        <div class="field">
            <label class="fixed_width" for="mail">E-mail:</label><input id="mail" name="mail" value="E-mail"/>
        </div>
        <div class="field" id="message">
            <label class="fixed_width" id="message_width" for="mail">Message:</label>
            <textarea id="message" name="message">Type your message...</textarea>
        </div>
        <div>
            <input class="width" type="submit" value="Send" />
        </div>
    </form>
</body>
</html>