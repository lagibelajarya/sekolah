@extends('layout.index')

@section('content')
    <div class="home">
        <div class="home__hero bg-asset" style="background: url({{ asset('public/img/bgSchool.jpg') }})">
            <div class="blur"></div>
            <div class="home__hero-info">
                <div class="home__hero-info-title">
                    <p>smkn 1 purwosari</p>
                    <p>Pelopor SMK bidang Teknologi dan Informatika di Indonesia</p>
                </div>

            </div>
        </div>
        <div class="home__mitra">
            <div class="section-title"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 40">
                    <path d="M0 40C137.185 40 125.676 0 240 0s103.999 40 240 40H0Z" fill="#fff"></path>
                </svg>
                <p>sponsor ship</p>
            </div>
            <div class="home__mitra--wrapper">
                <div class="home__mitra--wrapper__box">
                    <img src="{{ asset('public/img/brand/adidas.svg') }}" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="{{ asset('public/img/brand/apple.svg') }}" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="{{ asset('public/img/brand/google.svg') }}" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="{{ asset('public/img/brand/inter.svg') }}" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="{{ asset('public/img/brand/nike.svg') }}" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="{{ asset('public/img/brand/samsung.svg') }}" alt="" />
                </div>
            </div>
        </div>
        <div class="home__video">
            <div class="home__video-wrapper bg-asset" style="background: url({{ asset('public/img/bgSchool.jpg') }})">
                <div class="home__video-wrapper-info">
                    <div class="home__video-wrapper-info-img bg-asset"
                        style="background: url({{ asset('public/img/bgSchool.jpg') }})">
                    </div>
                    <div class="home__video-wrapper-info-title">watch trailer</div>
                    <div class="home__video-wrapper-info-btn btn-show-video-player">
                        <ion-icon name="play-outline"></ion-icon>
                        <p class="home__video-wrapper-info-btn-txt">play video</p>
                    </div>
                </div>
                <div class="blur"></div>

            </div>
        </div>


        <div class="home__fas">
            <div class="home__fas-wrapper">
                <div class="home__fas-wrapper-head">
                    <div class="home__fas-wrapper-head-title">fasilitas SMKN 1</div>
                    <div class="home__fas-wrapper-head-paginate">
                        <div class="button-prev btn-circle">
                            <ion-icon name="arrow-back-outline"></ion-icon>
                        </div>
                        <div class="button-next btn-circle">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                    </div>

                </div>
                <div class="home__fas-wrapper-content">

                    <div class="swiper SwiperHome">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="berita-box">
                                    <div class="berita-box-img bg-asset"
                                        style="background: url({{ asset('public/img/juara.jpg') }})"></div>
                                    <div class="berita-box-info">

                                        <div class="berita-box-info-cat">
                                            <div class="berita-box-info-cat-item btn">tecnology</div>
                                            <div class="berita-box-info-cat-item btn">food</div>
                                        </div>
                                        <div class="berita-box-info-title">
                                            <div class="berita-box-info-title-txt">Illiyin Studio Developer</div>
                                            <div class="berita-box-info-title-desc">Lorem, ipsum dolor sit amet consectetur
                                                adipisicing elit. Eos distinctio et commodi perferendis officiis quisquam
                                                doloremque provident ex numquam itaque? Porro dolores soluta et possimus?
                                            </div>
                                        </div>
                                        <div class="berita-box-info-date">
                                            <div class="berita-box-info-date-1">
                                                <ion-icon name="calendar-outline"></ion-icon>
                                                <p>1, jannuary 2023</p>
                                            </div>
                                            <div class="berita-box-info-date-2">1, jannuary 2023</div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="berita-box">
                                    <div class="berita-box-img bg-asset"
                                        style="background: url({{ asset('public/img/juara2.jpg') }})"></div>
                                    <div class="berita-box-info">

                                        <div class="berita-box-info-cat">
                                            <div class="berita-box-info-cat-item btn">tecnology</div>
                                            <div class="berita-box-info-cat-item btn">food</div>
                                        </div>
                                        <div class="berita-box-info-title">
                                            <div class="berita-box-info-title-txt">Illiyin Studio Developer</div>
                                            <div class="berita-box-info-title-desc">Lorem, ipsum dolor sit amet consectetur
                                                adipisicing elit. Eos distinctio et commodi perferendis officiis quisquam
                                                doloremque provident ex numquam itaque? Porro dolores soluta et possimus?
                                            </div>
                                        </div>
                                        <div class="berita-box-info-date">
                                            <div class="berita-box-info-date-1">
                                                <ion-icon name="calendar-outline"></ion-icon>
                                                <p>1, jannuary 2023</p>
                                            </div>
                                            <div class="berita-box-info-date-2">1, jannuary 2023</div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="berita-box">
                                    <div class="berita-box-img bg-asset"
                                        style="background: url({{ asset('public/img/juara3.jpg') }})"></div>
                                    <div class="berita-box-info">

                                        <div class="berita-box-info-cat">
                                            <div class="berita-box-info-cat-item btn">tecnology</div>
                                            <div class="berita-box-info-cat-item btn">food</div>
                                        </div>
                                        <div class="berita-box-info-title">
                                            <div class="berita-box-info-title-txt">Illiyin Studio Developer</div>
                                            <div class="berita-box-info-title-desc">Lorem, ipsum dolor sit amet consectetur
                                                adipisicing elit. Eos distinctio et commodi perferendis officiis quisquam
                                                doloremque provident ex numquam itaque? Porro dolores soluta et possimus?
                                            </div>
                                        </div>
                                        <div class="berita-box-info-date">
                                            <div class="berita-box-info-date-1">
                                                <ion-icon name="calendar-outline"></ion-icon>
                                                <p>1, jannuary 2023</p>
                                            </div>
                                            <div class="berita-box-info-date-2">1, jannuary 2023</div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="berita-box">
                                    <div class="berita-box-img bg-asset"
                                        style="background: url({{ asset('public/img/kantin.jpg') }})"></div>
                                    <div class="berita-box-info">

                                        <div class="berita-box-info-cat">
                                            <div class="berita-box-info-cat-item btn">tecnology</div>
                                            <div class="berita-box-info-cat-item btn">food</div>
                                        </div>
                                        <div class="berita-box-info-title">
                                            <div class="berita-box-info-title-txt">Illiyin Studio Developer</div>
                                            <div class="berita-box-info-title-desc">Lorem, ipsum dolor sit amet consectetur
                                                adipisicing elit. Eos distinctio et commodi perferendis officiis quisquam
                                                doloremque provident ex numquam itaque? Porro dolores soluta et possimus?
                                            </div>
                                        </div>
                                        <div class="berita-box-info-date">
                                            <div class="berita-box-info-date-1">
                                                <ion-icon name="calendar-outline"></ion-icon>
                                                <p>1, jannuary 2023</p>
                                            </div>
                                            <div class="berita-box-info-date-2">1, jannuary 2023</div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </div>


        {{-- <div class="home__action">
            <div class="home__action-wrapper">
                <div class="home__action-item">
                    <div class="home__action-item-title">
                        <p>Keunggulan</p>
                        <div class="home__action-item-title-btn">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                    </div>
                    <img class="home__action-item-img" src="{{ asset('public/img/ilustration/ilus1.svg') }}"
                        alt="">
                </div>
                <div class="home__action-item">
                    <div class="home__action-item-title">
                        <p>Fasilitas</p>
                        <div class="home__action-item-title-btn">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                    </div>
                    <img class="home__action-item-img" src="{{ asset('public/img/ilustration/ilus2.svg') }}"
                        alt="">
                </div>
                <div class="home__action-item">
                    <div class="home__action-item-title">
                        <p>Prestasi</p>
                        <div class="home__action-item-title-btn">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                    </div>
                    <img class="home__action-item-img" src="{{ asset('public/img/ilustration/ilus3.svg') }}"
                        alt="">
                </div>
            </div>

        </div> --}}

        <div class="home__berita">
            <div class="section-title"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 40">
                    <path d="M0 40C137.185 40 125.676 0 240 0s103.999 40 240 40H0Z" fill="#fff"></path>
                </svg>
                <p>berita</p>
            </div>
            <div class="home__berita-wrapper">
                <div class="home__berita-head">
                    <div class="home__berita-head-link btn active">Prestasi</div>
                    <div class="home__berita-head-link btn">Juara</div>
                    <div class="home__berita-head-link btn">Juara</div>
                </div>

                <div class="home__berita-container">
                    <a href="{{ route('detailNews') }}" class="berita-box">
                        <div class="berita-box-btn btn-circle">
                            <ion-icon name="log-in-outline"></ion-icon>
                        </div>
                        <div class="berita-box-img" style="background: url({{ asset('public/img/kantin.jpg') }})"></div>
                        <div class="berita-box-info">
                            <div class="berita-box-info-title">
                                <div class="berita-box-info-title-cat">articles</div>
                                <div class="berita-box-info-title-txt">Illiyin Studio Developer</div>
                            </div>
                            <div class="berita-box-info-date">
                                <div class="berita-box-info-date-1">
                                    <ion-icon name="calendar-outline"></ion-icon>
                                    <p>1, jannuary 2023</p>
                                </div>
                                <div class="berita-box-info-date-2">1, jannuary 2023</div>

                            </div>

                        </div>
                    </a>
                    <a href="{{ route('detailNews') }}" class="berita-box">
                        <div class="berita-box-btn btn-circle">
                            <ion-icon name="log-in-outline"></ion-icon>
                        </div>
                        <div class="berita-box-img" style="background: url({{ asset('public/img/kantin.jpg') }})"></div>
                        <div class="berita-box-info">
                            <div class="berita-box-info-title">
                                <div class="berita-box-info-title-cat">articles</div>
                                <div class="berita-box-info-title-txt">Illiyin Studio Developer</div>
                            </div>
                            <div class="berita-box-info-date">
                                <div class="berita-box-info-date-1">
                                    <ion-icon name="calendar-outline"></ion-icon>
                                    <p>1, jannuary 2023</p>
                                </div>
                                <div class="berita-box-info-date-2">1, jannuary 2023</div>

                            </div>

                        </div>
                    </a>
                    <a href="{{ route('detailNews') }}" class="berita-box">
                        <div class="berita-box-btn btn-circle">
                            <ion-icon name="log-in-outline"></ion-icon>
                        </div>
                        <div class="berita-box-img" style="background: url({{ asset('public/img/kantin.jpg') }})"></div>
                        <div class="berita-box-info">
                            <div class="berita-box-info-title">
                                <div class="berita-box-info-title-cat">articles</div>
                                <div class="berita-box-info-title-txt">Illiyin Studio Developer</div>
                            </div>
                            <div class="berita-box-info-date">
                                <div class="berita-box-info-date-1">
                                    <ion-icon name="calendar-outline"></ion-icon>
                                    <p>1, jannuary 2023</p>
                                </div>
                                <div class="berita-box-info-date-2">1, jannuary 2023</div>

                            </div>

                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="video-player">
            <div class="video-player-wrapper">
                <video autoplay loop muted src="{{ asset('public/video/Inggris.mp4') }}"></video>
            </div>
            <div class="video-player-close btn-circle btn-hide-video-player">
                &#10005;
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var swiper = new Swiper(".SwiperHome", {
            slidesPerView: 4,
            spaceBetween: 30,
            navigation: {
                nextEl: ".button-next",
                prevEl: ".button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                900: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                }
            }
        });
        $('.btn-show-video-player').on("click", function() {
            $('.video-player').addClass('show')

        })

        $('.btn-hide-video-player').on("click", function() {
            $('.video-player').removeClass('show')
        })
        for (let i = 0; i < 7; i++) {
            $('.home__berita--wrapper__left--scroll').append(`<div class="berita-box">
                        <div class="berita-box__left" style="background: url({{ asset('public/img/juara.jpg') }})"></div>
                        <div class="berita-box__right">
                            <div class="berita-box__right--title">Kegiatan Pembelajaran Daring</div>
                            <div class="berita-box__right--desc">Lorem ipsum dolor sit amet adipcing ipsum dolor sit
                                amet adipcing aqua
                                lorem ipsum.</div>
                            <div class="berita-box__right--bottom">
                                <p>20 Juni</p>
                                <p>
                                    <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                </p>
                            </div>
                        </div>
                    </div>`)
        }
    </script>
@endsection
