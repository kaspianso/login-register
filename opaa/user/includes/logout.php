<?php
$base_url = 'http://127.0.0.1/opaa/';
    session_start();
    if(isset($_GET['logout']))
    {
        session_destroy();
        header('Refresh: 0; url='.$base_url.'');
    }
