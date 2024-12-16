<?php

namespace app;

use stdClass;

$adam = new NaturalPerson('adam dias', '12312332');
$adam->gender = 'male';

$dinamicObject = new stdClass();
$dinamicObject->name = 'Adam dias';
$dinamicObject->document = '123124';
$dinamicObject->gender = 'male';

$stringJson = '{"name": "adam dias","document": "123423","gender": "male"}';
$jsonObject = json_decode($stringJson, true);

dump($adam,$dinamicObject);

dump($adam->gender, $dinamicObject->gender, $jsonObject);

