<?php 

echo ('
<div class="row" style="margin-top: 20px;">
    
        <form id="form3" method="GET" action="postservice.php" >
        <input type="hidden"  name="movieId" value="' .  $movieId . ' ?>">
         <input type="hidden"  name="userId" value="'.  $userId . '">
        <div class="input-field col s12">
         
          <textarea id="textarea1" name="komentar" class="materialize-textarea"></textarea>
          <label for="textarea1">Comment the movie:</label>
        
        </div>

        <div class="row">
        <div class="col s5">
        <button id="submitbutton" type="submit" class="btn waves-effect waves-light">Post a comment
          <i class="material-icons right"></i>
        </button>
        </form>
        </div>
        
        </div>
        </div>');

        ?>