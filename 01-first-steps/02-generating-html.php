<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body-1 { Background-color: red; }
        .body-2 { Background-color: green; }
        .body-3 { Background-color: aqua; }
        .body-4 { Background-color: yellow; }
        .body-5 { Background-color: magenta; }
        .body-6 { Background-color: gray; }
    </style>
</head>
<body class ="body-<?php echo rand(1,6); ?>">
    <?php echo 'Hello from PHP!';?>
   
</body>
</html>
