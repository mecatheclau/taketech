@extends('layouts.app')

@section('title', 'Acountant page')

@section('content')

<!-- banner -->
<div class="main-w3pvt mian-content-wthree text-center" id="home">
    <div class="container">
        <div class="style-banner mx-auto">
            <h3 class="text-wh font-weight-bold">Welcome to <span>Saint Joseph Karuganda secondary school</span> <br>High quality Education</h3>
            <p class="mt-3 text-li" id="join">Join the My School now</p>
        </div>
    </div>
</div>
<!-- //banner -->

<!-- program bottom -->
<section class="w3ls-bnrbtm py-5" id="about">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 mb-md-5 mb-sm-4 mb-2 text-center font-weight-bold">Combinations</h3>
        <div class="row">
            <div class="col-lg-6 text-center">
                <img src="images/about.jpg" alt="about" class="img-fluid mt-4" />
            </div>
            <div class="col-lg-6 pr-xl-5 mt-4">
                <h2 class="title-sub mb-4">O'Level and A'level</h2>
                <p class="sub-para">
                    <h4>A'Level</h4>
                    <dl>
                        <dt>combination</dt>
                        <dd>MCE: Mathematics-Computer-science-Economics</dd>
                        <dd>MGE:Mathematics-Geography-Economics</dd>
                        <dd>HGE:History-Geography-Economics</dd>
                    </dl> 
                </p>
                <p class="sub-para pt-4 mt-4 border-top">
                    <h4>O'Level</h4>
                    <span>All courses include religion Swahili and French</span>    
                </p>
            </div>
        </div>
    </div>
</section>
<!-- //program bottom -->

<!-- services -->
<div class="services py-5" id="what">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 mb-xl-5 mb-sm-4 mb-2 text-center text-wh font-weight-bold">What We Do?</h3>
        <div class="row w3pvtits-services-row text-center">
            <div class="col-lg-4 serv-w3mk mt-5">
                <div class="w3pvtits-services-grids">
                    <span class="fa fa-check ser-icon" aria-hidden="true"></span>
                    <h4 class="text-bl my-4">Student Marks</h4>
                    <p class="text-left">You can check the marks of the student here </p>
                    <a class="service-btn mt-xl-5 mt-4 btn" href="#">Enter Here<span class="fa fa-long-arrow-right ml-2"></span></a>
                </div>
            </div>
            <div class="col-lg-4 serv-w3mk mt-5">
                <div class="w3pvtits-services-grids">
                    <span class="fa fa-send ser-icon" aria-hidden="true"></span>
                    <h4 class="text-bl my-4">Bank slip </h4>
                    <p class="text-left">No need to wait for bringing bank slip at school place you can send it here.</p>
                    <a class="service-btn mt-xl-5 mt-4 btn" href="#">Enter Here<span class="fa fa-long-arrow-right ml-2"></span></a>
                </div>
            </div>
            <div class="col-lg-4 serv-w3mk mt-5">
                <div class="w3pvtits-services-grids">
                    <span class="fa fa-users ser-icon" aria-hidden="true"></span>
                    <h4 class="text-bl my-4">Expert Teachers</h4>
                    <p class="text-left">Itaque earum rerum hic tenetur asap iente delectus rulla accumsan.</p>
                    <a class="service-btn mt-xl-5 mt-4 btn" href="#">Read More<span class="fa fa-long-arrow-right ml-2"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //services -->



@stop
