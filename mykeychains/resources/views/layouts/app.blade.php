<!doctype html>
<html lang="en">
  <head>
    <base href="/">
    <title>MyKeychains.in</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
//  echo "<link rel='stylesheet' href='style/style.css'>";
//?>

 <link rel="stylesheet" href="assets/css/style.css">


    <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat|Secular+One&display=swap" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="icon" href="assets/image/banner-small.png" type="image" sizes="16x16">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
  .card-title{
    font-family: segoe-ui-bold;
}
  </style>
  </head>
  <body>

    <!-- HEADER -->
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="/"><img src="assets/image/Header-logo.png" width="150" alt=""></a>
            <button class="navbar-toggler navbar-togglert" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="/">Home</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Order</a>
                </li> --}}
              </ul>
            </div>
          </nav>
        </div>

        @yield('content')



            <div class="footer">
                <div class="container footerp">
                  <div class="row text-center">
                  <div class="col-md-12">
                    <img src="assets/image/Footer-logo.png" class="img-fluid" alt="MyKeychains.in"><br>
                  </div>
                  <hr>
                  <div class="col-md-12">
                <p>Kundrathur, Chennai</p>
                    </div>
                    <div class="col-md-12">
                            <p>India</p>
                            </div>
                  </div>
                </div>



                <div class="container">
                    <div class="row text-center">
                      <div class="col-xs-12 col-md-3 col-sm-4">
                          <a href="relation/terms-and-condition">Terms & Condition, Price Structure</a>
                      </div>



                      <div class="col-xs-12 col-md-3 col-sm-4">
                          <a href="relation/privacypolicy">Privacy Policy</a>
                    </div>

                    <div class="col-xs-12 col-md-3 col-sm-4">
                        <a href="relation/refund&cancellation">Refund & Cancellation</a>
                  </div>
                  <div class="col-xs-12 col-md-3 col-sm-4">
                      <a href="relation/contactus">Contact Us</a>
                </div>
                    </div>
                  </div>
                </div>


                      <!-- MODAL order -->
                      <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">

                            <div class="modal-body">
                              <div class="container">
                                <div class="row">
                                  <div class="col-6 cart_modal_quantity">
                                      <p >Select Quantity</p>
                                      <img class="card-image" src="assets/image/banner-small.png" alt="">
                                      <p  id="qtyone">Qty: 1</p>
                                      <p id="qtytwo" >Qty: 2</p>
                                      <p id="qtythree" >Qty: 3</p>
                                      <p  id="priceone">Price : Rs 199.00 <br>  <span class="free_del" style="font-size: 13px; color:#808080;"> (Free delivery all over India)</span></p>
                                      <p id="pricetwo" >Price : Rs 398.00 <br> (Free delivery all over India)</p>
                                      <p  id="pricethree">Price : Rs 597.00 <br> (Free delivery all over India)</p>
                                  </div>
                                  <div class="col-6 modal_right_div mt-5">
                                      <p></p>
                                      <form action="imageupload/">
                                      <div class="input_group_text">
                                          <p>Max. 3 Quantity per order</p>
                                        </div>
                                      <div class="input-group">

                                          <span class="input-group-btn">
                                              <button type="button" class="quantity-left-minus btn  btn-number"  data-type="minus" data-field="">
                                               <i class="fa fa-minus"></i>
                                              </button>
                                          </span>
                                          <input type="text" id="quantity" name="quantity" class="form-control input-number" size="1" value="1" min="1" max="3">
                                          <span class="input-group-btn">
                                              <button type="button" class="quantity-right-plus btn  btn-number" data-type="plus" data-field="">
                                                  <i class="fa fa-plus"></i>
                                              </button>
                                          </span>

                                      </div>


                                            <div class="col-md-12 text-center modal_order_btn">
                                          <div class="col-md-12 col-lg-12 text-center">
                                          <button  class="btn waves-effect">ORDER NOW</button>
                                        </div>
                                        </div>
                                        </form>
                                         {{-- <div class="col-md-12 text-center modal_cancel_btn">
                                            <div class="col-md-12 col-lg-12 text-center">
                                            <button data-dismiss="modal" class="btn waves-effect">CANCEL</button>
                                          </div>
                                          </div> --}}



                                      </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>




            <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

<script src="assets/js/main.js"></script>

<script>
   $(document).ready(function () {
    // $('#qtyone').hide();
    $('#qtytwo').hide();
    $('#qtythree').hide();
    // $('#priceone').hide();
    $('#pricetwo').hide();
    $('#pricethree').hide();

});
</script>
@include('sweetalert::alert')
</body>
</html>
