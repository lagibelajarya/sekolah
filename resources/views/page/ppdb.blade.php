@extends('layout.index')
@section('content')
    <div class="ppdb">
        <div class="ppdb-hero" style="background: linear-gradient(-120deg ,#ef4225 0, 45.38%,#fe9887 74.11%,#fcacf1 );">
            <div class="ppdb-hero-bc">
                <a href="">
                    <ion-icon name="home"></ion-icon> Home
                </a>
                <a>/</a>
                <a href="">Ppdb</a>
            </div>
            <div class="ppdb-hero-title">ppdb blog</div>
        </div>
        <div class="ppdb-title">
            <div class="section-title"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 40">
                    <path d="M0 40C137.185 40 125.676 0 240 0s103.999 40 240 40H0Z" fill="#eff3f3"></path>
                </svg>
                <p>step ppdb</p>
            </div>
            <div class="ppdb-title-text">
                <p>
                    How can you use Ocean School in your classroom? Free, engaging, informative
                </p>
                <div class="ppdb-title-text-btn btn">Explore our resources</div>

            </div>
            <div class="ppdb-title-ilus">
                <div class="ilus-box">
                    <div class="ilus-box-img" style="">
                        <img src="{{ asset('public/img/ilustration/ilus4.svg') }}" alt="">
                    </div>
                    <div class="ilus-box-info">
                        <div class="ilus-box-info-1 btn-circle">1</div>
                        <div class="ilus-box-info-2">
                            <p>sellect collection</p>
                            <p>and customize it</p>
                        </div>
                    </div>
                </div>
                <div class="ilus-box">
                    <div class="ilus-box-img" style="">
                        <img src="{{ asset('public/img/ilustration/ilus5.svg') }}" alt="">
                    </div>
                    <div class="ilus-box-info">
                        <div class="ilus-box-info-1 btn-circle">2</div>
                        <div class="ilus-box-info-2">
                            <p>Explore our resources</p>
                            <p>available in multiple formats</p>
                        </div>
                    </div>
                </div>
                <div class="ilus-box">
                    <div class="ilus-box-img" style="">
                        <img src="{{ asset('public/img/ilustration/ilus6.svg') }}" alt="">
                    </div>
                    <div class="ilus-box-info">
                        <div class="ilus-box-info-1 btn-circle">3</div>
                        <div class="ilus-box-info-2">
                            <p>Share it with your students</p>
                            <p> using a link, Microsoft Teams, <br> or Google Classroom</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
