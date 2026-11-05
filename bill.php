<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $units = (int)$_POST['units'];
    $rate = (float)$_POST['rate'];
    
    $total = $units * $rate;
    
    echo "<h3>Electricity Bill</h3>";
    echo "Units Consumed: " . $units . " kWh<br>";
    echo "Tariff Rate: $" . number_format($rate, 2) . " per kWh<br>";
    echo "Total Cost: $" . number_format($total, 2);
}
?>