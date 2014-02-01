<?php
echo 'here is timeline.ctp';
debug($me);
echo $this->Html->link(
    'Logout',
    array(
        'controller'=>'Users',
        'action'=>'logout'
    ),
    array(
        'class'=>array('btn','btn-warning','btn-lg')
    )
);
