<!-- timeline.ctp -->
<?php //debug($tweets);?>
<div class="row">

    <!-- sidebar -->
    <div class="col-md-4">
    <?php //<div class="affix">?><?php // affixで固定 ?>
        <?php echo $this->Html->image($me->profile_image_url,array('title'=>$me->screen_name,'alt'=>$me->screen_name));?>
        <p class="lead"><?php echo h($me->name);?></p>
        <p class="lead">@<?php echo h($me->screen_name);?></p>
        <div class="thumbnail">
        <table class="table">
        <tbody>
        <tr><td><?php echo h($me->description);?></td></tr>
        </tbody>
        </table>
        </div>
        <div class="list-group">
            <a href="#" class="list-group-item active">Timeline (some may not be displayed now...)</a>
            <a href="#" class="list-group-item">Mentions (comming soon)</a>
            <a href="#" class="list-group-item">Account (comming soon)</a>
        </div>
<?php
echo $this->Html->link('Read tweet',
    array(
        'controller'=>'users',
        'action'=>'importTweet'
    ),
    array(
        'class'=>array('btn','btn-default','btn-lg')
    )
);
?>
<!--<div style="float: right;">-->
<div style="position: absolute; right:10px;bottom:5px;">
<?php
echo $this->Html->link('Logout',
    array(
        'controller'=>'users',
        'action'=>'logout'
    )
    /*array(
        'class'=>array('btn','btn-warning','btn-lg')
    )*/
);
?>
</div>
<?php //</div><!-- sidebar-navi affix--> ?>
    </div><!-- col-md-4 -->

    <!-- main division -->
    <div class="col-md-8">

        <div class="thumbnail">
            <?php /*
            <img class="img-responsive" src="http://placehold.it/800x300" alt="">
            <div class="caption-full">
                <h4 class="pull-right">$24.99</h4>
                <h4><a href="#">Product Name</a>
                </h4>
                <p>See more snippets like these online store reviews at <a target="_blank" href="http://bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                <p>Want to make these reviews work? Check out <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a></strong> over at maxoffsky.com!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class="ratings">
                <p class="pull-right">3 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    4.0 stars
                </p>
            </div>
             */ ?>
            <table class="table table-bordered table-hover">
            <tbody>
            <?php foreach($tweets as $tweet):?>
            <tr><td>
            <?php echo $this->Html->image($tweet['User']['icon_url'],array('class'=>'icon'));?><br/>
            <?php echo h($tweet['User']['name']);?>
            <?php echo '@'.h($tweet['User']['screen_name']);?>
            </td><td>
                <?php echo h($tweet['Tweet']['tweet']);?><br><?php echo h($tweet['Tweet']['tweet_date']);?>
            </td></tr>
            <?php endforeach;?>
            </tbody>
            </table>
        </div><!-- thumnail -->

        <?php /*
        <div class="well">

            <div class="text-right">
                <a class="btn btn-success">Leave a Review</a>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    Anonymous
                    <span class="pull-right">10 days ago</span>
                    <p>This product was great in terms of quality. I would definitely buy another!</p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    Anonymous
                    <span class="pull-right">12 days ago</span>
                    <p>I've alredy ordered another one!</p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    Anonymous
                    <span class="pull-right">15 days ago</span>
                    <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                </div>
            </div>

        </div><!-- well -->
         */ ?>

    </div><!-- col-md-8 -->

</div><!-- row -->
