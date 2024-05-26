$(document).ready(function(){
    $('#toggleSideNav').click(function(){
      var allCategoriesDisplay = $('.sidenav');
      var mainContent = $('.main-content');
      if (mainContent.css("display") == "none"){
        mainContent.css("display", "block");
        allCategoriesDisplay.css("display", "none");
      } else {
        mainContent.css("display", "none");
        allCategoriesDisplay.css("display", "block");
      }
      
      if ($(window).width() <= 768) {
        $('#navbarNav').collapse('hide');
      }
    });

    $('.nav-link').not('#toggleSideNav').click(function(){
      if ($(window).width() <= 768) {
        $('#navbarNav').collapse('hide');
      }   
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
      changeMeImage.src = "header-buffet.png";

  });

    packedMealLink.addEventListener("click", function(event) {
        event.preventDefault();  

        changeMeImage.src = "header-packed-meal.png";
 
    });

    fullBoardLink.addEventListener("click", function(event) {
        event.preventDefault();  

        changeMeImage.src = "header-full-board.png";
    });

    debutLink.addEventListener("click", function(event) {
        event.preventDefault(); 

        changeMeImage.src = "header-debut.png";
    }); 

    weddingLink.addEventListener("click", function(event) {
      event.preventDefault(); 

      changeMeImage.src = "header-wedding.png";
    }); 

    corporateLink.addEventListener("click", function(event) {
      event.preventDefault(); 

      changeMeImage.src = "header-corporate.png";
    }); 

    kidsPartyLink.addEventListener("click", function(event) {
      event.preventDefault(); 

      changeMeImage.src = "header-kids-party.png";
    }); 

    cocktailLink.addEventListener("click", function(event) {
      event.preventDefault(); 

      changeMeImage.src = "header-cocktail.png";
    }); 
});

/* Hot deals, etc.*/ 
document.addEventListener('DOMContentLoaded', () => {
  const hotDealsProducts = document.querySelectorAll('.hot-deals-product');

  hotDealsProducts.forEach(product => {
    product.addEventListener('mouseenter', () => {
      if (!product.classList.contains('first-hover')) {
        product.classList.add('first-hover');

        hotDealsProducts.forEach(otherProduct => {
          if (otherProduct !== product) {
            otherProduct.querySelectorAll('.product-link').forEach(link => {
              link.style.display = 'none';
            });
            
          }
        });
      }

      product.querySelectorAll('.product-link').forEach(link => {
        link.style.display = 'inline-block';
      });
    });

    product.addEventListener('mouseleave', () => {
      product.querySelectorAll('.product-link').forEach(link => {
        link.style.display = 'none';
      });
    });
  });
});

//team members
 $(document).ready(function(){
  $('.testimonials-container').owlCarousel({
    loop: true, 
    autoplay: true,
    autoplayTimeout: 6000,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 1,
        nav: true
      },
      768: {
        items: 2
      }
    }
  });
});
