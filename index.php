<?php

$sessionData = ['name' => 'hexlet', 'type' => 'admin'];

$serializedSessionData = serialize($sessionData);

echo $serializedSessionData;