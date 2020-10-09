@extends('layouts.app')

@section('content')

<div class="container-fluid bread_crumps">
    <div class="container">
        <p>
            <a href="/" style="text-decoration:none; color:#909090;"> Home/</a>
            <a href="" style="text-decoration:none; color:#000000;">Contact Us /</a>
    </div>
</div>

<div class="container privacy_policy_head pl-5 pr-3">
    <div class="row">
        <p>“THIS IS THE BEGINNING OF A BEAUTIFUL FRIENDSHIP”</p>
    </div>
</div>

<div class="container d-flex justify-content-center contactinfo pl-5 pr-5">
    <div class="row">
        <p align="justify">If you have any doubts, any appropriate/inappropriate questions, want to tell us how much you
            love us/hate us, get in touch and we’ll make sure you receive a response faster.</p>

        <p>Reach us at <a href="">contact@mykeychains.in&nbsp;</a> </p> <br\>
        <p>or contact to&nbsp;<a href="">9087120907</a> or&nbsp;<a href="">9585085879</a> .</p>
    </div>
</div>

<div class="container-fluid ">

    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="info_login_lable">
                        <table class="">
                            <tr>
                                <th>Contact Us</th>
                            </tr>
                        </table>
                    </div>

                    <form method="POST" action="{{route('contactusform')}}">
                        @csrf
                    <div class="div_form info_form mb-5">
                            <div class="form-row">
                              <div class="col-12">
                                <label for="validationCustom01">Email <sup>*</sup> </label>
                                <input type="email" name="email" class="form-control form_text" id="validationCustom01" value="" required>
                              </div>
                            </div>

                            <div class="form-row">
                                <div class="col-12">
                                  <label for="validationCustom01">Mobile Number <sup>optional</sup> </label>
                                  <input type="number" name="number" class="form-control form_text" id="validationCustom01" value="">
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="col-12">
                                  <label for="validationCustom01">Subject <sup>*</sup> </label>
                                  <input type="text" name="subject" class="form-control form_text" id="validationCustom01" value="" required>
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="col-12">
                                  <label for="validationCustom01">Message <sup>*</sup> </label>
                                  <textarea class="form-control form_text" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                              </div>

                            <button class="btn btn-primary mt-4"  type="submit">SEND</button>
                          </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

</div>


@endsection
