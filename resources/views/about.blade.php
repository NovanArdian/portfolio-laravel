@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<!-- About Section-->
<section class="page-section bg-white text-dark mb-0" id="about"> <!-- Mengubah bg-primary menjadi bg-white dan text-white menjadi text-dark -->
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-dark">About Me</h2> <!-- Mengubah text-white menjadi text-dark -->
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">Nama saya novan ardian , saya lahir di bogor pada tanggal 9 november 2007 ,saya sekolah di smk wikrama bogor dengan penuh harapan bisa merain masa depan , bila kalian jatuh? harus bangun karna kegagalan adalah awal perjalanan dari kesuksesan</p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead">saya bercita cita ingin menjadi sepak bola profesional , walaupun mustahil tapi setidak nya kita mencoba , ga ada kata gagal apabila kita sudah berusaha , saya juga ingin menjadi programmer profesional , buat kalian juga harus tetep semangat</p>
            </div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-dark" href="https://github.com/NovanArdian"> <!-- Mengubah btn-outline-light menjadi btn-outline-dark -->
                <i class="fas fa-download me-2"></i>
                My Github!
            </a>
        </div>
    </div>
</section>
@endsection
