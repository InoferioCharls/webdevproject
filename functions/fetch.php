<?php 
    $query =" select * FROM tblsubjects left join tblsyllabus on tblsubjects.Subject_ID = tblsyllabus.Subject_ID;";
    $result =mysqli_query($dbc, $query);
?>