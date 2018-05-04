function verifForm(){
    return false;
}

function verifEmail(champ){
    
    if(document.getElementById('email').value == ""){ 
        return false;
    }
    else{
        return true;
    }
}

function verifMdp(champ){
    
    if(document.getElementById('mdp').value == ""){ 
        return false;
    }
    else{
        return true;
    }
}

function checkChampsVides(champsRemplis)
{
   var mailOk = verifEmail(champsRemplis.email);
   var mdpOk = verifMdp(champsRemplis.mdp);
    
   if(verifEmail(champsRemplis.email) && verifMdp(champsRemplis.mdp))
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}












/*
function testChampsVides()
{
    //Vérifier si un bouton radio a bien été coché
    var ischecked = false;
    if( (document.getElementById('admin').checked) || (document.getElementById('utilisateur').checked) ){
        
        
        //On vérifie mtn si on a bien mis tous les champs
        if( (document.getElementById("email").value == "") || (document.getElementById("mdp").value == "") ){ 
            var messageNom1 = "<br>Le champ Nom est vide !";
            message += messageNom1;
            document.getElementById("errordiv").innerHTML = message;
        }
    }
    else{
        alert("Veuillez entrer tous les champs svp");
    }
}
*/

