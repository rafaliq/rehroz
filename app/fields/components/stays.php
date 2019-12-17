<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$stays = new FieldsBuilder('stays', ['label' => 'pobyty']);

return $stays;