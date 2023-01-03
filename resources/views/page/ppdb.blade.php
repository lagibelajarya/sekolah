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

        {{-- <div class="ppdb-step">
            <div class="ppdb-step-wrapper">
                <div class="ppdb-step-wrapper-item">
                    <div class="ppdb-step-wrapper-item-icon">
                        <ion-icon name="construct-outline"></ion-icon>
                    </div>
                    <div class="ppdb-step-wrapper-item-title">
                        Troubleshooting
                    </div>
                    <div class="ppdb-step-wrapper-item-desc">Find solutions for common problems.</div>
                </div>
                <div class="ppdb-step-wrapper-item">
                    <div class="ppdb-step-wrapper-item-icon">
                        <ion-icon name="construct-outline"></ion-icon>
                    </div>
                    <div class="ppdb-step-wrapper-item-title">
                        Troubleshooting
                    </div>
                    <div class="ppdb-step-wrapper-item-desc">Find solutions for common problems.</div>
                </div>
                <div class="ppdb-step-wrapper-item">
                    <div class="ppdb-step-wrapper-item-icon">
                        <ion-icon name="construct-outline"></ion-icon>
                    </div>
                    <div class="ppdb-step-wrapper-item-title">
                        Troubleshooting
                    </div>
                    <div class="ppdb-step-wrapper-item-desc">Find solutions for common problems.</div>
                </div>
            </div>

        </div> --}}
        <div class="ppdb-form">
            <div class="ppdb-form-wrapper">
                <div class="ppdb-form-wrapper-head">
                    <div class="ppdb-form-wrapper-head-title">
                        <ion-icon name="people-circle-outline"></ion-icon>
                        Daftar menjadi Siswa baru SMKN 1 Purwosari
                    </div>
                    <div class="ppdb-form-wrapper-head-link">Privacy Police</div>
                </div>
                <div class="ppdb-form-wrapper-content">
                    <div class="ppdb-form-wrapper-content-right">
                        <div class="ppdb-info">
                            <div class="ppdb-info-wrapper">
                                {{-- <div class="ppdb-info-wrapper-head">Persyaratan</div> --}}
                                <div class="ppdb-info-wrapper-content">
                                    <div class="ppdb-info-wrapper-content-item">
                                        <ion-icon name="document-text-outline"></ion-icon>
                                        <p>Foto copy IJAZAH /UAS bagi lulusan SDN/SDI, Madrasah Ibtidaiyah/Madrasah Diniyah
                                            2 (dua) lembar
                                            yang telah disahkan oleh Kepala Sekolah dan mencantumkan Nomor Induk Siswa
                                            Nasional.</p>
                                    </div>
                                    <div class="ppdb-info-wrapper-content-item">
                                        <ion-icon name="document-text-outline"></ion-icon>
                                        <p>Pas Fhoto Ukuran 3 x 4 sebanyak 3 Lembar.</p>
                                    </div>
                                    <div class="ppdb-info-wrapper-content-item">
                                        <ion-icon name="document-text-outline"></ion-icon>
                                        <p>Foto Copy Ijazah / Sertifikat TPA (2) lembar yang telah disahkan atau Surat
                                            Keterangan mampu baca
                                            tulis Al Quran dari Guru mengaji (Persyaratan Huruf b pilih salah satu).</p>
                                    </div>
                                    <div class="ppdb-info-wrapper-content-item">
                                        <ion-icon name="document-text-outline"></ion-icon>
                                        <p>Foto copy Akte Kelahiran 1 (satu) lembar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="ppdb-form-wrapper-content-left">
                        <div class="form">
                            <div class="form-wrapper">
                                <div class="form-wrapper-head">
                                    <p>
                                        <ion-icon name="people-circle-outline"></ion-icon>
                                        Accounts
                                    </p>
                                    <p>if you have more more than one account, you can add them and easily switch between
                                    </p>
                                </div>
                                <hr>
                                <form class="form-wrapper-content">
                                    @csrf
                                    <div class="form-input">
                                        <label for="">nama lengkap <span>*</span></label>
                                        <input type="text" placeholder="muhammad rifaldi">
                                    </div>
                                    <div class="form-input">
                                        <label for="">tanggal lahir <span>*</span></label>
                                        <input type="date" placeholder="">
                                    </div>
                                    <div class="form-select">
                                        <label for="selectAgama">agama <span>*</span></label>
                                        <select name="selectAgama" id="selectAgama" onchange="onChangeSelect()">
                                            <option value="islam">islam</option>
                                            <option value="kristen">kristen</option>
                                            <option value="hindu">hindu</option>
                                            <option value="budha">budha</option>
                                        </select>
                                    </div>
                                    <a href="" class="form-wrapper-content-btn btn">kirim</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('js')
    <script>
        function onChangeSelect() {
            alert($('#selectAgama').val())
        }
    </script>
@endsection
