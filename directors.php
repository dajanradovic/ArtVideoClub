<?php 
session_start();
include_once 'databaseconnection.php';


?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">
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
      
      <div class="pocetnaslika2">

        <div class="coloroverlay">
          


        </div>
		<div id="naslovstranice">
		Explore some basic facts about some of the most important and honoured movie directors in the history of cinema
		</div>
        <p class="citatiSvi"id="citat2">“The film [Stalker] needs to be slower and duller at</p> 
		<p class="citatiSvi" id="citat3">		the start so that the viewers who walked into the</p>
		<p class="citatiSvi" id="citat4">wrong theatre have time to leave before </p>
		<p class="citatiSvi" id="citat5">the main action starts.” </p> 
		<p class="citatiSvi" id="citat6">--Andrei Tarkovsky--</p>
		
		
      </div>
      <div class="row" style="margin-top: 20px;">
        <div class="col m4 s12"><img src="images/bergman.jpg" class="slikeredatelja responsive-img"  >
        </div>
        <div class="col m8 s12 mobilniOdjeljak">
          <table class="striped  directorStats" style="max-height: 100px; float: left;">
               <tbody>
                <tr>
                  <td class="trstyle">Name:</td>
                  <td class="trstyle">Ingmar Bergman</td>
                            </tr>
                <tr>
                  <td class="trstyle">Counry:</td>
                  <td class="trstyle">Sweden</td>
                  
                </tr>
                <tr>
                  <td class="trstyle">Date of birth: </td>
                  <td class="trstyle">1928</td>
                </tr>
            <tr>
                  <td class="trstyle">Date of death: </td>
                  <td class="trstyle">2002</td>
                </tr>
             <tr>
                  <td class="trstyle">Years active: </td>
                  <td class="trstyle">1945-1987</td>
                </tr>
            
             <tr>
                  <td class="trstyle">Genre: </td>
                  <td class="trstyle">Drama</td>
                </tr>
            
           
             
              </tbody>
            </table>
        <p class="bio">Ernst Ingmar Bergman[a] (14 July 1918 – 30 July 2007) was a Swedish director, writer, and producer who worked in film, television, theatre and radio. Considered to be among the most accomplished, acclaimed and influential filmmakers of all time,[1][2][3] Bergman's films include Smiles of a Summer Night (1955), The Seventh Seal (1957), Wild Strawberries (1957), Persona (1966), Cries and Whispers (1972), Scenes from a Marriage (1973), and Fanny and Alexander (1982); the last two exist in extended television versions.
      
      Bergman directed over sixty films and documentaries for cinematic release and for television screenings, most of which he also wrote. He also directed over 170 plays. He eventually forged a creative partnership with his cinematographers Gunnar Fischer and Sven Nykvist. Among his company of actors were Harriet and Bibi Andersson, Liv Ullmann, Gunnar Björnstrand, Erland Josephson, Ingrid Thulin and Max von Sydow. Most of his films were set in Sweden, and many films from Through a Glass Darkly (1961) onward were filmed on the island of Fårö.
      
      Philip French referred to Bergman as "one of the greatest artists of the 20th century ... he found in literature and the performing arts a way of both recreating and questioning the human condition."[4] Director Martin Scorsese commented; "If you were alive in the 50s and the 60s and of a certain age, a teenager on your way to becoming an adult, and you wanted to make movies, I don't see how you couldn't be influenced by Bergman ....It's impossible to overestimate the effect that those films had on people
        </p>
        
        </div>
        </div>
<hr>

