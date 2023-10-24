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
                <div class="card-header">{{ __('Redefinir Senha') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
=======
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
>>>>>>> 75d47fce8b9471821f274c26e6223546892f4017
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
<<<<<<< HEAD
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Endereço de Email') }}</label>
=======
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
>>>>>>> 75d47fce8b9471821f274c26e6223546892f4017

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
<<<<<<< HEAD
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
=======
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
>>>>>>> 75d47fce8b9471821f274c26e6223546892f4017
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    {{ __('Enviar Link de Redefinição de Senha') }}
=======
                                    {{ __('Send Password Reset Link') }}
>>>>>>> 75d47fce8b9471821f274c26e6223546892f4017
                                </button>
                            </div>
                        </div>
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
