@extends('layouts.main')

    <!-- Main Content </> -->
    @section('content')
    <section class="content">
        <div class="container-fluid container-content">
            <div class="row">
                {{-- <div class="col d-flex justify-content-start">
                    <div class="body-content">
                        <img src="img/Hello.png" alt="">
                        <h2 class="title-content">DanuDiraja Soenoto</h2>
                        <p class="text-content">Hello Everyone, Introduction My Name Is DanuDiraja Soenoto
                            <br> I am Frontend Devlopment And UI/UX
                        </p>
                        <button class="hire-content">Hire Me</button>
                        <button class="cv-content">Download CV</button>
                    </div>
                </div> --}}
                <div class="col d-flex justify-content-start">
                    <div class="body-content">
                        <img src="/img/hello.png" alt="" class="hi-content">
                        <p class="hello-content">Hello</p>
                        <h2 class="title-content">I'm</h2>
                        <h2 class="title-content"><label>Danu</label>Diraja Soenoto</h2>
                        <p class="text-content">Someone Graphic Designer UI/UX <br>
                            And Front End Devloper...</p>
                        <button class="hire-content">Hire Me</button>
                        <button class="cv-content">Download CV</button>
                    </div>
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="body-img">
                        <img src="/img/img_pict.png" alt="Pict">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection