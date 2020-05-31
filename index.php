<?php 
session_start();
include_once 'databaseconnection.php';


?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link rel="stylesheet" type="text/css" href="style.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    
    <title>VideoClub</title>
    </head>

<body  class="#bdbdbd grey lighten-1">
<?php

if (empty ($_SESSION['username'])){
  
 include ("includes/headernormalversion.php");
		   }


	 else {

	   include ("includes/headerloginversion.php");
	 }
?>
      
      <div class="pocetnaslika col s12">

        <div class="coloroverlay col s12">
          


        </div>
        <p class="citatUmalom">Relax and watch</p>
        <p class="citatUmalom" id="citat">-- No stupid hollywood shit, only the real movies here --</p>
      </div>
    
	
	<div class="row" class="#bdbdbd grey lighten-1" style="margin-top: 20px;">
		<div class="col m12 s12"  >
		<div class="carousel">
			<a class="carousel-item"   href="#one!"><img   src="images/izmjenjive/1.jpg"></a>
				<a class="carousel-item"  href="#two!"><img  src="images/izmjenjive/2.jpg"></a>
				<a class="carousel-item"  href="#three!"><img  src="images/izmjenjive/3.jpg"></a>
				<a class="carousel-item"  href="#four!"><img  src="images/izmjenjive/4.jpg"></a>
				<a class="carousel-item"  href="#five!"><img  src="images/izmjenjive/5.jpg"></a>
				<a class="carousel-item"   href="#one!"><img  src="images/izmjenjive/6.jpg"></a>
				<a class="carousel-item"  href="#two!"><img  src="images/izmjenjive/7.jpg"></a>
				<a class="carousel-item"  href="#three!"><img  src="images/izmjenjive/8.jpg"></a>
				<a class="carousel-item"  href="#four!"><img  src="images/izmjenjive/9.jpg"></a>
				<a class="carousel-item"  href="#five!"><img  src="images/izmjenjive/10.jpg"></a>
		</div>

		</div>
</div>

<hr>

<div class="row" class="#bdbdbd grey lighten-1" style="margin-top: 20px;">
  
  <div class="col m2 s12" id="moviePeriodsMenu" style="border-right: 1px solid black; border-top: 1px solid black; padding-right: 10px;">
 
<ul class="collapsible #bdbdbd grey lighten-1 " id="ulsidebar" >
    <li class="lisidebar">
      <div class="collapsible-header"><h6 class="waves-effect waves-light btn-large  ">"New Hollywood" <br /> cinema</h6></div>
      <div class="collapsible-body"><span>New Hollywood, sometimes referred to as the "American New Wave", or "The Hollywood Renaissance", refers to a movement in American film history from the mid-1960s to the early 1980s, when a new generation of young filmmakers came to prominence in the United States. They influenced the types of films produced, their production and marketing, and the way major studios approached film-making. In New Hollywood films, the film director, rather than the studio, took on a key authorial role. The definition of New Hollywood varies, depending on the author, with some of them defining it as a movement and others as a period.</span></div>
    </li>
    <li class="lisidebar">
      <div class="collapsible-header"><h6 class="waves-effect waves-light btn-large">Italian neorealism</h6></div>
      <div class="collapsible-body"><span>Italian neorealism (Italian: Neorealismo), also known as the Golden Age, is a national film movement characterized by stories set amongst the poor and the working class, filmed on location, frequently using non-professional actors. Italian neorealism films mostly contend with the difficult economic and moral conditions of post-World War II Italy, representing changes in the Italian psyche and conditions of everyday life, including poverty, oppression, injustice, and desperation.</span></div>
    </li>
    <li class="lisidebar">
      <div class="collapsible-header"><h6 class="waves-effect waves-light btn-large">French new wave</h6></div>
      <div class="collapsible-body"><span>New Wave (French: La Nouvelle Vague) is a French film movement which emerged in the 1950s and 1960s. It is a form of European art cinema,[3] and is often referred to as one of the most influential movements in the history of cinema. New Wave filmmakers were linked by their rejection of the traditional film conventions then dominating France, and by a spirit of iconoclasm. Common features of the New Wave included radical experimentation with editing, visual style, and narrative, as well as engagement with the social and political upheavals of the era.[3]</span></div>
    </li>
	<li class="lisidebar" >
      <div class="collapsible-header"><h6 class="waves-effect waves-light btn-large">Classic Hollywood</h6></div>
      <div class="collapsible-body"><span>Classical Hollywood cinema, classical Hollywood narrative, the Golden Age of Hollywood, Old Hollywood, and classical continuity[4] are terms used in film criticism which designate both a narrative and visual style of film-making which developed in and characterized American cinema between the 1910s (rapidly after World War I) [5] and the 1960s, and eventually became the most powerful and pervasive style of film-making worldwide.[6]</span></div>
    </li>
  </ul>
 
    </div>
	<div class="col m10 s12">
	<div class="col m5 s12" style="margin-bottom:20px;"> <span class="nazivrazdoblja">Click on the film to see details</span></div>
	
	
	</div>
	
	
	<div  class="col m7 s12" id="listafilmova">
	<?php


