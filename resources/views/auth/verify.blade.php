@extends('layouts.app')

@section('content')
<div class="container">
           <div class="card">
                <div class="card-header">{{ __('アカウント認証あなたのメールアドレスを確認してください') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('続行する前に、確認リンクについてメールを確認してください。') }}
                    {{ __('メールが届かない場合') }}, <a href="{{ route('verification.resend') }}">{{ __('別のリクエストするには、ここをクリックしてください') }}</a>.
                </div>
            </div>
    </div>
</div>
@endsection
