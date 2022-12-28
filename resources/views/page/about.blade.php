@extends('layout.index')
@section('content')
    <div class="about">
        <div class="about__hero">
            <div class="blur"></div>
            <div class="about__hero-info">
                <div class="about__hero-info-title">
                    <p>dive into learning</p>
                    <p>Pelopor SMK bidang Teknologi dan Informatika di Indonesia</p>
                </div>
                <div class="about__hero-info-img" style="background: url({{ asset('./img/home-bg.jpg') }})">
                </div>
            </div>
        </div>
        <div class="about__info">
            <div class="about__info-container">
                <div class="about__info-container-right">
                    <div class="about__info-container-right-title"></div>
                    <div class="about__info-container-right-txt"></div>
                    <div class="about__info-container-right-btn"></div>
                </div>
                <div class="about__info-container-left">
                    <div class="about__info-container-left-txt"></div>
                    <div class="about__info-container-left-img"></div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(window).scroll(function() {
            navScroll(100);
        })
    </script>
@endsection
