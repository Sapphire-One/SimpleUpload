<?php
error_reporting(0);

if (isset($_GET['upload'])){
    include("./templates/complete.php");
}
else{
    include("./templates/form.php");
}

?>