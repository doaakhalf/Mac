@extends('website.layouts.layouts')
@section('content')

<style>

.title-hero-bg::before {content: "";background-color: rgba(0, 0, 0, 0.0);width: 100%;height: 100%;position: absolute;top: 0;left: 0;}
</style>

<div class="transition-none">
      <section class="title-hero-bg " style="background-image: url(&quot;assets/images/about/Mac_Photo.png&quot;); transform: translateY(0.0183254px);background-color: rgba(128, 62, 62, 0.0);">
        <div class="" style="position:relative">

            <div class="page-title text-left white-color" style="width: 17%;">

            <img class="" src="{{asset('assets/images/about/yellowStrip.png')}}"  alt="">
            </div>
            </div>
</div>
        </div>
      </section>

  </div>
<!-- image start -->











<section class="white-bg" style="padding-top: 0px;
    padding-bottom: 0px;position: initial !important">
  	<div class="container">
    	<div class="row">
        	<!-- <div class="col-md-5 col-sm-6 wow fadeInUp text-center mb-30 mt-40" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">


            </div> -->
            <!-- <div class="col-md-1 col-sm-6 wow fadeInUp text-center mb-30 mt-40" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">


                </div> -->

            <div class="col-md-offset-7 col-md-6 col-sm-offset-7 col-sm-6 wow fadeInUp text-center  mt-40" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;margin-bottom: -9px;">

            	<!-- <h5 class="mt-30">SEO Ready</h5>
                <p>Duis aliquet ut enim nec pulvinar Nam ultrices massa sit amet ornare elementum erat lacus consectetur metus posuere.</p> -->
                <img class="" src="{{asset('assets/images/about/WeAreAGroup.png')}}"  style="width: 79%;"alt="">
                <!-- margin-left: 264px; -->
            </div>


        </div>
    </div>
  </section>


<!-- image end -->

<!-- p start -->
<section class="white-bg" style="padding-top: 0px;
    padding-bottom: 0px;">
  	<div class="container">
    	<div class="row">
        	<div class="col-md-6 col-sm-6 wow fadeInUp text-center mb-30 mt-40" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">

            	<!-- <h5 class="mt-30">Modern Interface</h5> -->
            	<p style="text-align: justify;font-family: Montserrat;">At Mac carpets, we care the most about providing premium first-rate flooring solutions to fulfill and satisfy our clients` needs in the perfect way that brings beauty, comfort and elegance to your home, office or firm.
                    Our experience extends to more than 39 years old since 1981 with a capital of one million dollars and a starting of one million square meters as a total annual production reaching now a total of 60 million square meters annually produced on 600,000 square meters plant area.
                    Through the years, Mac Carpet established itself as a market leader locally and globally in the carpet industry. .
                </p>
            </div>

            <div class="col-md-6 col-sm-6 wow fadeInUp text-center mb-30 mt-40" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

            	<!-- <h5 class="mt-30">SEO Ready</h5> -->
            	<p style="text-align: justify;font-family: Montserrat;">A passionate group of talented and dedicated designers, engineers, managers and over 5200 production specialists stand behind the great achievement of one of the highest records in our growth turnover reaching 10 folds rising arrow that led to breaking the barrier of 1 billion dollars in 2015 and a 10% growth turn over in 2019.
                    Mac carpet products are globally acclaimed and admired as we export 83% of our total production to more than 119 countries worldwide and that positioned us as one of Egypt’s top exporting firms.
                </p>
            </div>


        </div>
    </div>
  </section>
<!-- p end -->





<!--== Tabs Start ==-->
<section class="white-bg">
    <div class="container">
    	 <div class="row tabs-style-02">
          <div class="col-md-12 ">
            <div class="light-tabs">
              <!--== Nav tabs ==-->
              <ul class="nav nav-tabs text-center" role="tablist">
                <li role="presentation" class="active"><a href="#mission" role="tab" data-toggle="tab">Mission</a></li>

                <li role="presentation"><a href="#vision" role="tab" data-toggle="tab">Vision</a></li>

              </ul>
              <!--== Tab panes ==-->
              <div class="tab-content text-center">
                <div role="tabpanel" class="tab-pane fade in active" id="mission">
                    <img class="" src="{{asset('assets/images/about/mission.png')}}" alt="">
                    <h3 class="black-color font-700">We threaded history ...  We are tufting to humanity..</h3>
                    <p>Seeking to make everybody happy, that is our mission.
                        A client, a stakeholder and even ourselves is what we work on pleasing.
                        To be able to sustain and further grow our result oriented business and guarantee the highest level of professionalism, creativity and Innovation in the world of carpet industry.
                    </p>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="vision">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <img class="" src="{{asset('assets/images/about/vision.png')}}"  alt="">
                            </div>
                            <div class="col-md-4">
                                <h3 class="black-color font-700">Any place, any country, any floor</h3>
                                <p>
                                    Where ever there is a floor that needs to be carpeted on the entire globe, there would be Mac. To be the largest, most creative, most innovative carpet manufacturer and exporter that brings smoothness and beauty to every citizen in the world..
                                </p>
                            </div>
                        </div>
                    </div >
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
  <!--== Tabs End ==-->

@endsection
