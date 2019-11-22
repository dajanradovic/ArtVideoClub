<?php
session_start();
$userid = $_SESSION['ID'];

class Post {

private $conn;
private $table = "posts";

//post properties


public $id;
public $message;
public $movieid;

public $postedon;


//contructor with db

public function __construct ($db){
        $this->conn = $db;
            
}


//get posts

public function read (){

    $query= "SELECT id, message, postedOn FROM posts WHERE userid= ?;";

    $stmt = $this->conn->prepare($query);
    //BInd ID
    $stmt->bindParam(1, $_SESSION['ID']);
    $stmt ->execute();

    return $stmt;

}

//Get Single Post
public function read_single(){

        $query= "SELECT id, message, postedOn FROM posts WHERE userid= ?;";

        //prepare statement
          $stmt = $this->conn->prepare($query);

         //BInd ID
         $stmt->bindParam(1, $this->$userid);

          //execute query
          $stmt ->execute();

          $row = $stmt->fetch(PDO::FETCH_ASSOC);

           //set properties

               $this->message = $row['message'];
              $this->postedon = $row['postedOn'];
    

                        }


//create post or commend

public function create(){

    $query = "INSERT INTO posts SET 
    message = :message,
    userId = :userid,
    movieId = :movieid";


        //preapre statement

        $stmt = $this->conn->prepare($query);

        //clean data

        $this->message = htmlspecialchars(strip_tags($this->message));
        $this->userid = htmlspecialchars(strip_tags($this->userid));
        $this->movieid = htmlspecialchars(strip_tags($this->movieid));

        //bind data


        $stmt->bindParam(':message', $this->message);
        $stmt->bindParam(':userid', $this->userid);
        $stmt->bindParam(':movieid', $this->movieid);

        //execute query

        if ($stmt->execute()){
        return true;
                }

        //print error if something goes wrong

        printf("Error: %s.\n, $stmt->error");

        return false;



                }


 public function update(){

                    $query = "UPDATE posts SET 
                    message = :message
                    
                        WHERE ID= :id";
                
                
                        //preapre statement
                
                        $stmt = $this->conn->prepare($query);
                
                        //clean data
                
                        $this->message = htmlspecialchars(strip_tags($this->message));
                       // $this->userid = htmlspecialchars(strip_tags($this->userid));
                       // $this->movieid = htmlspecialchars(strip_tags($this->movieid));
                        $this->id = htmlspecialchars(strip_tags($this->id));
                
                        //bind data
                
                
                        $stmt->bindParam(':message', $this->message);
                       // $stmt->bindParam(':userid', $this->userid);
                       // $stmt->bindParam(':movieid', $this->movieid);
                        $stmt->bindParam(':id', $this->id);

                        //execute query
                
                        if ($stmt->execute()){
                        return true;
                                }
                
                        //print error if something goes wrong
                
                        printf("Error: %s.\n, $stmt->error");
                
                        return false;
                
                
                
                                }

 public function delete(){

    $query= "DELETE FROM posts WHERE ID= :id";

    $stmt = $this->conn->prepare($query);

    $this->id = htmlspecialchars(strip_tags($this->id));
    $stmt->bindParam(':id', $this->id);

    //execute query
                
    if ($stmt->execute()){
        return true;
                }

        //print error if something goes wrong

        printf("Error: %s.\n, $stmt->error");

        return false;
 }



}
















?>