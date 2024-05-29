<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un équipement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<form action="{{ route('equipments.store') }}" method="post">
    @csrf

    <label for="equipment_type">Type d'équipement:</label>
    <select id="equipment_type" name="equipment_type" required>
        <option value="Machines électriques tournantes">Machines électriques tournantes</option>
        <option value="Pompes">Pompes</option>
        <option value="Instruments de mesure">Instruments de mesure</option>
    </select>

    <label for="name">Nom de l'équipement:</label>
    <input type="text" id="name" name="name" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>

    <label for="serial_number">Numéro de série:</label>
    <input type="text" id="serial_number" name="serial_number" required>

    <label for="acquisition_date">Date d'acquisition:</label>
    <input type="date" id="acquisition_date" name="acquisition_date" required>

    <label for="maintenance_frequency">Fréquence de maintenance recommandée:</label>
    <input type="text" id="maintenance_frequency" name="maintenance_frequency" required>

    <input type="submit" value="Ajouter">
</form>

</body>
</html>
