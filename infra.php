<?php
namespace infrajs\controller;
use infrajs\path\Path;
use infrajs\event\Event;

Event::handler('oninit', function () {
	ext\layers::init();
});