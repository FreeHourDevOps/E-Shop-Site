<?php
try {
    $mng = new MongoDB\Driver\Manager();
    $query = new MongoDb\Driver\Query([]);

    $rows = $mng->executeQuery("giraffe.students", $query);
    foreach ($rows as $row)
    {
        echo "$row->_id : $row->title" . "<br>";

    }

}
catch (MongoDB\Driver\Exception $e)
{
    $filename = basename(__FILE__);
    echo "The $filename Script ha experienced an error.\n";
    echo "Failed!!";
    echo "Exception : ".$e->getMessage().'\n';
    echo "File : ".$e->getFile().'\n';
    echo "Line : ".$e->getLine().'\n';
}