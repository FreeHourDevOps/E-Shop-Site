<?php
$mng = new MongoDB\Driver\Manager();
$stats = new MongoDb\Driver\Command(["dbstats" => 1]);
$res = $mng->executeCommand("shop",$stats);
$stats = current($res->toArray());
print_r($stats);
