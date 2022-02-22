<?php include("includes/header.php"); ?>
  <style>
 #content .plot{box-shadow: 0px 0px 1px 0px #fff;
    width: 10%;
    height: 10%;
    cursor: pointer;}
  #content .greenBG{ background-color: #95B553; }
  #content .whiteBG{ background-color: #FFFFFF;}
  #content .currentPlot{ background-color: #8A3FEE !important;}
  .zoom-tool-bar {
    position: fixed;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 31px;
    padding: 3px 0;
    background: #8A3FEE;
    font-size: 13px;
    z-index: 9999;
    color: #fff;
  }
  .zoom-tool-bar i {
    color: #77b3ff;
    font-size: 16px;
  }
  #content{width:100%;padding-right:10px;}
  </style>


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container-fluid">
            <div class="row"> 
                <div class="col-md-12">
                  <div id="content">
                  <table>
                  <?php for($k = 1; $k < 100; $k++ ){ ?>
                  <?php $column = 683; $bgClass = "greenBG";
               
               
                  ?>
                    <tr>
                      <?php for($i = 1; $i < $column; $i++){ 
                        if($k == 1){
                          if($i < 96){
                            $bgClass = "greenBG";
                           }else{
                             $bgClass = "whiteBG";
                          }
                        }else if($k == 2)
                         {
                          if($i < 92){
                            $bgClass = "greenBG";
                           }else{
                             $bgClass = "whiteBG";
                          }
                        }else if($k == 3 || $k < 8)
                        {
                         if($i < 93 - $k ){
                           $bgClass = "greenBG";
                          }else{
                            $bgClass = "whiteBG";
                         }
                        }else if($k == 8 || $k == 9)
                        {
                         if($i < 93 - $k ){
                           $bgClass = "greenBG";
                          }else{
                            $bgClass = "whiteBG";
                         }
                        }
                        ?>
                            <td  class="plot <?php echo $bgClass; ?>" id= "tiles<?php echo $k;?>r<?php echo $i?>c" data-value="<?php echo $k;?>,<?php echo $i ?>" title="<?php echo $k;?>,<?php echo $i ?>" <?php if($bgClass == 'greenBG'){ ?> onclick="myActive('<?php echo $k;?>r<?php echo $i ?>c')" <?php } ?>></td>                 
                      <?php } ?>
                      </tr>
                    <?php } ?>
                      </table>
                  </div>  
                </div>
            </div> <!-- Row end -->
        
    </div>
    <div class="zoom-tool-bar"></div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/main.js"></script>

<script src="js/content-zoom-slider.min.js"></script>
<script>
  function myActive(id)
  {
    $(document).ready(function(){
      
      $("#tiles"+id).toggleClass("currentPlot"); 
        
    });
    
  }
</script>

<script>
  $("#content").contentZoomSlider({
      toolContainer: ".zoom-tool-bar", // element where slider bar will show
      setp: 50, // step size
      min: 100, // min range
      max: 800, // max range
      zoom: 150, // default zoom size
  });
</script>