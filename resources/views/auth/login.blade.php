<!DOCTYPE html>
<html lang="en">
<x-top title="Login" styles="loginSignUpStyle" />

<body>
    <div class="login-page">
        <div class="login-area">
            @if(session('message'))
            <p id="alert_userNotFound">{{session('message')}}</p>
            @endif
            <h3 class="login-title">B7Store</h3>
            <form method="post" action="{{route('loginAction')}}">
                @csrf
                <x-forms.input class="email-area" labelClass="email-label" label="Email" value="" error="" name="email" type="email" placeholder="Digite o seu e-mail" error="{{$errors->first('email')}}" />
                <x-forms.password class="password-area" labelClass="password-label" label="Senha" value="" error="" name="password" type="password" placeholder="Digite sua senha" error="{{$errors->first('password')}}" />
                <a href="{{route('forgotPassword')}}" class="password-area-forgot">Esqueceu sua senha?</a>
                <button class="login-button">Entrar</button>
            </form>
            <div class="register-area">
                Ainda não tem cadastro? <a href="{{route('register')}}">Cadastre-se</a>
            </div>
        </div>
        <div class="terms">
            Ao continuar, você concorda com os <a href="">Termos de Uso</a> e a
            <a href="">Política de Privacidade</a>, e também, em receber
            comunicações via e-mail e push de todos os nossos parceiros.
        </div>
    </div>
    <footer>
        <span>powered by B7Web</span>
        <span>B7Store</span>
    </footer>
</body>

</html>
