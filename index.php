<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>PHP Basics</title>

</head>
<body>

<h1>PHP Basics</h1>
<ul>
<?php
    $dir = new directoryiterator('.');
    foreach($dir as $fileinfo){
        if (is_dir($fileinfo)){
            echo "<li>{$fileinfo->getfilename()}</li>";
        }
    }
?>
</ul>

</body>
</html>