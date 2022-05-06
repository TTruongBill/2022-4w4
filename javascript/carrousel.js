(function(){
    let boite_carrousel = document.querySelector(".boite_carrousel")
    let galerie_img = document.querySelectorAll('.galerie .wp-block-image img')
    let boite_carrousel_ferme = document.querySelector(".boite_carrousel_fermeture")

    boite_carrousel_ferme.addEventListener('mousedown', function(){
      boite_carrousel.classList.remove('ouvrir')
    })
  
    let image = document.createElement('img')
    boite_carrousel.append(image)
  
for (const img of galerie_img) {

        img.addEventListener('mousedown', function(){
            boite_carrousel.classList.add('ouvrir')
            image.setAttribute('src', this.getAttribute('src'))
        })
    }
    
  })()