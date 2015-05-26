<?php
require_once 'Vatsimphp\vendor\autoload.php';

$logFile = 'Vatsimphp\vendor\skymeyer\vatsimphp\app\logsusers.log';

$vatsim = new \Vatsimphp\VatsimData();
$vatsim->setConfig('cacheOnly', true);
$vatsim->setConfig('logFile', $logFile);

if ($vatsim->loadData()) {
    $info = $vatsim->getGeneralInfo()->toArray();
}

?>

<?php
    echo "<style=\"color: white;\">Total Users Online: {$info['connected_clients']}";

?>
