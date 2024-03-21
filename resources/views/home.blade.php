@extends('layouts.master')

@section('title', 'Test')

@section('content')
<div class="homepage-hero-wrapper">
    <div class="hero-bg-wrapper">
        <canvas class="hero-bg-grid" id="hero-bg-grid" width="500px" height="500px"></canvas>
    </div>

    <div class="hero-content-wrapper">
        <h1>{{ __('Frontend Developer, Great Coworker') }}</h1>
        <p>{{ __('I create beautiful things with love.') }}</p>
    </div>

    <a href="#next-section" class="scroll-down-btn">
        <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.9393 13.0607C11.5251 13.6464 12.4749 13.6464 13.0607 13.0607L22.6066 3.51472C23.1924 2.92893 23.1924 1.97918 22.6066 1.3934C22.0208 0.807612 21.0711 0.807612 20.4853 1.3934L12 9.87868L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L10.9393 13.0607ZM10.5 11V12H13.5V11H10.5Z" />
            <path d="M10.9393 22.0607C11.5251 22.6464 12.4749 22.6464 13.0607 22.0607L22.6066 12.5147C23.1924 11.9289 23.1924 10.9792 22.6066 10.3934C22.0208 9.80761 21.0711 9.80761 20.4853 10.3934L12 18.8787L3.51472 10.3934C2.92893 9.80761 1.97919 9.80761 1.3934 10.3934C0.807611 10.9792 0.807611 11.9289 1.3934 12.5147L10.9393 22.0607ZM10.5 20V21H13.5V20H10.5Z" />
        </svg>
    </a>
</div>

<div id="next-section"></div>
@endsection