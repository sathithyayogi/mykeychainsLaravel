@extends('layouts.app')

@section('content')

        <div class="container-fluid bread_crumps">
            <div class="container">
                <!-- <p> <a href="/" style="text-decoration:none; color:#909090;"> Home/</a>  <a href="uploadimg.php?quantity=" style="text-decoration:none; color:#909090;">Upload Image </a> <a href="" style="text-decoration:none; color:#000000;">/ Information /</a> <a href="" style="text-decoration:none; color:#909090;">Payment</a></p> -->
            </div>
        </div>

        <div class="container d-flex justify-content-center tt_head">
            <div class="row mb-5">
                Shipping Information
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="info_login_lable">
                        <table class="">
                            <tr>
                                <th>Contact Information</th>
                            </tr>
                        </table>
                    </div>

                    <form method="POST" action="/information/{{ $qty }}/{{ $uuid }}">
                        @csrf
                    <div class="div_form info_form mb-5">
                            <div class="form-row">
                              <div class="col-12">
                                <label for="validationCustom01">Email <sup>*</sup> </label>
                                <input type="email" name="email" class="form-control form_text" id="validationCustom01" value="" required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                            </div>

                            <div class="info_login_lable mt-5 mb-1">
                                <table class="">
                                    <tr>
                                        <th>Shipping Information</th>
                                    </tr>
                                </table>
                            </div>

                            <div class="form-row">
                                <div class="col-12">
                                  <label for="validationCustom01">Name <sup>*</sup></label>
                                  <input type="text" name="name" class="form-control form_text form_text" id="validationCustom01" value="" required>
                                  <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                </div>
                              </div>
                            <div class="form-row">
                                <div class="col-12">
                                  <label for="validationCustom01">Company (Optional)</label>
                                  <input type="text" name="company" class="form-control form_text form_text" id="validationCustom01"  value="" >
                                  <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="col-12">
                                  <label for="validationCustom01">Apartment, suite, etc.(optional)</label>
                                  <input type="text" name="apartment" class="form-control form_text form_text" id=""  value="">
                                  <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="col-12">
                                  <label for="validationCustom01">Address <sup>*</sup></label>
                                  <input type="text" name="address" class="form-control form_text form_text" id=""  value="" required>
                                  <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                </div>
                              </div>

                            <div class="form-row">
                              <div class="col-md-6 mb-3">
                                <label for="validationCustom03">City <sup>*</sup></label>
                                <input type="text" name="city" class="form-control form_text form_text" id=""required>
                                <div class="invalid-feedback">
                                  Please provide a valid city.
                                </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                <label for="validationCustom04">State <sup>*</sup></label>
                                <input type="text" name="state" class="form-control form_text" id=""  required>
                                <div class="invalid-feedback">
                                  Please provide a valid state.
                                </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Pin Code <sup>*</sup></label>
                                <input type="number" name="zipcode" class="form-control form_text" id="" required>
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                  <label for="validationCustom01">Phone <sup>*</sup></label>
                                  <input type="number" name="phone" class="form-control form_text" id=""   value=" " required>
                                  <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                    <label for="validationCustom01">Extra Note <sup></sup></label>
                                    <input type="text" name="extranote" class="form-control form_text" id="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                              </div>
                            <button class="btn btn-primary mt-4" name="info_submit" type="submit">CHECK OUT</button>
                          </form>

                    </div>
                </div>

                <div class="col-sm-12 col-md-6">

                         <!-----------   RIGHT DIV WITH PRICE DETAILS AND COUPON APPLY  ------------->


                    {{-- <hr>
                        <form class="form-inline">
                                <div class="form-group mx-sm-3 mb-2">
                                  <input type="password" class="form-control" id="inputPassword2" placeholder="Gift Card or Discount card">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Apply</button>
                        </form>
                        <hr> --}}

                        <div class="upload_img_table mt-4">
                                <table class="tt-shopcart-table01">
                                        <tbody>
                                          <tr id="subtotal" class="mb-4">
                                            <th>Quantity</th>
                                            <td>

                                            </td>
                                          </tr>

                                          <tr id="subtotal">
                                            <th>Sub-Total</th>
                                            <td>Rs

                                            </td>
                                          </tr>

                                        </tbody>
                                        <tfoot>
                                          <tr id="grandtotal" class="mt-5">
                                            <th style="font-weight: 800; margin-top:10px;"> Grand-Total</th>
                                            <td style="font-weight: 1000; margin-top:10px; color: #1BB6FD; ">Rs
                                            </td>
                                          </tr>
                                        </tfoot>
                                      </table>
                                    </div>

                </div>
            </div>
        </div>
                    @endsection
