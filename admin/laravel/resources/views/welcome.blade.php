@extends('layouts.first')
@section('content')
      <div class="c-subheader px-3">
        <!-- Breadcrumb-->
        <ol class="breadcrumb border-0 m-0">
          {{-- <li class="breadcrumb-item"><a href="/"></a></li> --}}
          {{-- <li class="breadcrumb-item">House</li> --}}
          <!-- Breadcrumb Menu-->
        </ol>
      </div>
    </header>
    <div class="c-body">
      <main class="c-main">
        <div class="container-fluid">
          <div class="fade-in">
            <div class="row">

              <div class="col-lg-12">
                <div class="card">
                  {{-- <div class="card-header"><i class="fa fa-align-justify"></i> <a class="btn btn-sm btn-info text-white" href="/report/download/house"> export data</a></div> --}}
                  <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Number</th>
                          <th>qty</th>
                          <th>Price</th>
                          <th>Tot Price</th>
                          <th>Company</th>
                          <th>Address</th>
                          <th>Add Note</th>
                          <th>Order Date</th>
                          <th>Paid Date</th>
                          <th>Invoice No</th>
                          <th>Payref No</th>
                          <th>Unique Number</th>
                          <th>Payment Det</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td></td>
                        </tr>
                      </tbody>
                    </table>
                    {{-- <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul> --}}
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->


          </div>
        </div>
      </main>
@endsection
