<?php 
    $query =" select * FROM tblsubjects right join tblsyllabus on tblsubjects.Subject_ID = tblsyllabus.Subject_ID;";
    $result =mysqli_query($dbc, $query);
?>