@extends('layouts.app')

@section('content')
    



<div class="form-container">
    <h1>Update one category</h1>

    <div class="form-card">
        <form action="{{ route('categories.update', $categorie->id) }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" value="{{ $categorie->name }}" placeholder="Entrez le nom de la catégorie">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="5" placeholder="Entrez une description">
                      {{ $categorie->description }}
                </textarea>
            </div>

            <div class="form-actions">
                <button type="submit">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
</div>

<style>
    .form-container {
        max-width: 600px;
        margin: 40px auto;
        font-family: Arial, sans-serif;
        padding: 20px;
    }

    .form-container h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #2c3e50;
    }

    .form-card {
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
        color: #333;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
        background-color: #fff;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    textarea:focus {
        border-color: #3498db;
        outline: none;
    }

    .form-actions {
        text-align: center;
    }

    .form-actions button {
        background-color: #2c3e50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-actions button:hover {
        background-color: #2c3e50;
    }
</style>
@endsection