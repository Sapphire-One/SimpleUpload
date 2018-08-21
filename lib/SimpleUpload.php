<?php

// Check if password is correct
// Returns bool (Good password = TRUE, Bad password = FALSE)
function Authenticate($post, $upload_password){
    if($post == $upload_password) {
        return true;
    }
    else{
        return false;
    }
}

// Check if upload is actually a real photo
// Returns bool (Real image = TRUE, Bad image = FALSE)
function ActualImage($file){
    $check = getimagesize($file);
    if($check !== false) {
        return true;
    } 
    else {
        return false;
    }
}

// Check if file already exists
// Returns bool (Does not already exist = TRUE, Does exist = FALSE)
function AlreadyExsists($target_file){
    if (file_exists($target_file)) {
        return false;
    }
    else {
        return true;
    }
}

// Check if upload is an acceptable file type
// Returns bool (Good filetype = TRUE, Bad filetype = FALSE)
function Acceptablefiletype($imageFileType){
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        return false;
    }
    else{
        return true;
    }
}

// Complete the upload
// Returns bool (Upload successful = TRUE, Upload unsuccessful = FALSE)
function upload($file, $target_file){
    if (move_uploaded_file($file, $target_file)) {
        return true;
    } else {
        return false;
    }
}
?>
