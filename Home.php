<?php 
include 'header.html';
?>
<section class="hero is-danger">
  <div class="hero-body">
    <div class="logo-box">
        <div id="logo">
            <img src="Assets/img/logo.png" width="100%"  height="100%"></div>
        </div>
  </div>
</section>

<section class="section" style="padding:0rem !important">
<div class="container is-widescreen" style="height:auto;margin-bottom:2rem;max-width:100vw;margin-top:2rem">
<div id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img src="Assets/img/pic1.jpeg" alt>
			<figcaption>Image Description</figcaption>
		</figure>
		<figure>
			<img src="Assets/img/pic2.jpeg" alt>
			<figcaption>Image Description</figcaption>
		</figure>
		<figure>
			<img src="Assets/img/pic3.jpg" alt>
			<figcaption>Image Description</figcaption>
		</figure>
		<figure>
			<img src="Assets/img/pic4.jpeg" alt>
			<figcaption>Image Description</figcaption>
		</figure>
		<figure>
			<img src="Assets/img/pic5.jpg" alt>
			<figcaption>Image Description</figcaption>
		</figure>
	</figure>
</div>
</div>
<div class="container is-max-widescreen" style="height:auto">

            <div
                id="about-content"
                style="text-align: center; background-color: beige;width: auto; height:auto; padding: 10px;">

                <p >From news to trends, culture to inventions, find the most relevant content
                    of your interest. Raise out your voices, put up the opinions, spread the
                    knowledge, and what not ! All at NAPS.</p><br>
                <span style="color:red">
                    Gain the knowledge, Rain the knowledge
                </span>
            </div>
</div>
<div class="container has-text-centered" style="height:auto; margin-top:8rem;">
<div class="calendar-box">
        <div class="event-box">
            <div class="current-date">
                <h1 id="date"></h1>
                <h3 id="day"></h3>
                <script>
                                var today = new Date();
                                var day = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                                 document.getElementById("day").innerHTML = day[today.getDay()]; 
                                 document.getElementById("date").innerHTML = today.getDate();
                               
                            </script>
            </div>
            <div class="add-event">
                <ul>
                    <p style="text-align: left;">Current Events</p>
                    <li>New Event</li>
                    <li>New Event 1</li>
                    <li>new Event 2</li>
                </ul>
            </div>
        </div>

        <div class="calendar">
            <div class="calendar__month">
                <div class="cal-month__previous"><</div> <div class="cal-month__current"></div> <div class="cal-month__next">></div>
            </div>
            <div class="calendar__head">
                <div class="cal-head__day"></div>
                <div class="cal-head__day"></div>
                <div class="cal-head__day"></div>
                <div class="cal-head__day"></div>
                <div class="cal-head__day"></div>
                <div class="cal-head__day"></div>
                <div class="cal-head__day"></div>
            </div>
            <div class="calendar__body">
                <div class="cal-body__week">
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                </div>
                <div class="cal-body__week">
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                </div>
                <div class="cal-body__week">
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                </div>
                <div class="cal-body__week">
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                </div>
                <div class="cal-body__week">
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                </div>
                <div class="cal-body__week">
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<section class="section" style="margin-top: 5rem;">
    <div class="container">
        <div class="level">
            <div class="level-left has-text-left">
                <div class="level-item">
                <div style="background:white;height:auto;">
    <div class="img-didyouknow">
            <img class="funfact-img" src="Assets/img/didyouknow.jpeg" width="100%">
        </div>
    </div>
                </div>
            </div>

            <div class="level-right ">
                    <div class="level-item">
                        
                    </div>
            </div>
        </div>
        <div class="level mt-6">
            <div class="level-item has-text-centered">
            <a href="Editorial.php" class="glimpse-link">  
            Glimpses of the Editorials   
            </a>

            </div>
        </div>
            
    </div>
 </section>
