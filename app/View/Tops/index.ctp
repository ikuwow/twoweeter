<!-- index.ctp -->

<!-- Side Menu -->
<a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand"><a href="http://startbootstrap.com">Start Bootstrap</a>
        </li>
        <li><a href="#top">Home</a>
        </li>
        <li><a href="#about">About</a>
        </li>
        <li><a href="#services">Services</a>
        </li>
        <li><a href="#portfolio">Portfolio</a>
        </li>
        <li><a href="#contact">Contact</a>
        </li>
    </ul>
</div>
<!-- /Side Menu -->

<!-- Full Page Image Header Area -->
<div id="top" class="header">
    <div class="vert-text">
        <h1>Twoweeter</h1>
        <h3>See your timeline <em>two weeks ago</em>.</h3>
        <?php
        echo $this->Html->link(
            'Twitterアカウントでログイン',
            array(
                'controller' => 'users',
                'action' => 'register'
            ),
            array(
                'class' => array('btn','btn-primary','btn-lg')
            )
        );
        ?>

    </div>
</div>
<!-- /Full Page Image Header Area -->

<!-- Intro -->
<div id="about" class="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2>Subtle Sidebar is the Perfect Template for your Next Portfolio Website Project!</h2>
                <p class="lead">This template really has it all. It's up to you to customize it to your liking! It features some fresh photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p>
            </div>
        </div>
    </div>
</div>
<!-- /Intro -->

<!-- Services -->
<div id="services" class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2>Our Services</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-2 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-rocket"></i>
                    <h4>Spacecraft Repair</h4>
                    <p>Did your navigation system shut down in the middle of that asteroid field? We can repair any dings and scrapes to your spacecraft!</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-magnet"></i>
                    <h4>Problem Solving</h4>
                    <p>Need to know how magnets work? Our problem solving solutions team can help you identify problems and conduct exploratory research.</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-shield"></i>
                    <h4>Blacksmithing</h4>
                    <p>Planning a time travel trip to the middle ages? Preserve the space time continuum by blending in with period accurate armor and weapons.</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-pencil"></i>
                    <h4>Pencil Sharpening</h4>
                    <p>We've been voted the best pencil sharpening service for 10 consecutive years. If you have a pencil that feels dull, we'll get it sharp!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Services -->

<!-- Callout -->
<div class="callout">
    <div class="vert-text">
        <h1>A Dramatic Text Area</h1>
    </div>
</div>
<!-- /Callout -->

<!-- Portfolio -->
<div id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2>Our Work</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-2 text-center">
                <div class="portfolio-item">
                    <a href="#">
                        <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                    </a>
                    <h4>Cityscape</h4>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="portfolio-item">
                    <a href="#">
                        <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                    </a>
                    <h4>Is That On Fire?</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-2 text-center">
                <div class="portfolio-item">
                    <a href="#">
                        <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                    </a>
                    <h4>Stop Sign</h4>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="portfolio-item">
                    <a href="#">
                        <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                    </a>
                    <h4>Narrow Focus</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Portfolio -->

<!-- Call to Action -->
<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h3>Now, let's start!</h3>
        <?php
        echo $this->Html->link(
            'Twitterアカウントでログイン',
            array(
                'controller' => 'users',
                'action' => 'register'
            ),
            array(
                'class' => array('btn','btn-primary','btn-lg')
            )
        );
        ?>
            </div>
        </div>
    </div>
</div>
<!-- /Call to Action -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <ul class="list-inline">
                    <li><i class="fa fa-facebook fa-3x"></i>
                    </li>
                    <li><i class="fa fa-twitter fa-3x"></i>
                    </li>
                    <li><i class="fa fa-dribbble fa-3x"></i>
                    </li>
                </ul>
                <div class="top-scroll">
                    <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
                </div>
                <hr>
                <p>Copyright &copy; ゐくを(ikuwow) All Rights Reserved. <?php echo date('Y');?></p>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- JavaScript -->
<?php echo $this->Html->script('jquery-1.10.2');?>
<?php echo $this->Html->script('bootstrap');?>

<!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
<script>
$("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});
</script>
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});
</script>
<script>
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
</script>


