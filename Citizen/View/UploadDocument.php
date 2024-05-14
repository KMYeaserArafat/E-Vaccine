<?php
include '../Controler/UploadDocumentController.php';
?>
<html>
    <head>
    <h1>E-Vaccine</h1>
    <link rel="stylesheet" type="text/css" href="..//Design//UploadDocument.css">
    </head>
    <body>
<form method="post" action="" enctype="multipart/form-data">  
<fieldset>
    <legend><h1>Upload Document</h1></legend>
        <table>
        <tr>
            <td>Name: </td>
            <td><input type="text" name="name">
            <?php echo ($nameErr);?></td>
        </tr>

        <tr>
            <td>NID Number : </td>
            <td><input type="number" name="nid" >
            <?php echo ($nidErr);?> </td>
        </tr>

        <tr>
            <td>Birth Certificate : </td>
            <td><input type="file" name="dobpic">
            <?php echo ($dobpicErr);?> </td>
        </tr>

        <tr>
            <td> Vaccine Certificate</td>
            <td><input type="file" name="vaccCir" >
            <?php echo ($vaccCirErr);?> </td>
        </tr>
        
        <tr>
            <td></td>
            <td> <input type="submit" name="submit" value="SUBMIT">
                 <input type="reset" name="reset" value="RESET">
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
            <a href="Home.php"><button type="button">Go to Home Page</button></a>
            </td>
        </tr>
    </table>
</fieldset>
</head>
</html>