<div class="row" style="margin-top: 20px;">
	<div class="col m4 s12"><img src="images/antonioni.jpg" class="slikeredatelja responsive-img"  >
	</div>
	<div class="col m8 s12 mobilniOdjeljak">
		<table class="striped directorStats" style="max-height: 100px; float: left;">
         <tbody>
          <tr>
            <td>Name:</td>
            <td>Michelangelo Antonioni</td>
                      </tr>
          <tr>
            <td>Counry:</td>
            <td>Italy</td>
            
          </tr>
          <tr>
            <td>Date of birth: </td>
            <td>1912</td>
          </tr>
		  <tr>
            <td>Date of death: </td>
            <td>2007</td>
          </tr>
		   <tr>
            <td>Years active: </td>
            <td>1945-1987</td>
          </tr>
		  
		   <tr>
            <td>Genre: </td>
            <td>Drama</td>
          </tr>
		  
		 
		   
        </tbody>
      </table>
	<p class="bio">Michelangelo Antonioni Cavaliere di Gran Croce OMRI (/ænˌtoʊniˈoʊni/, Italian: [mikeˈlandʒelo antoˈnjoːni]; 29 September 1912 – 30 July 2007), was an Italian film director, screenwriter, editor, painter, and short story author. He is best known for his "trilogy on modernity and its discontents"[1] — L'Avventura (1960), La Notte (1961), and L'Eclisse (1962)—as well as the English-language films Blowup (1966) and The Passenger (1975). His films have been described as "enigmatic and intricate mood pieces"[2] that featured elusive plots, striking visuals, and a preoccupation with modern landscapes.[3] His work would substantially influence subsequent art films.[4]

    Antonioni received numerous awards and nominations throughout his career, including the Cannes Film Festival Jury Prize (1960, 1962), Palme d'Or (1966), and 35th Anniversary Prize (1982); the Venice Film Festival Silver Lion (1955), Golden Lion (1964), FIPRESCI Prize (1964, 1995), and Pietro Bianchi Award (1998); the Italian National Syndicate of Film Journalists Silver Ribbon eight times; and an honorary Academy Award in 1995. He is one of three directors to have won the Palme d'Or, the Golden Lion and the Golden Bear, and the only director to have won these three and the Golden Leopard.
	</p>
	
	</div>
  </div>
  <div class="clearfix"></div>
<hr>

<div class="row" style="margin-top: 20px;">
	<div class="col m4 s12"><img src="images/fellini.jpg" class="slikeredatelja responsive-img"  >
	</div>
	<div class="col m8 s12 mobilniOdjeljak">
		<table class="striped  directorStats" style="max-height: 100px; float: left;">
         <tbody>
          <tr>
            <td>Name:</td>
            <td>Federico Fellini</td>
                      </tr>
          <tr>
            <td>Counry:</td>
            <td>Italy</td>
            
          </tr>
          <tr>
            <td>Date of birth: </td>
            <td>1920</td>
          </tr>
		  <tr>
            <td>Date of death: </td>
            <td>1993</td>
          </tr>
		   <tr>
            <td>Years active: </td>
            <td>1945-1987</td>
          </tr>
		  
		   <tr>
            <td>Genre: </td>
            <td>Drama, Comedy</td>
          </tr>
		  
		 
		   
        </tbody>
      </table>
	<p class="bio">Federico Fellini, Cavaliere di Gran Croce OMRI (Italian: [fedeˈriːko felˈliːni]; 20 January 1920 – 31 October 1993) was an Italian film director and screenwriter. Known for his distinct style that blends fantasy and baroque images with earthiness, he is recognized as one of the greatest and most influential filmmakers of all time.[1][2][3] His films have ranked, in polls such as Cahiers du cinéma and Sight & Sound, as some of the greatest films of all time. Sight & Sound lists his 1963 film 8½ as the 10th-greatest film of all time.

    In a career spanning almost fifty years, Fellini won the Palme d'Or for La Dolce Vita, was nominated for twelve Academy Awards and won four in the category of Best Foreign Language Film, the most for any director in the history of the Academy. At the 65th Annual Academy Awards in Los Angeles, he received an honorary award for Lifetime Achievement.[4] Besides La Dolce Vita and 8½, his other well-known films include La Strada, Nights of Cabiria, Juliet of the Spirits, Satyricon, Amarcord and Fellini's Casanova. Personal and highly idiosyncratic visions of society, Fellini's films are a unique combination of memory, dreams, fantasy and desire. The adjectives "Fellinian" and "Felliniesque" are "synonymous with any kind of extravagant, fanciful, even baroque image in the cinema and in art in general"
	</p>
	
	</div>
  </div>

  
  <div class="clearfix"></div>
  <div class="fixed-action-btn section scrollspy">
    <a class="btn-floating btn-small red" href="#vrh">
      <i class="large material-icons">arrow_upward</i>
    </a>
    </div>

   <?php
   include ('includes/footer.php');

   ?>
	

    <script type="text/javascript" src="js/materialize.min.js"">
	
	
	</script>
	
	<script> 
	
	$(document).ready(function(){
    $('#naslovstranice').slideDown(6000);
		
      $('.scrollspy').scrollSpy();

     
    $('.sidenav').sidenav();
  

    
    });
  
  </script>
</body>




</html>