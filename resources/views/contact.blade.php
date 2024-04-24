@extends('layouts.master')

@section('title', 'Contact | ')
@section('description', 'Experienced website developer, Mārtiņš Ķepīts, specializes in creating stunning websites. With a passion for innovation and a keen eye for design, Mārtiņš is ready to take on new challenges. Hire Mārtiņš for your next project or job opportunity.')

@section('content')
<div class="contact-wrapper container-lg">
    <div class="row contact-form-wrapper">
        <div class="col-md-8 contact-form-container">
            <h2 class="contact-heading">
                <span class="heading-text">{{ __('Get In Touch') }}</span>
                <span class="heading-divider"></span>
            </h2>
            <ul class="contact-info">
                <li>
                    <a href="mailto:martinskepitslv@gmail.com">
                        <i class="fa-solid fa-envelope"></i>martinskepitslv@gmail.com
                    </a>
                </li>
                <li>
                    <a href="tel:+37126984195">
                        <i class="fa-solid fa-phone"></i>+371 26984195
                    </a>
                </li>
            </ul>

            <h2 class="contact-heading">
                <span class="heading-text">{{ __('Leave a Message') }}</span>
                <span class="heading-divider"></span>
            </h2>
            <form action="{{ route('send_mail') }}" method="POST" enctype="multipart/form-data" class="contact-form" id="contact-form" novalidate>
                @csrf

                @if(session()->has('success-message'))
                <div class="alert alert-success">
                    {{ session()->get('success-message') }}
                </div>
                @endif

                @error('g-recaptcha-response')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror

                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <input id="name" class="form-field @error('name') is-invalid @enderror" name="name" type="text" placeholder="Name" autocomplete="off" value="{{ old('name') }}">
                        <span class="form-field-border"></span>
                        @error('name')
                        <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input id="email" class="form-field @error('email') is-invalid @enderror" name="email" type="email" placeholder="Email" autocomplete="off" value="{{ old('email') }}">
                        <span class="form-field-border"></span>
                        @error('email')
                        <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea name="message" id="message" class="form-field @error('message') is-invalid @enderror" placeholder="Message" rows="2" value="{{ old('message') }}"></textarea>
                        <span class="form-field-border"></span>
                        @error('message')
                        <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button class="submit-btn g-recaptcha" type="submit" data-sitekey="{{ config('services.recaptcha_v3.siteKey') }}" data-callback="onSubmit" data-action="submitContact" disabled>{{ __('Send') }}<span class="arrow"></span></button>
            </form>
            <script src="https://www.google.com/recaptcha/api.js"></script>
            <script>
                function onSubmit(token) {
                    document.getElementById("contact-form").submit();
                }
            </script>
        </div>
    </div>
    <div class="col-md-4 contact-image-container" style="background-image: url({{ url('images/contact-img.jpg') }})"></div>
</div>
@endsection