/**
* Template Name: Arsha - v4.7.0
* Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
    "use strict";
  
    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
      el = el.trim()
      if (all) {
        return [...document.querySelectorAll(el)]
      } else {
        return document.querySelector(el)
      }
    }
  
    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
      let selectEl = select(el, all)
      if (selectEl) {
        if (all) {
          selectEl.forEach(e => e.addEventListener(type, listener))
        } else {
          selectEl.addEventListener(type, listener)
        }
      }
    }
  
    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
      el.addEventListener('scroll', listener)
    }
  
    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
      let position = window.scrollY + 200
      navbarlinks.forEach(navbarlink => {
        if (!navbarlink.hash) return
        let section = select(navbarlink.hash)
        if (!section) return
        if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
          navbarlink.classList.add('active')
        } else {
          navbarlink.classList.remove('active')
        }
      })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)
  
    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
      let header = select('#header')
      let offset = header.offsetHeight
  
      let elementPos = select(el).offsetTop
      window.scrollTo({
        top: elementPos - offset,
        behavior: 'smooth'
      })
    }
  
    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = select('#header')
    if (selectHeader) {
      const headerScrolled = () => {
        if (window.scrollY > 100) {
          selectHeader.classList.add('header-scrolled')
        } else {
          selectHeader.classList.remove('header-scrolled')
        }
      }
      window.addEventListener('load', headerScrolled)
      onscroll(document, headerScrolled)
    }
  
    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
      const toggleBacktotop = () => {
        if (window.scrollY > 100) {
          backtotop.classList.add('active')
        } else {
          backtotop.classList.remove('active')
        }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
    }
  
    /**
     * Mobile nav toggle
     */
    on('click', '.mobile-nav-toggle', function(e) {
      select('#navbar').classList.toggle('navbar-mobile')
      this.classList.toggle('bi-list')
      this.classList.toggle('bi-x')
    })
  
    /**
     * Mobile nav dropdowns activate
     */
    on('click', '.navbar .dropdown > a', function(e) {
      if (select('#navbar').classList.contains('navbar-mobile')) {
        e.preventDefault()
        this.nextElementSibling.classList.toggle('dropdown-active')
      }
    }, true)
  
    /**
     * Scrool with ofset on links with a class name .scrollto
     */
    // on('click', '.scrollto', function(e) {
    //   if (select(this.hash)) {
    //     e.preventDefault()
  
    //     let navbar = select('#navbar')
    //     if (navbar.classList.contains('navbar-mobile')) {
    //       navbar.classList.remove('navbar-mobile')
    //       let navbarToggle = select('.mobile-nav-toggle')
    //       navbarToggle.classList.toggle('bi-list')
    //       navbarToggle.classList.toggle('bi-x')
    //     }
    //     scrollto(this.hash)
    //   }
    // }, true)
  
    /**
     * Scroll with ofset on page load with hash links in the url
     */
    window.addEventListener('load', () => {
      if (window.location.hash) {
        if (select(window.location.hash)) {
          scrollto(window.location.hash)
        }
      }
    });
  
    /**
     * Preloader
     */
    
    
    // let preloader = select('#preloader');
    // if (preloader) {
    //   window.addEventListener('load', () => {
    //     preloader.remove()
    //   });
    // }
  
    /**
     * Initiate  glightbox 
     */
    // const glightbox = GLightbox({
    //   selector: '.glightbox'
    // });
  
    /**
     * Skills animation
     */
    let skilsContent = select('.skills-content');
    if (skilsContent) {
      new Waypoint({
        element: skilsContent,
        offset: '80%',
        handler: function(direction) {
          let progress = select('.progress .progress-bar', true);
          progress.forEach((el) => {
            el.style.width = el.getAttribute('aria-valuenow') + '%'
          });
        }
      })
    }
  
    /**
     * Porfolio isotope and filter
     */
    window.addEventListener('load', () => {
      let portfolioContainer = select('.portfolio-container');
      if (portfolioContainer) {
        let portfolioIsotope = new Isotope(portfolioContainer, {
          itemSelector: '.portfolio-item'
        });
  
        let portfolioFilters = select('#portfolio-flters li', true);
  
        on('click', '#portfolio-flters li', function(e) {
          e.preventDefault();
          portfolioFilters.forEach(function(el) {
            el.classList.remove('filter-active');
          });
          this.classList.add('filter-active');
  
          portfolioIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          portfolioIsotope.on('arrangeComplete', function() {
            AOS.refresh()
          });
        }, true);
      }
  
    });
  
    /**
     * Initiate portfolio lightbox 
     */
    // const portfolioLightbox = GLightbox({
    //   selector: '.portfolio-lightbox'
    // });
  
    /**
     * Portfolio details slider
     */
    // new Swiper('.portfolio-details-slider', {
    //   speed: 400,
    //   loop: true,
    //   autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false
    //   },
    //   pagination: {
    //     el: '.swiper-pagination',
    //     type: 'bullets',
    //     clickable: true
    //   }
    // });
  
    /**
     * Animation on scroll
     */
    window.addEventListener('load', () => {
      AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false
      });
    });
  
  })()


  


	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})



