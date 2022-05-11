<?php
/* 
Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

*/
echo '<pre>';
$ar = [];
$arC = [];
$lyg = [];
$nelyg = [];
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
$min = 30;
$lyginiuKeyReiksmiuSuma = 0;
foreach($ar as $key => $val){
    if($val > 10){
        $c0untVal++;
    }
    if($max < $val){
        $max = $val;
    }
    $arC[]=$val-$key;
    if($val > 10){
        if($min > $key){
            $min = $key;
        }
    }
}
print_r ('maziausias key where value > 10:'."$min");
echo '<br>';
foreach($ar as $key2 => $val2){
    if ($max == $val2){
        print_r ("$key2 : $val2");
        echo '<br>';
    }
    if($key2 % 2 == 0){
        $lyginiuKeyReiksmiuSuma += $key2;
        $lyg[]=$key2;
     }else{
         $nelyg[]=$key2;
     }

}
echo '<br>';
print_r ('lyginiuKeyReiksmiuSuma =' .$lyginiuKeyReiksmiuSuma);
foreach(range(1,10) as $elementX){
    $arC[]=rand(5,25);
    }
  
 foreach($ar as $k => $v) {
     if($k % 2 == 0 && $k > 15){
         $ar[$k] = 0;
     } 
     
 } 
 foreach($ar as $k1 => $v1) {
     if($k1 % 2 == 0){
         unset($ar[$k1]);
     } 
 } 
 /* 
    Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. 
    Suskaičiuokite kiek yra kiekvienos raidės.

 */
$l = [];
$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;
$letters = ['A', 'B', 'C', 'D'];
 foreach(range(1, 200) as $var){
    $l[]= $letters[rand(0,3)];
 }
foreach($l as $component){
    if($component == 'A'){
        $countA ++;
    }
    if($component == 'B'){
        $countB ++;
    }
    if($component == 'C'){
        $countC ++;
    }
    if($component == 'D'){
        $countD ++;
    }
}
/* Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.*/
sort($l);
/* 
    Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
    Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
    Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) 
    reikšmių ir kiek unikalių kombinacijų gavote.

*/
$l1 = [];
$l2 = [];
$l3 = [];
$l4 = [];
$kombinaciju = 0;
foreach(range(1, 200) as $vr){
    $l1[]= $letters[rand(0,3)];
 }
foreach(range(1, 200) as $vr){
    $l2[]= $letters[rand(0,3)];
 }
foreach(range(1, 200) as $vr){
    $l3[]= $letters[rand(0,3)];
 }

 foreach($l1 as $kx => $v1){
     $l4[]= $l1[$kx].$l2[$kx].$l3[$kx];
 }
 sort($l4);
 $stringas = '';
 foreach($l4 as $raktai => $reiksme){

    if($stringas != $reiksme){
        $stringas = $reiksme;
        $kombinaciju ++;
    }
 }

 /* Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999.
   Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
*/
$q = [];
$q2 = [];
$q3 = [];
$numQ = 100;
$num = 0;
foreach(range(1,100) as $uniq){
    $q[]=rand(100,999);
}
$q = array_unique($q);
while(sizeof($q)<100){
    $q[]=rand(100,999);
    $q = array_unique($q);
}
echo '<br>';

foreach(range(1,100) as $uniq2){
    $q2[]=rand(100,999);
}
$q2 = array_unique($q2);
while(sizeof($q2)<100){
    $q2[]=rand(100,999);
    $q2 = array_unique($q2);
}



/* 
    Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.

*/
foreach($q as $rkt => $m){

    if(in_array($m, $q2)){
        unset($q[$rkt]);
    } 
    $q3[] = $m; 
}
foreach($q3 as $r3){

    if(in_array($r3, $q2)){
        echo 'RADAU';
    }
}
sort($q3);
echo sizeof($q3);
print_r ($q3);