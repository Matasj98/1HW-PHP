<?php
    require "vendor/autoload.php";

    $climate = new \League\CLImate\CLImate;

    function myerror($errno, $errstr, $errfile, $errline) {
        echo "\nCustom error: [$errno] $errstr\n";
        echo "Error on line $errline in $errfile\n";
        die();
     }

    set_error_handler("myerror"); 

    try{
        $climate->red("Nfq\calculateHomeWorkSum: ".\root\calculateHomeWorkSum(3, 2.2, '1'));
        $climate->blue("Nfq\Akademija\NotTyped\calculateHomeWorkSum: ".\Nfq\Akademija\NotTyped\calculateHomeWorkSum(3, 2.2, '1'));
        $climate->green("Nfq\Akademija\Soft\calculateHomeWorkSum: ".\Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1'));
        $climate->yellow("Nfq\Akademija\Strict\calculateHomeWorkSum: ".\Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1'));
    }catch(Error $e){
        echo "\n$e";
    }
?>