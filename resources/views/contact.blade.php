@extends('layout.main')
@section('content')
    @include('layout.slider')
    <section class="contact-three">
        <div class="container">
            <div class="contact-three__inner">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="contact-three__left">
                            <iframe src="{{ config('contact.map') }}" class="google-map__one" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-three__right">
                            <h3 class="contact-three__form-title">Get A Free Quote</h3>
                            {{ html()->form()->route('contact.send')->open() }}
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-three__input-box">
                                        {{ html()->text('name')->placeholder('Your name')->required() }}
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-three__input-box">
                                        {{ html()->email('email')->placeholder('Your Email')->required() }}
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-three__input-box">
                                        {{ html()->text('phone')->placeholder('Your Phone')->required() }}
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-three__input-box">
                                        {{ html()->text('subject')->placeholder('Subject')->required() }}
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-three__input-box text-message-box">
                                        {{ html()->textarea('message')->placeholder('Your Message')->required() }}
                                    </div>
                                    <div class="contact-three__btn-box">
                                        {{ html()->submit()->class('thm-btn contact-three__btn')->text('send a message') }}
                                    </div>
                                </div>
                            </div>
                            {{ html()->form()->close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@include('common.alert')
@if (config('integration.recaptcha_status') == App\Enums\StatusEnum::Active->value)
    @push('script')
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script>
            function onSubmit(token) {
                document.getElementById("contact-form").submit();
            }
        </script>
    @endpush
@endif
