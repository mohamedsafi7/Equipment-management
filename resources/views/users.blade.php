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
        .btn {
            width: 110px;
            margin-bottom: 4px;
            display: inline-block;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: #fff;
            font-size: 14px;
            text-align: center;
            text-decoration: none;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn-danger {
            background-color: #dc3545;
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
                <a href="{{ route('equipments.index') }}" style="text-decoration: none;">
                    <button style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
                        Equipments List
                    </button>
                </a>
            </span>
        @endif
        
            <div style="clear: both;"></div>
        </div>
    </header>
<div class="container">
    
    <h1>Liste des utilisateurs</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <form action="{{ route('users.updateRole', $user->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-primary">
                            @if($user->role === 'admin')
                                Unadmin
                            @else
                                Set as Admin
                            @endif
                        </button>
                    </form>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
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
