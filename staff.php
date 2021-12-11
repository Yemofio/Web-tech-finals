<?php 
require(dirname(__FILE__).'../controllers/fixture_controller.php');

$club = staff_controller($_GET['teamID']);

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
                        <a href="index-2.html"><span>Home</span></a>
                        <ul>
                            <li><a href="amateurs.html"><span>Amateures Home</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="matches.html"><span>Matches</span></a>
                        <ul>
                            <li>
                                <a href="standing-cup.html"><span>Standings<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
                                <ul>
                                    <li><a href="standings.html"><span>championship</span></a></li>
                                </ul>
                            </li>
                            <li><a href="club-stats.html"><span>club stats</span></a></li>
                            <li><a href="match-live.html"><span>match live</span></a></li>
                            <li><a href="broadcasts.html"><span>broadcasts</span></a></li>
                            <li><a href="upcoming-match.html"><span>upcoming match</span></a></li>
                            <li>
                                <a href="championships-archive.html"><span>championships archive<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
                                <ul>
                                    <li><a href="championship.html"><span>championship information</span></a></li>
                                </ul>	
                            </li>
                            <li><a href="live-text-stream.html"><span>Text stream</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="staff.html"><span>Team</span></a>
                        <ul>
                            <li><a href="player.html"><span>player first page</span></a></li>
                            <li><a href="player-second-page.html"><span>player second page</span></a></li>
                        </ul>
                    </li>
                    <li><a href="news.html"><span>News</span></a></li>
                    <li><a href="news-single.html"><span>News Single</span></a></li>
                    <li><a href="store.html"><span>Store</span></a></li>
                    <li><a href="contacts.html"><span>Contact</span></a></li>
                    <li>
                        <a href="#other"><span>other</span></a>
                        <ul>
                            <li><a href="404.html"><span>404</span></a></li>
                            <li><a href="offline.html"><span>offline</span></a></li>
                            <li><a href="coming-soon.html"><span>comming soon</span></a></li>
                            <li><a href="search.html"><span>search</span></a></li>
                            <li><a href="donations.html"><span>donations</span></a></li>
                            <li><a href="trophies.html"><span>trophies</span></a></li>
                            <li><a href="about-club.html"><span>about club</span></a></li>
                            <li><a href="checkout.html"><span>checkout</span></a></li>
                        </ul>
                    </li>
                    <li class="cart full">
                        <a href="#cart">
                            <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                        </a>
                        <div class="cart-drop">
                            <table class="ct">
                                <tr>
                                    <td class="delete"><a href="#"><i class="fa fa-close" aria-hidden="true"></i></a></td>
                                    <td class="info">
                                        <img class="product-image" src="images/common/cart-product.jpg" alt="product-image">
                                        <em>Men's T-Shirt<br><em class="price">1 x £ 60</em></em>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="delete"><a href="#"><i class="fa fa-close" aria-hidden="true"></i></a></td>
                                    <td class="info">
                                        <img class="product-image" src="images/common/cart-product.jpg" alt="product-image">
                                        <em>Men's T-Shirt<br><em class="price">1 x £ 60</em></em>
                                    </td>
                                </tr>
                            </table>
                            <div class="wrap">
                                <div class="total-text">Subtotal: </div>
                                <div class="total-digit">£ 120</div>
                            </div>
                            <div class="wrap btn-wrap">
                                <a href="cart.html" class="btn view">View cart</a>
                                <a href="checkout.html" class="btn check">checkout cart</a>
                            </div>
                        </div>
                    </li>	
                </ul>
            </div>       
        </nav>
    </div>
</div>
<!--MAIN MENU WRAP END-->


    <!--BREADCRUMBS BEGIN-->
<section class="image-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <ul class="breadcrumbs">
                            <li><a href="index-2.html">Main</a>/</li>
                            <li>Category</li>
                        </ul>
                        <h1>Category</h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</section>
<!--BREADCRUMBS END-->

    <!--CLUB STAFF TOP BEGIN-->

    <div class="club-staff-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Players</h4>
                </div>
                
<div class="staff-box">   
    <?php foreach($club as $team){?>         
    <div class="col-md-4  col-sm-6 col-xs-12">
        
            <span class="info">
                <span class="name"><?php echo $team['first_name'] ?></span>
                <span class="position">Trophies: <?php echo $team['trophies']?></span>
                <span class="number"><?php echo $team['jersey_number'] ?></span>
            </span>
            <img src="images/soccer/staff-item-img.jpg" alt="player">
       
    </div>   
    <?php } ?>                                      
       


    
                <div class="col-md-12">
                    <h4>defenders</h4>
                </div>
                
   


    
                <div class="col-md-12">
                    <p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep v mixtape semiotics brunch. </p>
                </div>
            </div>
        </div>
    </div>

    <!--CLUB STAFF TOP END-->


    <!--MAIN CLUB STAFF BEGIN-->

       

    <!--SPONSOR BOX BEGIN-->
