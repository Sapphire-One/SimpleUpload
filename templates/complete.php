<!DOCTYPE html>
<html>
<link rel="stylesheet" href="./css/stylesheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <img src="<?php echo(str_replace($_SERVER['DOCUMENT_ROOT'], '', $_GET['uploadurl']))?>">
    <br>
<form action="#" method="">
    <input type="text" class="width-dynamic proba dva" value="<?php echo("img(" . $_GET['protocall'] . $_SERVER['SERVER_NAME'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', $_GET['uploadurl']) . ")")?>">
    <br>
    <input type="submit" value="Upload another Image" name="submit">
</form>

<script src="./js/js.js"></script>

</body>
</html>