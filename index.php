<?php
if(empty($_COOKIE['apikey'])){
    require_once './index.html';
}else{
    require_once './home.php';
}
?>
