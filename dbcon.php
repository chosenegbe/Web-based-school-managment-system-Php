<?php
//mysql_select_db('uist_lms',mysql_connect('localhost','chosen','chosen'))or die(mysql_error());


     mysql_connect("localhost","chosen","chosen") or die("Couldn`t connect to SQL server");
    mysql_select_db("uist_lms") or die("Couldn`t select DB");

?>