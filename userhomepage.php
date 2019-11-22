<?php

session_start();
$userId = $_SESSION['ID'];

if (empty ($_SESSION['avatarstring'])){
	$avatarStringUrl="";}

	else{
		$avatarStringUrl = $_SESSION['avatarstring'];}

?>





<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css" />
  


    <title>VideoClub</title>
</head>

<body class="#bdbdbd grey lighten-1">
    
<?php

include ("headerloginversion.php");
?>

<div class="row" >
<div class="col s2" >

<?php if ($avatarStringUrl != 0){
 echo ('<div class="avatar" style="background-image: url(uploads/'. $avatarStringUrl . ')"></div>');
 }

 else {

	echo('<div class="avatar" style="background-image: url(images/avatar.jpg)"></div>');
 }

 ?>

<form action="uploadProfileImage.php" method="POST" enctype="multipart/form-data">
<input class="btn-small" style="color:transparent; width:100%; padding-left: 0px;" onchange="this.style.color = 'white';" type="file" name="file" title=" ">
<button class="btn-small" style="margin-top :10px; "  type="submit" name="submit">Upload</button>
</form>


</div>
</div>

<div class="row">

<div class="col s12">
<h4><i>View and organize your posts</i></h4>
</div>
</div>


<div class="row">
<div class="col s12">

<table id="listaKomentara" class="responsive-table striped">
        




</table>

</div>




<div>




<div id="modal1" class="modal">
    <div class="modal-content">
      <h6><u>Uredi komentar:</u></h6>
	  
	  <textarea id="textarea1" class="materialize-textarea"></textarea>
         
    </div>
    <div class="modal-footer">
      <a href="#!" id="updateComment" class="modal-close waves-effect waves-green btn-flat">Izmijeni</a>
    </div>
  </div>



<script>


$(document).ready(function(){
	$.ajaxSetup({ cache: false });

	$('.modal').modal();
	$('#textarea1').val('New Text');
 	 M.textareaAutoResize($('#textarea1'));
	

 
//$("#unosKomentara").click (getComments);*/

listOfComments();

function listOfComments(){
			//izlistaj sve komentare korisnika
			$.ajax({
						url: 'readUserPostsRestApi.php',
						dataType:'json',
						method: "GET",
						cache: false,
						
						success: function (data){
							
							//var abc = JSON.parse (data.substring(6));
							

							$("#listaKomentara").append('<thead><tr><th>ID</th><th>Comment</th><th>Posted On</th><th></th><th></th></tr></thead>');

							$.each(data, function (key, value){

								$("#listaKomentara").append('<tbody><tr><td class="id1">' + data[key].id + '</td><td class="hover">' + data[key].message + '</td><td>' + data[key].postedon + '</td><td ><a class="modal-trigger" href="#modal1"><span class="badge blue" style="color: black"; >Edit comment</span></a></td><td><span class="badge red" style="color: black";>Delete comment</span></td></tr><tbody>');

          

									
								
							
							})
                              
                        




							//$('#txtName').val(Data.Name);
							//$('txtGender').val(Data.Gender);
							//$('txtSalary').val(Data.Salary);

						},

						error: function (err){

							alert(err);
						}


					
				});
}


function listOfCommentsUpdate(){
	$("#listaKomentara").empty();
	
	
	listOfComments();
}

let id;

//editiraj tekst komentara u modalu
$('#listaKomentara').on('click', 'td:nth-child(4)', function (){

	let tekst = $(this).siblings('.hover').text();
	$('#textarea1').val(tekst);
	id = $(this).siblings('.id1').text();
	
			
			
			});

$('#listaKomentara').on('click', 'td:nth-child(5)', deleteComment);
	
	
	


function deleteComment(){

	if(confirm("Are you sure?")){
				
id = $(this).siblings('.id1').text();

$.ajax({
url: 'deleteCommentPDO.php',
type: "post",
contentType: 'application/json',
data: JSON.stringify ({

"id": id


}),
dataType: 'json',
success: function(){
	window.location.reload();}


});
}
}


//posalji uredeni teksts bazu izmijenjen i izmijeni UI
$("#updateComment").click(function(){
	
	var commentToUpdate = $('#textarea1').val();
	//$.ajaxSetup({ cache: false });
	$.ajax({

		

        url: 'updateCommentPDO.php',
		type: "post",
        contentType: 'application/json',
        data: JSON.stringify ({
			
			"id": id,
			"message": commentToUpdate
						
        }),
        dataType: 'json',
		success: function(){
	window.location.reload();}
	});


});

function generirajTekstZaUrediti(){
	
	let tekst = $(this).siblings('.hover').text();
	alert("tu sam");
	let id = $(this).siblings('.id1').html();
	$('#textarea1').val(tekst);
	
	

}

});


</script>
</body>
</html>