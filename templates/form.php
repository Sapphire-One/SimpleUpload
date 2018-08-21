<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    Enter your upload password:
    <input type="password" name="upload-secret">
    <br>
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>