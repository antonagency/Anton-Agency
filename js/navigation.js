/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
// window.onscroll = function() {myFunction()};

//   // Get the header
//   var header = document.getElementById('home-nav');



//  jQuery(window).scroll(function() { 
//     if (jQuery(document).scrollTop() > 50) { 
//         jQuery(".nav-index").css("background-color", "#444242"); 
//     } else {
//       jQuery(".nav-index").css("background-color", "rgba(0,0,0,0.0)"); 
//     }
//   });

//script to create sticky header 
jQuery(function(){
    createSticky(jQuery("#home-nav"));
});

function createSticky(sticky) {
    if (typeof sticky != "undefined") {

        var pos = sticky.offset().top ,
            win = jQuery(window);

        win.on("scroll", function() {

            if( win.scrollTop() > pos ) {
                sticky.addClass("custom-sticky");
                jQuery("#main-blue-logo").attr("src","https://anton.agency/wp-content/themes/anton-agency/img/anton-logo-blue.svg");
            } else {
                sticky.removeClass("custom-sticky");
                jQuery("#main-blue-logo").attr("src","https://anton.agency/wp-content/themes/anton-agency/img/anton-logo-white.svg");
            }           
        });         
    }
}



  
function getFooter(){
   var mainFooter = document.getElementById('mainFooter');
   mainFooter.classList.add('main-footer');
}

function removeFooter(){
    var removeFooter = document.getElementById('mainFooter');
    removeFooter.classList.remove('main-footer');
}

// jQuery("#idx").click(function(){
//    jQuery(this).attr("id","footer-movil");
//    jQuery('.site-footer').hide()
// });


function getMenu(){
    var getMenu = document.getElementById('bs4navbar');
    getMenu.classList.add('movil-menu');

    var str = '<button class="navbar-toggler movil-menu-btn" id="getButton" onclick="removeMenu()"><i class="fas fa-times"></i></button>';
    var getButton = document.getElementById('bs4navbar');
    getButton.insertAdjacentHTML('beforeend', str)
}

function removeMenu(){
    var removeMenu = document.getElementById('bs4navbar');
    removeMenu.classList.remove('movil-menu');

    var getButtonParent = document.getElementById("bs4navbar");
    var getButtonchild = document.getElementById("getButton");
    getButtonParent.removeChild(getButtonchild);
}