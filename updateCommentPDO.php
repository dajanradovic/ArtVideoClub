<?php
//headers
header ('Access-Control-Allow-Origin: *');
header ('Content-Type: application/json');
header ('Access-Control-Allow-Methods: PUT');
header ('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-Width');


include_once 'DatabaseClass.php';
include_once 'ClassPost.php';


//instatiate database & connect


$database = new Database();
$db = $database->connect();



//instatiate read object

$post = new Post($db);

//get raw posted data

//set ID to update


$data = json_decode(file_get_contents("php://input"));
$post->id = $data->id;

$post->message = $data->message;
//$post->userid = $data->userid;
//$post->movieid = $data->movieid;


//update post

if ($post->update()){

echo json_encode(

    array('message'=> 'Post updated')
);

} else{

    echo json_encode(

        array('message'=> 'Post not updated')
    );

}

