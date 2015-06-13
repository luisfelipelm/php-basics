<?php $title = 'PHP Projects' ?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title><?= $title ?></title>

<link rel="stylesheet" href="css/style.css">

</head>
<body>

<h1><?= $title ?></h1>
<ul>
<?php
    $dir = new directoryiterator('.');
    $ignoredList = array('.', '..', 'css', '.git', '.c9');
    
    foreach($dir as $fileInfo){
        if ($fileInfo->isDir() && !in_array($fileInfo->getfilename(), $ignoredList)){
            echo "<li><a href=\"{$fileInfo->getfilename()}\">{$fileInfo->getfilename()}</a></li>";
        }
    }
?>
</ul>

</body>
</html>