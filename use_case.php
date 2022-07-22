<?php

require_once("./Config.php");

$cfg = new Config("config.json", Config::JSON);
echo "[FRIENDS] Enter friend: ";
$friend = substr(fgets(STDIN),0,-1);
$cfg->set($friend, "yes");
$cfg->save();

/*
For removing:
$cfg->remove($friend);
$cfg->save(); //Save
*/