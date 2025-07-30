@extends('layouts.app')

@section('content')
<style>
    .welcome-banner {
        position: relative;
        background-image: url('{{ asset('images/img2.jpg') }}');
        background-size: cover;
        background-position: center;
        height: 650px;
        border-radius: 10px;
        margin: 0;
        overflow: hidden;
    }

    .welcome-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* couche noire transparente */
        z-index: 1;
    }

    .welcome-text {
        position: relative;
        z-index: 2;
        color: white;
        text-align: center;
        font-size: 40px;
        font-weight: bold;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-shadow: 1px 1px 5px black;
    }
</style>

<div class="welcome-banner">
    <div class="welcome-overlay"></div>
    <div class="welcome-text">
        Welcome on Stok pro
    </div>
</div>
@endsection
