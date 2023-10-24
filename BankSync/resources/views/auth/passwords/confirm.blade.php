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
                <div class="card-header">{{ __('Confirmar Senha') }}</div>

                <div class="card-body">
                    {{ __('Por favor, confirme sua senha antes de continuar.') }}
=======
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}
>>>>>>> 75d47fce8b9471821f274c26e6223546892f4017

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
<<<<<<< HEAD
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>
=======
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
>>>>>>> 75d47fce8b9471821f274c26e6223546892f4017

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
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
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    {{ __('Confirmar Senha') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu Sua Senha?') }}
                                </a>
=======
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
>>>>>>> 75d47fce8b9471821f274c26e6223546892f4017
                                @endif
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
