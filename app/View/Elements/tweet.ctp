<!-- tweet -->
<!-- elementでやるとメモリが足りなくなるから使っていない -->

<span class="fullname">
<?php echo $this->Html->link(h($tweet['User']['name']),'http://twitter.com/'.$tweet['User']['screen_name'],array('target'=>'_blank'));?>
</span>

<span class="username">
<?php echo $this->Html->link('@'.h($tweet['User']['screen_name']),'http://twitter.com/'.$tweet['User']['screen_name'],array('target'=>'_blank'));?>
</span>

<span class="tweet-date">
<?php echo h($tweet['Tweet']['tweet_date']);?>
</span>

<p>
<?php echo mb_ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]", "<a href=\"\\0\" target=\"_blank\">\\0</a>",h($tweet['Tweet']['tweet']));?>
</p>
