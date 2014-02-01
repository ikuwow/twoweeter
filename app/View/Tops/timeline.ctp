<?php
echo 'here is timeline.ctp';
debug($me);
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
