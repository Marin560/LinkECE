<?php
echo '
    <form method = "post" action ="traitement_nouveau_post.php">
            <textarea  placeholder="Exprimez-vous... " name="texte_user" rows="3" cols="85" class="area"></textarea>
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                         <button type="button" class="btn btn-primary">Photo</button>
                         <button type="button" class="btn btn-primary">Vidéo</button>
                         <button type="button" class="btn btn-primary">Humeur</button>
                         <button type="button" class="btn btn-primary">Activité</button>
                    </div>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-primary">Je suis à</button>
                    <button type="button" class="btn btn-primary">Date</button>
            </div>  
            <div class="btn-group mr-2" role="group" aria-label="Third group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Confidentialité</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <button type="button" class="btn btn-secondary">Private</button>
                                <button type="button" class="btn btn-secondary">Public</button>
                    </div>
            </div>  
            <div class="btn-group" role="group" aria-label="Fourth group">
                <input type="submit" class="btn btn-primary" value="publier">
             </div>
        </div>
    </form>
';

?>