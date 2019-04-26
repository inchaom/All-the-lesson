
<?php 
include_once "EAON.php";
    class Borrowed implements EAON{
       public $borrow;
       public $payMent;
       public $interest;
       
        public function borrows($interest,$borrows){
            $totalMoneyPay=$borrows+($borrows*$interest*12)/100;
            // return $totalMoneyPay;
            echo "Total Money to Pay for EAON is ".$totalMoneyPay. "$ <br>";

            // return $totalMoneyPayMent;
            $totalMoneyPayMent = ($totalMoneyPay/12);
            echo "Total Money to Payment is ".$totalMoneyPayMent. "$ <br>";

            // return $totalMoneyInterest;
            $totalMoneyInterest =($borrows*$interest*12)/100;
            echo "Total Money to interest is ".$totalMoneyInterest ."$";
        }
    }
    $borroweds = new Borrowed();
    echo $borroweds->borrows(1.9,870);
   


?>