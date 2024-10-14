<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kamen Rider</title>
</head>

<body>
    <?php
    $namasepatu = isset($_GET['name']) ? $_GET['name'] : '';

    if ($namasepatu == 'NIKE') {
        echo "<h1>Detail Sepatu NIKE</h1>";
        echo "<p>Merek global dengan teknologi inovatif seperti Air, cocok untuk olahraga dan gaya sehari-hari.</p>";
    } elseif ($namasepatu == 'ADIDAS') {
        echo "<h1>Detail Sepatu ADIDAS</h1>";
        echo "<p>Ikonik dengan teknologi Boost dan Primeknit, ideal untuk olahraga seperti lari dan sepak bola.</p>";
    } elseif ($namasepatu == 'ORTUSEIGHT') {
        echo "<h1>Detail Sepatu ORTUSEIGHT</h1>";
        echo "<p>Merek lokal Indonesia dengan sepatu terjangkau untuk sepak bola dan futsal.</p>";
    } elseif ($namasepatu == 'MIZUNO') {
        echo "<h1>Detail Sepatu MIZUNO</h1>";
        echo "<p>Merek Jepang yang fokus pada stabilitas dan kualitas, terutama untuk lari dan sepak bola.</p>";
    } elseif ($namasepatu == 'PUMA') {
        echo "<h1>Detail Sepatu PUMA</h1>";
        echo "<p>Kombinasi performa dan gaya kasual, cocok untuk berbagai olahraga dan gaya urban</p>";
    } elseif ($namasepatu == 'UMBRO') {
        echo "<h1>Detail Sepatu UMBRO</h1>";
        echo "<p>Merek Inggris dengan desain klasik, fokus pada sepatu sepak bola dan futsal.</p>";
    } elseif ($namasepatu == 'SPECS') {
        echo "<h1>Detail Sepatu SPECS</h1>";
        echo "<p>Merek Indonesia yang menawarkan sepatu bola berkualitas dengan harga terjangkau.</p>";
    }
    ?>

    <a href="dashboard.php">Kembali ke Daftar Kamen Rider</a>
</body>

</html>