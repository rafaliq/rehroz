<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$stays = new FieldsBuilder('stays', ['label' => 'pobyty']);

$stays
    ->addImage('photo1', ['label' => '1 zdjęcie w tle'])
    ->addImage('photo2', ['label' => '2 zdjęcie w tle'])
    ->addImage('photo3', ['label' => '3 zdjęcie w tle'])
    ->addFields(get_field_partial('components.title'))
        ->addRepeater('stays', ['label' => 'Pobyty'])
            ->addImage('icon', ['label' => 'Ikona'])
            ->addText('title', ['label' => 'Tytuł'])
            ->addTextArea('desc', ['label' => 'Opis'])
            ->addLink('link', ['label' => 'Link'])
            ->addRadio('pozycja', ['label' => 'Z której strony ikona?',  'wrapper' => ['width' => '20%']])
            ->addChoices('lewo', 'prawo');

return $stays;