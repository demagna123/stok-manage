@extends('layouts.app')

@section('content')
    <h1 style="text-align: center; margin-bottom: 20px;">Détails de la catégorie</h1>

    <div class="category-card">
        <div class="category-header">
            <p class="category-id">ID : {{ $categorie->id }}</p>
            <h2 class="category-name">{{ $categorie->name }}</h2>
        </div>

        <div class="category-description">
            <p>{{ $categorie->description }}</p>
        </div>
    </div>

    <style>
        .category-card {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }

        .category-header {
            border-bottom: 1px solid #ccc;
            margin-bottom: 15px;
            padding-bottom: 10px;
        }

        .category-id {
            font-size: 14px;
            color: #888;
            margin: 0;
        }

        .category-name {
            font-size: 24px;
            color: #333;
            margin: 5px 0 0 0;
        }

        .category-description p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }
    </style>
@endsection
