<?php 
    DEFINE('DB_USER','root');
    DEFINE('DB_PASSWORD','');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','dbschedule');

        $dbc = mysqli_connect(DB_USER,DB_PASSWORD,DB_HOST,DB_NAME )
        or die('Could not connect to MySQL: '. mysqli_connect_error());

?>