<?php

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    header('Content-Type: text/html; charset=utf-8');
    switch($_GET)
    {
        case '/test2.html':
            $page = file_get_contents('./test2.html');
            echo $page;
            break;
        case '/test3.html':
            $page = file_get_contents('./test3.html');
            echo $page;
            break;
        case '/test.html':
            $page = file_get_contents('./test.html');
            echo $page;
            break;
        default:
            $page = file_get_contents('./test.html');
            echo $page;
            break;
    }
    $clientIP = $_SERVER['REMOTE_ADDR'];
    
    $path = 'log.txt';
    $timestamp = date("d-m-Y H:i:s", strtotime('- 3 hours'));
    $file = fopen($path, 'a+');
    fwrite($file, "IP: {$clientIP} || Timestamp: {$timestamp}\n");
    fclose($file);
}