<?php
require(dirname(__FILE__).'../controllers/fixture_controller.php');

$result = select_all_fixtures_controller();
$scorers = get_top_goal_scorer_controller();
$assists = get_top_assists_controller();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Team HTML</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7COpen+Sans:700,400%7CRaleway:400,800,900" rel="stylesheet" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="css/library/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="dev-assets/preloader-default.css" rel="stylesheet" type="text/css" />
    <link href="dev-assets/demo-switcher.css" rel="stylesheet" type="text/css" />
    
    <!-- 
    
    Enable one styles which the you want
    
    <link href="css-min/soccer.min.css" rel="stylesheet" type="text/css" />
    <link href="css-min/hockey.min.css" rel="stylesheet" type="text/css" />
    <link href="css-min/basketball.min.css" rel="stylesheet" type="text/css" />
    <link href="css-min/football.min.css" rel="stylesheet" type="text/css" />
    <link href="css-min/baseball.min.css" rel="stylesheet" type="text/css" />
    <link href="css-min/dota.min.css" rel="stylesheet" type="text/css" />
    <link href="css-min/csgo.min.css" rel="stylesheet" type="text/css" />
    
    All libraries included in this css, concating rules in /grunt/cssmin.js
    Use grunt default task for creating this files
    
    -->
</head>

<body>

	<div class="preloader-wrapper" id="preloader">
    <div class="motion-line dark-big"></div>
    <div class="motion-line yellow-big"></div>
    <div class="motion-line dark-small"></div>
    <div class="motion-line yellow-normal"></div>
    <div class="motion-line yellow-small1"></div>
    <div class="motion-line yellow-small2"></div>
</div>

    
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-7 hidden-sm hidden-xs">
                <div class="top-contacts">
                    <ul class="socials">
                        <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="contacts">
                        <li class="phone"><i class="fa fa-phone-square" aria-hidden="true"></i>+61 3 8376 6284</li>
                        <li class="skype"><a href="callto:team.skype"><i class="fa fa-skype" aria-hidden="true"></i>team.skype</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="top-language">
                    <ul class="list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/common/en-flag.png" alt="selected language">EN</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><img src="images/common/fr-flag.png" alt="language">FR</a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/common/en-flag.png" alt="language">EN</a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/common/ru-flag.png" alt="language">RU</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                    <div class="top-search">
                            <form>
                                    <input type="text" name="text">
                                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                    </div>

                    <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

    <!--MAIN MENU WRAP BEGIN-->
<div class="main-menu-wrap sticky-menu">
    <div class="container">
        <a href="index-2.html" class="custom-logo-link"><img src="images/soccer/logo.png" alt="logo" class="custom-logo"></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#team-menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <nav class="navbar">
            <div class="collapse navbar-collapse" id="team-menu">
                <ul class="main-menu nav">
                    <li class="active">
                        <a href="index.php"><span>Home</span></a>
                        </ul>
                    </li>
                    
                    
                    
                        <a href="#other"><span>other</span></a>
                        <ul>
                            <li><a href="search.html"><span>search</span></a></li>
                            
                        </ul>
                    </li>	
                </ul>
            </div>       
        </nav>
    </div>
</div>
<!--MAIN MENU WRAP END-->

<!--MAIN MACTH SHEDULE BEGIN-->

    <section class="main-match-shedule">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h6>Next match</h6>
                    
<div class="main-next-match bg-cover">
    <img src="images/soccer/next-match-bg.jpg" class="next-match-background-img" alt="next-image"> 
    <div class="wrap">
        <div class="place" >Estadio Olimpico Monumental</div>
        <div class="date" >28 septemer 2016 / 8:30 PM</div>
        <div class="teams-wrap" >
                <a href="staff.html" class="team">
                    <span>Team 1</span>
                    <span><img src="images/common/team-logo1.png" alt="team-image"></span>
                </a>
                <div class="vs">
                   vs
                </div>
                <a href="staff.html" class="team1">
                    <span><img src="images/common/team-logo2.png" alt="team-image"></span>
                    <span>Team2</span>
                </a>
        </div>
        <a href="#" class="booking">UPCOMING MATCH</a>
    </div>
</div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h6>Latest matches</h6>
                        
<div class="main-lates-matches">
    
    
    
    
    
</div>
                </div>
            </div>
        </div>
    </section>

    <!--MAIN MACTH SHEDULE END-->

    <!--MAIN PLAYERS STAT BEGIN-->

    <section class="main-players-stat bg-cover">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h4 class="hockey-stats-h4">Players stats</h4>
                    

