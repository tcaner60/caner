<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Anket Sonuçları</title>
    <style>
        /* Stil bilgileri burada... */
    </style>
</head>
<body>
    <div class="container">
        <h1>Anket Sonuçları</h1>
        
// Veritabanı bilgileri
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $soru1 = isset($_POST['soru1']) ? $_POST['soru1'] : "";
    $soru2 = isset($_POST['soru2']) ? $_POST['soru2'] : "";
    $soru3 = isset($_POST['soru3']) ? $_POST['soru3'] : "";
    $soru4 = isset($_POST['soru4']) ? $_POST['soru4'] : "";
    $soru5 = isset($_POST['soru5']) ? $_POST['soru5'] : "";
    $soru6 = isset($_POST['soru6']) ? $_POST['soru6'] : "";
    $soru7 = isset($_POST['soru7']) ? $_POST['soru7'] : "";
    $soru8 = isset($_POST['soru8']) ? $_POST['soru8'] : "";
    $soru9 = isset($_POST['soru9']) ? $_POST['soru9'] : "";
    $soru10 = isset($_POST['soru10']) ? $_POST['soru10'] : "";
    $soru11 = isset($_POST['soru11']) ? $_POST['soru11'] : "";
    $soru12 = isset($_POST['soru12']) ? $_POST['soru12'] : "";
    $soru13 = isset($_POST['soru13']) ? $_POST['soru13'] : "";
    $soru14 = isset($_POST['soru14']) ? $_POST['soru14'] : "";
    $soru15 = isset($_POST['soru15']) ? $_POST['soru15'] : "";
    $soru16 = isset($_POST['soru16']) ? $_POST['soru16'] : "";
    $soru17 = isset($_POST['soru17']) ? $_POST['soru17'] : "";
    $soru18 = isset($_POST['soru18']) ? $_POST['soru18'] : "";
    $soru19 = isset($_POST['soru19']) ? $_POST['soru19'] : "";
    $soru20 = isset($_POST['soru20']) ? $_POST['soru20'] : "";
    $soru21 = isset($_POST['soru21']) ? $_POST['soru21'] : "";
    $soru22 = isset($_POST['soru22']) ? $_POST['soru22'] : "";
    $soru23 = isset($_POST['soru23']) ? $_POST['soru23'] : "";
    $soru24 = isset($_POST['soru24']) ? $_POST['soru24'] : "";
    $soru25 = isset($_POST['soru25']) ? $_POST['soru25'] : "";
    $soru26s1 = isset($_POST['soru26s1']) ? $_POST['soru26s1'] : "";
    $soru26s2 = isset($_POST['soru26s2']) ? $_POST['soru26s2'] : "";
    $soru26s3 = isset($_POST['soru26s3']) ? $_POST['soru26s3'] : "";
    $soru26s4 = isset($_POST['soru26s4']) ? $_POST['soru26s4'] : "";
    $soru27 = isset($_POST['soru27']) ? $_POST['soru27'] : "";
    $soru28 = isset($_POST['soru28']) ? $_POST['soru28'] : "";
    $soru29 = isset($_POST['soru29']) ? $_POST['soru29'] : "";
    $soru30 = isset($_POST['soru30']) ? $_POST['soru30'] : "";
}

$servername = "localhost";
$username = "root";
$password = "rootroot";
$database = "anketodev";

// Veritabanı bağlantısını oluşturun
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantayı kontrol edin
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 30 soruyu alın ve SQL sorgusunu oluşturun
    $sql = "INSERT INTO anket (";
    $values = "VALUES (";
    for ($i = 1; $i <= 30; $i++) {
        $soru = "soru" . $i;
        if ($i == 26) {
            // Checkbox sorusu için her bir seçeneği ayrı ayrı alın
            $sql .= "soru26s1, soru26s2, soru26s3, soru26s4, ";
            $values .= "'" . $conn->real_escape_string($soru26s1) . "', ";
            $values .= "'" . $conn->real_escape_string($soru26s2) . "', ";
            $values .= "'" . $conn->real_escape_string($soru26s3) . "', ";
            $values .= "'" . $conn->real_escape_string($soru26s4) . "', ";
        } else {
            // Diğer soruları alın
            $yanit = $_POST[$soru];
            $sql .= $soru . ", ";
            $values .= "'" . $conn->real_escape_string($yanit) . "', ";
        }
    }
    $sql = rtrim($sql, ", ") . ") ";
    $values = rtrim($values, ", ") . ")";

    $sql = $sql . $values;

    if ($conn->query($sql) === TRUE) {
        echo "Anket yanıtları başarıyla kaydedildi.";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

// Veritabanı bağlantısını kapatın
$conn->close();
?>


    </div>
</body>
</html>
