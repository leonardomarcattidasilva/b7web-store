<!DOCTYPE html>
<html lang="pt">

<x-top title="Recuperar senha" styles="loginSignUpStyle" />

<body>
    <a href="{{route('login')}}" class="back-button">← Voltar</a>
    <div class="login-page">
        <div class="login-area">
            <h3 class="login-title">B7Store</h3>
            <form>
                <div class="email-area">
                    <div class="email-label">E-mail</div>
                    <input type="email" placeholder="Digite o seu e-mail" />
                </div>
                <button class="login-button">Recuperar</button>
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
    <x-footer />
</body>

</html>
