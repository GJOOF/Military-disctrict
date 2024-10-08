<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание Военно-учётного подразделения</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <h2>Создание Военно-учётного подразделения</h2>
    <form action="create_military_unit.php" method="POST">
        <!-- Обязательное поле: база -->
        <label for="base_id">База:</label>
        <select id="base_id" name="base_id" required>
            <option value="">Выберите базу</option>
            <option value="1">База 1</option>
            <option value="2">База 2</option>
            <option value="3">База 3</option>
            <!-- Добавьте другие опции баз здесь -->
        </select>
        <br><br>

        <!-- Обязательное поле: Личный состав -->
        <div id="personnel-section">
            <label>Личный состав:</label>
            <div id="personnel-list">
                <div>
                    <input type="text" name="personnel_name[]" placeholder="Введите имя солдата" required>
                    <input type="text" name="personnel_rank[]" placeholder="Введите звание солдата" required>
                    <button type="button" onclick="addPersonnel()">Добавить личный состав</button>
                </div>
            </div>
        </div>
        <br>

        <!-- Обязательное поле: Оружие -->
        <div id="weapon-section">
            <label>Оружие:</label>
            <div id="weapon-list">
                <div>
                    <input type="text" name="weapon_name[]" placeholder="Введите название оружия" required>
                    <input type="number" name="weapon_amount[]" placeholder="Введите количество" required>
                    <button type="button" onclick="addWeapon()">Добавить оружие</button>
                </div>
            </div>
        </div>
        <br>

        <!-- Необязательное поле: Техника -->
        <div id="vehicle-section">
            <label for="vehicle_id">Техника:</label>
            <select id="vehicle_id" name="vehicle_id">
                <option value="">Выберите технику (необязательно)</option>
                <option value="1">Бронетранспортер</option>
                <option value="2">Танкер</option>
                <option value="3">Гусеничный транспортёр</option>
                <option value="4">Самоходная артиллерийская установка</option>
                <!-- Добавьте другие опции техники здесь -->
            </select>
        </div>
        <br>

        <input type="submit" value="Создать Военно-учётное подразделение">
    </form>

    <script>
        // Функция для добавления личного состава
        function addPersonnel() {
            const personnelDiv = document.createElement('div');
            personnelDiv.innerHTML = `
                <input type="text" name="personnel_name[]" placeholder="Введите имя солдата" required>
                <input type="text" name="personnel_rank[]" placeholder="Введите звание солдата" required>
            `;
            document.getElementById('personnel-list').appendChild(personnelDiv);
        }

        // Функция для добавления оружия
        function addWeapon() {
            const weaponDiv = document.createElement('div');
            weaponDiv.innerHTML = `
                <input type="text" name="weapon_name[]" placeholder="Введите название оружия" required>
                <input type="number" name="weapon_amount[]" placeholder="Введите количество" required>
            `;
            document.getElementById('weapon-list').appendChild(weaponDiv);
        }
    </script>
</body>
</html>
