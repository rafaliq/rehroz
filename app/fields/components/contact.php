<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$contact = new FieldsBuilder('contact', ['label' => 'Kontakt']);

return $contact;