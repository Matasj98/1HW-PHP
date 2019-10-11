<?php
    namespace Nfq\Akademija\NotTyped;

    class calculate{
        public function calculateHomeWorkSum(...$numbers): int{
            $sum = 0;
            foreach($numbers as $number){
                $sum += $number;
            }
            return $sum;
        }
    }
?>