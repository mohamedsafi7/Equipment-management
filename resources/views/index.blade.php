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
        .profile-icon {
            float: right;
            margin-right: 20px;
            position: relative;
            cursor: pointer;
        }
        .profile-dropdown {
            position: absolute;
            top: 30px;
            color: black;
            right: 0;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            display: none;
        }
        .profile-dropdown ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .profile-dropdown li {
            padding: 10px;
            cursor: pointer;
        }
        .profile-dropdown li:hover {
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
            <div class="profile-icon" onclick="toggleDropdown()">
                <img src="icon.png" alt="Profile Icon" width="30" height="30">
                <div class="profile-dropdown" id="profileDropdown">
                    <ul>
                        <li>{{ Auth::user()->name }}</li>
                        <li onclick="logout()">Logout</li>
                    </ul>
                </div>
            </div>
            @if(Auth::user()->role === 'admin')
            <span style="float: left; margin-left: 20px;">
                <a href="{{ route('equipments.create') }}" style="text-decoration: none;">
                    <button style="padding: 10px 20px; background-color: #0cf866; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
                        Add Equipment
                    </button>
                </a>
            </span>
            <span style="float: left; margin-left: 20px;">
                <a href="{{ route('users.index') }}" style="text-decoration: none;">
                    <button style="padding: 10px 20px; background-color: #81197c; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
                        Users List
                    </button>
                </a>
            </span>
        @endif
        
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
                    <a href="{{ route('equipments.show', $equipment->id) }}" style=" text-decoration: none; color: #007bff; margin-right: 10px;">Details</a>
                    @if(Auth::user()->role === 'admin')
                        <a href="{{ route('equipments.edit', $equipment->id) }}" style="text-decoration: none;">
                            <button style="width:80px; padding: 5px 10px; background-color: #2878a7; color: #fff; border: none; border-radius: 5px; cursor: pointer; margin-right: 10px;">
                                Edit
                            </button>
                        </a>
                        <form action="{{ route('equipments.destroy', $equipment->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="width:80px; padding: 5px 10px; background-color: #dc3545; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
                                Delete
                            </button>
                        </form>
                    @endif
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function toggleDropdown() {
        var dropdown = document.getElementById("profileDropdown");
        dropdown.style.display === "block" ? dropdown.style.display = "none" : dropdown.style.display = "block";
    }

    function logout() {
        document.getElementById('logout-form').submit();
    }
</script>
</body>
</html>
