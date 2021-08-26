<?php

function load_page(){
    if(isset($_GET['page'])){
        if(file_exists('pages/'.$_GET['page'].'.php'))
            include('pages/'.$_GET['page'].'.php');
        else
            include('pages/home.php');
    }else{
        include('pages/home.php');
    }
}