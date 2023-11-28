<?php 
    $query ="SELECT * FROM tblsubjects LEFT JOIN tblsyllabus ON tblsubjects.Subject.ID = tblsyllabus.Subject_ID;";
    $result =mysqli_query($dbc, $query);
?>