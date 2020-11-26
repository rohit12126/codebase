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
    <section class="section" id="#fcompany">
        <div class="content-section">
            <h2 class="heading2 mt-3 mb-5 text-center">Company</h2>
            <div id="accordion">
                <div class="faq-card">
                  <div class="faq-card-header">
                    <a class="faq-card-link" data-toggle="collapse" href="#fq" aria-expanded="false">
                        What is so special about Custom Closet?
                    </a>
                  </div>
                  <div id="fq" class="collapse" data-parent="#accordion">
                    <div class="faq-card-body">
                      <p>
                        As an online sofa brand, Custom Closet manufactures designer sofas and sells them exclusively via www.customcloset.com. We do not compromise on quality; we want to develop high-quality sofas and offer them to you directly. We also convince our customers with our comprehensive services: free fabric and leather samples, our online room planner, and a personal product consultation by telephone, e-mail, chat or in our showrooms make your decision easy when buying a sofa.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="faq-card">
                  <div class="faq-card-header">
                    <a class="faq-card-link" data-toggle="collapse" href="#fq1" aria-expanded="false">
                        Why can Custom Closet offer such great prices?
                  </a>
                  </div>
                  <div id="fq1" class="collapse" data-parent="#accordion">
                    <div class="faq-card-body">
                        <p>
                        Custom Closet only produces to order and sells its products online. We do this directly and without intermediaries. We pass on these cost savings directly to our customers who find high-quality designer sofas at surprisingly low prices.
                        </p>
                    </div>
                  </div>
                </div>
                <div class="faq-card">
                  <div class="faq-card-header">
                    <a class="faq-card-link" data-toggle="collapse" href="#fq2">
                        What quality standards does Custom Closet have?
                  </a>
                  </div>
                  <div id="fq2" class="collapse" data-parent="#accordion">
                    <div class="faq-card-body">
                      <p>
                        When it comes to quality, we do not compromise on our products! Demanding designs and high-quality materials are painstakingly used with every Custom Closet sofa. Seating comfort and design language are equally important to us. To live up to our product claims, every sofa undergoes a rigorous quality control before leaving production. This ensures that our customers receive their order in perfect condition.
                      </p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="#faq1">
        <div class="content-section">
            <h2 class="heading2 mt-3 mb-5 text-center">Faq 1</h2>
            <div id="accordion">
                <div class="faq-card">
                  <div class="faq-card-header">
                    <a class="faq-card-link" data-toggle="collapse" href="#fq3" aria-expanded="false">
                      What is COVID-19? What does COVID-19 stand for?
                    </a>
                  </div>
                  <div id="fq3" class="collapse" data-parent="#accordion">
                    <div class="faq-card-body">
                      <p>COVID-19 is a name given to a highly infectious and communicable disease caused due to a new orNovel Coronavirus. It is known that the disease outbreak happened in December 2019 in Wuhan, China. Since it has spread all over the world from human to human and has been very deadly, it is categorized as a Pandemic.</p>
                      <p>
                          COVID-19 stands for ‘CO’ – Corona, ‘VI’ – Virus and ‘19’ – 2019 the year it began.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="faq-card">
                  <div class="faq-card-header">
                    <a class="faq-card-link" data-toggle="collapse" href="#fq4" aria-expanded="false">
                    Can antibiotics treat the coronavirus disease?
                  </a>
                  </div>
                  <div id="fq4" class="collapse" data-parent="#accordion">
                    <div class="faq-card-body">
                      <p>Since, Coronavirus is a virus, it cannot be prevented or treated using antibiotics. Antibiotics for COVID-19are not effective against viruses. Treatment of COVID-19 is not available yet.</p>
                    </div>
                  </div>
                </div>
                <div class="faq-card">
                  <div class="faq-card-header">
                    <a class="faq-card-link" data-toggle="collapse" href="#fq5">
                    Are masks effective against the coronavirus disease?
                  </a>
                  </div>
                  <div id="fq5" class="collapse" data-parent="#accordion">
                    <div class="faq-card-body">
                      <ul class="dashli">
                        <li>Wearing an effective mask for coronais essential if you are in close proximity to a COVID infected patient, especially if you are a care giver at home or in a clinical setup. </li>
                        <li>It is also essential to wear a mask if you are suffering from cough and sneeze. </li>
                        <li>Where social distancing is not maintained and you are unaware of people around could be infected, it is wise to wear a mask.</li> 
                        <li>You are also advised to wear a breathable mask if you are in a public place, especially closed complexes like malls, hospitals, etc. since you may have come in contact with the virus by touching contaminated objects or areas and mistakenly may touch your nose or mouth. </li>
                        <li>Along with wearing a mask, it is essential to either sanitize your surroundings wherever possible with a sanitizer having more than 60% alcohol or wash your hands frequently, wear disposable gloves, wear disposable masks or wear reusable masks after properly washing them. </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
@endsection