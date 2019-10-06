<?php

session_start();

require 'config/config.php';

require "libs/Bootstrap.php";
require "libs/Controller.php";
require "libs/Model.php";
require "libs/Database.php";
require "libs/View.php";

$app = new Bootstrap();