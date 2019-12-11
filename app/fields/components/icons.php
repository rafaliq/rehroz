<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$icons = new FieldsBuilder('icons', ['label' => 'boxy z ikonami']);

$icons
    ->addFields(get_field_partial('components.title'))
    ->addRepeater('icons', ['label' => 'Zdjęcia'])
      ->addImage('icon', ['label' => 'Zdjęcie'])
      ->addText('title', ['label' => 'Tytuł zdjęcia'])
      ->addRadio('button', ['title'=>'Obrazek z odnośnikiem'])
      ->addChoices('nie', 'tak')
     ->addLink('link')
        ->conditional('button', '==', 'tak');

return $icons;