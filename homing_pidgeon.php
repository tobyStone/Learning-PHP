<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://w3.org/1999/xhmtl" xml:lang="en" lang="en">
    <head>
        <title>Homing Pidgeon Simulator</title>
        <link rel="stylesheet" type = "text/css" href = "common.css"/>
        <style type = "text/css">
            div.map { float: left; text-align: center; border: 1px solid #666;
background-color: #fcfcfc; margin: 5px; padding: 1em; }
            span.home, span.pidgeon { font-weight: bold; }
            span.empty { color: #666; }
        </style>
    </head>
    <body>
        <?php 
        

        $mapSize = 10;
        //Position the home and the pidgeon
        do {
            $homeX = rand( 0, $mapSize-1 );
            $homeY = rand( 0, $mapSize-1 );
            $pidgeonX = rand( 0, $mapSize-1 );
            $pidgeonY = rand( 0, $mapSize-1 );
        } while ( ( abs( $homeX - $pidgeonX ) < $mapSize/2 ) && ( abs( $homeY
         - $pidgeonY ) < $mapSize/2 ) );    
        do {
        //Move the pidgeon closer to home
        if ( $pidgeonX < $homeX )
            $pidgeonX++;
        elseif ( $pidgeonX > $homeX )
            $pidgeonX--;
        if ( $pidgeonY < $homeY ) 
            $pidgeonY++;
        elseif ( $pidgeonY > $homeY ) 
            $pidgeonY--;
        //Display the current map
        echo '<div class= "map" style="width: ' . 'em;"><pre>';
        for ( $y = 0; $y < $mapSize; $y++ ) {
            for ( $x = 0; $x < $mapSize; $x++ ) {
                if ( $x == $homeX && $y == $homeY ) {
                    echo '<span class="home">+</span>'; //Home
                } elseif ( $x == $pidgeonX && $y == $pidgeonY ) {
                    echo '<span class="pidgeon">%</span>'; //Pidgeon
                } else {
                    echo '<span class="empty">.</span>';//Empty
                }
                echo ( $x != $mapSize - 1) ? " ":"";
                }
                echo "\n";
                }
                echo "</pre></div>\n";
                } while ( $pidgeonX != $homeX || $pidgeonY != $homeY );
        
        ?>
    </body>
</html>