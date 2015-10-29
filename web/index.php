<?php

use Rs\Json\Patch;

require('../vendor/autoload.php');

$tension = '{
    "role": {
        "0": {},
        "1": {}
    }
}';

/*$patchDocument  = '[
    { "op": "add", "path": "/", "value": {"path": "/role", "action": "add"}},
    { "op": "update", "path": "/", "value": {"path": "/role", "action": "add"}}
]';*/

$patchDocument = '[
    { "op": "add", "path": "/role", "value": {"0": {},"1" :{}}},
    { "op": "add", "path": "/role/0/name", "value": "titi"},
    { "op": "add", "path": "/role/1/name", "value": "toto"},
    { "op": "add", "path": "/role/stringid/name", "value": "toto"},
    { "op": "replace", "path": "/role/0", "value": {"name": "tutu"}}
]';
$test = new Patch($tension, $patchDocument);
echo $test->apply();



