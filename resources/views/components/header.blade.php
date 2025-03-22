<header>
    <div class="header-area">
        <a href="" class="header-area-left">B7Store</a>
        <div class="header-area-right">
            @if(Auth::user())
            <a href="login.html" class="my-account">
                <img src="{{asset('temp/icons/userIcon.png')}}" />
                {{Auth::user()->name}}
            </a>
            @endif
            <a href="" class="announce-now">Anunciar agora →</a>
            <img class="menu-icon" src="{{asset('temp/icons/menuIcon.png')}}" alt="Menu" />
            <div class="menu-mobile">
                <a href="myAccount.html" class="my-account-mobile">
                    <img src="{{asset('temp/icons/userIcon.png')}}" alt="Ícone do usuário" />
                    Minha Conta
                </a>
                <a class="my-account-mobile" href="/index.html"><img src="{{asset('temp/icons/logoutIcon.png')}}" /> Sair</a>
            </div>
        </div>
    </div>
</header>
