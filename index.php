<?php
    require "vendor/autoload.php";

    // ini_set('error_reporting',E_ALL);
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);

    $climate = new \League\CLImate\CLImate;

    $Root = new \Nfq\calculate;
    $NotTyped = new \Nfq\Akademija\NotTyped\calculate; 
    $Soft = new \Nfq\Akademija\Soft\calculate; 
    $Strict = new \Nfq\Akademija\Strict\calculate;

    $climate->red("calculateHomeWorkSum: ".$Root->calculateHomeWorkSum(3, 2.2, '1'));
    $climate->blue("Nfq\Akademija\NotTyped\calculateHomeWorkSum: ".$NotTyped->calculateHomeWorkSum(3, 2.2, '1'));
    $climate->green("Nfq\Akademija\Soft\calculateHomeWorkSum: ".$Soft->calculateHomeWorkSum(3, 2.2, '1'));
    $climate->yellow("Nfq\Akademija\Strict\calculateHomeWorkSum: ".$Strict->calculateHomeWorkSum(3, 2.2, '1'));
?>