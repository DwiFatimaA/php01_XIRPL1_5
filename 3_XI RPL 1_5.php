<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP -3</title>
</head>
<body>
    <?php
    $Nama_Siswa[0]=array(
        'Nama'=>"Satria",
        'Kelas'=>"Rpl 1",
    );
    $Nama_Siswa[1]=array(
        'Nama'=>"Arsyi",
        'Kelas'=>"Rpl 2",
    );
    $Nama_Siswa[2]=array(
        'Nama'=>"Dhika",
        'Kelas'=>"Rpl 3",
    );
    $Nama_Siswa[3]=array(
        'Nama'=>"Evan",
        'Kelas'=>"Rpl 4",
    );
    $Nama_Siswa[4]=array(
        'Nama'=>"Fabian",
        'Kelas'=>"Rpl 5",
    );
    $Nama_Siswa[5]=array(
        'Nama'=>"Irfan",
        'Kelas'=>"Rpl 6",
    );
    $Hasil = array_slice($Nama_Siswa,0,2);
    echo "<pre>";
    print_r($Hasil);
    echo "</pre>";
    ?>  
</body>
</html>