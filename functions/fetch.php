<?php 
    $query ="SELECT * FROM tblsubjects NATURAL JOIN tblsyllabus;";
    $result =mysqli_query($dbc, $query);
?>