<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sorting Arrays</title>
        <style type="text/css" title="text/css" media="all">
            label{
                font-weight: bold;
                color: #300ACC;
            }
        </style>
    </head>
    <body>
        <table border="0" cellspacing="3" cellpading="3" align="center">
            <tr>
                <td><h2>Rating</h2></td>
                <td><h2>Title</h2></td>
            </tr>
        <?php
            $movies = array (
                'Casablanca' => 10,
                'Mana'=>8,
                'Doinni'=>9,
                'Camel'=>4
            );
            echo '<tr><td colspan="2"><b>En orden original:</b></td></tr>';
            foreach ($movies as $title=>$rating){
                echo "<tr><td>$rating</td><td>$title</td></tr>\n";
            }
            ksort($movies);
            echo '<tr><td colspan="2"><b>Sorted by title:</b></td></tr>';
            foreach ($movies as $title=>$rating){
                echo "<tr><td>$rating</td><td>$title</td></tr>\n";
            }
            arsort($movies);
            echo '<tr><td colspan="2"><b>Sorted by Rating:</b></td></tr>';
            foreach ($movies as $title=>$rating){
                echo "<tr><td>$rating</td><td>$title</td></tr>\n";
            }
        ?>
        </table>
    </body>
</html>