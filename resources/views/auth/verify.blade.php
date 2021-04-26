@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Elektron pochta manzilingizni tasdiqlang') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Elektron pochta manzilingizga yangi tasdiqlash havolasi yuborildi.') }}
                        </div>
                    @endif

                    {{ __('Davom etishdan oldin, tasdiqlash havolasi uchun elektron pochtangizni tekshiring.') }}
                    {{ __("Agar elektron pochta xabarini olmagan bo'lsangiz") }}, <a href="{{ route('verification.resend') }}">{{ __("boshqasini so'rash uchun shu erni bosing") }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
