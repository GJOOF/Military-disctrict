<?php 
require 'shared/header.php'; 
require 'db_connect/db_connection.php';

// SQL-запрос для выборки всех записей из таблицы Vehicle
$sql = "SELECT * FROM soldier";

try {
    // Выполнение запроса
    $stmt = $pdo->query($sql);
    
    // Проверка, есть ли записи в таблице
    if ($stmt->rowCount() > 0) {
        
        echo '<h2>Список военнослужащих</h2>';
        
        echo '<div class="table-container">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Звание</th>
                        <th>Специальность</th>
                        <th>Подразделение</th>
                        <th>Командир</th>
                    </tr>';
        
        // Перебираем все записи
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['soldier_id']) . "</td>
                    <td>" . htmlspecialchars($row['name']) . "</td>
                    <td>" . htmlspecialchars($row['military_rank']) . "</td>
                    <td>" . htmlspecialchars($row['speciality']) . "</td>
                    <td>" . htmlspecialchars($row['unit_id']) . "</td>
                    <td>" . htmlspecialchars($row['commander']) . "</td>
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
