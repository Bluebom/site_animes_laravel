@extends('painel.blade')
@section('title', @yield('title'))
@section('content')
<section class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>">
                    <span class="icon">
                        <ion-icon name="radio-button-on-outline"></ion-icon>
                    </span>
                    <span class="title">Unidentis</span>
                </a>
            </li>
            <li>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="ajuda">
                    <span class="icon">
                        <ion-icon name="help-outline"></ion-icon>
                    </span>
                    <span class="title">Ajuda</span>
                </a>
            </li>
            <li>
                <a href="painelPages">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Configurações</span>
                </a>
            </li>
            <li>
                <a href="editar_user">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <span class="title">Conta</span>
                </a>
            </li>
            <li>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sair</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- main -->
    <main class='main'>
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <!-- User Image -->
            <div class="user">
                <a href="editar_user"><img id="miniImg" src="<?= './uploads/' . $_SESSION['img']; ?>" alt="imagem do usuário" /></a>
            </div>
        </div>
        <div>
            @yield('content')
        </div>
    </main>
    <footer>

    </footer>
@endsection