// virtual store page 
  
  var zoom = 1;
		
  $('.zoom').on('click', function(){
    zoom += 0.1;
    $('.target').css('transform', 'scale(' + zoom + ')');
  });
  $('.zoom-init').on('click', function(){
    zoom = 1;
    $('.target').css('transform', 'scale(' + zoom + ')');
  });
  $('.zoom-out').on('click', function(){
    zoom -= 0.1;
    $('.target').css('transform', 'scale(' + zoom + ')');
  });




//   // canvas page 
  
//   function hasTouch() {
//     return 'ontouchstart' in document.documentElement;
// }	

// var canvas = document.getElementsByClassName('imgsks')[0];
// canvas.width = 1320;
// canvas.height = 1000;

// var gkhead = new Image;
// var event_start = hasTouch() ? 'touchstart' : 'mousedown',
//     event_move = hasTouch() ? 'touchmove' : 'mousemove',
//     event_end = hasTouch() ? 'touchend' : 'mouseup';

// window.onload = function(){		
  
//       var ctx = canvas.getContext('2d');
//       trackTransforms(ctx);
    
//   function redraw(){

//         // Clear the entire canvas
//         var p1 = ctx.transformedPoint(0,0);
//         var p2 = ctx.transformedPoint(canvas.width,canvas.height);
//         ctx.clearRect(p1.x,p1.y,p2.x-p1.x,p2.y-p1.y);

//         ctx.save();
//         ctx.setTransform(1,0,0,1,0,0);
//         ctx.clearRect(0,0,canvas.width,canvas.height);
//         ctx.restore();

//         ctx.drawImage(gkhead,0,0);

//       }
//       redraw();

//     var lastX=canvas.width/2, lastY=canvas.height/2;

//     var dragStart,dragged;

//     canvas.addEventListener(event_start,function(evt){
//         document.body.style.mozUserSelect = document.body.style.webkitUserSelect = document.body.style.userSelect = 'none';
//         lastX = evt.offsetX || (evt.pageX - canvas.offsetLeft);
//         lastY = evt.offsetY || (evt.pageY - canvas.offsetTop);
//         dragStart = ctx.transformedPoint(lastX,lastY);
//         dragged = false;
//     },false);

//     canvas.addEventListener(event_move,function(evt){
//         lastX = evt.offsetX || (evt.pageX - canvas.offsetLeft);
//         lastY = evt.offsetY || (evt.pageY - canvas.offsetTop);
//         dragged = true;
//         if (dragStart){
//           var pt = ctx.transformedPoint(lastX,lastY);
//           ctx.translate(pt.x-dragStart.x,pt.y-dragStart.y);
//           redraw();
//               }
//     },false);

//     canvas.addEventListener(event_end,function(evt){
//         dragStart = null;
//         if (!dragged) zoom(evt.shiftKey ? -1 : 1 );
//     },false);

