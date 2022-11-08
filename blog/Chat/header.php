<?php
require_once 'functions.php';
require_once 'config.php';

if (!empty(SITE_ROOT)){
    $url_path = "/".SITE_ROOT."/";
} 
else{
    $url_path = "/shop/blog/";
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" ,initial-scale=1">
    <title>PHP Blog</title>

    <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.19.1/ui/trumbowyg.min.css">
</head>
<body>

<header class="w3-container w3-teal">
    <h1><img src="logo.png"><a href="/shop/blog">PHP Blog</a></h1>
</header>

<div class="w3-bar w3-border">
    <a href="/<?=SITE_ROOT?>" class="w3-bar-item w3-button w3-pale-green">Home</a>
    <?php
    if (isset($_SESSION['username'])) {
        echo "<a href='".$url_path ."new.php' class='w3-bar-item w3-btn'>New Post</a>";
        echo "<a href='".$url_path ."admin.php' class='w3-bar-item w3-btn'>Admin Panel</a>";
        echo "<a href='".$url_path ."Chat/index.php' class='w3-bar-item w3-btn'>Chat</a>"; 
        echo "<a href='".$url_path ."/caesar/index.php' class='w3-bar-item w3-btn'>Crypt</a>";       
        echo "<a href='".$url_path ."logout.php' class='w3-bar-item w3-btn'>Logout</a>";

    } else {
        echo "<a href='".$url_path ."login.php' class='w3-bar-item w3-pale-red' >Login</a>";
    }
    ?>
</div>
