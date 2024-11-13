<?php 
require 'shared/header.php'; 
require 'db_connect/db_connection.php';

// SQL-запрос для выборки всех записей из таблицы Vehicle
$sql = "SELECT * FROM unit";

try {
    // Выполнение запроса
    $stmt = $pdo->query($sql);
    
    // Проверка, есть ли записи в таблице
    if ($stmt->rowCount() > 0) {
        
        echo '<h2>Список подразделений</h2>';
        
        echo '<div class="table-container">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Личный состав</th>
                        <th>Техника</th>
                        <th>Вооружение</th>
                        <th>Военная часть</th>
                        <th>Тип</th>
                    </tr>';
        
        // Перебираем все записи
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['unit_id']) . "</td>
                    <td>" . htmlspecialchars($row['name']) . "</td>
                    <td>" . htmlspecialchars($row['soldier_id']) . "</td>
                    <td>" . htmlspecialchars($row['vehicle_id']) . "</td>
                    <td>" . htmlspecialchars($row['weapon_id']) . "</td>
                    <td>" . htmlspecialchars($row['base_id']) . "</td>
                    <td>" . htmlspecialchars($row['unit_type']) . "</td>
                  </tr>";
        }

        echo '</table>
              </div>';
    } else {
        echo "Нет данных для отображения.";
    }
} catch (PDOException $e) {
    echo "Ошибка при выборке данных: " . $e->getMessage();
}
?>
