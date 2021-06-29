@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <img src="https://scontent.fpnh5-4.fna.fbcdn.net/v/t31.18172-8/1146864_758251254202405_1211711693_o.jpg?_nc_cat=100&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeGJgtLg3aEZMZcNWqkZoyosNCoZVivicro0KhlWK-JyunSwPfr-OtjpbnFckyqwrjo5PxQBjHQJ0TngqE-VH633&_nc_ohc=Ev5m-FZm8A4AX_nK7VL&_nc_oc=AQlpF2Tb2WWX0wLahC4hiVtQQHX5iaPl7qkFHlIQmVdxuSvKoqcWsDQtTIMoVzGYFyQ&_nc_ht=scontent.fpnh5-4.fna&oh=3bc51f0cf1429a38f4eb13b33897103a&oe=60DC8517" style="width: 150px; height: auto; margin-left: 48%;" alt="">
                </div>

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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
