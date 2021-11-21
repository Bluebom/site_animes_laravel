@extends('painel.app')
@section('title', 'Login')
@section('content')
<section class='hero_login'>
    <div class="box_login">
                        <div><img src="../assets/img/LOGOUNIDENTIS01oficial.png" alt="logo da unidentis"></div>
        <h2 class="hLogin">Painel de <span>Controle</span></h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="user" placeholder="Email" class="@error('email') is-invalid @enderror" required value='{{ old('email') }}'>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="password" name="password" placeholder="Senha" class="@error('password') is-invalid @enderror" required value=''>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="form_group_login">
                <input class="myBtn" type="submit" name="acao" value="Logar">
                <label class="mcontainer">Lembrar-me
                    <input type="checkbox" name="lembrar" {{ old('remember') ? 'checked' : '' }}>
                    <span class="checkmark"></span>
                </label>
            </div>
        </form>
    </div> <!-- box_login -->
</section>
<!--hero_login-->
@endsection