</section>

            
<!--
<script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Orientation: 2,
                $NoDrag: true
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .jssora061 {display:block;position:absolute;cursor:pointer;}
        .jssora061 .a {fill:none;stroke:#fff;stroke-width:360;stroke-linecap:round;}
        .jssora061:hover {opacity:.8;}
        .jssora061.jssora061dn {opacity:.5;}
        .jssora061.jssora061ds {opacity:.3;pointer-events:none;}
    </style>
<section class="main-content">
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div>
                <img data-u="image" src="Assets/img/pic1.jpeg" />
                <div u="thumb">Slide Description 001
                </div>
            </div>
            <div>
                <img data-u="image" src="img/043.jpg" />
                <div u="thumb">Slide Description 002
                </div>
            </div>
            <div>
                <img data-u="image" src="img/046.jpg" />
                <div u="thumb">Slide Description 003
                </div>
            </div>
            <div>
                <img data-u="image" src="img/047.jpg" />
                <div u="thumb">Slide Description 004
                </div>
            </div>
            <div>
                <img data-u="image" src="img/048.jpg" />
                <div u="thumb">Slide Description 005
                </div>
            </div>
            <div>
                <img data-u="image" src="img/044.jpg" />
                <div u="thumb">Slide Description 006
                </div>
            </div>
            <div>
                <img data-u="image" src="img/050.jpg" />
                <div u="thumb">Slide Description 007
                </div>
            </div>
            <div>
                <img data-u="image" src="img/049.jpg" />
                <div u="thumb">Slide Description 008
                </div>
            </div>
            <div>
                <img data-u="image" src="img/052.jpg" />
                <div u="thumb">Slide Description 009
                </div>
            </div>
            <div>
                <img data-u="image" src="img/051.jpg" />
                <div u="thumb">Slide Description 010
                </div>
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">image gallery</a>
        
        <div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:980px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
            <div u="slides">
                <div u="prototype" style="position:absolute;top:0;left:0;width:980px;height:50px;">
                    <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                </div>
            </div>
        </div>
        
        <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
            </svg>
        </div>
    </div>
</section>
<!--
<section class="main-content about">
    <div class="container">
        <div class="row">
            <div
                id="about-content"
                class="col-xl-12"
                style="text-align: center; background-color: beige;width: auto; height:auto;margin:120px 0px 0px 0px; padding: 10px;">

                <p >From news to trends, culture to inventions, find the most relevant content
                    of your interest. Raise out your voices, put up the opinions, spread the
                    knowledge, and what not ! All at NAPS.</p><br>
                <span style="color:red">
                    Gain the knowledge, Rain the knowledge
                </span>
            </div>
        </div>
    </div>
</section>
<section id="site-content" style="padding:0px">

    <div class="calendar-box">
        <div class="event-box">
            <div class="current-date">
                <h1 id="date"></h1>
                <h3 id="day"></h3>
                <script>
                                var today = new Date();
                                var day = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                                 document.getElementById("day").innerHTML = day[today.getDay()]; 
                                 document.getElementById("date").innerHTML = today.getDate();
                               
                            </script>
            </div>
            <div class="add-event">
                <ul>
                    <p style="text-align: left;">Current Events</p>
                    <li>New Event</li>
                    <li>New Event 1</li>
                    <li>new Event 2</li>
                </ul>
            </div>
        </div>

        <div class="calendar">
            <div class="calendar__month">
                <div class="cal-month__previous"><</div> <div class="cal-month__current"></div> <div class="cal-month__next">></div>
            </div>
            <div class="calendar__head">
                <div class="cal-head__day"></div>
                <div class="cal-head__day"></div>
                <div class="cal-head__day"></div>
                <div class="cal-head__day"></div>
                <div class="cal-head__day"></div>
                <div class="cal-head__day"></div>
                <div class="cal-head__day"></div>
            </div>
            <div class="calendar__body">
                <div class="cal-body__week">
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                </div>
                <div class="cal-body__week">
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                </div>
                <div class="cal-body__week">
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                </div>
                <div class="cal-body__week">
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                </div>
                <div class="cal-body__week">
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                </div>
                <div class="cal-body__week">
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                    <div class="cal-body__day"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="margin-top:50px ; margin-bottom:50px">
    <div class="col-sm-3 mt-3">
        <div class="img-didyouknow">
            <img class="funfact-img" src="Assets/img/didyouknow.jpeg">
        </div>
    </div>
    <div class="col-sm-3 col-md-8">
        <h2>Fact Heading</h2>
        <p></p>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-xl-12" style="color:red; font-size:30px;">
            <a href="Editorial.php" class="glimpse-link">
                
                Glimpses of the Editorials   
            </a>
        </div>
    </div>
</div>
</section>
-->

<?php
include 'footer.html'
?>