<!-- <?php
    echo "Iam nadzif<br>";
    echo "Iam budi";
?> -->


<!-- text -->
<!-- <?php 

    // strings
    $name = "Budi";
    $kegiatan = "Makan siang";
    $email = "fake@gmail.com";

    // interger
    $age = 21;
    $siblings = 2;
    
    // float
    $gpa = 2.5;
    $price = 4.5;
    $discount = 20;

    // boolean
    $employed = true;
    $online = false;
    $for_sale = true;

    echo"Hello, {$name} <br>";
    echo"Ayo {$kegiatan} <br>";
    echo"Your email is {$email} <br>";

    echo"Your age is {$age}";
    echo"You have {$siblings} siblings <br>";

    echo"Your gpa is {$gpa}<br>";
    echo"Your pizza is \${$price}<br>";
    echo"Your pizza is ${$discount}<br>"; //undefined
    echo"Your pizza is {$discount}$<br>"; //defined
    echo"Your pizza is %{$discount}<br>"; 
    echo"Your pizza is {$discount}%<br>";
    echo"<br><br><br>";

    // contoh soal
    $harga_tempe = 2000;
    $jumlah_tempe = 1;
    $harga_ikan_balado = 4000;
    $jumlah_ikan = 1;
    $nama = "Budi";
    $total = null;

    echo"Atas nama {$nama} mengambil {$jumlah_tempe} tempe dan {$jumlah_ikan} ikan <br>";
    $total = ($harga_tempe * $jumlah_tempe) + ($harga_ikan_balado * $jumlah_ikan);
    echo"Total harga = Rp. {$total}";
?> -->


<!-- Aritmatika -->
<!-- <?php
    $x = 10;
    $y = 2;
    $z = null;

    // Penjumlahan
    $z = $x + $y; 
    echo"Hasilnya: {$z}<br>";
    
    // perkurangan
    $z = $x - $y; 
    echo"Hasilnya: {$z}<br>";

    // Perkalian 
    $z = $x * $y; 
    echo"Hasilnya: {$z}<br>";
    
    // Pembagian
    $z = $x / $y; 
    echo"Hasilnya: {$z}<br>";

    // Modulus
    $z = $x % $y; 
    echo"Hasilnya: {$z}<br>";
    // echo"Hasilnya = {$z}";
    echo $z;
?> -->

<!-- Incerement/Decrement operators -->
<!-- <?php
    $counter = 0;

    $counter += 2; 
    // atau
    $counter1 = $counter + 2 ;
    echo "{$counter1} <br>";

    $counter += 2; 
    // atau
    $counter1 = $counter - 2 ;
    echo "{$counter1} <br>";

?> -->



<!-- Operator Precedence -->
<!-- <!-- <?php
    // () urutan 1
    // ** urutan 2
    // * / % urutan 3
    // + / - urutan 4
    $total = 1 + 2 -3 * 4 / 5 ** 6;
    echo $total;
?> -->

<!-- $_GET and $_POST  -->
<!-- $_GET -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <label for="">Password</label>
        <input type="text" name="password"><br>
        <input type="submit" value="log in">
    </form>
</body>
</html>
<?php
    echo $_GET["username"]. "<br>";
    echo $_GET["password"] . "<br><br>";
    // or
    echo "{$_GET["username"]}<br>";
    echo "{$_GET["password"]}<br>";

?> -->
<!-- $_POST -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <label for="">Password</label>
        <input type="text" name="password"><br>
        <input type="submit" value="log in">
    </form>
</body>
</html>
<?php
    echo $_GET["username"]. "<br>";
    echo $_GET["password"] . "<br><br>";
    // or
    echo "{$_GET["username"]}<br>";
    echo "{$_GET["password"]}<br>";

?> -->
<!-- exercise -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Harga ikan Rp 4.000</p>
    <form action="index.php" method="post"> 
        <label for="">Input Jumlah Ikan</label><br>
        <input type="text" name="jumlah_ikan"><br>
        <input type="submit" value="log in">
    </form>
</body>
</html>
<?php

    $harga_ikan = 4000;
    $jumlah_ikan = $_POST["jumlah_ikan"];
    $total = null;
    $total = $jumlah_ikan * $harga_ikan;
    echo "Jumlah ikan yang diambil {$jumlah_ikan}. Total ikan adalah {$total} <br><br><br><br>"
?>
</body>
</html> -->







