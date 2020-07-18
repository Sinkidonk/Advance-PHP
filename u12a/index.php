<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
<h1>Upload a PNG File (Max size: 1Mb)</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    <label for="the_file">Upload a file:</label>
    <input type="file" name="the_file" id="the_file"/>
    <input type="submit" value="Upload File"/>
</form>
    </body>
</html>
