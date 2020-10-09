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
                  <div class="card-header"><h5>Contact Form</h5></div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Email</th>
                          <th>Number</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>Date</th>
                          {{-- <th>Action</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1 ?>
                        @if (count($forms) > 0)
                        @foreach ($forms as $form)
                        <tr>
                            <td>{{$no++ }}</td>
                            <td>{{ $form->email }}</td>
                            <td>{{ $form->number }}</td>
                            <td>{{ $form->subject }}</td>
                            <td>{{ $form->message }}</td>
                            <td>{{ $form->created_at }}</td>
                            {{-- <td></td> --}}
                        </tr>
                        @endforeach
                        @endif
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
