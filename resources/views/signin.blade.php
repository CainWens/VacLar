@extends('layouts.app')

@section('meta')

@endsection

@section('title')
    EcoS - Вход
@endsection

@section('content')
    <div class="container w-50" style="margin-top: 10%">
        @include('inc.message')
        <form action="{{route('login-submit')}}" class="row g-3" style=" margin-bottom: 30%"  method="post">
            @csrf

            <div class="form-group col-md-6">
                <label for="phone">Номер при регистрации</label>
                <input autofocus value="{{old('phone')}}" type="phone" name="phone" id="phone" placeholder="Номер телефона" value="" class="tel form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="password">Пароль</label>
                <input type="password" name="password" id="password" placeholder="Пароль" class="form-control">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                <label class="form-check-label" for="gridCheck">
                    Запомнить меня
                </label>
            </div>

            <button type="submit" class="btn btn-success">Войти</button>
            <a href="{{route('register')}}" class="text-center btn-reg">Регистрация</a>
        </form>
    </div>
@endsection