<div class="am-sponsor-box">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p class="text">Whatever copper mug etsy, tilde listicle hammock gastropub literally franzen fanny pack typewriter meditation.<br> Organic chartreuse bicycle rights pinterest, cray humblebrag fap gochujang church-key brooklyn food truck letterpress cred. </p>
                </div>
                <div class="col-xs-3 text-center">
                    <img  class="sponsor-icons" src="images/common/sponsor-img3.png" alt="sponsor image">	
                </div>
                <div class="col-xs-3 text-center">
                    <img class="sponsor-icons" src="images/common/sponsor-img.png" alt="sponsor image">	
                </div>
                <div class="col-xs-3 text-center">
                    <img  class="sponsor-icons" src="images/common/sponsor-img1.png" alt="sponsor image">	
                </div>
                <div class="col-xs-3 text-center">
                    <img  class="sponsor-icons" src="images/common/sponsor-img2.png" alt="sponsor image">	
                </div>
            </div>
        </div>
    </div>
<!--SPONSOR BOX END-->

    <!--FOOTER BEGIN-->
<footer class="footer">
    <div class="wrapper-overfllow">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="footer-left">
                        <div class="wrap">
                            <a href="index-2.html" class="foot-logo"><img src="images/soccer/footer-logo.png" alt="footer-logo"></a>
                            <p>Activated charcoal trust fund ugh prism af, beard marfa air plant stumptown gastropub farm-to-table jianbing.</p>
                            <ul class="foot-left-menu">
                                <li><a href="staff.html">First team</a></li>
                                <li><a href="staff.html">Second team</a></li>
                                <li><a href="amateurs.html">Amateurs</a></li>
                                <li><a href="donations.html">Donation</a></li>
                                <li><a href="trophies.html">trophies</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-lg-offset-1">
                    <div class="foot-news">
                        <h4>Recent news</h4>
                        <div class="item">
                            <a href="news.html" class="image"><img class="img-responsive" src="images/soccer/foot-news-img.jpg" alt="news-image"></a>
                            <a href="news.html" class="name">When somersaulting Sanchez shouldered Mexico’s hopes</a>
                            <a href="news.html" class="date">25 Sep 2016</a>
                            <span class="separator">in</span>
                            <a href="news.html" class="category">Highlights</a>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-12">
                    <div class="foot-contact">
                        <h4>Contact us</h4>
                        <ul class="contact-list">
                            <li><i class="fa fa-flag" aria-hidden="true"></i><span>276 Upper Parliament Street, Liverpool L8, Great Britain</span></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:team@email.com">team@email.com</a></li>
                            <li class="phone"><i class="fa fa-phone" aria-hidden="true"></i><span>+61 3 8376 6284</span></li>
                        </ul>
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
                    <ul class="footer-menu">
                        <li class="active"><a href="index-2.html"><span>Home</span></a></li>
                        <li><a href="matches.html"><span>Matches</span></a></li>
                        <li><a href="staff.html"><span>Team</span></a></li>
                        <li><a href="news.html"><span>News</span></a></li>
                        <li><a href="store.html"><span>Store</span></a></li>
                        <li><a href="contacts.html"><span>Contact</span></a></li>
                    </ul>	
                    <a href="#top" class="foot-up"><span>up <i class="fa fa-caret-up" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="copyrights">
                        <a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="created">
                        
                    </div>
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

	<!--DEMO SWITCHER BEGIN-->
<a class="demo-switcher-small-button">
    <i class="fa fa-cog fa-spin fa-fw margin-bottom"></i>
</a>
<div class="demo-switcher"> 
    <div class="switcher-header">
        <p><i class="fa fa-cog fa-spin fa-fw" aria-hidden="true"></i>demo switcher</p>
    </div>
    <div class="switcher-menu">
        <div class="special-list">
            <h3>New demos</h3>
            <ul>
                <li><a href="sport-championship-landing.html" data-scheme="csgo"><i class="fa fa-star" aria-hidden="true"></i>sport championship</a></li>
                <li><a href="sport-team-landing.html" data-scheme="csgo"><i class="fa fa-star" aria-hidden="true"></i>sport team</a></li>
                <li class="small-letter"><a href="esport-championship-landing.html" data-scheme="csgo"><i class="fa fa-star" aria-hidden="true"></i><p>eSport championship</p></a></li>
                <li class="small-letter"><a href="esport-team-landing.html" data-scheme="csgo"><i class="fa fa-star" aria-hidden="true"></i><p>eSport team</p></a></li>
            </ul>
        </div>
        <ul class="light-list demo-swith">
            <li><a href="indexa369.html?scheme=soccer" data-scheme="soccer"><span class="soccer"></span>Soccer</a></li>
            <li><a href="index70c2.html?scheme=amfootball" data-scheme="amfootball"><span class="football"></span>Football</a></li>
            <li><a href="index075a.html?scheme=hockey" data-scheme="hockey"><span class="hockey"></span>Hockey</a></li>
            <li><a href="indexc4b0.html?scheme=baseball" data-scheme="baseball"><span class="baseball"></span>Baseball</a></li>
            <li><a href="index9439.html?scheme=basketball" data-scheme="basketball"><span class="basketball"></span>Basketball</a></li>
        </ul>
        <ul class="dark-list demo-swith">
            <li><a href="index8bc9.html?scheme=csgo" data-scheme="csgo"><span class="csgo"></span>CS:GO</a></li>
            <li><a href="indexd51a.html?scheme=dota" data-scheme="dota"><span class="dota"></span>DOTA</a></li>
        </ul>
    </div>
</div>
<!--DEMO SWITCHER END-->

<script type="text/javascript" src="dev-assets/demo-switcher.js"></script>
</body>


</html>
