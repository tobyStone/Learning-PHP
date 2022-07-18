<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://w3.org/1999/xhmtl" xml:lang="en" lang="en">
    <head>
        <title>Circling</title>
        <link rel="stylesheet" type = "text/css" href = "common.css"/>
    </head>
    <body>
        <h1><?php 
        $radius = 4;

        $diameter = $radius * 2;
        $circumference = M_PI * $diameter;
        $area = M_PI * pow( $radius, 2 );

        echo "This circle has... <br>";
        echo "A radius of " . $radius . "<br>";
        echo "A diameter of " . $diameter . "<br>";
        echo "A circumference of " . $circumference . "<br>";
        echo "An area of " . $area . "<br>";
        ?></h1>
    </body>
</html>
