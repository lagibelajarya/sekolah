@extends('layout.index')
@section('content')
    <div class="detail-news">
        <div class="detail-news-hero">
            <div class="detail-news-hero-bc">
                <a href="{{ route('home') }}">Home</a>
                <p>-</p>
                <a href="{{ route('news') }}">news</a>
                <p>-</p>
                <a href="">detail news</a>
            </div>
            <div class="detail-news-hero-info">
                <div class="detail-news-hero-info-cat ">articles</div>
                <div class="detail-news-hero-info-title">Ocean Wanderers</div>
                <div class="detail-news-hero-info-desc">by muhammad rifaldi</div>
                <div class="detail-news-hero-info-date">
                    <p>published</p>
                    <p>1, january 2023</p>
                </div>

            </div>

        </div>
        <div class="detail-news-content">
            <div class="detail-news-content-img bg-asset " style="background: url({{ asset('public/img/kantin.jpg') }})">
                <div class="detail-news-content-img-src"></div>

            </div>
            <div class="detail-news-content-text">
                <p>The ocean makes life on land possible. From moderating the Earth’s climate to producing much of the
                    oxygen that animals need (in the sea and out), the ocean helps to keep our planet healthy and habitable.
                    And surprisingly, much of the groundwork for nurturing our planet’s health is done by microbes that
                    thrive by the trillions under the waves. </p>
                <p>The ocean makes life on land possible. From moderating the Earth’s climate to producing much of the
                    oxygen that animals need (in the sea and out), the ocean helps to keep our planet healthy and habitable.
                    And surprisingly, much of the groundwork for nurturing our planet’s health is done by microbes that
                    thrive by the trillions under the waves. </p>
            </div>

        </div>
    </div>
@endsection
