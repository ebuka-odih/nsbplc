@extends('admin.layouts.app2')
@section('content')

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
                            <h4 class="page-title">Deposits</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            @if(session()->has('delete'))
                                <div class="alert alert-success">
                                    {{ session()->get('delete') }}
                                </div>
                            @endif
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif

                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Payment Method</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($deposits as $item)
                                    <tr>
                                        <td><strong>{{ optional($item->user)->first_name }}</strong></td>
                                        <td><strong>{{ optional($item->user)->last_name }}</strong></td>
                                        <td><strong>$ {{ $item->amount }}</strong></td>
                                        <td><strong> {!! $item->status() !!}</strong></td>
                                        <td><strong> {{ $item->payment_method }}</strong></td>


                                        {{--                                            <td><strong>$ {{ optional($withdraw->account)->balance }}</strong></td>--}}
                                        <td><strong>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</strong></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('admin.withdrawal_details', $item->id) }}" class="btn btn-secondary btn-sm"></a>
                                                <a href="#" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">

                                                    <a href="{{ route('admin.approveDeposit', $item->id) }}" class="btn btn-sm btn-success m-2">Accept</a><br>
                                                    <a href="{{ route('admin.delineDeposit', $item->id) }}" class="btn btn-sm btn-warning m-2">Decline</a>
                                                    {{--                                                        <a class="dropdown-item" href="#">Delete Transaction</a>--}}
                                                    <form method="POST" action="{!! route('admin.delete_trans', $item->id) !!}" accept-charset="UTF-8">
                                                        <input name="_method" value="DELETE" type="hidden">
                                                        {{ csrf_field() }}

                                                        <div class="btn-group btn-group-xs pull-right m-2" role="group">
                                                            <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Deposit?&quot;)">
                                                                Delete
                                                            </button>

                                                        </div>
                                                    </form>

                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
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

@endsection
