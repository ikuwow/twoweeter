<!-- index.ctp -->

<?php echo $this->Html->css('stylish-portfolio');?>

<!-- Side Menu -->
<a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand"><a href="">Twoweeter</a>
        </li>
        <li><a href="#top">Home</a>
        </li>
        <li><a href="#about">About</a>
        </li>
        <li><a href="#services">What's Twoweeter</a>
        </li>
        <li><a href="#portfolio">Portfolio</a>
        </li>
        <li><a href="http://www.ikuwow.com">www.ikuwow.com</a>
        </li>
    </ul>
</div>
<!-- /Side Menu -->

<!-- Full Page Image Header Area -->
<div id="top" class="header">
    <div class="vert-text">
        <h1 style="color:white;text-shadow:0px 1px 3px #327FCD;">Twoweeter</h1>
        <h3 style="color:white;text-shadow:0px 1px 3px #327FCD;">See your timeline <em>two weeks ago</em>.</h3>
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
                <h2>Twoweeterは、2週間前のあなたのツイッターのタイムラインを表示するサービスです。</h2>
                <p class="lead">過去のツイートを、まるで今眺めているかのように閲覧できます。</p>
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
                <h2>What's Twoweeter</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-2 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-twitter"></i>
                    <h4>Viewing Past Tweets</h4>
                    <p>Did your navigation system shut down in the middle of that asteroid field? We can repair any dings and scrapes to your spacecraft!</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-clock-o"></i>
                    <h4>Like a Time Machine</h4>
                    <p>Need to know how magnets work? Our problem solving solutions team can help you identify problems and conduct exploratory research.</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-lightbulb-o"></i>
                    <h4>Awakening</h4>
                    <p>Planning a time travel trip to the middle ages? Preserve the space time continuum by blending in with period accurate armor and weapons.</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="service-item">
                    <i class="service-icon fa fa-reply"></i>
                    <h4>Reply to Missed Tweets</h4>
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
        <h1>Time is the only true purgatory.</h1>
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
                    <h4>Earthquakes?</h4>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="portfolio-item">
                    <a href="#">
                        <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                    </a>
                    <h4>Big News?</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-2 text-center">
                <div class="portfolio-item">
                    <a href="#">
                        <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                    </a>
                    <h4>Wait.</h4>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="portfolio-item">
                    <a href="#">
                        <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                    </a>
                    <h4>There were good tips.</h4>
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


