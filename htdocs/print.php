<?php
require("../_config.inc.php");

$id = $myRequest->getI("id");


$lng_id = $myRequest->getI("lng_id");

$myPage = new PhenotypePage($id);
$myPage->switchLanguage($lng_id);
$mySmarty = new PhenotypeSmarty;
$myPage->printview();
