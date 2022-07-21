<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://w3.org/1999/xhmtl" xml:lang="en" lang="en">
    <head>
        <title>Number sequence</title>
        <link rel="stylesheet" type = "text/css" href = "common.css"/>
        <style type = "text/css">
            th { text-align: left; background-color: #999 }
            th, td { padding: 0.4 em; }
            tr.alt td { background: #ddd }
        </style>
    </head>
    <body>
        <h2>Number sequence</h2>
        <table cellspacing="0" border="0" style="width: 20em; border: 1px solid
    #666;">
        <tr>
            <th>Sequence #</th>
            <th>Odd or even</th>
            <th>Prime?</th>
        </tr>
        
<?php 
$iterations = 30;
for ( $i = 1; $i<= $iterations; $i++ )
{
    $count[$i] = 0;
?>
<tr>
<td><sub><?php echo $i?></sub></td>
<td><?php if ( $i % 2 != 0 ) echo 'odd';
else echo 'even' ?>
    <td><?php 
    if ($i== 1) {echo 'not';
        continue;}
    for ($j = 2; $j <= ceil(sqrt($iterations)); $j++){

        if($i>$j){
        if ($i % $j == 0) {$count[$i]++;}}}
        if($count[$i] >= 1) {echo 'not';}
    else echo 'is';
    ?></td>
</tr>
<?php
        }
        
    

        ?>
    </table>
    </body>
</html>