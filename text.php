<?php
/**
 * Created by PhpStorm.
 * User: Amit
 * Date: 4/14/2018
 * Time: 3:09 PM
 */


$name = 'Amit KJ' ;


if(isset($_GET['btn']))
{

    $show = $_GET['btn'];
    echo "My name is ".$show ;


}





?>


<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
<table>
    <tr>
        <th>
            h
        </th>
        <th>
            m
        </th>
    </tr>
    <tr>
        <td>
            click
        </td>
        <td>
            <form method="get">
                <button name="btn" value="<?php echo $name; ?> ">Click</button>
            </form>

        </td>
    </tr>
    <tr>
        <td>
            click
        </td>
        <td>
            <form method="get">
                "<?php

                $tt = "amitalkhdashd";

                ?>"

                <button name="btn" value="<?php echo $tt; ?> ">Click 2</button>
            </form>

        </td>
    </tr>

</table>
</body>
</html>