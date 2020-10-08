@extends('layouts.app')

@section('content')


<div class="container-fluid bread_crumps">
    <div class="container">

        <p> <span>     <a href="/">Home</a></span> / Upload Image</p>
    </div>
</div>

<div class="container d-flex justify-content-center tt_head">

</div>
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 col-md-6">
@if ($qty == 1)
<form method="post" action="{{route('uploadimg', $qty)}}" enctype="multipart/form-data">
    @csrf
  <input type="hidden" name="tid" id="tid" readonly />
<div class="text-left file_upload_label">
          <p>Quantity: 1</p>
          </div>
          <div class="container-fluid file_upload">
                <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" readonly>
                <div class="input-group-btn">
                  <span class="fileUpload btn ">
                      <span class="upl" id="upload">upload</span>
                      <input type="file" name="file" class="upload up" id="up" required/>
                    </span><!-- btn-orange -->
                 </div><!-- btn -->
                 </div><!-- group -->
                      </div>
                  </div>

      <div class="col-md-12 upload_img_btn text-left ml-0 pl-0 mb-5">
          <div class="col-md-12 col-lg-12 text-left">
              <button class="btn-sq-lg waves-effect" name="upload_img">PROCEED TO CHECKOUT</button>
          </div>
      </div>
  </form>
</div>
<div class="col-sm-12 col-md-6 upload_right">
  <div class="text-left upload_image_right">
      <!-- <h4>Note</h4>
      <p>Add special instructions for your order...</p> -->
  </div>

  <div class="text-left note_form">
      <form action="">
          <!-- <textarea rows="4" cols="40">
                  </textarea> -->


          <div class="upload_img_table mt-4">
              <table class="tt-shopcart-table01">
                  <tbody>
                                                                                                              <tr id="subtotal" class="mb-4">
                                                                                                                  <th>Quantity</th>
                                                                                                                  <td>3 </td>
                                                                                                                </tr>

                                                                                                                <tr id="subtotal">
                                                                                                                  <th>Sub-Total</th>
                                                                                                                  <td>Rs 597.00 </td>
                                                                                                                </tr>

                                                                                                              </tbody>
                                                                                              <tfoot>


                                                                                                                <tr id="grandtotal" class="mt-5">
                                                                                                                  <th style=font-weight: 800; margin-top:10px;"> Grand-Total</th>
                                                                                                                  <td style=font-weight: 1000; margin-top:10px; color: #1BB6FD; ">Rs 579.00 </td>
                                                                                                                </tr>

                  </tfoot>
              </table>
          </div>
  </div>
</div>
</div>
</div>

</form>

@elseif($qty == 2)
<form method="post" action="{{route('uploadimg', $qty)}}" enctype="multipart/form-data">
    @csrf
  <input type="hidden" name="tid" id="tid" readonly />
<div class="text-left file_upload_label">
          <p>Quantity: 1</p>
          </div>
          <div class="container-fluid file_upload">
                <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" readonly>
                <div class="input-group-btn">
                  <span class="fileUpload btn ">
                      <span class="upl" id="upload">upload</span>
                      <input type="file" name="file" class="upload up" id="up" required/>
                    </span><!-- btn-orange -->
                 </div><!-- btn -->
                 </div><!-- group -->
                      </div>
                  </div>



                  <div class="text-left file_upload_label_two">
                          <p>Quantity: 2</p>
                          </div>
                  <div class="container-fluid file_upload">
                          <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" readonly>
                          <div class="input-group-btn">
                            <span class="fileUpload btn ">
                                <span class="upl" id="upload">  upload</span>
                                <input type="file" name="filetwo" class="upload up" id="up" required/>
                              </span><!-- btn-orange -->
                           </div><!-- btn -->
                           </div><!-- group -->
                                </div>
                            </div>



      <div class="col-md-12 upload_img_btn text-left ml-0 pl-0 mb-5">
          <div class="col-md-12 col-lg-12 text-left">
              <button class="btn-sq-lg waves-effect" name="upload_img">PROCEED TO CHECKOUT</button>
          </div>
      </div>
  </form>
