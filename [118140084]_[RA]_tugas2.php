<!DOCTYPE html>
<html lang="en">
<head>
    <title>118140084</title>
</head>
<body>
    <?php
        $nilai = [88,78,56,74,82,62,94,70,68,87,92,80,89,90,66];
        echo "Nilai siswa : ";
        foreach($nilai as $data){
            echo $data. "   ";
        }
        echo "<br>";

        $mean=0;
        foreach($nilai as $data){
            $mean +=$data;
        }

        $mean/=count($nilai);
        echo "Rata-rata nilai adalah = " . $mean . "<br>";

        $grade;
        if($mean > 90 && $mean<=100){
            $grade="A";
        }else if($mean > 80 && $mean<=90){
            $grade="B";
        }else if($mean > 70 && $mean<=80){
            $grade="C";
        }else if($mean > 60 && $mean<=70){
            $grade="D";
        }else if($mean > 0 && $mean<50){
            $grade="E";
        }
        echo "Lulus dengan nilai = " . $grade;
        echo "<br>";

        sort($nilai);
        echo "Daftar 5 Nilai Terendah : ";
        for($i =0 ;$i<5; $i++){
            echo $nilai[$i] . " ";
        }
        echo "<br>";
        echo "Daftar 5 Nilai Tertinggi : ";
        for($i = count($nilai)-5 ;$i<count($nilai); $i++){
            echo $nilai[$i] . " ";
        }
    ?>
</body>
</html>