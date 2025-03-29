@extends('layout.auth')

@section('content')
<a href="{{route('login')}}" class="back-button">← Voltar</a>
<div class="login-page">
    <div class="login-area">
        <h3 class="login-title">B7Store</h3>
        <form action="{{route('saveRegister')}}" method="post">
            @csrf
            <x-forms.input label="Nome" labelClass="name-label" type="text" name="name" placeholder="Digite o seu nome" value="{{old('name')}}" error="{{$errors->first('name')}}" class="name-area" />

            <x-forms.input label="Email" type="email" labelClass="email-label" name="email" placeholder="Digite o seu email" value="{{old('email')}}" error="{{$errors->first('email')}}" class="email-area" />

            <x-forms.select :states=$states />

            <div class="password-area">
                <x-forms.password label="Senha" name="password" placeholder="Digite sua senha" value="" error="{{$errors->first('password')}}" />
                <x-forms.password label="Repita Senha" name="password_confirmation" placeholder="Repita a sua senha" value="" error="{{$errors->first('password')}}" />
            </div>
            <button type="submit" class="login-button">Cadastrar</button>
        </form>
        <div class="register-area">
            Já tem cadastro? <a href="{{route('login')}}">Fazer Login</a>
        </div>
    </div>
    <div class="terms">
        Ao continuar, você concorda com os <a href="">Termos de Uso</a> e a
        <a href="">Política de Privacidade</a>, e também, em receber
        comunicações via e-mail e push de todos os nossos parceiros.
    </div>
</div>
@endsection
