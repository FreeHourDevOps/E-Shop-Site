<?php
$bulk = new MongoDB\Driver\BulkWrite;
$doc= ['title' => 'one'];

$id = $bulk->insert($doc);
var_dump($id);
$mng = new MongoDB\Driver\Manager();
$res = $mng->executeBulkWrite('giraffe.students',$bulk); // namespace: db_name . collection_nmae
?>