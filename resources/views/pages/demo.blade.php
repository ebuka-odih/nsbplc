@extends('admin.layouts.app2')
@section('content')
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
    <!-- Topbar Start -->
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->

    <!-- Left Sidebar End -->

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
                            <h4 class="page-title">Create Account</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">

                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <tr>
                                    <th>First Name:</th>
                                    <td>{{  !empty($withdrawal->user) ? $withdrawal->user->first_name: '' }}</td>
                                </tr>
                                <tr>
                                    <th>Last Name:</th>
                                    <td>{{  !empty($withdrawal->user) ? $withdrawal->user->last_name: '' }}</td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td>{{  !empty($withdrawal->user) ? $withdrawal->user->email: '' }}</td>
                                </tr>
                                <tr>
                                    <th>Amount:</th>
                                    <td>${{ $withdrawal->amount }}</td>
                                </tr>
                                <tr>
                                    <th>Account No:</th>
                                    <td>{{ optional($withdrawal->user->account)->account_number}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <th>Recipient Name:</th>
                                    <td>{{ $withdrawal->rep_name }}</td>
                                </tr>
                                <tr>
                                    <th>Recipient Acct No:</th>
                                    <td>{{ $withdrawal->acct_number }}</td>
                                </tr>
                                <tr>
                                    <th>Bank Name:</th>
                                    <td>{{ $withdrawal->bank_name }}</td>
                                </tr>
                                <tr>
                                    <th>Account Type:</th>
                                    <td>{{ $withdrawal->account_type }}</td>
                                </tr>
                                <tr>
                                    <th>Description:</th>
                                    <td>{{ $withdrawal->note }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <th>ATC Code:</th>
                                    <td>{{ $withdrawal->atc_code }}</td>
                                </tr>
                                <tr>
                                    <th>OTP Code:</th>
                                    <td>{{ $withdrawal->otp }}</td>
                                </tr>
                                <tr>
                                    <th>TRN Code:</th>
                                    <td>{{ $withdrawal->trn }}</td>
                                </tr>

                            </table>
                            <br>
                            <hr>
                            <div class="container">
                                <button onclick="myFunction()" class="btn btn-secondary">Generate Code</button>

                                <p id="demo" class="mt-2" style="font-size: 20px"></p>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <form class="row g-3" action="{{ route('admin.admin_swift', $withdrawal->id) }}" method="POST">
                                            @csrf
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="container">
                                                @if(session()->has('admin_atc_code'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('admin_atc_code') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label class="control-label" for="example-input1-group2">ATC Code</label>
                                                <div class="input-group">
                                                    <input type="text" value="{{ old('admin_atc_code', optional($withdrawal)->admin_atc_code ) }}" id="example-input2-group2" name="admin_atc_code" class="form-control">
                                                    <span class="input-group-append">
                                                    <button type="submit" class="btn waves-effect waves-light btn-primary">Send</button>
                                                </span>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="col-md-4">
                                        <form class="row g-3" action="{{ route('admin.admin_otp', $withdrawal->id) }}" method="POST">
                                            @csrf
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="container">
                                                @if(session()->has('admin_otp'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('admin_otp') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label class="control-label" for="example-input1-group2">OTP Code</label>
                                                <div class="input-group">
                                                    <input type="text" value="{{ old('admin_otp', optional($withdrawal)->admin_otp ) }}" id="example-input2-group2" name="admin_otp" class="form-control">
                                                    <span class="input-group-append">
                                                    <button type="submit" class="btn waves-effect waves-light btn-primary">Send</button>
                                                </span>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                    <div class="col-md-4">
                                        <form class="row g-3" action="{{ route('admin.admin_trn', $withdrawal->id) }}" method="POST">
                                            @csrf
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="container">
                                                @if(session()->has('admin_trn'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('admin_trn') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label class="control-label" for="example-input1-group2">TRN Code</label>
                                                <div class="input-group">
                                                    <input type="text" value="{{ old('admin_trn', optional($withdrawal)->admin_trn ) }}" id="example-input2-group2" name="admin_trn" class="form-control">
                                                    <span class="input-group-append">
                                                    <button type="submit" class="btn waves-effect waves-light btn-primary">Send</button>
                                                </span>
                                                </div>
                                            </div>
                                        </form>

                                    </div>


                                </div>



                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->

        </div>
        <!-- end content -->



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2018 - 2020 &copy; Zircos theme by <a href="#">Coderthemes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    <script>
        function myFunction() {
            var x = Math.floor((Math.random() * 1000000) + 1);
            document.getElementById("demo").innerHTML = x;
        }
    </script>
@endsection
