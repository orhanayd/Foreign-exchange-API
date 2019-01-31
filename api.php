<?php
    $amount=10; // for Currency convert
    $base="USD"; // default currency
?>
<html>
<head>
<title>Foreign exchange API</title>
</head>
<body>
<a href="https://github.com/orhanayd/Foreign-exchange-API" target="_blank">Github</a> || <a href="https://api.orhanaydogdu.com.tr/index.php?doc=exchange.yaml" target="_blank">Swagger UI</a>
<!-- latest foreign exchange -->
<h2>Get the latest foreign exchange:</h2>
<?php
    $file=json_decode(file_get_contents("https://api.orhanaydogdu.com.tr/exchange/?base=$base"));
    foreach($file->result->rates as $key=> $raw){
        echo "<strong>$key:</strong> $raw<br>";
    }
?>
<hr>
<!-- latest foreign exchange JUST TRY, EUR, JPY -->
<h2>Get the latest foreign exchange for TRY, EUR, JPY:</h2>
<?php
    $file=json_decode(file_get_contents("https://api.orhanaydogdu.com.tr/exchange/?base=$base&symbols=TRY,EUR,JPY"));
    foreach($file->result->rates as $key=> $raw){
        echo "<strong>$key:</strong> $raw<br>";
    }
?>
<hr>
<!-- Currency convert amount 10 & base USD -->
<h2>Currency convert:</h2>
<?php
    $file=json_decode(file_get_contents("https://api.orhanaydogdu.com.tr/exchange/?base=$base&exchange=$amount"));
    foreach($file->result->rates as $key=> $raw){
        echo "<strong>$key:</strong> $raw<br>";
    }
?>
<hr>
<!-- Currency convert amount 10 & base USD, JUST for TRY, EUR, JPY you can change with symbols parameters -->
<h2>Currency convert for TRY, EUR, JPY</h2>
<?php
    $file=json_decode(file_get_contents("https://api.orhanaydogdu.com.tr/exchange/?base=$base&exchange=$amount&symbols=TRY,EUR,JPY"));
    foreach($file->result->rates as $key=> $raw){
        echo "<strong>$key:</strong> $raw<br>";
    }
?>
</body>
</html>