@extends('client.layouts.index')

@section('content')
    <section class="hero-area circle-wrap">
        <div class="circle x1"></div>
        <div class="circle x2"></div>
        <div class="circle x3"></div>
        <div class="circle x4"></div>
        <div class="circle x5"></div>
        <div class="circle x6"></div>
        <div class="circle x7"></div>
        <div class="circle x8"></div>
        <div class="circle x9"></div>
        <div class="circle x10"></div>
        <div class="container">
            <div class="row full-height align-items-center">
                <div class="col-md-6 p-100 px-t p-50 px-b md-p-10 px-b">
                    <h2 class="text-capitalize m-25 px-b">Poliklinik. <br>Pelayanan Kesehatan Terbaik</h2>
                    <p class="m-25px-b">Melayani dengan sepenuh hati, memberikan pelayanan kesehatan terbaik untuk
                        masyarakat</p>
                    <div class="hero-btn-wrapper">
                        <a href="{{ route('get.register.poli') }}" class="btn btn-default animated-btn">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="col-md-6 p-100 px-t p-50 px-b md-p-10 px-t">
                    <img class="hero-mock" width="150%"
                        src="https://private-user-images.githubusercontent.com/80609220/299374965-5740a26e-1a89-4d7e-bc36-609b324883b8.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MDYxMTIxMTcsIm5iZiI6MTcwNjExMTgxNywicGF0aCI6Ii84MDYwOTIyMC8yOTkzNzQ5NjUtNTc0MGEyNmUtMWE4OS00ZDdlLWJjMzYtNjA5YjMyNDg4M2I4LnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDAxMjQlMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQwMTI0VDE1NTY1N1omWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPTYwNzVlZDE0YzUxMzhiZDkxZGNlNTNjYjIxMWY0ZDgxNzBhNjAzN2YxM2U0ZTkyNWRjYmU5NjJiMjYxYjA5YTYmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JmFjdG9yX2lkPTAma2V5X2lkPTAmcmVwb19pZD0wIn0.CmmO_OG9do4phQ-oqkMMRvL5jsqdH02kbla8BNCoRJA"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="p-100px-tb sm-p-50px-b">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center p-60px lg-p-40px md-p-30px sm-p-20px m-10px-t m-10px-b">
                        <h4>Poli Umum</h4>
                        <p>Melayani pasien umum yang membutuhkan pelayanan kesehatan secara umum</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center p-60px lg-p-40px md-p-30px sm-p-20px m-10px-t m-10px-b">
                        <h4>Poli Gigi</h4>
                        <p>Melayani pasien yang membutuhkan pelayanan kesehatan gigi</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center p-60px lg-p-40px md-p-30px sm-p-20px m-10px-t m-10px-b">
                        <h4>Poli Kandungan</h4>
                        <p>Melayani pasien yang membutuhkan pelayanan kesehatan kandungan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
