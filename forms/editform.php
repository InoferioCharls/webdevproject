<?php 
    include_once("../dbConnection/mysqlconfig_connection.php");
    $id = $_GET['id'];


    $result = mysqli_query($dbc, "SELECT * FROM tblsubjects WHERE Subject_ID = $id ");
    while ($res = mysqli_fetch_array($result)) {
        $code = $res["Subject_Code"];
        $name = $res["Subject_Name"];
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data</title>
    </head>
    <body>
        <h1>Edit Subject</h1>
        <a href="../index.php">Home</a>
        <br><br>
        <form action="../functions/edit.php" method="post" name="form1">
            <table border="0">
                <tr>
                    <td>Subject Code</td>
                    <td><input type="text" name="code" id="" value="<?php echo $code;?>"></td>
                </tr>

                <tr>
                    <td>Subject Name</td>
                    <td><input type="text" name="name" id="" value="<?php echo $name;?>"></td>
                </tr>

                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
                    <td><input type="submit" name="update" id="" value="Edit"></td>
                </tr>
            </table>
        </form>
        
    </body>
    </html>