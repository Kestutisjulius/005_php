<?php
/* 
Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

*/
echo '<pre>';
$ar = [];
foreach(range(1,30) as $element){
$ar[$element]=rand(5,25);
}

/* 
Naudodamiesi 1 uždavinio masyvu:
Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

*/
$c0untVal = 0;
$max = 0;
$lyginiuKeyReiksmiuSuma = 0;
foreach($ar as $key => $val){
    if($val > 10){
        $c0untVal++;
    }
    if($max < $val){
        $max = $val;
    }

}
foreach($ar as $key2 => $val2){
    if ($max == $val2){
        print_r ("$key2 : $val2");
        echo '<br>';
    }
    if($key2 % 2 == 0){
        $lyginiuKeyReiksmiuSuma += $key2;
    }
}
echo '<br>';
print_r ('lyginiuKeyReiksmiuSuma =' .$lyginiuKeyReiksmiuSuma);