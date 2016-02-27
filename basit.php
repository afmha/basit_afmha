<?php

	class afmha{
		
		public $yis = 0; //Sınıf içersinde kaç adet işlem yapıldığı tutulacak...
		
		public function mi($a="t",$b="0",$c="0"){ //Matematiksel işlemleri yapmak için hazırlanan bir fonksiyon. {Daha fazla geliştirilecek}
			
			switch($a){
				
				case "t":
					$x = $b+$c;
					echo $x;
				break;
				case "c":
					$x = $b-$c;
					echo $x;
				break;
				case "b":
					$x = $b/$c;
					echo $x;
				break;
				case "cc":
					$x = $b*$c;
					echo $x;
				break;
				case "ust":
					$x = pow($b,$c);
					echo $x;
				break;
				
			}
			$this->yis++; //Yapılan işlem sayısına bir sayı daha eklendi.
		}
		public function yis(){
			$this->yis++; //Yapılan işlem sayısına bir sayı daha eklendi.
			echo $this->yis;
		}
		
	}

?>
