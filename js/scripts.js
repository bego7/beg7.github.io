function myMap()
{
  myCenter=new google.maps.LatLng(17.10110566251502, -96.75152778625488);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-black";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}



if($(window).scrollTop() > 30)
                $("#myNavbar").css("background","blue");
            else{
                $("#myNavbar").css("background","transparent");
            }
//Adding own scripts

/*$(window).scroll(function() {

    $('.image').each(function(){

        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();

        if (imagePos < topOfWindow+400) {
            $(this).addClass("animated fadeInDown");
        }

    });

});

$('.element-to-hide').css('visibility', 'hidden');*/

$(window).scroll(function(){

  var wScroll = $(this).scrollTop();


  if(wScroll > $('.catalogo').offset().top - ($(window).height() / 1)) {

    $('.image').each(function(i){

      setTimeout(function(){
        $('.image').eq(i).addClass('animated fadeInDown');
      }, 300 * (i+1));
    });

  }

});

$(document).ready(function() {
    $(".logo").addClass("animated fadeInUp"); 
});


/*var $logo= $(".logo");
var $win =$(window);

$win.on("scroll",function(){
    $(".animar").addClass("animated fadeInUp"); 
});*/

$(document).ready(function(){
  $(window).scroll(function() {
    var wScroll = $(this).scrollTop();
    if (wScroll > $('.bgimg-1').offset().top - ($(window).height() / 5)){
      $(".animar").addClass("animated fadeInUp");
    } 
  });
});

$(document).ready(function(){
  $('a[href^="#"]').on('click',function(e){
    e.preventDefault();

    var target = this.hash;
    var $target = $(target);

    $('html,body').animate({
        'scrollTop':$target.offset().top
      },1000,'swing');
  });
});


/*$("p").click(function(){
    alert("The paragraph was clicked.");
});


var $db= $(".db");
  $("p").on("click",function(){
      $db.toggleClass(".visiDb");
  });*/
$("p").click(function(){
    alert("The paragraph was clicked."+ contador);
});