<div class="single-player-stats players_statistic_slider">
    <ul class="player-filters" role="tablist">        
        <li class="active">
            <a href="#goalkeepers" role="tab" data-toggle="tab">
                goalkeepers
            </a>
        </li>
        <li>
            <a href="#defenders" role="tab" data-toggle="tab">
                defenders
            </a>
        </li>

    </ul>
    <div class="player-stat-slider tab-content">      
        <div id="slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner tab-content" role="listbox">
                <div class="item active tab-pane" id="goalkeepers">

                    <div class="wrap">
                        <div class="stat">
                            <div class="top-info with_number">
                                <div class="number">12</div>
                                <a href="player-second-page.html" class="name">
                                    HAYDEN FREEMAN
                                </a>
                            </div>
                            <div class="position">
                                Goalkeeper
                            </div>
                            <div class="progress-wrap">
                                <div class="progress-item">
                                    <div class="bar-label">
                                        <div class="achievement">played</div>
                                        <div class="score">23</div>
                                    </div>
                                    <div class="progress-line">
                                        <div class="bar bar-1" ></div>
                                    </div>
                                </div>
                                <div class="progress-item">
                                    <div class="bar-label">
                                        <div class="achievement">saves</div>
                                        <div class="score">23</div>
                                    </div>
                                    <div class="progress-line">
                                        <div class="bar bar-2" ></div>
                                    </div>
                                </div>
                                <div class="progress-item">
                                    <div class="bar-label">
                                        <div class="achievement">missing</div>
                                        <div class="score">23</div>
                                    </div>
                                    <div class="progress-line">
                                        <div class="bar bar-3" ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <a href="player-second-page.html" title="player-image">
                                <img src="images/soccer/player-stat-slider-img.jpg" alt="player-image">
                            </a>
                        </div>	
                    </div>
                </div>
                <div class="item tab-pane" id="defenders">
                    <div class="wrap">
                        <div class="stat">
                            <div class="top-info with_number">
                                <div class="number">1</div>
                                <a href="" class="name">
                                    JORG BELAFFSOON
                                </a>
                            </div>
                            <div class="top-info">
                                <a href="" class="name">
                                </a>
                            </div>
                            <div class="position">
                                Defender
                            </div>
                            <div class="progress-wrap">
                                <div class="progress-item">
                                    <div class="bar-label">
                                        <div class="achievement">played</div>
                                        <div class="score">23</div>
                                    </div>
                                    <div class="progress-line">
                                        <div class="bar bar-4" ></div>
                                    </div>
                                </div>
                                <div class="progress-item">
                                    <div class="bar-label">
                                        <div class="achievement">saves</div>
                                        <div class="score">23</div>
                                    </div>
                                    <div class="progress-line">
                                        <div class="bar bar-5" ></div>
                                    </div>
                                </div>
                                <div class="progress-item">
                                    <div class="bar-label">
                                        <div class="achievement">missing</div>
                                        <div class="score">23</div>
                                    </div>
                                    <div class="progress-line">
                                        <div class="bar bar-6" ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <a href="player-second-page.html" title="player-image">
                                <img src="images/soccer/player-stat-slider-img.jpg" alt="player-image">
                            </a>
                        </div>	
                    </div>
                </div>


                <div class="arrow-wrap">
                    <!-- Controls -->
                    <a class="nav-arrow left-arrow" href="#slider" role="button" data-slide="prev">
                        <i class="fa fa-caret-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="nav-arrow right-arrow" href="#slider" role="button" data-slide="next">
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>  
            </div>
        </div>
    </div>
</div>
                </div>
                <div class="col-md-5">
                    <h4 class = "hockey-stats-h4">Best players</h4>
                    <div class="team-best-player">
    <div class="">
        <ul class="player-filters" role="tablist">
            <li class="active">
                <a href="#goals" role="tab" data-toggle="tab">goals</a>
            </li>
            <li>
                <a href="#assist" role="tab" data-toggle="tab">assist</a>
            </li>
        </ul>    
    </div>
    <div class="tab-content">
        <div class="best-players-list tab-pane active" id="goals">
            <?php foreach($scorers as $scorer){ ?>
                <?php echo 
                "<a href='player.php?id=".$scorer['player_ID']." class='item'>" ?>
            <a href="player.php?id=<?php echo $scorer['player_ID'] ?>" class="item">
                <span class="number"><?php echo $scorer['jersey_number'] ?></span>
                <span><?php echo $scorer['player'] ?></span>
                <span class="achievement"><?php echo $scorer['goals'] ?></span>
            </a>
            <?php }?>
            
        </div>
        <div class="best-players-list tab-pane" id="assist">
        <?php foreach($assists as $assist){ ?>
            <a href="player.php?id=<?php echo $assist['player_ID'] ?>" class="item">
                <span class="number"><?php echo $assist['jersey_number'] ?></span>
                <span><?php echo $assist['player'] ?></span>
                <span class="achievement"><?php echo $assist['assists'] ?></span>
            </a>
            <?php }?>
            
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </section>

    <!--MAIN PLAYERS STAT END-->

    <!--SUCCESS STORY BEGIN-->


        
