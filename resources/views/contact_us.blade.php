@extends('layouts.app')

@section('title', 'Acountant page')

@section('content')

<!-- contact-->
<section class="contact py-5" id="contact">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 mb-sm-5 mb-4 text-center text-wh font-weight-bold">Contact Us</h3>
        <div class="contact_grid_right pt-4">
            <form action="#" method="post">
                <div class="row contact_left_grid">
                    <div class="col-lg-6 con-left" data-aos="fade-up">
                        <div class="form-group">
                            <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="Email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Subject" placeholder="Subject" required="">
                        </div>
                    </div>
                    <div class="col-lg-6 con-right" data-aos="fade-up">
                        <div class="form-group">
                            <textarea id="textarea" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="sub-honey">
                            <button class="form-control btn" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- //contact -->

@stop