<!-- PHP useful math functions you should know -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Radius:</label>
        <input type="text" name="radius"><br>
        <label for=""></label>
        <input type="text" name="y"> -->
        <!-- <label for="">Radius: </label>
        <input type="text" name="radius"><br>
        <input type="submit">
    </form>
</body>
</html> -->

<!-- <?php 
    $radius = $_POST["radius"];
    $total = null;

    // $total = abs($x); menetapkan nilai $total agar sama dengan nilai mutlak (absolut)
    // $total = round($x); membulatkan bilangan terdekat
    // $total = floor($x); decimal ke bawah
    // $total = ceil($x); decimal ke atas
    // $total = pow($x, $y); perpangkatan (X^y) 
    // $total = sqrt($x); per-akaran
    // $total = max($x,$y,$z); angka terbesar
    // $total = min($x,$y,$z); mencari angka terkecil
    // $total = pi(); nilai phi
    // $total = rand(1, 6); membuat angka random
    $rumus = 2 * pi() * $radius;
    $total = $rumus; 
    echo $total;

?>  -->



<!-- if statement -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Apakah anda termasuk adult atau childern:</label>
        <input type="number" name="age">
        <input type="submit" value="klik">
    </form>
</body>
</html>
<?php
    $age = $_POST["age"];

    if($age >= 18){
        echo "Adult";
    }
    else{
        echo "Still children";
    }
?>  -->



<!-- switch statement -->
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Jika hari ini adalah hari jumat, besok adalah hari apa?</p>
    <p>a. Jumat</p>
    <p>b. Sabtu</p>
    <p>c. Kamis</p>
    <form action="index.php" method="post">
        <label for="">Ketik jawabannya (a,b,c):</label><br>
        <input type="text" name="jawaban" require><br><br>
        <input type="submit" value="Klik">
    </form>
</body>
</html>
<?php

    $jawaban = $_POST["jawaban"];

    switch ($jawaban) {
        case "a":
            echo "Salah";
            break;
        case "b":
            echo "Benar";
            break;
        case "c":
            echo "Salah";
            break;
        default:
        echo "Harus di isi";
    }
?> -->




<!-- Match Expression -->
<!-- string -->
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Jika hari ini adalah hari jumat, besok adalah hari apa?</p>
    <form action="index.php" method="post">
        <label for="">Ketik jawabannya:</label><br>
        <input type="text" name="jawaban" require><br><br>
        <input type="submit" value="Klik">
    </form>
</body>
</html>
<?php  

    $jawaban = $_POST["jawaban"];
    $text = match($jawaban) {
    "Sabtu","sabtu" => "Benar",
    "Jumat","jumat"=> "Salah",
    "Kamis", "kamis" => "Salah",
    default => "Harap Isi!",
    };

    echo $text;
?>

<!-- intergral -->

<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>2. 2+2 adalah....</p>
    <form action="index.php" method="post">
        <label for="">Ketik jawabannya (angka):</label><br>
        <input type="text" name="jawaban" require><br><br>
        <input type="submit" value="Klik">
    </form>
</body>
</html>
<?php  
    $jawaban = $_POST["jawaban"];
    $text = match($jawaban) {
    "4" => "Benar",
    "2" => "Salah",
    "3" => "Salah",
    default => "Harap Isi!",
    };

    echo $text;
?> -->

<!-- while -->
<!-- <?php 
    $i = 1; 
    while ($i < 6) { 
        echo $i; 
    $i++;
    }
    echo "<br>";
    $i = 2;
    while ($i < 6) {
    if ($i == 3) break;
    echo $i;
    $i++;
    }
    echo "<br>";
    $i = 0;
    while ($i < 6) {
        $i++;
        if ($i == 3) continue; // Skip angka 3
    echo $i;
    }
?> -->

<!-- do loop -->
<!-- <?php 
    $i = 1;

    do {
        echo $i;
        $i++;
    } while ($i < 6);
?> -->



<!-- for loop -->

<!-- <?php
    // $i = 
    for ($i=0; $i <= 100 ; $i++) { 
        echo"Hello <br>";
        
    }
?> -->


<!-- function -->

<!-- <?php 
    function myMessage(){
        echo "Hello world";
    }

    myMessage()
?> -->

<!-- <?php 
    // function fungsi($fname){
    //     echo "Hello {$fname}";
    // }

    // fungsi("Budi");
?> -->
<?php 
// function hello($fname, $kegiatan) { 
//     echo "Hello {$fname}, {$kegiatan}"; 
// } 

// hello("Budi", "Makan yuk"); 
// ?>





