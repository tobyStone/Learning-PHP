<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://w3.org/1999/xhmtl" xml:lang="en" lang="en">
    <head>
        <title>Fibonacci sequence using recursion</title>
        <link rel="stylesheet" type = "text/css" href = "common.css"/>
        <style type="text/css">
            th { text-align: left; back-color: #999; }
            th, td { padding: 0.4em; }
            tr.alt td { background: #ddd }
        </style>
    </head>
    <body>
    <h1>Fruit</h1>

    <?php
    $dsn = "mysql:dbname=mydatabase";
    $username = "root";
    $password = "panic";

    try{
        $conn = new PDO( $dsn, $username, $password );
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch (PDOException $e ) {
        echo "Connection failed: ". $e->getMessage();
    }

    $sql = "SELECT * FROM fruit";
    
    echo "<ul>";

    try{
        $rows = $conn->query( $sql );
        foreach ( $rows as $row ) {
            echo "<li>A " . $row["name"] . " is " . $row["colour"] . "</li>";
        }
    } catch ( PDOException $e ){
        echo "Query failed: " . $e->getMessage();
    }

    echo "</ul>";
    $conn = null;

    ?>
    </body>
</html>