<?php 

include "Animal.php";

Class sapi{var $Cici;
function Bisa_beranak(){//$Cici-> Bisa_beranak;
}
function bersuara (){//$Cici-> mouuuuukkk mouuuuukkk;
}
} 

$Cici=new sapi;
$Cici->jumlah_kaki=4;
echo "Cici adalah sapi <br>";
echo"Punya kaki sebanyak:".$Cici-> jumlah_kaki."<br>";
echo "Bisa menghasilkan air susu". "<br>";
echo"Suaranya: mouuuuukkk mouuuuukkk". $Cici-> bersuara ()."<br>";
echo "<hr>";

Class domba {var $Baba;
function Bisa_beranak(){//$Baba->Bisa_beranak;
}
function bersuara (){//$Baba-> mbeeeeekkk mbeeeeekkk;
}
} 
$Baba=new domba;
$Baba->jumlah_kaki=4;
echo "Baba adalah domba <br>";
echo"Punya kaki sebanyak:".$Baba-> jumlah_kaki."<br>";
echo "Bisa berlari dengan kencang "."<br>";
echo"Suaranya: mbeeeeekkk mbeeeeekkk". $Baba-> bersuara ()."<br>";
echo "<hr>";

Class kucing {var $Kuceng;
function Bisa_beranak(){//$Kuceng->Bisa_beranak;
}
function bersuara (){//$Kuceng->meoongg meoongg;
}
} 
$Kuceng=new kucing;
$Kuceng->jumlah_kaki=4;
echo "Kuceng adalah kucing <br>";
echo"Punya kaki sebanyak:".$Kuceng-> jumlah_kaki."<br>";
echo "Bisa melahirkan anak banyak"."<br>";
echo"Suaranya: meoongg meoongg". $Kuceng-> bersuara ()."<br>";
echo "<hr>";

Class anjing{var $Lala;
function Bisa_beranak(){//$Lala-> Bisa_beranak;
}
function bersuara (){//$Lala-> guuukkkk guuukkkk;
}
} 

$Lala=new Anjing;
$Lala->jumlah_kaki=4;
echo "Lala adalah Anjing <br>";
echo "Punya kaki sebanyak:".$Lala-> jumlah_kaki."<br>";
echo "Bisa beranak". "<br>";
echo "Suaranya: guuukkkk guuukkkk". $Lala-> bersuara ()."<br>";
echo "<hr>";
 ?>