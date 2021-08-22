<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending Email With PHP</title>
</head>
<body>
    
    <form action="send_script.php" method="POST">
        Name: <input type="text" name="name"> <br>
        Email: <input type="text" name="email"> <br>
        Subject: <input type="text" name="subject"> <br>
        Message: <textarea name="msg" id="" cols="40" rows="10"></textarea>
        <button type="submit" name="send_message_btn"> Send </button>

    </form>

</body>
</html>