//     var scaleFactor = 1.1;

//     var zoom = function(clicks){
//         var pt = ctx.transformedPoint(lastX,lastY);
//         ctx.translate(pt.x,pt.y);
//         var factor = Math.pow(scaleFactor,clicks);
//         ctx.scale(factor,factor);
//         ctx.translate(-pt.x,-pt.y);
//         redraw();
//     }

//     var handleScroll = function(evt){
//         var delta = evt.wheelDelta ? evt.wheelDelta/40 : evt.detail ? -evt.detail : 0;
//         if (delta) zoom(delta);
//         return evt.preventDefault() && false;
//     };
  
//     canvas.addEventListener('DOMMouseScroll',handleScroll,false);
//     canvas.addEventListener('mousewheel',handleScroll,false);
// };



   const zoomElement = document.querySelector(".imgsks");
   
const ZOOM_SPEED = 0.1;

document.addEventListener("wheel", function(e) {  
    
    if(e.deltaY > 0){    
        if (zoomElement.style.transform >= `scale(5)`) {
            console.log("now scroll down");
            return false;
        }
        zoomElement.style.transform = `scale(${zoom += ZOOM_SPEED})`;  

    }else{    
        if (zoomElement.style.transform == `scale(1)`) {
            // console.log("minus");
            return false;
        }
        zoomElement.style.transform = `scale(${zoom -= ZOOM_SPEED})`;  }

    var scaleFactor = 1.1;

    
    var handleScroll = function(e){
        var delta = e.wheelDelta ? e.wheelDelta/40 : e.detail ? -e.detail : 0;
        if (delta) zoomElement(delta);
        return evt.preventDefault() && false;
    };
  
    zoomElement.addEventListener('DOMMouseScroll',handleScroll,false);
    zoomElement.addEventListener('mousewheel',handleScroll,false);







});






gkhead.src = 'https://dev.metarix.network/img/Box_map2.jpg';

// Adds ctx.getTransform() - returns an SVGMatrix
// Adds ctx.transformedPoint(x,y) - returns an SVGPoint
function trackTransforms(ctx){
    var svg = document.createElementNS("http://www.w3.org/2000/svg",'svg');
    var xform = svg.createSVGMatrix();
    ctx.getTransform = function(){ return xform; };

    var savedTransforms = [];
    var save = ctx.save;
    ctx.save = function(){
        savedTransforms.push(xform.translate(0,0));
        return save.call(ctx);
    };
  
    var restore = ctx.restore;
    ctx.restore = function(){
      xform = savedTransforms.pop();
      return restore.call(ctx);
        };

    var scale = ctx.scale;
    ctx.scale = function(sx,sy){
      xform = xform.scaleNonUniform(sx,sy);
      return scale.call(ctx,sx,sy);
        };
  
    var rotate = ctx.rotate;
    ctx.rotate = function(radians){
        xform = xform.rotate(radians*180/Math.PI);
        return rotate.call(ctx,radians);
    };
  
    var translate = ctx.translate;
    ctx.translate = function(dx,dy){
        xform = xform.translate(dx,dy);
        return translate.call(ctx,dx,dy);
    };
  
    var transform = ctx.transform;
    ctx.transform = function(a,b,c,d,e,f){
        var m2 = svg.createSVGMatrix();
        m2.a=a; m2.b=b; m2.c=c; m2.d=d; m2.e=e; m2.f=f;
        xform = xform.multiply(m2);
        return transform.call(ctx,a,b,c,d,e,f);
    };
  
    var setTransform = ctx.setTransform;
    ctx.setTransform = function(a,b,c,d,e,f){
        xform.a = a;
        xform.b = b;
        xform.c = c;
        xform.d = d;
        xform.e = e;
        xform.f = f;
        return setTransform.call(ctx,a,b,c,d,e,f);
    };
  
    var pt  = svg.createSVGPoint();
    ctx.transformedPoint = function(x,y){
        pt.x=x; pt.y=y;
        return pt.matrixTransform(xform.inverse());
    }
}






