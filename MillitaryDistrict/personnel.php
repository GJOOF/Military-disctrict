<?php 
require 'shared/header.php'; 
require 'db_connect/db_connection.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список личного состава</title>
    <style>
        /* Основные стили для страницы */

        h2 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }

        /* Стиль контейнера для таблицы */
        .table-container {
            width: 90%;
            margin: 0 auto;
            overflow-x: auto;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        /* Стили для таблицы */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #ffffff;
            font-size: 18px;
        }

        td {
            font-size: 16px;
            color: #555;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
 <br>

<div class="table-container">
    <table>
        <tr>
            <th>Имя</th>
            <th>Звание</th>
            <th>Специальность</th>
            <th>Тип</th>
            <th>Номер подразделения</th>
        </tr>
        <tr onclick="goToPage('personnel.php')">
            <td>Иванов Иван Иванович</td>
            <td>Капитан</td>
            <td>Механик-водитель</td>
            <td>Командир взвода</td>
            <td>1001</td>
        </tr></a>
        <tr>
            <td>Петров Петр Петрович</td>
            <td>Сержант</td>
            <td>Связист</td>
            <td>Командир отделения</td>
            <td>1002</td>
        </tr>
        <tr>
            <td>Сидоров Сидор Сидорович</td>
            <td>Лейтенант</td>
            <td>Инженер</td>
            <td>Заместитель командира роты</td>
            <td>1003</td>
        </tr>
        <tr>
            <td>Кузнецов Алексей Владимирович</td>
            <td>Майор</td>
            <td>Командир батальона</td>
            <td>Командир батальона</td>
            <td>1004</td>
        </tr>
    </table>
</div>
<script>
        function goToPage(url) {
            window.location.href = url;
        }
    </script>

</body>
</html>
