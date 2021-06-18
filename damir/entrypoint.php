<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(404);
    die();
}

header('Content-type:application/json;charset=utf-8');

if (isset($_POST['ds-post-request']))
{    
    $data = json_decode($_POST['ds-post-request']);    
    error_log(print_r($data, true));    
    echo json_encode(['success'=> $data]);  
    die();  
}

header('Content-type:text/html;charset=utf-8');
http_response_code(404);
die();
