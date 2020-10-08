@extends('layouts.app')

@section('content')

        <!-- Banner -->
                  <div class="container-fluid">
                  <div class="row">
                  <div class="col-8 order">
                  <div class="col-md-12 text-center">
              <p>Get Your Keychains Now @ Rs.199</p>
                    <h5>(Delivery Available All over India)</h5>
              <div class="col-md-12 col-lg-12 text-center">
              <button class="btn waves-effect" href="#" data-toggle="modal" data-target="#myModal">ORDER NOW</button>
            </div>
            </div>
                  </div>
                  <div class="col-4 text-center order">
                  <img class="d-block w-100" src="assets/image/banner.jpg" alt="First slide">
                  </div>
                  </div>
                  </div>


                    <!-- Extruder Scroll             -->
                    <div class="container text-center scroll bounce-1">
                        <img class="align-content-center" src="assets/image/Extruder.png"  alt="First slide">
                      </div>
        <!-- TEXT -->
                  <div class="container text-center">
                        <h5>We Frame your memories in a memorable way</h5>
                        <p>Now Pay less for your customised keychains
                          </p>
                    </div>




        <!-- Three Column -->
                  <div class="container-fluid info">
                    <div class="row text-center">

                    <div class="col-xs-12 col-md-4 col-sm-6 info_child">
                        <img src="assets/image/heart.png" class="img-fluid" alt="24X7X365">
                        <p>Customer is King, We intend to offer 100% satisfaction to you with
                          Quality, Timely, Low-Priced Service.</p>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6 info_child">
                          <img src="assets/image/time.png" class="img-fluid" alt="24X7X365">
                          <p>Risk-free, Uninterrupted service ensuring end to end fulfillment of
                            orders. Seamless Customer Relationship Management working for your
                            goodwill</p>
                      </div>



                    <div class="col-xs-12 col-md-4 col-sm-6 info_child">
                      <img src="assets/image/vehicle.png" class="img-fluid" alt="24X7X365">
                      <p>Fully tracked, Reliable, trustworthy delivery partners are on road to
                        Deliver your very-own personalised Keychains.</p>
                  </div>
                    </div>
                    <div class="container info_full_tit">
                      <div class="row text-center">
                        <div class="col-md-12 text-center">
                      <p>We're Not here to make Money, We'd prefer to retain our customers
                        To a longer Journey...</p>

                    </div>
                    </div>
                    </div>
                  </div>


            <!-- ORDER NOW -->
            <div class="container order">
              <div class="row text-center">
                <div class="col-md-12 text-center">
              <p>Get Your Keychains Now!</p>
              <div class="col-md-12 col-lg-12 text-center">
                <button class="btn waves-effect" href="#" data-toggle="modal" data-target="#myModal">ORDER NOW</button>
              {{-- <button class="btn waves-effect">ORDER NOW</button> --}}
            </div>
            </div>
            </div>
            </div>

            @endsection
