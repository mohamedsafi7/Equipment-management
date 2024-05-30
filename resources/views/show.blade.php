<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Equipment Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-top: 0;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Equipment Details</h1>
        <ul>
            <li><strong>Type d'équipement:</strong> {{ $equipment->equipment_type }}</li>
            <li><strong>Nom:</strong> {{ $equipment->name }}</li>
            <li><strong>Description:</strong> {{ $equipment->description }}</li>
            <li><strong>Numéro de série:</strong> {{ $equipment->serial_number }}</li>
            <li><strong>Date d'acquisition:</strong> {{ $equipment->acquisition_date }}</li>
            <li><strong>Fréquence de maintenance recommandée:</strong> {{ $equipment->maintenance_frequency }}</li>
        </ul>
        <a href="{{ route('equipments.index') }}">Back to Equipment List</a>
    </div>
</body>
</html>
