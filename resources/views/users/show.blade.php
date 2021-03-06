@extends('layouts.app')
<style>
    .user-show {
        padding-top: 4rem;
    }

    .user-show-title {
        margin-top: 1rem;
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 1rem;
        display: flex;
        justify-content: center;
        text-decoration: underline;
    }

    .actions{
        margin-top: 1rem;
    }
</style>
@section('title', config('app.name') . ' | Perfil')
@section('content')
<div class="container">
    <h1 class="user-show-title">Información Usuario</h1>
    <div class="user-show">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nombre</label>
                <input readonly type="text" class="form-control" id="name" value="{{ $user->name }}">
            </div>
            <div class="form-group col-md-6">
                <label for="lastname">Apellido</label>
                <input readonly type="text" class="form-control" id="lastname" value="{{ $user->lastname }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input readonly type="email" class="form-control" id="email" value="{{ $user->email }}">
            </div>
            <div class="form-group col-md-6">
                <label for="created_at">Fecha Registro</label>
                <input readonly type="datetime" class="form-control" id="created_at" value="{{ $user->created_at }}">
            </div>
        </div>
        <div class="actions">
            <a class="btn btn-primary" href="{{ URL::previous() }}">Volver</a>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editUser">
                Editar usuario
            </button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUser">
                Eliminar usuario
            </button>
        </div>
        @include('users.edit')
        @include('users.delete')
    </div>
</div>
@endsection
