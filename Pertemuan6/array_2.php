<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'];
        echo "Nama : {$Dosen ['nama']} <br>"; //mencetak value dari key nama
        echo "Domisili : {$Dosen ['domisili']} <br>"; //mencetak value dari key domisili
        echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>"; //mencetak value dari key jenis-kelamin
        ?>
    </body>
</html>