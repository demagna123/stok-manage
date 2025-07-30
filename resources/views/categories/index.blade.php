@extends('layouts.app')

@section('content')
    <h1 style="text-align: center; margin-bottom: 20px;">Display of Categories</h1>

    <table class="category-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categorie)
                <tr>
                    <td>{{ $categorie->id }}</td>
                    <td>{{ $categorie->name }}</td>
                    <td>
                        <div class="action-buttons">
                            <a href="{{ route('categories.edit', $categorie->id) }}" class="btn edit">Modifier</a>
                            <a href="{{ route('categories.show', $categorie->id) }}" class="btn detail">Détail</a>
                            <form action="{{ route('categories.destroy', $categorie->id) }}" method="post" onsubmit="return confirm('Are you sure want to destroy this category ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <style>
        .category-table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            font-family: Arial, sans-serif;
        }

        .category-table th,
        .category-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        .category-table th {
            background-color: #f4f4f4;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }

        .btn.edit {
            background-color: #3498db;
        }

        .btn.detail {
            background-color: #2ecc71;
        }

        .btn.delete {
            background-color: #e74c3c;
        }

        .btn:hover {
            opacity: 0.8;
        }

        form {
            display: inline;
        }
    </style>
@endsection
