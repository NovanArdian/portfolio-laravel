@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<header class="masthead bg-primary text-white text-center bg-white">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{ asset('assets/img/avataaars.svg') }}" alt="..." />
        <!-- Masthead Heading dengan teks hitam -->
        <h1 class="masthead-heading text-uppercase mb-0 text-dark">I'm Novan Ardian</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star text-dark"></i></div> <!-- Mengubah warna ikon menjadi hitam -->
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading dengan teks hitam -->
        <p class="masthead-subheading font-weight-light mb-0 text-dark">SD PSR ANGIN - SMP MEGAMENDUNG 01 - SMK WIKRAMA</p>
    </div>
</header>
<!-- Main Content Section -->
<section class="page-section bg-white">
    <div class="container">
        <!-- Your main content for welcome page -->
    </div>
</section>
@endsection
