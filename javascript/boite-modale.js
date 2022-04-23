(function() {

    let carte_contenu_ouvrir = document.querySelectorAll('.carte_contenu_ouvrir');
    let boite_modale = document.querySelector(".boite_modale");
    let boite_modale_fermeture = document.querySelector(".boite_modale_fermeture");
    
    //console.log(carte_contenu_ouvrir.length);
    for (const bout of carte_contenu_ouvrir){
        bout.addEventListener('mousedown', function(){
            //console.log(this.parentNode.parentNode.className)
            boite_modale.classList.add('ouvrir')
            //console.log(boite_modale.classList);
        })

        boite_modale_fermeture.addEventListener('mousedown',function(){
            boite_modale.classList.remove('ouvrir')
        })
    }
})()