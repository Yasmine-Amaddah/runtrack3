document.addEventListener("DOMContentLoaded", () =>{

   window.onscroll = function() {
     var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
     var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
     var bodyHeight = document.body.scrollHeight;
     var footerHeight = document.querySelector("footer").offsetHeight;
     var scrollPercentage = (scrollTop / (bodyHeight - windowHeight)) * 100;
     var footerColor = "linear-gradient(to right, red " + scrollPercentage + "%, pink " + scrollPercentage + "%)";
     document.querySelector("footer").style.background = footerColor;
   };
 })
