<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Contact Form</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<h1>Contact Form</h1>

<form method="post" action="send-email.php">
    <fieldset>
        <label for="">
            Name
            <input type="text" name="name" required>
        </label>
        
        <label for="">
            Email
            <input type="email" name="email" required>
        </label>
        
        <label for="">
            Message
            <textarea name="message" required></textarea>
        </label>
        
        <input type="submit" value="Send"/>
        
    </fieldset>
</form>

</body>
</html>