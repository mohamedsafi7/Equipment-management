<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
    <title>Liste des équipements</title>
</head>
<body>
    <header>
        <div style="background-color: #333; color: #fff; padding: 10px;">
            <span style="float: right; margin-right: 20px;"><a href="{{ route('logout') }}">Logout</a></span>
            <span style="float: left; margin-left: 20px;"><a href="{{ route('equipments.create') }}">Add Equipment</a></span>
            <div style="clear: both;"></div>
        </div>
    </header>
<h1>Liste des équipements</h1>

<table border="1">
    <thead>
        <tr>
            <th>Type d'équipement</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Numéro de série</th>
            <th>Date d'acquisition</th>
            <th>Fréquence de maintenance recommandée</th>
        </tr>
    </thead>
    <tbody>
        @foreach($equipments as $equipment)
        <tr>
            <td>{{ $equipment->equipment_type }}</td>
            <td>{{ $equipment->name }}</td>
            <td>{{ $equipment->description }}</td>
            <td>{{ $equipment->serial_number }}</td>
            <td>{{ $equipment->acquisition_date }}</td>
            <td>{{ $equipment->maintenance_frequency }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>

    
</body>
</html>