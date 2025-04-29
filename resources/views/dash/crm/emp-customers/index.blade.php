@extends('dash.index')
@section('content')

      <!-- Begin page -->
      <div id="wrapper">

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Elve8</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                        <li class="breadcrumb-item active"><a href="#">Customers</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Customers</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                   <!--  Add , Upload Data Exl , pdf -->
                                    <div class="row mb-2">
                                        <div class="col-sm-4">

                                                <div class="form-group mb-2">
                                                    <a href="#" type="button" class="btn btn-success btn-rounded bg-green-700 mb-2 mr-1">EXC</a>
                                                    <a href="#" type="button" class="btn btn-danger btn-rounded mb-2">PDF</a>
                                                </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-sm-right">
                                                <button type="button" class="btn btn-success waves-effect waves-light mb-2 mr-1"><i class="mdi mdi-upload"></i></button>
                                                <a href="#custom-modal" data-bs-backdrop="static" data-keyboard="false" class="btn btn-primary waves-effect waves-light mb-2" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Add Customers</a>
                                            </div>
                                        </div><!-- end col-->
                                    </div>
                                 <!--  Search-->


                                    <div class="table-responsive">
                                        <table class="table table-centered table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Basic Info</th>
                                                    <th>Email</th>
                                                 
                                                    <th>Created By</th>
                                                    <th>Created Date</th>
                                                    <th>Status</th>
                                                    <th style="width: 82px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($elements as $ele)
                                           <tr>
                                            <td class="table-user">
                                                <img src="{{asset('dash')}}/assets/images/users/user-4.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body font-weight-semibold">{{$ele->name}}</a>
                                            </td>
                                            <td>
                                            {{$ele->email}}
                                            </td>
                                            <td>
                                            {{ $ele->creator->name ?? '-' }}
                                            </td>
                                            <td>
                                                {{$ele->created_at}}
                                            </td>
                                            <td>
                                              
                                                  
                                                    <button type="submit" class="btn btn-info waves-effect waves-light mb-2 mr-1" name="status" value=""><i>status</i></button>

                                              


                                            </td>
                                            <td>
                                            <div class="text-sm-right">
                                               
                                                <a href="#custom-action-modal" data-bs-backdrop="static" data-keyboard="false" class="btn btn-danger btn-rounded mb-2" data-animation="fadein" data-id="{{$ele->id}}" data-plugin="custommodal" data-overlayColor="#38414a">Action</a>
                                            </div>
                                            </td>
                                        </tr>
                                      @endforeach


                                            </tbody>
                                        </table>
                                    </div>

                                    <ul class="pagination pagination-rounded justify-content-end mb-0 mt-2">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>

                                <!-- end card-body-->
                            </div>

                            <!-- end card-->
                        </div> <!-- end col -->

                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->



        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

<!-- Modal for Adding Employee -->
<div class="modal" id="custom-modal" tabindex="-1" role="form" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Employee</h5>
                <button type="button" class="close" onclick="Custombox.modal.close();">
                    <span>&times;</span><span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store.crm.customers') }}" method="POST" id="employeeForm">
                    @csrf
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">Name</label><span>{{ $errors->first('name') }}</span>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="company">Password</label>
                        <input type="text" class="form-control" name="password" value="{{ old('password') }}" placeholder="Enter Password">
                    </div>

                    <input type="hidden" name="created_by" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="role" value="customer">
                    <input type="hidden" name="assign_to" value="{{ auth()->user()->id }}">
                 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Action -->
<div class="modal" id="custom-action-modal" tabindex="-1" role="form" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Action</h5>
                <button type="button" class="close" onclick="Custombox.modal.close();">
                    <span>&times;</span><span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('actions.store') }}" method="POST">
                    @csrf

                    <!-- Hidden field to store customer_id -->
                    <input type="hidden" name="customer_id" id="modal_customer_id">

                    <div class="form-group">
                        <label for="type">Action Type</label>
                        <select name="type" class="form-control" required>
                            <option value="call">Call</option>
                            <option value="visit">Visit</option>
                            <option value="follow_up">Follow Up</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="result">Result</label>
                        <textarea name="result" class="form-control" rows="3"></textarea>
                    </div>

                    <input type="hidden" name="created_by" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="role" value="employee">
                    <input type="hidden" name="employee_id" value="{{ auth()->user()->id }}">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

    @section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
    	$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
    </script>
<script>
    document.querySelectorAll('a[data-plugin="custommodal"]').forEach(button => {
        button.addEventListener('click', function(event) {
            // Get the customer_id from the data-id attribute
            var customerId = this.getAttribute('data-id');
            
            // Set the customer_id value in the modal's hidden input field
            document.getElementById('modal_customer_id').value = customerId;
            
            // Show the modal (Bootstrap 5 method)
            // var modal = new bootstrap.Modal(document.getElementById('custom-action-modal'));
            // modal.show();
        });
    });
</script>
@endsection