<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Multidimensional Arrays</title>
        <style type="text/css" title="text/css" media="all">
            label{
                font-weight: bold;
                color: #300ACC;
            }
        </style>
    </head>
    <body>
        <p>Some North American States, Provinces and Territories:</p>
        <?php
            $mexico=array('YU'=> 'Yucatan',
                          'BC'=> 'Baja California',
                          'OA'=> 'Oxaca');
            $us = array(
                        'MD'=>'Maryland',
                        'IL'=>'Illinois',
                        'PA'=>'Pennsylvania',
                        'IA'=>'Iowa'
            );
            $canada = array(
                        'QC'=>'Quebec',
                        'AB'=>'Alberta',
                        'NT'=>'Northwest Territories',
                        'YT'=>'Yukon',
                        'PE'=>'Prince Edward Island'
            );
            $n_america = array( 'Mexico'=>$mexico,
                                'United States'=>$us,
                                'Canada'=> $canada
                );
            foreach ($n_america as $country=>$list){
                echo "<h2>$country</h2><ul>";
                foreach ($list as $pais=>$valor){
                    echo "<li>$pais - $valor</lin>\n";
                }
                echo "</ul>";
            }
        ?>
    </body>
</html>