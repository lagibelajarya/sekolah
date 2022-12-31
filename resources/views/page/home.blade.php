@extends('layout.index')

@section('content')
    <div class="home">
        <div class="home__hero">
            <div class="blur"></div>
            <div class="home__hero-info">
                <div class="home__hero-info-title">
                    <p>smkn 1 purwosari</p>
                    <p>Pelopor SMK bidang Teknologi dan Informatika di Indonesia</p>
                </div>

            </div>
        </div>

        <div class="home__mitra">
            <div class="home__mitra--wrapper">
                <div class="home__mitra--wrapper__box">
                    <img src="{{ asset('img/brand/adidas.svg') }}" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="{{ asset('img/brand/apple.svg') }}" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="{{ asset('img/brand/google.svg') }}" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="{{ asset('img/brand/inter.svg') }}" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="{{ asset('img/brand/nike.svg') }}" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="{{ asset('img/brand/samsung.svg') }}" alt="" />
                </div>
            </div>
        </div>

        <div class="home__sambutan">
            <div class="home__sambutan-wrapper">


                <div class="home__sambutan--left">
                    <img src="{{ asset('img/kepalasekolah.svg') }}" alt="" />
                </div>
                <div class="home__sambutan--right">
                    <div class="card">
                        <div class="card__title">
                            Profile SMKN 1 Purwosari
                        </div>
                        <div class="card__desc">
                            <p class="card__desc--text">
                                Selamat datang di website <span> SMKN 1 Purwosari </span>. Yang merupakan lembaga pusat
                                pendidikan dan juga
                                sebagai salah satu Pusat Pelatihan dan Pendidikan Keterampilan Terpadu (PPPKT) di Propinsi
                                Jawa
                                Timur. SMKN 1 Purwosari merupakan
                                Sekolah Adiwiyata yang berada di Purwosari dimana tempatnya yang sangat strategis dan mudah
                                dijangkau, Mempunyai motto “Kepuasan anda, Prestasi kami” segenap keluarga besar SMKN 1
                                Purwosari senantiasa akan memberikan layanan
                                yang prima bagi masyarakat. Selamat bergabung.
                            </p>
                        </div>
                        {{-- <div class="card__btn">Learn More <ion-icon name="chevron-forward-outline"></ion-icon> --}}
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="home__berita">
        <div class="home__berita-container">
            <div class="berita-box">
                <div class="berita-box-img" style="background: url({{ asset('./img/kantin.jpg') }})"></div>
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
            </div>
            <div class="berita-box">
                <div class="berita-box-img" style="background: url({{ asset('./img/kantin.jpg') }})"></div>
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
            </div>
            <div class="berita-box">
                <div class="berita-box-img" style="background: url({{ asset('./img/kantin.jpg') }})"></div>
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
            </div>

        </div>
    </div>

    <div class="home__action">
        <p class="home__action-title">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, neque?
        </p>
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
        for (let i = 0; i < 7; i++) {
            $('.home__berita--wrapper__left--scroll').append(`<div class="berita-box">
                        <div class="berita-box__left" style="background: url({{ asset('./img/juara.jpg') }})"></div>
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
