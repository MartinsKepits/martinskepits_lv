@extends('layouts.master')

@section('title', '')

@section('content')
<div class="homepage-hero-wrapper">
    <div class="hero-bg-wrapper">
        <canvas class="hero-bg-grid" id="hero-bg-grid" width="500px" height="500px"></canvas>
    </div>

    <div class="hero-content-wrapper">
        <h1>{{ __('Frontend Developer, Great Coworker') }}</h1>
        <p>{{ __('I create beautiful things with love.') }}</p>
    </div>

    <a href="{{ route('home') }}#about-me" class="scroll-down-btn">
        <i class="fa-solid fa-angles-down"></i>
    </a>
</div>

<div id="about-me" class="about-me-wrapper">
    <div class="about-me-text container-lg px-4">
        <h2>{{ __('Hi, I’m Mārtiņš. Nice to meet you.') }}</h2>
        <p>{{ __('Since 3 years ago when I started creating websites, online stores. 
                    I have not forgotten that I do this to help large or small companies 
                    to tell their story and take their company to a new level.') }}</p>
    </div>
    <div class="about-me-cards container">
        <div class="row">
            <div class="about-card col-lg-4">
                <div class="card-icon">
                    <img src="{{ url('images/languages.webp') }}" alt="Languages I speak icon">
                </div>
                <span class="card-title">{{ __('Languages I speak:') }}</span>
                <ul class="card-list">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Sass / Less</li>
                    <li>Javascript</li>
                    <li>JQuery</li>
                    <li>PHP</li>
                    <li>Git</li>
                    <li>Node.js</li>
                    <li>Mysql</li>
                </ul>
            </div>
            <div class="about-card col-lg-4">
                <div class="card-icon">
                    <img src="{{ url('images/frameworks.webp') }}" alt="Frameworks I have experience to work with icon">
                </div>
                <span class="card-title">{{ __('Frameworks I have experience to work with:') }}</span>
                <ul class="card-list">
                    <li>Magento</li>
                    <li>Shopify</li>
                    <li>Laravel</li>
                    <li>Wordpress</li>
                </ul>
            </div>
            <div class="about-card col-lg-4">
                <div class="card-icon">
                    <img src="{{ url('images/tools.webp') }}" alt="Tools what I know how to use icon">
                </div>
                <span class="card-title">{{ __('Tools what I know how to use:') }}</span>
                <ul class="card-list">
                    <li>Figma</li>
                    <li>Photoshop / Photopea</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="projects-worked-on-wrapper">
    <div class="container-lg px-4">
        <span class="projects-worked-on-title "><span class="tag-icon"></span>{{ __('Projects I have worked on') }}</span>
    </div>
    <div class="projects-worked-on-slider">
        <img src="{{ url('images/logos/amf-logo.webp') }}" alt="AM Furnitūra logo">
        <img src="{{ url('images/logos/balticsport-logo.webp') }}" alt="Balticsport logo">
        <img src="{{ url('images/logos/brew-company-logo.webp') }}" alt="The Brew Company logo">
        <img src="{{ url('images/logos/deoveritas-logo.webp') }}" alt="Deoveritas logo">
        <img src="{{ url('images/logos/lvm-logo.webp') }}" alt="Latvijas Valsts Meži logo">
    </div>
</div>

<div id="projects" class="recent-projects-wrapper container-lg px-4">
    <span class="recent-projects-title "><span class="tag-icon"></span>{{ __('My recent projects') }}</span>

    <div class="projects row">
        <div class="project col-md-6">
            <div class="project-content">
                <div class="overlay">
                    <h2 class="title">Visual Design</h2>
                </div>
            </div>
        </div>
        <div class="project col-md-6">
            <div class="project-content">
                <div class="overlay">
                    <h2 class="title">Magento Demo</h2>
                </div>
            </div>
        </div>
        <div class="project col-md-6">
            <div class="project-content">
                <div class="overlay">
                    <h2 class="title">Larvel Demo</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection