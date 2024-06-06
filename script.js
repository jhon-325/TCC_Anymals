console.log('running')
$(document).ready(function(){
  $(".slider").slick({});
});
var estadoImagemFavorito = false;
function w3_open() {
    document.getElementById("main").style.marginLeft = "180px";
    document.getElementById("mySidebar").style.width = "180px";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("openNav").style.display = 'none';
  }
  function w3_close() {
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("openNav").style.display = "inline-block";
  }
/*function colorido(i){
  i.src = "https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/75c124c5a1b82f9168513e17dfae83f4fc4d0857/slider-produtos-simples/assets/images/ic-heart-red.png";
}
function nofav(i){
  if (estadoImagemFavorito ==false) {  
    i.src = "https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/75c124c5a1b82f9168513e17dfae83f4fc4d0857/slider-produtos-simples/assets/images/ic-heart.png";
  }
}
function favo(i){
  var contClickFav = 0;
  if (estadoImagemFavorito ==false && contClickFav %2 ==0) {  
    i.src = "https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/75c124c5a1b82f9168513e17dfae83f4fc4d0857/slider-produtos-simples/assets/images/ic-heart-red.png";
    estadoImagemFavorito = true
   var contClickFav +=1;
  }
  else{
    i.src = "https://raw.githubusercontent.com/Cassianosch/programador.cs-reels/75c124c5a1b82f9168513e17dfae83f4fc4d0857/slider-produtos-simples/assets/images/ic-heart.png";
    contClickFav +=1;
  }
}
*/
