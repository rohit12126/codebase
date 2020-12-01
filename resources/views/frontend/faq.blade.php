@extends('layouts.front')
@section('content')
<!-- START SECTION SHOP -->
<section class="section text-center">
        <div class="content-section">
            <h1 class="mt-3 mb-5 heading1">questions &amp; answers</h1>
            <div class="row justify-content-center">
                <div class="col-6 col-sm-4 col-md-3 mb-2">
                    <a href="#fcompany" class="btn btn-outline-secondary w-100">Company</a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 mb-2">
                    <a href="#faq1" class="btn btn-outline-secondary w-100">faq1</a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 mb-2">
                    <a href="" class="btn btn-outline-secondary w-100">faq2</a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 mb-2">
                    <a href="" class="btn btn-outline-secondary w-100">faq3</a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 mb-2">
                    <a href="" class="btn btn-outline-secondary w-100">faq4</a>
                </div>
                <div class="col-6 col-sm-4 col-md-3 mb-2">
                    <a href="" class="btn btn-outline-secondary w-100">faq5</a>
                </div>
            </div>
        </div>
    </section>
 
    <section class="section" id="#faq1">
        <div class="content-section">
            <h2 class="heading2 mt-3 mb-5 text-center">Faq 1</h2>
            <div id="accordion">
            @foreach($faq_list as $faq)
                <div class="faq-card">
                  <div class="faq-card-header">
                    <a class="faq-card-link" data-toggle="collapse" href="#fq{{$faq->id}}">
                    {{$faq->title}}
                  </a>
                  </div>
                  <div id="fq{{$faq->id}}" class="collapse" data-parent="#accordion">
                    <div class="faq-card-body">
                    <p>{{$faq->body}}</p>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
        </div>
    </section>
   
@endsection
