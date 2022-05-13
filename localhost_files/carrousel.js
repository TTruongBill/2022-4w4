(function(){
    let boite_carrousel = document.querySelector(".boite_carrousel")
    let galerie_img = document.querySelectorAll('.galerie .wp-block-image img')
    let boite_carrousel_ferme = document.querySelector(".boite_carrousel_fermeture")
    let boite_carrousel_nav = document.querySelector(".boite_carrousel_nav")
    let boite_carrousel_img = document.querySelector(".boite_carrousel_img")

    boite_carrousel_ferme.addEventListener('mousedown', function(){
      boite_carrousel.classList.remove('ouvrir')
    })
  
    let image = document.createElement('img')
    boite_carrousel.append(image)
    let index = 0;
    for (const img of galerie_img) {
      /*Insertion des radio bouton dans boite_carrousel_nav*/
      let elmImage = document.createElement('img')
      img.dataset.index = index
      elmImage.setAttribute('src', img.getAttribute('src'))
      boite_carrousel_img.append(elmImage)

      let bouton = document.createElement('input')
      bouton.checked=false
      bouton.type = "radio"
      bouton.class = "bouton"
      bouton.name = "bouton"
      bouton.dataset.index = index++
      boite_carrousel_nav.append(bouton)


      bouton.addEventListener('mousedown', function(e){ 
        e.preventDefault;
        initialise__carrousel__img()
        boite_carrousel_img.children[this.dataset.index].classList.add('img-ouvrir')
      })

        img.addEventListener('mousedown', function(){
            boite_carrousel.classList.add('ouvrir')
            initialise__carrousel__img()
            boite_carrousel_img.children[this.dataset.index].classList.add('img-ouvrir')
            boite_carrousel_nav.children[this.dataset.index].checked=true
          })

    }
    function initialise__carrousel__img(){
      let collectionImg = document.querySelectorAll('.boite_carrousel_img img')
      // console.log('///////////////////////////////////////////////')
      for (let i=0 ; i<collectionImg.length; i++){
       //console.log("boite__carrousel__navigation.children[i].checked = " + boite__carrousel__navigation.children[i].checked + " i= " + i)
        if(boite_carrousel_nav.children[i].checked == true){ // le radio précédent sélectionné
          collectionImg[i].classList.remove('img-ouvrir') // on retire l'image de la dernière image affiché
      }
      }
    }
  })()