<div class="main-award-slider">
    <div id="main-award-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">  
            <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                            </div>
                            <div class="col-xs-4 text-center">
                            </div>
                            <div class="col-xs-4 text-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                            </div>
                            <div class="col-xs-4 text-center">
                            </div>
                            <div class="col-xs-4 text-center">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        




    <!--MAIN TEAM STORE END-->

    

    <!--FOOTER BEGIN-->
<footer class="footer">
    <div class="wrapper-overfllow">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="footer-left">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-lg-offset-1">
                    <div class="foot-news">
                    </div>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-12">
                    <div class="foot-contact">
                        <ul class="socials">
                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-menu-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">	
                    <a href="#top" class="foot-up"><span>up <i class="fa fa-caret-up" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--FOOTER END-->

    <script type="text/javascript" src="js/library/jquery.js"></script>
<script type="text/javascript" src="js/library/jquery-ui.js"></script>
<script type="text/javascript" src="js/library/bootstrap.js"></script>
<script type="text/javascript" src="js/library/jquery.sticky.js"></script>
<script type="text/javascript" src="js/library/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/library/jcarousel.connected-carousels.js"></script>
<script type="text/javascript" src="js/library/owl.carousel.js"></script>
<script type="text/javascript" src="js/library/progressbar.js"></script>
<script type="text/javascript" src="js/library/jquery.bracket.min.js"></script>
<script type="text/javascript" src="js/library/chartist.js"></script>
<script type="text/javascript" src="js/library/Chart.js"></script>
<script type="text/javascript" src="js/library/fancySelect.js"></script>
<script type="text/javascript" src="js/library/isotope.pkgd.js"></script>
<script type="text/javascript" src="js/library/imagesloaded.pkgd.js"></script>

<script type="text/javascript" src="js/jquery.team-coundown.js"></script>
<script type="text/javascript" src="js/matches-slider.js"></script>
<script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript" src="js/matches_broadcast_listing.js"></script>
<script type="text/javascript" src="js/news-line.js"></script>
<script type="text/javascript" src="js/match_galery.js"></script>
<script type="text/javascript" src="js/main-club-gallery.js"></script>
<script type="text/javascript" src="js/product-slider.js"></script>
<script type="text/javascript" src="js/circle-bar.js"></script>
<script type="text/javascript" src="js/standings.js"></script>
<script type="text/javascript" src="js/shop-price-filter.js"></script>
<script type="text/javascript" src="js/timeseries.js"></script>
<script type="text/javascript" src="js/radar.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/preloader.js"></script>
<script type="text/javascript" src="js/diagram.js"></script>
<script type="text/javascript" src="js/bi-polar-diagram.js"></script>
<script type="text/javascript" src="js/label-placement-diagram.js"></script>
<script type="text/javascript" src="js/donut-chart.js"></script>
<script type="text/javascript" src="js/animate-donut.js"></script>
<script type="text/javascript" src="js/advanced-smil.js"></script>
<script type="text/javascript" src="js/svg-path.js"></script>
<script type="text/javascript" src="js/pick-circle.js"></script>
<script type="text/javascript" src="js/horizontal-bar.js"></script>
<script type="text/javascript" src="js/gauge-chart.js"></script>
<script type="text/javascript" src="js/stacked-bar.js"></script>

<script type="text/javascript" src="js/library/chartist-plugin-legend.js"></script>
<script type="text/javascript" src="js/library/chartist-plugin-threshold.js"></script>
<script type="text/javascript" src="js/library/chartist-plugin-pointlabels.js"></script>

<script type="text/javascript" src="js/treshold.js"></script>
<script type="text/javascript" src="js/visible.js"></script>
<script type="text/javascript" src="js/anchor.js"></script>
<script type="text/javascript" src="js/landing_carousel.js"></script>
<script type="text/javascript" src="js/landing_sport_standings.js"></script>
<script type="text/javascript" src="js/twitterslider.js"></script>
<script type="text/javascript" src="js/champions.js"></script>
<script type="text/javascript" src="js/landing_mainnews_slider.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/video_slider.js"></script>
<script type="text/javascript" src="js/footer_slides.js"></script>
<script type="text/javascript" src="js/player_test.js"></script>

<script type="text/javascript" src="js/main.js"></script>
    
    



<script type="text/javascript" src="dev-assets/demo-switcher.js"></script>
</body>


</html>
