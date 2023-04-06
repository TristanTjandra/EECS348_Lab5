<!DOCTYPE HTML>
<html>
    <?php
    $size = $_POST['size'];
    echo "<table border=\"1\">";
    echo '<tr>';
    echo '<td>' .null. '</td>';
    for ($c =1; $c<=$size; $c++){
        echo '<td>' .$c. '</td>';
    }
    echo '</tr>';
    for ($r =1; $r <= $size; $r++){
        echo'<tr>';
        echo '<td>' .$r. '</td>';
        for ($c = 1; $c <= $size; $c++)
            
            echo '<td>' .$c*$r.'</td>';
        echo '</tr>'; 

    }

    echo"</table>";
    ?>
</html>