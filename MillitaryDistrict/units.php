<?php 
require 'shared/header.php'; 
require 'db_connect/db_connection.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список армий и дивизий России</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
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

        /* Стили для изображений */
        .unit-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 10px;
        }

        /* Адаптивные стили для мобильных устройств */
        @media (max-width: 768px) {
            th, td {
                padding: 10px;
            }

            h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <br>
<div class="table-container">
    <table>
        <tr>
            <th>Армия/Дивизия</th>
            <th>Номер</th>
            <th>Изображение</th>
        </tr>
        <tr>
            <td>1-я гвардейская танковая армия</td>
            <td>1</td>
            <td><img class="unit-image" src="img/58th_army.svg" alt="58-я гвардейская танковая армия"></td>
        </tr>
        <tr>
            <td>2-я гвардейская общевойсковая армия</td>
            <td>2</td>
            <td><img class="unit-image" src="img/3rd_army.svg" alt="2-я гвардейская общевойсковая армия"></td>
        </tr>
        <tr>
            <td>3-я гвардейская танковая армия</td>
            <td>3</td>
            <td><img class="unit-image" src="img/8th_army.svg" alt="3-я гвардейская танковая армия"></td>
        </tr>
        <tr>
            <td>4-я танковая армия</td>
            <td>4</td>
            <td><img class="unit-image" src="img/49th_army.svg" alt="4-я танковая армия"></td>
        </tr>
    </table>
</div>

</body>
</html>
