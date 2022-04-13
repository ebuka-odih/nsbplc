@extends('admin.layouts.app2')

@section('content')
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
                            <h4 class="page-title">{{ $user_details->name }} Deposits</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-xl-3 col-md-4">
                                    <div class="text-center card-box shadow-none border border-secoundary">
                                        <div class="member-card">
                                            <a href="{{ route('admin.user_details', $user_details->id) }}">
                                                <div class="avatar-xl member-thumb mb-3 mx-auto d-block">
                                                    <img src="{{ $user_details->profile_pic }}" class="rounded-circle img-thumbnail" alt="profile-image">
                                                    {!! $user_details->admin_status() !!}
                                                </div>
                                            </a>

                                            <div class="">
                                                <h5 class="font-18 mb-1">{{ $user_details->last_name }}</h5>
                                                <p class="text-muted mb-2">{{ $user_details->email }}</p>
                                                <h5 class="font-18 mb-1">Account Bal: $ @convert($user_details->account->balance)</h5>
                                            </div>
                                            <a href="{{ route('admin.user_message', $user_details->id) }}" class="btn btn-success btn-sm width-sm waves-effect mt-2 waves-light">Messages</a>
                                            <a href="{{ route('admin.personal_details', $user_details->id) }}" class="btn btn-primary btn-sm width-sm waves-effect mt-2 waves-light">User Details</a>
                                            @if( $user_details->status == 0)
                                                <a href="{{ route('admin.verify_user', $user_details->id) }}" title="Verify this user" class="btn btn-secondary btn-sm width-sm waves-effect mt-2 waves-light">Verify User</a>
                                            @else
                                            @endif
                                            {{--                                            <a href="{{ route('admin.user_details', $user_details->id) }}" class="btn btn-primary btn-sm width-sm waves-effect mt-2 waves-light">Deposits</a>--}}
                                            {{--                                            <a href="{{ route('admin.user_withdrawal', $user_details->id) }}" class="btn btn-primary btn-sm width-sm waves-effect mt-2 waves-light">Withdrawal</a>--}}


                                            <hr/>

                                            <div class="text-left">

                                                <table style="width:100%">
                                                    <tr>
                                                        <th>First Name:</th>
                                                        <td>{{$user_details->first_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Last Name:</th>
                                                        <td>{{ $user_details->last_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email:</th>
                                                        <td>{{ $user_details->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Created At :</th>
                                                        <td>{{ date('d/m/Y', strtotime($user_details->created_at)) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><hr></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Account No:</th>
                                                        <td>{{ optional($user_details->account)->account_number }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Account Type:</th>
                                                        <td>{{ $user_details->account_type }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Password:</th>
                                                        <td>{{ $user_details->pass }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Account Limit:</th>
                                                        <td>${{ optional($user_details->account)->account_limit_per_day }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Active:</th>
                                                        <td>{!! optional($user_details->account)->active() !!}</td>
                                                    </tr>
                                                </table>

                                            </div>


                                        </div>

                                    </div>
                                    <!-- end card-box -->

                                </div>
                                <!-- end col -->

                                <div class="col-xl-9 col-md-8">
                                    <a href="{{ route('admin.edit_user', $user_details->id) }}" class="btn btn-secondary">Edit Info</a>
                                        <table style="border-collapse: collapse; border-spacing: 0; width: 100%;" class="table table-striped table-bordered">
                                            <tr>
                                                <th>Full Name:</th>
                                                <td>{{ $user_details->first_name." ".$user_details->last_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email:</th>
                                                <td>{{ $user_details->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Telephone:</th>
                                                <td>{{ $user_details->phone }}</td>
                                            </tr>
                                            <tr>
                                                <th>Perferred Currency:</th>
                                                <td>{{ $user_details->preferred_currency }}</td>
                                            </tr>
                                            <tr>
                                                <th>Account Type:</th>
                                                <td>{{ $user_details->account_type }}</td>
                                            </tr>
                                            <hr>
                                            <tr>
                                                <th>Marital Status:</th>
                                                <td>{{ $user_details->m_status }}</td>
                                            </tr>
                                            <tr>
                                                <th>Gender:</th>
                                                <td>{{ $user_details->gender }}</td>
                                            </tr>
                                            <tr>
                                                <th>Country:</th>
                                                <td>{{ $user_details->country }}</td>
                                            </tr>
                                            <tr>
                                                <th>State:</th>
                                                <td>{{ $user_details->state }}</td>
                                            </tr>
                                            <tr>
                                                <th>City:</th>
                                                <td>{{ $user_details->city }}</td>
                                            </tr>
                                            <tr>
                                                <th>Address:</th>
                                                <td>{{ $user_details->address }}</td>
                                            </tr>
                                            <tr>
                                                <th>Zipcode:</th>
                                                <td>{{ $user_details->zipcode }}</td>
                                            </tr>

                                        </table>




                                </div>
                                <!-- end col -->


                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->

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
        $(function() {
            $("select").each(function (index, element) {
                const val = $(this).data('value');
                if(val !== '') {
                    $(this).val(val);
                }
            });
        })
    </script>
@endsection
