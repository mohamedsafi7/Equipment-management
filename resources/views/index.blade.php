<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des équipements</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <header>
        <div style="background-color: #0095a8; color: #fff; padding: 10px;">
            <span style="float: right; margin-right: 20px;">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </span>
            <span style="float: left; margin-left: 20px;"><a href="{{ route('equipments.create') }}">Add Equipment</a></span>
            <div style="clear: both;"></div>
        </div>
    </header>
<div class="container">
    
    <h1>Liste des équipements</h1>

    <table>
        <thead>
            <tr>
                <th>Type d'équipement</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Numéro de série</th>
                <th>Date d'acquisition</th>
                <th>Fréquence de maintenance recommandée</th>
                <th>Actions</th> 
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
                <td>
                    <a href="{{ route('equipments.edit', $equipment->id) }}"><button>Edit</button>
                    </a> 
                    <form action="{{ route('equipments.destroy', $equipment->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
