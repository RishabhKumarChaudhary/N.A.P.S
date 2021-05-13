<?php
include 'header.html'
?>

<section id="site-content" style="padding-top:0px">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12 mt-3 mb-3" style="border-radius:50%;width:100%;background: url(Assets/img/entertainment1.jpg);height: 200px; background-size: cover; background-position: center; background-repeat: no-repeat; background-clip: content-box;">
                <h1 style="font-size: 7vmax;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  width: 100%;
  color: #000000a8 !important;
  text-shadow: -7px 7px #cc2626, 0px 0px #000000, 0px 0 black, 0 -1px black;
    background: rgb(255 255 255 / 61%); font-family: Eagle;">ENTERTAINMENT</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card-deck">
                    <!-- Item 1 -->
                    <div class="card post-card" style="background-color: #adc0dc70 ;">
                        <!-- <img class="card-img-top" src="Assets/img/" alt="Card image cap"> -->
                        <div class="row" style="padding:10px;">
                            <div
                                class="col-sm-6"
                                style="text-align: left; font-size:20px; font-family: JoseFin;">
                                Author
                            </div>
                            <div
                                class="col-sm-6" 
                                style="">
                                <span id="month" style="text-align: right; font-size: 20px; font-family: JoseFin;"></span>
                                <span id="dt" style="text-align: right; font-size: 20px; font-family: JoseFin;"></span>
                                <span id="year"style="text-align: right; font-size: 20px; font-family: JoseFin;" ></span>
                            </div>

                        </div>
                        <div class="card-body">
                            <h5
                                class="card-title"
                                style="font-family: BsR; font-size:35px;color:crimson;  justify-items: center;">The incinerating catastrophe of Similipal</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="Assets/img/pic3.jpg" width="50%" height="100px ">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6 post-card-button" style="text-align: right; padding:0px;">
                                    <a href="article.php" class="btn btn-primary">Read More</a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Item 1 end here -->

                    <!-- Item 2 -->
                    <div class="card post-card" style="background-color: #adc0dc70 ;">
                        <!-- <img class="card-img-top" src="Assets/img/" alt="Card image cap"> -->
                        <div class="row" style="padding:10px;">
                            <div
                                class="col-sm-6"
                                style="text-align: left; font-size:20px; font-family: JoseFin;">
                                Author
                            </div>
                            <div
                                class="col-sm-6" 
                                style="">
                                <span id="month1" style="text-align: right; font-size: 20px; font-family: JoseFin;"></span>
                                <span id="dt1" style="text-align: right; font-size: 20px; font-family: JoseFin;"></span>
                                <span id="year1"style="text-align: right; font-size: 20px; font-family: JoseFin;" ></span>
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <h5
                                class="card-title"
                                style="font-family: BsR; font-size:35px;color:crimson;  justify-items: center;">The incinerating catastrophe of Similipal</h5>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <img src="Assets/img/pic2.jpeg" width="100%" height="auto "> -->
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6 post-card-button" style="text-align: right; padding:0px;">
                                    <a href="article.php" class="btn btn-primary">Read More</a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Item 2 end here-->

                    <!-- Item 3 -->
                    <div class="card post-card" style="background-color: #adc0dc70 ;">
                        <!-- <img class="card-img-top" src="Assets/img/" alt="Card image cap"> -->
                        <div class="row" style="padding:10px;">
                            <div
                                class="col-sm-6"
                                style="text-align: left; font-size:20px; font-family: JoseFin;">
                                Author
                            </div>
                            <div
                                class="col-sm-6" 
                                style="">
                                <span id="month2" style="text-align: right; font-size: 20px; font-family: JoseFin;"></span>
                                <span id="dt2" style="text-align: right; font-size: 20px; font-family: JoseFin;"></span>
                                <span id="year2"style="text-align: right; font-size: 20px; font-family: JoseFin;" ></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5
                                class="card-title"
                                style="font-family: BsR; font-size:35px;color:crimson;  justify-items: center;">The incinerating catastrophe of Similipal</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <img src="Assets/img/" width="50%" height="100px "> -->
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6 post-card-button" style="text-align: right; padding:0px;">
                                    <a href="article.php" class="btn btn-primary">Read More</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var today = new Date();
    var months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
    ];
    document
        .getElementById("month")
        .innerHTML = months[today.getMonth()];
    document
        .getElementById("dt")
        .innerHTML = today.getDate();
    document
        .getElementById("year")
        .innerHTML = today.getFullYear();
    document
        .getElementById("month1")
        .innerHTML = months[today.getMonth()];
    document
        .getElementById("dt1")
        .innerHTML = today.getDate();
    document
        .getElementById("year1")
        .innerHTML = today.getFullYear();
    document
        .getElementById("month2")
        .innerHTML = months[today.getMonth()];
    document
        .getElementById("dt2")
        .innerHTML = today.getDate();
    document
        .getElementById("year2")
        .innerHTML = today.getFullYear();
</script>
<?php
include 'footer.html'
?>