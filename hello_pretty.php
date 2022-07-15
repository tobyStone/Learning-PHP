<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://w3.org/1999/xhmtl" xml:lang="en" lang="en">
    <head>
        <title>Hello</title>
        <link rel="stylesheet" type = "text/css" href = "common.css"/>
    </head>
    <body>
        <h1><?php 
        $currentTime = date("g:i:s a");
        $currentDate = date("m:j:y");
        echo "Hello, world! The current time is $currentTime"; ?>
        <br>
        <br>
        <br>
        <?php
        print "The current date (American-style) is $currentDate"; ?></h1>
    </body>
</html>
