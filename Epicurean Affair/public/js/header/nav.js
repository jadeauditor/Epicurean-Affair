$(document).ready(function(){
    $('#toggleSideNav').click(function(){
      $('#sideNavbar').toggle();
      if ($(window).width() <= 768) {
        $('#navbarNav').collapse('hide');
      }
    });

    $('.nav-link').not('#toggleSideNav').click(function(){
      if ($(window).width() <= 768) {
        $('#navbarNav').collapse('hide');
      }
      $('#sideNavbar').hide();
    });

    $('.nav-link').click(function(){
      $('.nav-link').removeClass('clicked');
      $(this).addClass('clicked');
    });

    $(document).click(function(e) {
      if (!$(e.target).closest('.navbar').length) {
        $('#navbarNav').collapse('hide');
      }
    });
  });

  // Displaying header when 'all categories' is clicked
  document.getElementById('toggleSideNav').addEventListener('click', function() {
    var showHeaderDiv = document.querySelector('.sidenav');
    var sideNavbarDiv = document.getElementById('sideNavbar');
    if (showHeaderDiv.style.display === 'none') {
        showHeaderDiv.style.display = 'block';
    } else {
        showHeaderDiv.style.display = 'none';
    }
    
    if (sideNavbarDiv.style.display === 'none') {
        sideNavbarDiv.style.display = 'block';  
    } else {
        sideNavbarDiv.style.display = 'none';  
    }
});

  // Header changing banner
  document.addEventListener("DOMContentLoaded", function() {
    var regularBuffetLink = document.getElementById("regular-buffet");
    var packedMealLink = document.getElementById("packed-meal");
    var fullBoardLink = document.getElementById("full-board");
    var debutLink = document.getElementById("debut");
    var weddingLink = document.getElementById("wedding");
    var corporateLink = document.getElementById("corporate");
    var kidsPartyLink = document.getElementById("kids-party");
    var cocktailLink = document.getElementById("cocktail");
    var changeMeImage = document.getElementById("changeMe");

    regularBuffetLink.addEventListener("click", function(event) {
      event.preventDefault(); // Prevent the default behavior of the anchor tag

      // Change the source of the changeMe image
      changeMeImage.src = "http://localhost/PHP MVC/public/assets/images/header/header-buffet.png";

  });

    packedMealLink.addEventListener("click", function(event) {
        event.preventDefault();  

        changeMeImage.src = "http://localhost/PHP MVC/public/assets/images/header/header-packed-meal.png";
 
    });

    fullBoardLink.addEventListener("click", function(event) {
        event.preventDefault();  

        changeMeImage.src = "http://localhost/PHP MVC/public/assets/images/header/header-full-board.png";
    });

    debutLink.addEventListener("click", function(event) {
        event.preventDefault(); 

        changeMeImage.src = "http://localhost/PHP MVC/public/assets/images/header/header-debut.png";
    }); 

    weddingLink.addEventListener("click", function(event) {
      event.preventDefault(); 

      changeMeImage.src = "http://localhost/PHP MVC/public/assets/images/header/header-wedding.png";
    }); 

    corporateLink.addEventListener("click", function(event) {
      event.preventDefault(); 

      changeMeImage.src = "http://localhost/PHP MVC/public/assets/images/header/header-corporate.png";
    }); 

    kidsPartyLink.addEventListener("click", function(event) {
      event.preventDefault(); 

      changeMeImage.src = "http://localhost/PHP MVC/public/assets/images/header/header-kids-party.png";
    }); 

    cocktailLink.addEventListener("click", function(event) {
      event.preventDefault(); 

      changeMeImage.src = "http://localhost/PHP MVC/public/assets/images/header/header-cocktail.png";
    }); 
});
