
<?php 
include_once "CalculateArea.php";
class Calculate implements CalculateArea{
    public function Square($corner) {
        $this->corner=$corner;
        $square=$corner*$corner;
        return $square."<br>";

        
    }
    public function Rectangular($long,$width){
        $this->width=$width;
        $this->long=$long;
        $rectangular=$long*$width;
        return $rectangular."<br>";

        
    }
    public function Circle($R){
        $this->R=$R;
        $circle=$R*$R;

        return $circle."<br>";
    }

} 

$square = new Calculate();
 echo $square->Square(8);

 $total = new Calculate();
 echo $total->Rectangular(3,9);

 $totals = new Calculate();
 echo $totals->Circle(9);
 


?>