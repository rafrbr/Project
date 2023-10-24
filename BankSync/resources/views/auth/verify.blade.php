<<<<<<< HEAD
@extends('layouts.cadastro')

@section('conteudo')
=======
@extends('layouts.app')

@section('content')
>>>>>>> 75d47fce8b9471821f274c26e6223546892f4017
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                <div class="card-header">{{ __('Verifique Seu Endereço de Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Um novo link de verificação foi enviado para o seu endereço de email.') }}
                    </div>
                    @endif

                    {{ __('Antes de continuar, por favor, verifique seu email para encontrar o link de verificação.') }}
                    {{ __('Se você não recebeu o email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clique aqui para solicitar outro') }}</button>.
=======
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
>>>>>>> 75d47fce8b9471821f274c26e6223546892f4017
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 75d47fce8b9471821f274c26e6223546892f4017
