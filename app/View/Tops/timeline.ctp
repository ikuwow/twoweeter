
<p>現在@<?php echo $me->screen_name;?>でログイン中</p>
<?php
echo $this->Html->link(
    'Logout',
    array(
        'controller'=>'users',
        'action'=>'logout'
    ),
    array(
        'class'=>array('btn','btn-warning','btn-lg')
    )
);
