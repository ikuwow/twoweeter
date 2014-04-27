<!-- timeline.ctp -->
<div class="row">

    <!-- sidebar -->
    <div id="sidebar" class="col-md-4">
        <?php echo $this->Html->image($me->profile_image_url,array('title'=>$me->screen_name,'alt'=>$me->screen_name,'class'=>'icon'));?>
        <p class="lead fullname"><?php echo $this->Html->link(h($me->name),'http://twitter.com/'.$me->screen_name,array('target'=>'_blank'));?></p>
        <p class="lead username"><?php echo $this->Html->link('@'.h($me->screen_name),'http://twitter.com/'.$me->screen_name,array('target'=>'_blank'));?></p>
        <div class="thumbnail">
        <table class="table">
        <tbody>
        <tr><td><?php echo h($me->description);?></td></tr>
        </tbody>
        </table>
        </div>
        <div class="list-group">
            <a href="#" class="list-group-item active">Timeline</a>
            <?php //<a href="#" class="list-group-item">Mentions (comming soon)</a>?>
            <?php //<a href="#" class="list-group-item">Account (comming soon)</a> ?>
        </div><!-- list-group -->
            <div class="side-button-box">
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
            <?php //<button class="btn btn-warning" data-toggle="modal" data-target="#post-tweet">button</button> ?>
            <span class="side-logout">
            <?php
            echo $this->Html->link('Logout',
                array(
                    'controller'=>'users',
                    'action'=>'logout'
                )
            );
            ?>
            </span>
        </div><!-- side-button-box -->
    </div><!-- col-md-4 -->

    <!-- main division -->
    <div id="main" class="col-md-8">

        <div class="thumbnail">
            <table class="table table-bordered table-hover">
            <thead>
            <th>Tweets</th>
            </thead>
            <tbody>
            <?php foreach($tweets as $tweet):?>
            <tr><td> <!-- tweet -->
            <?php echo $this->Html->image($tweet['User']['icon_url'],array('class'=>'icon'));?>
            <div class="content">
            <span class="fullname"><?php echo $this->Html->link(h($tweet['User']['name']),'http://twitter.com/'.$tweet['User']['screen_name'],array('target'=>'_blank'));?></span>
            <span class="username"><?php echo $this->Html->link('@'.h($tweet['User']['screen_name']),'http://twitter.com/'.$tweet['User']['screen_name'],array('target'=>'_blank'));?></span>
            <span class="tweet-date"><?php echo h($tweet['Tweet']['tweet_date']);?></span>
            <p><?php echo $this->element('tw',array('tw'=>$tweet['Tweet']['tweet']));?></p>
            </div>
            </td></tr> <!-- tweet -->
            <?php endforeach;?>
            </tbody>
            </table>
        </div><!-- thumnail -->

    </div><!-- col-md-8 -->

</div><!-- row -->

<!-- modal -->
<div id="post-tweet" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Tweet</h4>
      </div>
      <div class="modal-body">
        <p>
            <?php //<label for="inputTweet">つぶやき</label> ?>
            <?php //<textarea class="form-control" rows="4"></textarea>?>
            <?php echo $this->Form->create('User',array('action'=>'update')); ?>
            <?php echo $this->Form->input('tweet',array('type'=>'textarea','rows'=>'4','cols'=>'90')); ?>
        </p>
      </div>
      <div class="modal-footer">
            <?php echo $this->Form->button('Close',array('class'=>'btn btn-default','data-dismiss'=>'modal')); ?>
            <?php echo $this->Form->button('Tweet',array('class'=>'btn btn-primary')); ?>
            <?php echo $this->Form->end(); ?>
            <?php //<button type="button" class="btn btn-primary" target="/users/update">Post tweet</button> ?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- JavaScript -->
<?php //echo $this->Html->script('sidebar');?>
