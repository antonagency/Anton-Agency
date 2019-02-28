/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("home-nav");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("custom-sticky");
  } else {
    header.classList.remove("custom-sticky");
  }
}



// //script to create sticky header 
// jQuery(function(){
//     createSticky(jQuery("#home-nav"));
// });

// function createSticky(sticky) {
//     if (typeof sticky != "undefined") {

//         var pos = sticky.offset().top ,
//             win = jQuery(window);

//         win.on("scroll", function() {

//             if( win.scrollTop() > pos ) {
//                 sticky.addClass("custom-sticky");
//             } else {
//                 sticky.removeClass("custom-sticky");
//             }           
//         });         
//     }
// }

function getFooter(){
   var mainFooter = document.getElementById('mainFooter');
   mainFooter.classList.add('main-footer');
}

function removeFooter(){
    var removeFooter = document.getElementById('mainFooter');
    removeFooter.classList.remove('main-footer');
}
