<!-- resources/views/equipments/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Equipment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-top: 0;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label, input, textarea, select, button {
            margin-bottom: 10px;
        }
        input, textarea, select {
            padding: 8px;
            font-size: 1rem;
        }
        button {
            padding: 10px;
            font-size: 1rem;
            background-color: #0095a8;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #007b8e;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Edit Equipment</h1>

    <form action="{{ route('equipments.update', $equipment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="equipment_type">Type d'équipement:</label>
        <select id="equipment_type" name="equipment_type" required>
            <option value="Machines électriques tournantes" {{ $equipment->equipment_type == 'Machines électriques tournantes' ? 'selected' : '' }}>Machines électriques tournantes</option>
            <option value="Pompes" {{ $equipment->equipment_type == 'Pompes' ? 'selected' : '' }}>Pompes</option>
            <option value="Instruments de mesure" {{ $equipment->equipment_type == 'Instruments de mesure' ? 'selected' : '' }}>Instruments de mesure</option>
        </select>

        <label for="name">Nom de l'équipement:</label>
        <input type="text" id="name" name="name" value="{{ $equipment->name }}" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $equipment->description }}</textarea>

        <label for="serial_number">Numéro de série:</label>
        <input type="text" id="serial_number" name="serial_number" value="{{ $equipment->serial_number }}" required>

        <label for="acquisition_date">Date d'acquisition:</label>
        <input type="date" id="acquisition_date" name="acquisition_date" value="{{ $equipment->acquisition_date }}" required>

        <label for="maintenance_frequency">Fréquence de maintenance recommandée:</label>
        <input type="text" id="maintenance_frequency" name="maintenance_frequency" value="{{ $equipment->maintenance_frequency }}" required>

        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
