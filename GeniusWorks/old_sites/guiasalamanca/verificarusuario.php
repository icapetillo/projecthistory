<?php 
sleep(1);
include("connect.php");
mysql_select_db("geniuswo_genius");
if($_REQUEST) {
    $username = $_REQUEST['usrname'];
    $query = "select * from usuarios where usrname = '".strtolower($username)."'";
    $results = mysql_query($query) or die('Error: '.mysql_error());

    if(mysql_num_rows(@$results) > 0)
        echo '<div id="Error">Ese nombre de usuario ya existe; por favor elige otro.</div>';
    else
        echo '<div id="Success">El nombre de usuario está disponible</div>';
}
?>