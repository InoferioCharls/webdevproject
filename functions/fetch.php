<?php 
    $query =" select * from tblsubjects, tblsyllabus where tblsubjects.Subject_ID = tblsyllabus.Subject_ID;";
    $result =mysqli_query($dbc, $query);
?>