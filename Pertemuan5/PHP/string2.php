<?php

echo "Baris\nbaru <br>"; //soal 10.a karena berada di dalam " " maka fungsi \n akan dijalankan yaitu membuat baris baru
echo 'Baris\nbaru <br>'; //soal 10.b karena berada di dalam ' ' maka akan menampilkan \n apa adanya tanpa menjalankan fungsinya
echo "Halo\rDunia <br>"; //soal 10.c karena berada di dalam " " maka fungsi \r akan dijalankan sehingga akan ada jeda setelah Halo
echo 'Halo\rDunia <br>'; //soal 10.d akan menampilkan Halo\rDunia karena berada dalam ' '

echo "<pre>Halo\tDunia!</pre>"; //soal 10.e fungsi \t tab akan dijalankan karena berada dalam " "
echo '<pre>Halo\tDunia!</pre>'; //soal 10.f menampilkan Halo\tDunia karena berada dalam ' '

echo "Katakanlah \"Tidak pada narkoba!\" <br>"; //soal 10.g \" akan mencetak petik dua 
echo 'Katakanlah \'Tidak pada narkoba!\' <br>'; //soal 10.g \' akan mencetak petik satu
