# SimpleUpload
Simple PHP uploader used for Anilist Content

# Config
## Set save directory for your uploads
Example:
```
$target_dir = "/home/public_html/images/";
```

## Set your upload password to stop your upload system from being abused
Example:
```
$upload_password = "MySuperSecretPassword";
```

## Set your web server protocol
Default:
```
$protocall = "https://"
```
Options:
```
$protocall = "https://"
```
```
$protocall = "http://"
```

## Use uniqid
### If you disable this option images wont be renamed when you upload however you may get a duplicate file error, leaving this option on is the recommended action as the script generates a "img(url)" for you and you wont need to retype a long image name.
Default:
```
$use_uniqid = true;
```
Options:
```
$use_uniqid = true;
```
```
$use_uniqid = false;
```

# Purpose

I got tired of adding the "img(imgurl)" to every upload to imgur for anilist so I decided to write some HTML and PHP to uploasd to my website and give back a usable embed url for my public activity

# Screenshots
## Before upload
![Before upload](https://onii-chan.moe/images/anilist/uploads/5b7c2f4650a2b.jpeg)

## After upload
![Upload](https://onii-chan.moe/images/anilist/uploads/5b7c519e387bd.jpeg)

# In progress developments

__Mobile optimisation__ <br>
