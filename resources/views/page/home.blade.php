@extends('layout.index')

@section('content')
    <div class="home">
        <div class="hero"
            style="background: linear-gradient(rgba(0, 0, 0, 0.500),rgba(0, 0, 0, 0.500)), url({{ asset('img/home-bg.jpg') }})">
            <div class="hero-container">
                <div class="hero__top">
                    <div class="hero__top--title">
                        <div class="hero__top--title__1">
                            smk negeri 1 purwosari. <br />
                            The Real Informatics School.
                        </div>
                        <div class="hero__top--title__2">Pelopor SMK bidang Teknologi dan Informatika di Indonesia</div>
                    </div>
                    <div class="hero__top--btn">Join now</div>
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
                                Timur.  SMKN 1 Purwosari merupakan
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

        <div class="home__features">
            <div class="title">
                <div class="title__wrapper">
                    <div class="title__wrapper--text-1">Practice Advice</div>
                    <div class="title__wrapper--text-2">Approdable Packages</div>
                    <div class="title__wrapper--text-3">
                        Problems trying to resolve the conflict between <br />
                        the two major realms of Classical physics: Newtonian mechanics
                    </div>
                </div>
                <div class="title__btn btn bg-second">
                    Explore
                </div>
            </div>
            <div class="home__features--wrapper">
                <div class="features-box">
                    <div class="features-box__img"><img src="{{ asset('img/monitor.png') }}" alt="" /></div>
                    <div class="features-box__title">Fasilitas Lengkap</div>
                    <div class="features-box__desc">
                        The gradual accumulation of <br />
                        information about atomic and <br />
                        small-scale behaviour...
                    </div>
                </div>
                <div class="features-box">
                    <div class="features-box__img"><img src="{{ asset('img/house.png') }}" alt="" /></div>
                    <div class="features-box__title">Lingkungan Nyaman</div>
                    <div class="features-box__desc">
                        The gradual accumulation of <br />
                        information about atomic and <br />
                        small-scale behaviour...
                    </div>
                </div>
                <div class="features-box">
                    <div class="features-box__img"><img src="{{ asset('img/company.png') }}" alt="" /></div>
                    <div class="features-box__title">Kerjasama Luas</div>
                    <div class="features-box__desc">
                        The gradual accumulation of <br />
                        information about atomic and <br />
                        small-scale behaviour...
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- 
        <div class="home__profile">
            <div class="home__profile--left">
                <div class="card">
                    <div class="card__title">Profil SMKN 1 Purwosari</div>
                    <div class="card__desc">
                        <p class="card__desc--text">
                            Di samping adalah profil sekolah kami secara keseluruhan dari mulai bagian depan hingga seluruh
                            fasilitas yang terdapat disekolah kami kami akan Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Corporis, quia in
                            cupiditate velit sed fuga magni accusantium voluptatum laboriosam dolorum.
                        </p>
                        <div class="card__desc--show">...Selengkapnya</div>
                    </div>
                    <div class="card__btn">Learn More <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <div class="home__profile--right">
                <div class="home__profile--right__box">
                    <div class="home__profile--right__box--icon">
                        <img src="../assets/img/homeIcon.svg" alt="Logo Home" />
                    </div>
                    <div class="home__profile--right__box--right">
                        <div class="home__profile--right__box--right__text">
                            <p class="">Fasilitas</p>
                            <p class="">Lorem ipsum dolor sit amet adipcing aqua lorem ipsum.</p>
                        </div>
                        <div class="home__profile--right__box--right__btn btn-show-fasilitas">Show <ion-icon
                                name="arrow-up-circle-outline"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="home__profile--right__box">
                    <div class="home__profile--right__box--icon">
                        <img src="../assets/img/locationIcon.svg" alt="Logo Home" />
                    </div>
                    <div class="home__profile--right__box--right">
                        <div class="home__profile--right__box--right__text">
                            <p class="">location</p>
                            <p class="">Lorem ipsum dolor sit amet adipcing aqua lorem ipsum.</p>
                        </div>
                        <div class="home__profile--right__box--right__btn btn-show-location">Show <ion-icon
                                name="arrow-up-circle-outline"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="home__profile--right__box">
                    <div class="home__profile--right__box--icon">
                        <img src="../assets/img/prestasiIcon.svg" alt="Logo Home" />
                    </div>
                    <div class="home__profile--right__box--right">
                        <div class="home__profile--right__box--right__text">
                            <p class="">Prestasi</p>
                            <p class="">Lorem ipsum dolor sit amet adipcing aqua lorem ipsum.</p>
                        </div>
                        <div class="home__profile--right__box--right__btn btn-show-prestasi">Show <ion-icon
                                name="arrow-up-circle-outline"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="home__profile--right__box">
                    <div class="home__profile--right__box--icon">
                        <img src="../assets/img/historyIcon.svg" alt="Logo Home" />
                    </div>
                    <div class="home__profile--right__box--right">
                        <div class="home__profile--right__box--right__text">
                            <p class="">Sejarah</p>
                            <p class="">Lorem ipsum dolor sit amet adipcing aqua lorem ipsum.</p>
                        </div>
                        <div class="home__profile--right__box--right__btn">Show <ion-icon name="arrow-up-circle-outline">
                            </ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

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

    <div class="home__berita">
        <div class="home__berita--title">
            <div class="home__berita--title-text">Berita dan Agenda</div>
            <div class="home__berita--title__search">
                <ion-icon name="search-outline"></ion-icon>
                <input type="search" placeholder="Search" />
            </div>
        </div>
        <div class="home__berita--wrapper">
            <div class="home__berita--wrapper__left">
                <div class="home__berita--wrapper__left--scroll">
                    <div class="berita-box">
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
                    </div>
                </div>
            </div>
            <div class="home__berita--wrapper__right">
                <div class="berita__simple">
                    <div class="berita__simple--box">
                        <div class="berita__simple--box__left">
                            <img src="{{ asset('./img/logo.png') }}" alt="" />
                        </div>
                        <div class="berita__simple--box__right">
                            <div class="berita__simple--box__right--top">
                                <p>01 - 06 - 2021</p>
                            </div>
                            <div class="berita__simple--box__right--bottom">Deklarasi Sekolah Ramah Anak</div>
                        </div>
                        <p class="berita__simple--box__arr">
                            <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                        </p>
                    </div>
                    <div class="berita__simple--box">
                        <div class="berita__simple--box__left">
                            <img src="{{ asset('./img/logo.png') }}" alt="" />
                        </div>
                        <div class="berita__simple--box__right">
                            <div class="berita__simple--box__right--top">
                                <p>01 - 06 - 2021</p>
                            </div>
                            <div class="berita__simple--box__right--bottom">Deklarasi Sekolah Ramah Anak</div>
                        </div>
                        <p class="berita__simple--box__arr">
                            <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                        </p>
                    </div>
                    <div class="berita__simple--box">
                        <div class="berita__simple--box__left">
                            <img src="{{ asset('./img/logo.png') }}" alt="" />
                        </div>
                        <div class="berita__simple--box__right">
                            <div class="berita__simple--box__right--top">
                                <p>01 - 06 - 2021</p>
                            </div>
                            <div class="berita__simple--box__right--bottom">Deklarasi Sekolah Ramah Anak</div>
                        </div>
                        <p class="berita__simple--box__arr">
                            <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
    <script>
        $(window).scroll(function() {
            navScroll(150);
        })
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
