<?php
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang-$thn_lahir;
    return $umur;
}

function perkenalan ($nama, $salam="Assalamualaikum"){ // "Assalaumualaikum adalah nilai default dari parameter nilai salam
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama. "<br/>";
    
    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2003, 2023)." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}
//memanggil fungsi perkenalan
perkenalan("Nairsya"); //karena argumen dari parameter salam tidak diisi, maka yang tampil nanti adalah  nilai defaultnya yaitu Assalamualaikum
?>