/*!
    * Start Bootstrap - Agency v6.0.3 (https://startbootstrap.com/theme/agency)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
    */
    (function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 72,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#mainNav",
        offset: 74,
    });

    // Collapse Navbar
    var navbarCollapse = function () {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
})(jQuery); // End of use strict


function getValue() {
    var valeur = document.getElementById("select-css").value;
    var test = document.getElementById("about").getElementsByClassName("photo")[0];
                                        
    console.log(valeur);
    getPrix(0);

    if (valeur == 1) {
        var price = 400;
        console.log("volant 1");
        test.style.backgroundImage = "url('VolantOrigine/Niveau 1.png')";
        getPrix(price);

        }
    else if (valeur == 2) {
        var price = 500;
        test.style.backgroundImage = "url('VolantOrigine/Niveau 2.png')";
        getPrix(price);   
        }
    else if (valeur == 3) {
        getFormulaire(test,"VolantOrigine/Niveau 3.png", 750); 
        }
    else if (valeur == 4) {
        test.style.backgroundImage = "url('VolantOrigine/Niveau 4.png')"; 
        }
    else if (valeur == 5) {
        test.style.backgroundImage = "url('VolantOrigine/Niveau 5.png')";
        }
    }
getValue();

function getPrix(prix) {
    document.getElementById('java-prix').innerHTML=
    ("Prix : <style='color.red;'>"+prix+"</style> ");
    document.getElementById('java-prix').style.fontSize="30px";
}

function getFormulaire(test, url, prix) {
    test.style.backgroundImage = "url('"+url+"')";
    getPrix(prix);
}

