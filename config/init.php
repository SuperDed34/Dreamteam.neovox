<?php

const DEBUG = 1;
define("ROOT", dirname(__DIR__));
const WWW = ROOT . '/public';
const APP = ROOT . '/app';
const CORE = ROOT . '/vendor/max';
const HELPERS = ROOT . '/vendor/max/helpers';
const CACHE = ROOT . '/tmp/cache';
const LOGS = ROOT . '/tmp/logs';
const CONFIG = ROOT . '/config';
const LAYOUT = 'ishop';
const PATH = 'http://dreamteam.neovox:81';
const ADMIN = 'http://dreamteam.neovox:81/admin';
const NO_IMAGE = 'uploads/no_image.jpg';

require_once ROOT.'/vendor/autoload.php';


