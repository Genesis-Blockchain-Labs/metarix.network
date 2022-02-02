 <!-- footer started  -->
  <footer class="footer" id="footer" >
      <div class="container footer_data">
        <div class="row footer_items">
          <div class="col-xl-2 footer_left">
            <img class="footer_logo" src="img/footer-logo.png" alt="">
          </div>
          <div class="col-xl-3">
            <h4 class="ft_head_text">Our Products</h4>
            <div class="ft_links">
                <a class="footer_tags" href="metarix_blockchain.php">Metarix Blockchain</a>
                <a class="footer_tags" href="metarix_sdk.php">Metarix SDK</a>
                <a class="footer_tags" href="market_place.php">Metarix Market Place</a>
                <a class="footer_tags" href="metarix_DAO.php">Metarix DAO </a>
                <a class="footer_tags" href="asset_store.php">Asset Store</a>
            </div>
          </div>
          <div class="col-xl-3">
            <h4 class="ft_head_text">Our Links</h4>
            <div class="ft_links">
                <a class="footer_tags" href="#Token">Token Sale</a>
                <a class="footer_tags" href="#Roadmap">Roadmap</a>
                <a class="footer_tags" href="#Teams">Team</a>
                <a class="footer_tags" href="contact.php">Contact Us</a>
            </div>
          </div>
          <div class="col-xl-4">
            <h4 class="ft_head_text">Follow Us</h4>
            <div class="ft_social_links">
              <a href="https://www.facebook.com/The-Metarix-104132965453352 "><i class="fa icon_links fa-facebook" aria-hidden="true" ></i></a>
              <a href="#"><i class="fa icon_links fa-instagram" aria-hidden="true"></i></a>
              <a href="https://www.linkedin.com/company/the-metabox/ "><i class="fa icon_links fa-linkedin-square" aria-hidden="true"></i></a>
              <a href="https://twitter.com/TMetabox"><i class="fa icon_links fa-twitter" aria-hidden="true"></i></a>
              <a href="https://t.me/metarix "><i class="fa icon_links fa-telegram" aria-hidden="true"></i></a>
              <a href="#"><i class="fa icon_links fa-youtube-play" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
  </footer>

  <footer class="footer_ended">
    <div class="footer_ended">
      <h5 class="footer-ended_text">@Copyright Metarix 2021</h5>
    </div>
  </footer>
<!-- footer ended  -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>

 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  <script src="js/custom.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  

  <script>
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>


<script>

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

</script>


<!-- update page  -->

<script>
  
  function hasTouch() {
    return 'ontouchstart' in document.documentElement;
}	

var canvas = document.getElementsByTagName('canvas')[0];
canvas.width = 1320;
canvas.height = 1000;

var gkhead = new Image;
var event_start = hasTouch() ? 'touchstart' : 'mousedown',
    event_move = hasTouch() ? 'touchmove' : 'mousemove',
    event_end = hasTouch() ? 'touchend' : 'mouseup';

window.onload = function(){		
  
      var ctx = canvas.getContext('2d');
      trackTransforms(ctx);
    
  function redraw(){

        // Clear the entire canvas
        var p1 = ctx.transformedPoint(0,0);
        var p2 = ctx.transformedPoint(canvas.width,canvas.height);
        ctx.clearRect(p1.x,p1.y,p2.x-p1.x,p2.y-p1.y);

        ctx.save();
        ctx.setTransform(1,0,0,1,0,0);
        ctx.clearRect(0,0,canvas.width,canvas.height);
        ctx.restore();

        ctx.drawImage(gkhead,0,0);

      }
      redraw();

    var lastX=canvas.width/2, lastY=canvas.height/2;

    var dragStart,dragged;

    canvas.addEventListener(event_start,function(evt){
        document.body.style.mozUserSelect = document.body.style.webkitUserSelect = document.body.style.userSelect = 'none';
        lastX = evt.offsetX || (evt.pageX - canvas.offsetLeft);
        lastY = evt.offsetY || (evt.pageY - canvas.offsetTop);
        dragStart = ctx.transformedPoint(lastX,lastY);
        dragged = false;
    },false);

    canvas.addEventListener(event_move,function(evt){
        lastX = evt.offsetX || (evt.pageX - canvas.offsetLeft);
        lastY = evt.offsetY || (evt.pageY - canvas.offsetTop);
        dragged = true;
        if (dragStart){
          var pt = ctx.transformedPoint(lastX,lastY);
          ctx.translate(pt.x-dragStart.x,pt.y-dragStart.y);
          redraw();
              }
    },false);

    canvas.addEventListener(event_end,function(evt){
        dragStart = null;
        if (!dragged) zoom(evt.shiftKey ? -1 : 1 );
    },false);

    var scaleFactor = 1.1;

    var zoom = function(clicks){
        var pt = ctx.transformedPoint(lastX,lastY);
        ctx.translate(pt.x,pt.y);
        var factor = Math.pow(scaleFactor,clicks);
        ctx.scale(factor,factor);
        ctx.translate(-pt.x,-pt.y);
        redraw();
    }

    var handleScroll = function(evt){
        var delta = evt.wheelDelta ? evt.wheelDelta/40 : evt.detail ? -evt.detail : 0;
        if (delta) zoom(delta);
        return evt.preventDefault() && false;
    };
  
    canvas.addEventListener('DOMMouseScroll',handleScroll,false);
    canvas.addEventListener('mousewheel',handleScroll,false);
};

gkhead.src = 'https://dev.metarix.network/img/map_bg.jpg';

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
</script>
 

</body>

</html>