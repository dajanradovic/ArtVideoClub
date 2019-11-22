<?php

//headers
header ('Access-Control-Allow-Origin: *');


include_once 'DatabaseClass.php';
include_once 'ClassPost.php';


//instatiate database & connect


$database = new Database();
$db = $database->connect();



//instatiate read object

$post = new Post($db);

$result = $post->read();

//get row count


$num = $result->rowCount();

//check if there is any posts


if ($num > 0){
//post array
 $posts_arr  = array();
 

    while ($row=$result->fetch(PDO::FETCH_ASSOC)){
            extract($row);
        
        $posts_item = array(
                'id' => $row ['id'],
                'message' => $row ['message'],
                'postedon' =>$row ['postedOn']
            
        );

        //pust to array
        array_push($posts_arr, $posts_item);
    }
//turn to jason
header ('Content-Type: application/json');
echo json_encode($posts_arr, true);

}
else {
//no posts



    array('message' => 'no posts found')
;


}














?>