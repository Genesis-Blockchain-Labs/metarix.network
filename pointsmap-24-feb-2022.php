<?php include("includes/header.php"); ?>
  <style>
  #content .plot{width: 1px;height: 1px;}
  #content .greenBG{ background-color: #00a54f; box-shadow: 0px 0px 1px 0px #fff;cursor: pointer;}
  #content .ocianBG{ background-color: #09C3DB;}
  #content .blackBG{ background-color: #000000;}
  #content .blueBG{ background-color: #2e3092;}
  #content .redBG{ background-color: #ed1450;}
  #content .pinkBG{ background-color: #a54586;}
  #content .yellowBG{ background-color: #f58220;}
  #content .currentPlot{ background-color: #8A3FEE !important;}
  .zoom-tool-bar {position: fixed;bottom: 0;right: 0;width: 100%;height: 31px;padding: 3px 0;background: #8A3FEE;font-size: 13px;z-index: 9999;color: #fff;}
  .zoom-tool-bar i {color: #77b3ff;font-size: 16px;}
  </style>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container-fluid">
            <div class="row"> 
                <div class="col-md-12">
                  <div id="content">
                  <table>
                  <?php for($k = 1; $k < 81; $k++ )
                  { ?>
                    <?php $column = 683; $bgClass = "greenBG";?>
                    <tr>
                      <?php for($i = 1; $i < $column; $i++)
                      { 
                        if($k == 1){
                          if($i < 197)
                          {
                            $bgClass = "greenBG";
                          }else{
                            $bgClass = "ocianBG";
                          }
                        }else if($k == 2)
                        {
                          if($i < 193)
                          {
                            $bgClass = "greenBG";
                          }else{
                            $bgClass = "ocianBG";
                          }
                        }else if($k == 3 || $k < 8)
                        {
                          if($k == 5 && ($i > 3 && $i < 7) || $k == 6 && ($i > 3 && $i < 7) || $k == 7 && ($i > 3 && $i < 7) || $k == 5 && ($i > 86 && $i < 90) || $k == 6 && ($i > 86 && $i < 90) || $k == 7 && ($i > 86 && $i < 90))
                          {
                            $bgClass = "blueBG";
                          }else if($k == 6 && ($i > 65 && $i < 69) || $k == 7 && ($i > 65 && $i < 69) || $k == 6 && ($i > 103 && $i < 107) || $k == 7 && ($i > 103 && $i < 107) ||  $k == 6 && ($i > 137 && $i < 141) || $k == 7 && ($i > 137 && $i < 141))
                          {
                              $bgClass = "blueBG";
                          }else if($i < 188 - $k ){
                            $bgClass = "greenBG";
                          }else{
                            $bgClass = "ocianBG";
                          }
                        }else if($k == 8 || $k == 9)
                        {
                          if($k == 8 && ($i > 26 && $i < 30) || $k == 9 && ($i > 26 && $i < 30) || $k == 9 && ($i > 80 && $i < 84) || $k == 8 && ($i > 65 && $i < 69) || $k == 8 && ($i > 103 && $i < 107) || $k == 8 && ($i > 137 && $i < 141) ){
                            $bgClass = "blueBG";
                          }else if($k == 9 && ($i > 111 && $i < 120))
                          {
                            $bgClass = "redBG";
                          
                          }else if($i < 180 )
                          {
                            $bgClass = "greenBG";
                          }else{
                            $bgClass = "ocianBG";
                          }
                        }else if($k > 9 )
                        {
                          if($k == 10 && ($i > 26 && $i < 30) || $k == 10 && ($i > 80 && $i < 84) || $k == 11 && ($i > 80 && $i < 84) )
                          {
                            $bgClass = "blueBG";
                          }else if($k == 10 || $k == 11)
                          {
                            if( $k == 10 && ($i > 111 && $i < 120) || $k == 11 && ($i > 111 && $i < 120) || $k == 11 && ($i > 156 && $i < 165))
                            {
                              $bgClass = "redBG";
                            }else if($i < 179 )
                            {
                              $bgClass = "greenBG";
                             }else{
                              $bgClass = "ocianBG";
                             } 
                          }else if( $k == 12 && ($i < 179 || ($i > 586 && $i < 605)))
                          {
                            if($i > 68 && $i < 74){
                              $bgClass = "yellowBG";
                            }else if(($i > 111 && $i < 120) ||  ($i > 156 && $i < 165))
                            {
                              $bgClass = "redBG";
                            }else{
                               $bgClass = "greenBG";
                            }
                          }else if( $k == 13 && ($i < 179 || ($i > 572 && $i < 606)))
                          {
                            if(($i > 111 && $i < 120)  ||  ($i > 156 && $i < 165))
                            {
                              $bgClass = "redBG";
                            }else if($i > 68 && $i < 74){
                              $bgClass = "yellowBG";
                            
                            }else{
                               $bgClass = "greenBG";
                            }
                          }else if( $k == 14 && ($i < 179 || ($i > 563 && $i < 607)))
                          {
                            if(($i > 111 && $i < 120)  ||  ($i > 156 && $i < 165))
                            {
                              $bgClass = "redBG";
                            }else if($i > 68 && $i < 74){
                              $bgClass = "yellowBG";
                            
                            }else{
                               $bgClass = "greenBG";
                            }
                          }else if( $k == 15 && ($i < 178 || ($i > 558 && $i < 610)))
                          {
                            if(($i > 111 && $i < 120)  ||  ($i > 156 && $i < 165))
                            {
                              $bgClass = "redBG";
                            }else if($i > 68 && $i < 74){
                              $bgClass = "yellowBG";
                            
                            }else{
                               $bgClass = "greenBG";
                            }
                          }else if( $k == 16 && ($i < 178 || ($i > 555 && $i < 614) || ($i > 622 && $i < 628) ))
                          {
                            if(($i > 111 && $i < 120)  ||  ($i > 156 && $i < 165))
                            {
                              $bgClass = "redBG";
                            }else if(($i > 68 && $i < 74)){
                              $bgClass = "yellowBG";
                            
                            }else{
                               $bgClass = "greenBG";
                            }
                          }else if( $k == 17 && ($i < 177 || ($i > 554 && $i < 630)))
                          {
                            if(($i > 156 && $i < 165))
                            {
                              $bgClass = "redBG";
                            }else{
                               $bgClass = "greenBG";
                            }
                          }else if( $k == 18 && ($i < 177 || ($i > 552 && $i < 631)))
                          {
                            if(($i > 156 && $i < 165))
                            {
                              $bgClass = "redBG";
                            }else{
                               $bgClass = "greenBG";
                            }
                          }else if( $k == 19 && ($i < 176 || ($i > 550 && $i < 633)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 20 && ($i < 175 || ($i > 548 && $i < 636)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 21 && ($i < 174 || ($i > 546 && $i < 646)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 21 && ($i > 369 && $i < 372))
                          {
                            $bgClass = "blackBG";
                          }else if( $k == 22 && ($i < 173 || ($i > 324 && $i < 338) || ($i > 544 && $i < 647)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 22 && (($i > 362 && $i < 367) || ($i > 369 && $i < 372) || ($i > 400 && $i < 403) || ($i > 407 && $i < 410) || ($i > 424 && $i < 427) ))
                          {
                            $bgClass = "blackBG";
                          }else if( $k == 23 && ($i < 173 || ($i > 324 && $i < 344) || ($i > 543 && $i < 648)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 23 && (($i > 362 && $i < 367)  || ($i > 400 && $i < 403) || ($i > 407 && $i < 410) || ($i > 424 && $i < 427) ))
                          {
                            $bgClass = "blackBG";
                          }else if( $k == 24 && ($i < 173 || ($i > 325 && $i < 348) || ($i > 541 && $i < 649)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 24 && (($i > 362 && $i < 367) || ($i > 369 && $i < 372) || ($i > 400 && $i < 403) || ($i > 407 && $i < 410) || ($i > 424 && $i < 427) ))
                          {
                            $bgClass = "blackBG";
                          }else if( $k == 25 && ($i < 172 || ($i > 340 && $i < 351) || ($i > 540 && $i < 650)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 25 && (($i > 362 && $i < 367) || ($i > 369 && $i < 372) || ($i > 400 && $i < 403) || ($i > 407 && $i < 410) || ($i > 424 && $i < 427) ))
                          {
                            $bgClass = "blackBG";
                          }else if( $k == 26 && ($i < 169 || ($i > 344 && $i < 353) || ($i > 538 && $i < 651)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 26 && (($i > 362 && $i < 367) || ($i > 369 && $i < 372) || ($i > 400 && $i < 403) || ($i > 407 && $i < 410) || ($i > 424 && $i < 427) ))
                          {
                            $bgClass = "blackBG";
                          }else if( $k == 27 && ($i < 166 || ($i > 346 && $i < 355) || ($i > 536 && $i < 652)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 27 && (($i > 362 && $i < 367) || ($i > 369 && $i < 372) || ($i > 400 && $i < 403) || ($i > 407 && $i < 410) || ($i > 424 && $i < 427) ))
                          {
                            $bgClass = "blackBG";
                          }else if( $k == 28 && ($i < 164 || ($i > 348 && $i < 356) || ($i > 536 && $i < 653)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 28 && (($i > 362 && $i < 367) || ($i > 369 && $i < 372) || ($i > 400 && $i < 403) || ($i > 407 && $i < 410) || ($i > 424 && $i < 427) ))
                          {
                            $bgClass = "blackBG";
                          }else if( $k == 29 && ($i < 162 || ($i > 351 && $i < 359) || ($i > 536 && $i < 655)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 30 && ($i < 160 || ($i > 306 && $i < 309) || ($i > 353 && $i < 361) || ($i > 536 && $i < 657)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 31 && ($i < 159 || ($i > 304 && $i < 309) || ($i > 355 && $i < 362) || ($i > 536 && $i < 659)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 32 && ($i < 158 || ($i > 304 && $i < 309) || ($i > 357 && $i < 364) || ($i > 536 && $i < 662)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 33 && ($i < 157 || ($i > 303 && $i < 309) || ($i > 358 && $i < 365) || ($i > 536 && $i < 665)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 34 && ($i < 156 || ($i > 302 && $i < 309) || ($i > 360 && $i < 366) || ($i > 537 && $i < 670)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 35 && ($i < 156 || ($i > 301 && $i < 307) || ($i > 361 && $i < 367) || ($i > 537 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 36 && ($i < 156 || ($i > 300 && $i < 306) || ($i > 362 && $i < 368) || ($i > 537 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 37 && ($i < 154  || ($i > 300 && $i < 305) || ($i > 363 && $i < 370) || ($i > 537 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 38 && ($i < 150 || ($i > 299 && $i < 304) || ($i > 364 && $i < 371) || ($i > 537 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 39 && ($i < 147 || ($i > 298 && $i < 303) || ($i > 365 && $i < 369) || ($i > 537 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 40 && ($i < 142 || ($i > 298 && $i < 303) || ($i > 537 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 41 && ($i < 108 || ($i > 114 && $i < 136) || ($i > 297 && $i < 302) || ($i > 537 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 42 && ($i < 108 || ($i > 296 && $i < 301) || ($i > 537 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 43 && ($i < 108 || ($i > 296 && $i < 301) || ($i > 537 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 44 && ($i < 107 || ($i > 295 && $i < 300) || ($i > 537 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 45 && ($i < 107 || ($i > 295 && $i < 299) || ($i > 537 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 46 && ($i < 107 || ($i > 294 && $i < 299) || ($i > 536 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 47 && ($i < 106 || ($i > 294 && $i < 298) || ($i > 321 && $i < 332) || ($i > 536 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 48 && ($i < 106 || ($i > 293 && $i < 298) || ($i > 319   && $i < 331) || ($i > 350   && $i < 353)|| ($i > 536 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 49 && ($i < 106 || ($i > 293 && $i < 297) || ($i > 318 && $i < 331) || ($i > 347 && $i < 354)|| ($i > 536 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 50 && ($i < 105 || ($i > 293 && $i < 297) || ($i == 317) || ($i > 321 && $i < 331) || ($i > 343   && $i < 357) || ($i > 533 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 51 && ($i < 105 || ($i > 292 && $i < 296) || ($i > 314 && $i < 321) || ($i > 322 && $i < 330) || ($i > 331   && $i < 335) || ($i > 342   && $i < 364) || ($i == 376) || ($i > 530 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 52 && ($i < 105 || ($i > 292 && $i < 296) || ($i > 299 && $i < 318) || ($i > 320 && $i < 323) || ($i > 323 && $i < 330) || ($i > 331   && $i < 371) || ($i == 376) || ($i == 377 ) || ($i > 528 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 53 && ($i < 105 || ($i > 292 && $i < 296) || ($i > 299 && $i < 318) || ($i > 319 && $i < 322) || ($i > 323 && $i < 329) || ($i == 330) || ($i == 331 ) || ($i > 333   && $i < 371) || ($i == 375) || ($i == 376) || ($i == 377 ) || ($i > 528 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 54 && ($i < 105 || ($i > 291 && $i < 295) || ($i > 299 && $i < 316) || ($i == 322 ) || ($i > 323 && $i < 327) || ($i == 329) || ($i == 330) || ($i == 331 ) || ($i > 332   && $i < 368) || ($i == 375)  || ($i == 376) || ($i == 377 ) || ($i > 527 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 55 && ($i < 105 || ($i > 291 && $i < 295) || ($i == 301) || ($i > 304 && $i < 316) || ($i > 319 && $i < 322) || ($i > 323 && $i < 326) || ($i == 329) || ($i == 330) || ($i == 331 ) || ($i > 333   && $i < 360) || ($i == 363) || ($i == 364 ) || ($i == 375) || ($i == 376) || ($i == 377 ) || ($i > 527 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 56 && ($i < 105 || ($i > 291 && $i < 295) || ($i == 301) || ($i > 305 && $i < 316) || ($i > 318 && $i < 323 ) || ($i > 332   && $i < 359) || ($i == 363) || ($i == 364 ) || ($i == 375) || ($i == 376) || ($i == 377 ) || ($i > 526 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 57 && ($i < 105 || ($i > 291 && $i < 294) || ($i > 307 && $i < 324 ) || ($i > 332   && $i < 360) || ($i == 364 ) || ($i == 375) || ($i == 376) || ($i == 377 ) || ($i > 526 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 58 && ($i < 105 || ($i > 290 && $i < 294) || ($i > 308 && $i < 324 ) || ($i > 330   && $i < 360) || ($i == 375) || ($i == 376) || ($i == 377 ) || ($i > 526 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 59 && ($i < 105 || ($i > 290 && $i < 294) || ($i > 308 && $i < 322 ) || ($i > 330   && $i < 360) || ($i == 375) || ($i == 376) || ($i == 377 ) || ($i > 525 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 60 && ($i < 106 || ($i > 290 && $i < 294) || ($i > 308 && $i < 321 ) || ($i > 329   && $i < 358) || ($i == 375) || ($i == 376) || ($i == 377 ) || ($i > 525 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 61  && ($i < 105 || ($i > 290 && $i < 294) || ($i > 308 && $i < 321 ) || ($i > 330   && $i < 359) || ($i == 374) || ($i == 375) || ($i == 376 ) || ($i > 525 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 62 && ($i < 103 || ($i > 290 && $i < 294) || ($i > 309 && $i < 319 ) || ($i > 330   && $i < 358) || ($i == 360) || ($i == 374) || ($i == 375) || ($i == 376 ) || ($i > 525 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 63 && ($i < 101 || ($i > 289 && $i < 293) || ($i > 309 && $i < 318 ) || ($i > 329 && $i < 343) || ($i > 343  && $i < 358) || ($i == 374) || ($i == 375) || ($i == 376 ) || ($i > 525 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 64 && ($i < 100 || ($i > 289 && $i < 293) || ($i > 309 && $i < 314 ) || ($i == 317) || ($i > 329 && $i < 340) || ($i > 340 && $i < 344) || ($i > 345 && $i < 358) || ($i == 374) || ($i == 375) || ($i == 376 ) || ($i > 525 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 65 && ($i < 98 || ($i > 289 && $i < 293) || ($i > 311 && $i < 314 ) || ($i == 317) || ($i > 328 && $i < 341) || ($i > 341 && $i < 346) || ($i > 347 && $i < 356) || ($i == 374) || ($i == 375) || ($i > 525 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 66 && ($i < 97 || ($i > 289 && $i < 293) || ($i > 311 && $i < 316 ) || ($i > 328 && $i < 341) || ($i > 341 && $i < 345) || ($i > 347 && $i < 350) || ($i > 351 && $i < 355) || ($i == 373) || ($i == 374) || ($i == 375) || ($i > 525 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 67 && ($i < 95 || ($i > 289 && $i < 293) || ($i > 313 && $i < 317 ) || ($i > 328 && $i < 342) || ($i > 347 && $i < 350) || ($i > 351 && $i < 355) || ($i == 373) || ($i == 374) || ($i == 375) || ($i > 525 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 68 && ($i < 94 || ($i > 289 && $i < 293) || ($i > 315 && $i < 319 ) || ($i > 329 && $i < 344) || ($i > 347 && $i < 349) || ($i > 351 && $i < 355) || ($i == 373) || ($i == 374) || ($i == 375) || ($i > 525 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 69 && ($i < 93 || ($i > 289 && $i < 293) || ($i > 334 && $i < 343) || ($i == 353) || ($i > 371 && $i < 376) || ($i > 526 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 70 && ($i < 91 || ($i > 289 && $i < 293) || ($i > 334 && $i < 342) || ($i > 356 && $i < 361) || ($i > 371 && $i < 375) || ($i > 526 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 71 && ($i < 90 || ($i > 289 && $i < 293) || ($i > 317 && $i < 322 )  || ($i > 335 && $i < 342) || ($i > 354 && $i < 362) || ($i > 371 && $i < 375) || ($i > 526 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 72 && ($i < 90 || ($i > 289 && $i < 293) || ($i > 317 && $i < 324 )  || ($i > 335 && $i < 342) || ($i > 353 && $i < 363) || ($i > 370 && $i < 375) || ($i > 526 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 73 && ($i < 89 ||  ($i > 317 && $i < 325 )  || ($i > 335 && $i < 342) || ($i > 353 && $i < 363) || ($i > 370 && $i < 374) || ($i > 526 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 74 && ($i < 88 ||  ($i > 316 && $i < 327 )  || ($i > 335 && $i < 341) || ($i > 353 && $i < 363) || ($i > 369 && $i < 374) || ($i > 527 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 75 && ($i < 86 ||  ($i > 316 && $i < 328 )  || ($i > 335 && $i < 340) || ($i == 354) || ($i > 358 && $i < 363) || ($i > 369 && $i < 373) || ($i > 527 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else if( $k == 76 && ($i < 85 ||  ($i > 317 && $i < 327 )  || ($i > 335 && $i < 340) || ($i > 358 && $i < 363) || ($i > 368 && $i < 373) || ($i > 528 && $i < 684)))
                          {
                            $bgClass = "greenBG";
                          }else
                          {
                            $bgClass = "ocianBG";
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

  $("#content").contentZoomSlider({
      toolContainer: ".zoom-tool-bar", // element where slider bar will show
      setp: 100, // step size
      min: 100, // min range
      max: 800, // max range
      zoom: 105, // default zoom size
  });
</script>