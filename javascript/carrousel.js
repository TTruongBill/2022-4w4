(function(){
    let boite_carrousel = document.querySelector(".boite_carrousel")
    let galerie_img = document.querySelectorAll('.galerie .wp-block-image img')
    let boite_carrousel_ferme = document.querySelector(".boite_carrousel_fermeture")
    let boite_carrousel_nav = document.querySelector(".boite_carrousel_nav")

    boite_carrousel_ferme.addEventListener('mousedown', function(){
      boite_carrousel.classList.remove('ouvrir')
    })
  
    let image = document.createElement('img')
    image.classList.add("boite_carrousel_img")
    boite_carrousel.append(image)
  
    let index = 0;
    for (const img of galerie_img) {
      let bouton = document.createElement("button")
      bouton.dataset.index = index++
      boite_carrousel_nav.append(bouton)

      bouton.addEventListener('mousedown', function(){
        image.setAttribute('src', galerie_img[this.dataset.index].getAttribute('src'))
      })
        img.addEventListener('mousedown', function(){
            boite_carrousel.classList.add('ouvrir')
            image.setAttribute('src', this.getAttribute('src'))
        })
    }
    
  })()