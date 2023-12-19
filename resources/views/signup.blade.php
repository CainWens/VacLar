@extends('layouts.app')

@section('meta')

@endsection

@section('title')
    EcoS - Регистрация
@endsection

@section('content')
    <div class="container w-75" style="margin-top: 10%">
        @include('inc.message')
        <form action="{{route('register-submit')}}" class="row g-3" style="margin-bottom: 30%"  method="post">
            @csrf

            <div class="form-group col-md-6">
                <label for="name">Ваше имя</label>
                <input value="{{old('name')}}" autofocus type="text" name="name" id="name" placeholder="Ваше имя" value="" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="phone">Номер телефона</label>
                <input value="{{old('phone')}}" type="phone" name="phone" id="phone" placeholder="Номер телефона" value="" class="tel form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="password">Пароль</label>
                <input type="password" name="password" id="password" placeholder="Пароль" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="password_confirmation">Пароль ещё раз</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Пароль" class="form-control">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Запомнить меня
                </label>
            </div>

            <button type="submit" class="btn btn-success">Зарегистрироваться</button>
            <a href="{{route('auth')}}" class="text-center btn-reg">Вход</a>
        </form>
    </div>
@endsection
