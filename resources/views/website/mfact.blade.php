@extends('website.layouts.layouts')
@section('content')

<style>

.title-hero-bg::before {content: "";background-color: rgba(0, 0, 0, 0.0);width: 100%;height: 100%;position: absolute;top: 0;left: 0;}
</style>

<div style="background:#999; height:80px;"></div>
<!--== Page Title Start ==-->
<section class="white-bg pt-40 pb-40">
        <div class="container">
          <div class="row " style="background-image:url({{asset('assets/images/mfact/Pink_Shape.png')}});background-position: right;background-size: contain;background-repeat: no-repeat;">
              <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table" >
                   {{-- <div class="v-align-middle text-right text-xs-center breadcrumb">
                         <!-- Breadcrumb Start -->
                             <ul class="text-xs-center ">
                            <li>Features</li>
                            <li>Our Process</li>
                          </ul>
                      <!-- Breadcrumb End -->
                  </div> --}}
               </div>
               <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
                   <div class="v-align-middle text-right text-xs-center">
                        <h1 class="" style="text-align:center; ">Technology and Manufacturing</h1>
                        <h3 class="" style="text-align:center;">Machines serve our purpose</h3>
                        <div style="text-align:center;">
                            <p style="width: 550px;">
                                Wow, is the word our team is working hard to hear. We do not settle for less.<br>
                                In order to impress our loyal clients, we implement the latest tufting and printing technologies that delivers the highest quality designs a machine could ever make.
                            </p>
                        </div>
                        <div style="text-align:center;">
                                <img class="" src="{{asset('assets/images/mfact/WhyWeEarn.png')}}" style="width: 50%; height: 50%;"  alt="">
                        </div>
                      {{-- <h1 class="text-uppercase mb-0 font-600 font-20px line-height-26 mt-0">Our Process</h1> --}}
                  </div>
               </div>
            </div>
        </div>
    </section>
    <hr>
    <!--== Page Title End ==-->

    <!--== Our Process Style 01 Start ==-->
    <section class="white-bg">
      <div class="container">
          <div class="row">
              <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">Our Process Style 01</h4>
              </div>
          </div>
          <div class="row mt-50 our-process-style-01">
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight line xs-mb-30" data-wow-delay="0.1s">
              <div class="count-wrap">
                <div class="count">1</div>
              </div>
              <div class="text-center">
                <h4 class="font-500">Design</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Proin ut tempor nisl sit amet tincidunt orci.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight line xs-mb-30" data-wow-delay="0.2s">
              <div class="count-wrap">
                <div class="count">2</div>
              </div>
              <div class="text-center">
                <h4 class="font-500">Development</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Proin ut tempor nisl sit amet tincidunt orci.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight line xs-mb-30" data-wow-delay="0.3s">
              <div class="count-wrap">
                <div class="count">2</div>
              </div>
              <div class="text-center">
                <h4 class="font-500">Testing</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Proin ut tempor nisl sit amet tincidunt orci.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight line xs-mb-30" data-wow-delay="0.4s">
              <div class="count-wrap">
                <div class="count">2</div>
              </div>
              <div class="text-center">
                <h4 class="font-500">Live</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Proin ut tempor nisl sit amet tincidunt orci.</p>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!--== Our Process Style 01 End ==-->

    <!--== Our Process Style 02 Start ==-->
    <section class="grey-bg">
      <div class="container">
          <div class="row">
              <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">Our Process Style 02</h4>
              </div>
          </div>
          <div class="row mt-50 our-process-style-02">
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight line xs-mb-30" data-wow-delay="0.1s">
              <div class="icon-wrap white-bg">
                <div class="icon">
                  <i class="icon-tools default-color font-30px"></i>
                </div>
              </div>
              <div class="text-center">
                <h4 class="font-500">Design</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Proin ut tempor nisl sit amet tincidunt orci.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight line xs-mb-30" data-wow-delay="0.2s">
              <div class="icon-wrap white-bg">
                <div class="icon">
                  <i class="icon-globe default-color font-30px"></i>
                </div>
              </div>
              <div class="text-center">
                <h4 class="font-500">Development</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Proin ut tempor nisl sit amet tincidunt orci.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight line xs-mb-30" data-wow-delay="0.3s">
              <div class="icon-wrap white-bg">
                <div class="icon">
                  <i class="icon-mobile default-color font-30px"></i>
                </div>
              </div>
              <div class="text-center">
                <h4 class="font-500">Testing</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Proin ut tempor nisl sit amet tincidunt orci.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight line xs-mb-30" data-wow-delay="0.4s">
              <div class="icon-wrap white-bg">
                <div class="icon">
                  <i class="icon-browser default-color font-30px"></i>
                </div>
              </div>
              <div class="text-center">
                <h4 class="font-500">Live</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Proin ut tempor nisl sit amet tincidunt orci.</p>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!--== Our Process Style 02 End ==-->


{{-- <div style="background:#999; height:80px;"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="background-image:url({{asset('assets/images/mfact/Pink_Shape.png')}});background-position: right;background-size: contain;background-repeat: no-repeat;">
            <h1 class="" style="text-align:center;">Technology and Manufacturing</h1>
            <h3 class="mt-50" style="text-align:center;">Machines serve our purpose</h3><br><br><br>
            <div style="text-align:center;">
                <p style="width: 550px;">
                    Wow, is the word our team is working hard to hear. We do not settle for less.<br>
                    In order to impress our loyal clients, we implement the latest tufting and printing technologies that delivers the highest quality designs a machine could ever make.
                </p>
            </div>

            <div style="text-align:center;">
                    <img class="" src="{{asset('assets/images/mfact/WhyWeEarn.png')}}" style="width: 50%; height: 50%;"  alt="">
            </div>

        </div>
        <div class="col-md-6">

        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1>Manufacturing process</h1>
            <h2>A thread’s journey: From our lab to under your feet</h2>
        </div>
    </div>


</div> --}}

@endsection
