(function(){
    let boite_modale = document.querySelector(".boite_modale")
    let galerie_img = document.querySelectorAll('.galerie .wp-block-image img')
    let boite_modale_ferme = document.querySelector(".boite_modale_fermeture")
    let boite_modale_texte = document.querySelector(".boite_modale_texte")
  
    boite_modale_ferme.addEventListener('mousedown', function(){
      boite_modale.classList.remove('ouvrir')
    })
  
    let image = document.createElement('img')
    boite_modale_texte.appendChild(image)
  
  
    for (const img of galerie_img) {
        img.addEventListener('mousedown',function(){
          boite_modale.classList.add('ouvrir')
          console.log(this.getAttribute('src'))
          let source = this.getAttribute('src')
          image.setAttribute('src',source)
        })
    }

  })()