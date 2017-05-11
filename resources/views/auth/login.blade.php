@extends('layouts.app')

@section('title', 'DieWebDev - Login')

@section('content')
<style type="text/css">
    div.login-form {
        width: 200px;
    }
</style>
<div class="ui container">
    <h3 class="ui center aligned header">DieWebDev - Login</h3>
    <div class="ui text container">
        @if ($errors->any())
        <div class="ui error message">
            <div class="header">Erro</div>
            <ul>
                @foreach($errors->messages() as $error)
                <li>{{$error[0]}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="ui segments">
        <div class="ui segment login-form">
                <form class="ui large form" method="POST" action="{{ route('login.do') }}">
                    {{ csrf_field() }}
                    <div class="field {{ $errors->has('email') ? ' error' : '' }}">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>
                    <div class="field {{ $errors->has('password') ? 'error' : '' }}">
                      <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Senha" required>
                    </div>
                    <div class="inline field">
                        <div class="ui checkbox">
                            <input type="checkbox" tabindex="0" class="hidden" name="remember">
                            <label>Lembrar</label>
                        </div>
                    </div>
                </div>
                <button class="ui fluid large teal submit button">Login</button>

                <div class="ui error message"></div>

            </form>
        </div>

    </div>
</div>
</div>
@endsection

@section('js-complement')
    @include('layouts.menu-update', ['menu' => 'login'])
@endsection