$sql="SELECT title, year, director, posteraddress FROM listafilmova LIMIT 10;";

$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0){
		while ($row = mysqli_fetch_assoc($result)){
				echo '<div class="col s6 m3 ispis">
				 <div class="slikica" style="background-image: url('.$row['posteraddress'].'); background-repeat: no-repeat; background-size: cover;">
				
				</div>
				<div class="tekstzaslikicu">
					<p class="generiranitekst" id="redatelj">' .  $row['director'] . '</p>
					<p class="generiranitekst" id="drzava">' .  $row['year'] . '</p>
					<p class="generiranitekst" id="imefilma">' .  $row['title'] . '</p>
				</div>
			</div>';
			
		}

}


?>

</div>

</div>
<?php
   include ('includes/footer.php');

   ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
	
	
	</script>
	
	<script> 
	
	$(document).ready(function(){
    $('.carousel').carousel({
	fullWidth: true,
	numVisible: 7,
	
	
	
	});

	$(document).ready(function(){
    $('.sidenav').sidenav();
  });


	$("select").change(function(){
	
	var selectedValue = $(this).val();
	if (selectedValue=="1"){

		$("#listafilmova").load('pagination_query_byName1.php');
		$("#brojjedan").parent('li').addClass('active');
		$("#brojdva").parent('li').removeClass('active');


	}
});
	
	/*var prazan="";
	if ($('.okvirzasliku p').text()===prazan){

		$('.okvirzasliku').css('visibility', 'hidden');

	};*/
	
	$('.collapsible').collapsible();
	$('select').formSelect();

	$("#brojjedan").click(function(){
		if ($("select").val()=="1"){

		$("#listafilmova").load('pagination_query_byName1.php');
		$("#brojdva").parent('li').removeClass('active');
		$("#brojjedan").parent('li').addClass('active');

}
	else {
    $("#listafilmova").load('pagination_query1.php');
	$("#brojjedan").parent('li').addClass('active');
	$("#brojdva").parent('li').removeClass('active');
	}

  });
	
	$("#brojdva").click(function(){

		if ($("select").val()=="1"){

			$("#listafilmova").load('pagination_query_byName2.php');
			$("#brojdva").parent('li').addClass('active');
			$("#brojjedan").parent('li').removeClass('active');

		}

		else {
    $("#listafilmova").load('pagination_query.php');
	$("#brojdva").parent('li').addClass('active');
	$("#brojjedan").parent('li').removeClass('active');
		}
	});

	$('#listafilmova').on('click', '.ispis', function(){
					var imeFilma = $(this).find("div.tekstzaslikicu p#imefilma.generiranitekst ").text();
					window.open("prikazfilma.php" + '?title=' + imeFilma, '_self');
					


	});


			

		//ajax upit na vanjski api za generiranje podataka o filmovima
		/*	$.ajax({
						url: 'http://www.omdbapi.com/?i=tt0056736&apikey=92fe92c6',
						dataType: "json",
						method: "GET",
						success: function (data){

							
							$(data).each(function(key, value){

									$('#redatelj').text(value.Director);
									$('#drzava').text(value.Country);
									$('#imefilma').text(value.Title);

							/*	employeeTable.append('<tr><td>' + emp.id + '</td><td>' 
									+ emp.name + '</td><td>' + emp.surname + '</td><td>' + emp.age + '</td></tr>');

							});

							//$('#txtName').val(Data.Name);
							//$('txtGender').val(Data.Gender);
							//$('txtSalary').val(Data.Salary);

						},

						error: function (err){

							alert(err);
						}


					
				});*/
  
			});
  </script>
</body>




</html>