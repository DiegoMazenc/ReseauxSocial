<?php
require_once("./models/Picture.php");

$pictures = Picture::getListAdmin();

include "./views/layout.phtml";

