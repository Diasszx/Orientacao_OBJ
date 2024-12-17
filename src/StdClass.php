<?php

namespace app;

use stdClass;
use app\NaturalPerson;

$api = '{"name": "adam dias","document": "123423","gender": "male"}';

$person = new PersonDTO(json_decode($api, true));

