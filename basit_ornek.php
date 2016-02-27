<?php

  include("basit.php");
  
  $x = new afmha; //afmha sınıfını $x değişkenine atadım.
	$x->mi("ust","3","3"); //afmha sınıfındaki "mi" fonksiyonunu çağırttım ve 3 üsttü 3 değerini hesaplattırıp ekrana yazdırdım. Bu sırada yapılan işlem sayısı 1 arttı.
	echo '<br>';
	$x->yis(); //Toplamda yapılan işlem sayısını ekrana yazdırdım.

?>
