<?php

// Создайте таблицу: city_id, city_name, city_forecast
$result = "Сервис недоступен";

//Замените на актуальные значения
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "radmirxan";
@$conn = new mysqli( $servername, $username, $password, $dbname);

if (!$conn->connect_error) {
    $result = "Данные отсутствуют";
    $request = "SELECT city_forecast FROM forecast WHERE city_name = '10'";
    $response = $conn->query($request);
    if ($response->num_rows > 0) {
        $rows = $response->fetch_array();
        $result = $rows[0];
    }
    mysqli_close($conn);
}

echo "<h1>".$result."</h1>";

?>