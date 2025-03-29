@extends('layout.layout')

@section('content')
<div class="my-account-page">
    <x-sideBar class="config" />
    <div class="profile-area">
        <h3 class="profile-title">Meu perfil</h3>
        @if(session('message'))
        <h3 id="alert_userUpdated">{{session('message')}}</h3>
        @endif
        <form method="post" action="{{route('update')}}">
            @csrf
            <x-forms.input class="name-area" labelClass="name-label" label="Nome" name="name" type="text" placeholder="Digite o seu nome" value="{{$user['name']}}" error="{{$errors->first('name')}}" />

            <x-forms.input class="email-area" labelClass="email-label" label="Email" name="email" type="email" placeholder="Digite o seu email" value="{{$user['email']}}" error="{{$errors->first('email')}}" />

            <x-forms.select :states=$states />

            <x-forms.password label="Senha" name="password" placeholder="Digite a sua senha" error="{{$errors->first('password')}}" />

            <x-forms.password label="Repita Senha" name="password_confirmation" placeholder="Repita a sua senha" value="" error="{{$errors->first('password')}}" />


            <button type="submit" class="save-button">Atualizar</button>
        </form>
    </div>
</div>
@endsection