</div>
<div class="col-sm-12 col-md-6 upload_right">
  <div class="text-left upload_image_right">
      <!-- <h4>Note</h4>
      <p>Add special instructions for your order...</p> -->
  </div>

  <div class="text-left note_form">
      <form action="">
          <!-- <textarea rows="4" cols="40">
                  </textarea> -->


          <div class="upload_img_table mt-4">
              <table class="tt-shopcart-table01">
                  <tbody>
                                                                                                              <tr id="subtotal" class="mb-4">
                                                                                                                  <th>Quantity</th>
                                                                                                                  <td>3 </td>
                                                                                                                </tr>

                                                                                                                <tr id="subtotal">
                                                                                                                  <th>Sub-Total</th>
                                                                                                                  <td>Rs 597.00 </td>
                                                                                                                </tr>

                                                                                                              </tbody>
                                                                                              <tfoot>


                                                                                                                <tr id="grandtotal" class="mt-5">
                                                                                                                  <th style=font-weight: 800; margin-top:10px;"> Grand-Total</th>
                                                                                                                  <td style=font-weight: 1000; margin-top:10px; color: #1BB6FD; ">Rs 579.00 </td>
                                                                                                                </tr>

                  </tfoot>
              </table>
          </div>
  </div>
</div>
</div>
</div>

</form>

@elseif($qty == 3)
<form method="post" action="{{route('uploadimg', $qty)}}" enctype="multipart/form-data">
    @csrf
  <input type="hidden" name="tid" id="tid" readonly />
<div class="text-left file_upload_label">
          <p>Quantity: 1</p>
          </div>
          <div class="container-fluid file_upload">
                <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" readonly>
                <div class="input-group-btn">
                  <span class="fileUpload btn ">
                      <span class="upl" id="upload">upload</span>
                      <input type="file" name="file" class="upload up" id="up" required/>
                    </span><!-- btn-orange -->
                 </div><!-- btn -->
                 </div>
                      </div>
                  </div>



                  <div class="text-left file_upload_label_two">
                          <p>Quantity: 2</p>
                          </div>
                  <div class="container-fluid file_upload">
                          <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" readonly>
                          <div class="input-group-btn">
                            <span class="fileUpload btn ">
                                <span class="upl" id="upload">  upload</span>
                                <input type="file" name="filetwo" class="upload up" id="up" required/>
                              </span><!-- btn-orange -->
                           </div><!-- btn -->
                           </div><!-- group -->
                                </div>
                            </div>

                            <div class="text-left file_upload_label_three">
                                  <p>Quantity: 3</p>
                                  </div>
                            <div class="container-fluid file_upload">
                                  <div class="form-group">
                                  <div class="input-group">
                                    <input type="text" class="form-control" readonly>
                                  <div class="input-group-btn">
                                    <span class="fileUpload btn">
                                        <span class="upl" id="upload">upload</span>
                                        <input type="file" name="filethree" class="upload up" id="up" required/>
                                      </span><!-- btn-orange -->
                                   </div><!-- btn -->
                                   </div><!-- group -->
                                        </div>
                                    </div>

      <div class="col-md-12 upload_img_btn text-left ml-0 pl-0 mb-5">
          <div class="col-md-12 col-lg-12 text-left">
              <button class="btn-sq-lg waves-effect" name="upload_img">PROCEED TO CHECKOUT</button>
          </div>
      </div>
  </form>
</div>
<div class="col-sm-12 col-md-6 upload_right">
  <div class="text-left upload_image_right">
      <!-- <h4>Note</h4>
      <p>Add special instructions for your order...</p> -->
  </div>

  <div class="text-left note_form">
      <form action="">
          <!-- <textarea rows="4" cols="40">
                  </textarea> -->


          <div class="upload_img_table mt-4">
              <table class="tt-shopcart-table01">
                  <tbody>
                                                                                                              <tr id="subtotal" class="mb-4">
                                                                                                                  <th>Quantity</th>
                                                                                                                  <td>3 </td>
                                                                                                                </tr>

                                                                                                                <tr id="subtotal">
                                                                                                                  <th>Sub-Total</th>
                                                                                                                  <td>Rs 597.00 </td>
                                                                                                                </tr>

                                                                                                              </tbody>
                                                                                              <tfoot>


                                                                                                                <tr id="grandtotal" class="mt-5">
                                                                                                                  <th style=font-weight: 800; margin-top:10px;"> Grand-Total</th>
                                                                                                                  <td style=font-weight: 1000; margin-top:10px; color: #1BB6FD; ">Rs 579.00 </td>
                                                                                                                </tr>

                  </tfoot>
              </table>
          </div>
  </div>
</div>
</div>
</div>

</form>

@endif

@endsection
