<?php
//headers
header ('Access-Control-Allow-Origin: *');
header ('Content-Type: application/json');


include_once 'DatabaseClass.php';
include_once 'ClassPost.php';


//instatiate database & connect


$database = new Database();
$db = $database->connect();



//instatiate read object

$post = new Post($db);

//get ID from the url

$post->id = isset($_GET['id']) ? $_GET['id'] : die();

//get post or comment

$post->read_single();
$post_arr= array(

    'message' => $post->message,
    'postedOn' => $post->postedon


)