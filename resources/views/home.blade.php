@extends('layouts.master')

@section('title', '')
@section('description', 'Experienced web developer specializing in stunning, innovative websites. Ready to take on new challenges and opportunities. Hire for your next web project or job.')

@section('content')
<div class="homepage-hero-wrapper">
    <div class="hero-bg-wrapper">
        <canvas id="hero-bg-grid" class="hero-bg-grid" width="500px" height="500px"></canvas>
        <div class="hero-bg-overlay"></div>
    </div>

    <div class="hero-content-wrapper">
        <h1>{{ __('Web Developer, Great Coworker') }}</h1>
        <p>{{ __('I create beautiful things with love.') }}</p>
    </div>

    <a href="{{ route('home') }}#about-me" class="scroll-down-btn">
        <i class="fa-solid fa-angles-down"></i>
    </a>
</div>

<div id="about-me" class="about-me-wrapper">
    <div class="about-me-text container-lg px-4">
        <h2>{{ __('Hi, I’m Mārtiņš. Nice to meet you.') }}</h2>
        <p>{{ __('Since 2 years ago when I started creating professionally websites, online stores. 
                    I have not forgotten that I do this to help different companies 
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
                    <li>PHP</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Sass / Less</li>
                    <li>Javascript</li>
                    <li>JQuery</li>
                    <li>KnockoutJS</li>
                    <li>XML</li>
                    <li>Mysql</li>
                    <li>Node.js</li>
                    <li>Git</li>
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

<div id="projects" class="projects-worked-on-wrapper">
    <div class="container-lg px-4">
        <span class="projects-worked-on-title "><span class="tag-icon"></span>{{ __('Projects I have worked on') }}</span>
    </div>
    <div id="projects-worked-on-slider" class="projects-worked-on-slider">
        <img src="{{ url('images/logos/amf-logo.webp') }}" alt="AM Furnitūra logo">
        <img src="{{ url('images/logos/balticsport-logo.webp') }}" alt="Balticsport logo">
        <img src="{{ url('images/logos/brew-company-logo.webp') }}" alt="The Brew Company logo">
        <img src="{{ url('images/logos/deoveritas-logo.webp') }}" alt="Deoveritas logo">
        <img src="{{ url('images/logos/lvm-logo.webp') }}" alt="Latvijas Valsts Meži logo">
    </div>
</div>

<div class="recent-projects-wrapper container-lg px-4">
    <span class="recent-projects-title "><span class="tag-icon"></span>{{ __('My recent projects') }}</span>

    <div class="projects row">
        <a href="https://visualdesign.lv/" target="_blank" class="project col-md-6">
            <div class="project-content">
                <img src="{{ url('images/recent-projects/visualdesign_screenshot.webp') }}" alt="Visual Design Project">
                <div class="overlay">
                    <h2 class="title">Visual Design</h2>
                    <p class="project-build-with">{{ __('Built with')}} Wordpress</p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection