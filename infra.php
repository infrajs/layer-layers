<?php
namespace infrajs\controller;
use infrajs\path\Path;
use infrajs\event\Event;

Path::req('*controller/infra.php');
Event::handler('oninit', function () {
	ext\layers::init();
});