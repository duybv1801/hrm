@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">{{ trans('mail.mail_alert') }}</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ trans('mail.mail_alert1') }}
                            </div>
                        @endif
                        <p>
                            {{ trans('mail.mail_alert2') }}
                        </p>
                        {{-- <a href="{{ route('verification.resend') }}">click here to request another'</a>. --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection