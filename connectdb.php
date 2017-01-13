<?php
 define ( 'DB_HOST', 'localhost' );
 define ( 'DB_USER', 'root' );
 define ( 'DB_PASSWORD', '' );
 define ( 'DB_NAME', 'kidtracker' );
 
 $dbhandle=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Unable to Connect")
 ?>