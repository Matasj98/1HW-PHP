<?php
    require "vendor/autoload.php";

    error_reporting(0);

    $climate = new \League\CLImate\CLImate;

    $climate->red("Nfq\calculateHomeWorkSum: ".\Nfq\calculateHomeWorkSum(3, 2.2, '1'));
    $climate->blue("Nfq\Akademija\NotTyped\calculateHomeWorkSum: ".\Nfq\Akademija\NotTyped\calculateHomeWorkSum(3, 2.2, '1'));
    $climate->green("Nfq\Akademija\Soft\calculateHomeWorkSum: ".\Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1'));
    $climate->yellow("Nfq\Akademija\Strict\calculateHomeWorkSum: ".\Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1'));
?>