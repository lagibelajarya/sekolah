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
            <div class="section-title"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 40">
                    <path d="M0 40C137.185 40 125.676 0 240 0s103.999 40 240 40H0Z" fill="#fff"></path>
                </svg>
                <p>tentang kita</p>
            </div>
            <div class="about__info-container">
                <div class="about__info-container-right">
                    <div class="about__info-container-right-title">What is SMKN 1 Purwosari ?</div>
                    <div class="about__info-container-right-txt"> Ocean School is a free environmental education resource
                        for students in grades 5-12. Our inspiring and immersive multimedia resources featuring linear and
                        360˚ videos, VR/AR, interactive media and hands-on projects and activities are offered in English
                        and French. Our cross-curricular content spans science, social studies, language arts and more!
                    </div>
                    <div class="about__info-container-right-btn btn"> Explore Your Skill</div>
                </div>
                <div class="about__info-container-left">
                    <div class="about__info-container-left-txt">Explore the ocean through immersive multimedia lessons
                        created by scientists, educators, and storytellers</div>
                    <div class="about__info-container-left-img">
                        <img src="https://d1fe71kg83l872.cloudfront.net/v2/uploads/_539x382_fit_center-center_none/whale-tablet.png"
                            alt="">
                    </div>

                </div>
            </div>
        </div>
        <div class="home__action">
 
            <div class="home__action-wrapper">
                <div class="home__action-item">
                    <div class="home__action-item-title">
                        <p>Keunggulan</p>
                        <div class="home__action-item-title-btn">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                    </div>
                    <img class="home__action-item-img" src="{{ asset('./img/ilus1.svg') }}" alt="">
                </div>
                <div class="home__action-item">
                    <div class="home__action-item-title">
                        <p>Fasilitas</p>
                        <div class="home__action-item-title-btn">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                    </div>
                    <img class="home__action-item-img" src="{{ asset('./img/ilus2.svg') }}" alt="">
                </div>
                <div class="home__action-item">
                    <div class="home__action-item-title">
                        <p>Prestasi</p>
                        <div class="home__action-item-title-btn">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                    </div>
                    <img class="home__action-item-img" src="{{ asset('./img/ilus3.svg') }}" alt="">
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
