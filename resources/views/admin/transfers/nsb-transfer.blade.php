@extends('admin.layouts.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">DataTables</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">DataTables</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Dynamic Table Full -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Dynamic Table <small>Full</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select"><option value="5">5</option><option value="10">10</option><option value="20">20</option></select></label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search.." aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                    <tr><th class="text-center sorting sorting_asc" style="width: 80px;" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th><th class="d-none d-sm-table-cell sorting" style="width: 30%;" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th><th class="d-none d-sm-table-cell sorting" style="width: 15%;" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">Access</th><th style="width: 15%;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Registered</th></tr>
                                    </thead>
                                    <tbody>




















                                    <tr class="odd">
                                        <td class="text-center sorting_1">1</td>
                                        <td class="fw-semibold">
                                            <a href="be_pages_generic_blank.html">Ryan Flores</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            client1<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-primary">Personal</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">6 days ago</em>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="text-center sorting_1">2</td>
                                        <td class="fw-semibold">
                                            <a href="be_pages_generic_blank.html">Ryan Flores</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            client2<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-success">VIP</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">7 days ago</em>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="text-center sorting_1">3</td>
                                        <td class="fw-semibold">
                                            <a href="be_pages_generic_blank.html">Jesse Fisher</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            client3<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-warning">Trial</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">3 days ago</em>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="text-center sorting_1">4</td>
                                        <td class="fw-semibold">
                                            <a href="be_pages_generic_blank.html">Lori Grant</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            client4<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-success">VIP</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">6 days ago</em>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="text-center sorting_1">5</td>
                                        <td class="fw-semibold">
                                            <a href="be_pages_generic_blank.html">Amanda Powell</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            client5<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-danger">Disabled</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">9 days ago</em>
                                        </td>
                                    </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Page <strong>1</strong> of <strong>4</strong></div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
                </div>
            </div>
            <!-- END Dynamic Table Full -->

            <!-- Dynamic Table with Export Buttons -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Dynamic Table <small>Export Buttons</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12"><div class="text-center bg-body-light py-2 mb-2"><div class="dt-buttons btn-group flex-wrap">          <button class="btn btn-sm btn-primary buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" type="button"><span>Copy</span></button> <button class="btn btn-sm btn-primary buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" type="button"><span>CSV</span></button> <button class="btn btn-sm btn-primary buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" type="button"><span>Excel</span></button> <button class="btn btn-sm btn-primary buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_1" type="button"><span>PDF</span></button> <button class="btn btn-sm btn-primary buttons-print" tabindex="0" aria-controls="DataTables_Table_1" type="button"><span>Print</span></button> </div></div></div></div><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_1_length"><label><select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="form-select"><option value="5">5</option><option value="10">10</option><option value="20">20</option></select></label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_1_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search.." aria-controls="DataTables_Table_1"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped table-vcenter js-dataTable-buttons dataTable no-footer" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                                    <thead>
                                    <tr><th class="text-center sorting sorting_asc" style="width: 80px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th><th class="d-none d-sm-table-cell sorting" style="width: 30%;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th><th class="d-none d-sm-table-cell sorting" style="width: 15%;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">Access</th><th style="width: 15%;" class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Registered</th></tr>
                                    </thead>
                                    <tbody>




















                                    <tr class="odd">
                                        <td class="text-center sorting_1">1</td>
                                        <td class="fw-semibold">
                                            <a href="be_pages_generic_blank.html">Jose Mills</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            client1<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-success">VIP</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">8 days ago</em>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="text-center sorting_1">2</td>
                                        <td class="fw-semibold">
                                            <a href="be_pages_generic_blank.html">Adam McCoy</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            client2<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-primary">Personal</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">7 days ago</em>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="text-center sorting_1">3</td>
                                        <td class="fw-semibold">
                                            <a href="be_pages_generic_blank.html">Jose Parker</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            client3<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-success">VIP</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">2 days ago</em>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="text-center sorting_1">4</td>
                                        <td class="fw-semibold">
                                            <a href="be_pages_generic_blank.html">Lori Moore</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            client4<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-info">Business</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">8 days ago</em>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="text-center sorting_1">5</td>
                                        <td class="fw-semibold">
                                            <a href="be_pages_generic_blank.html">Jeffrey Shaw</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            client5<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-danger">Disabled</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">7 days ago</em>
                                        </td>
                                    </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Page <strong>1</strong> of <strong>4</strong></div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_1_previous"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="DataTables_Table_1_next"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="5" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
                </div>
            </div>
            <!-- END Dynamic Table with Export Buttons -->

            <!-- Dynamic Table Full Pagination -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Dynamic Table <small>Full pagination</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_2_length"><label><select name="DataTables_Table_2_length" aria-controls="DataTables_Table_2" class="form-select"><option value="5">5</option><option value="10">10</option><option value="20">20</option></select></label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_2_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search.." aria-controls="DataTables_Table_2"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination dataTable no-footer" id="DataTables_Table_2" aria-describedby="DataTables_Table_2_info">
                                    <thead>
                                    <tr><th class="text-center sorting sorting_asc" style="width: 80px;" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th><th class="d-none d-sm-table-cell sorting" style="width: 30%;" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th><th class="d-none d-sm-table-cell sorting" style="width: 15%;" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">Access</th><th style="width: 15%;" class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Registered</th></tr>
                                    </thead>
                                    <tbody>




















                                    <tr class="odd">
                                        <td class="text-center sorting_1">1</td>
                                        <td class="fw-semibold">Sara Fields</td>
                                        <td class="d-none d-sm-table-cell">
                                            client1<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-info">Business</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">8 days ago</em>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="text-center sorting_1">2</td>
                                        <td class="fw-semibold">Barbara Scott</td>
                                        <td class="d-none d-sm-table-cell">
                                            client2<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-warning">Trial</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">7 days ago</em>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="text-center sorting_1">3</td>
                                        <td class="fw-semibold">Melissa Rice</td>
                                        <td class="d-none d-sm-table-cell">
                                            client3<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-warning">Trial</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">10 days ago</em>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="text-center sorting_1">4</td>
                                        <td class="fw-semibold">David Fuller</td>
                                        <td class="d-none d-sm-table-cell">
                                            client4<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-info">Business</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">2 days ago</em>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="text-center sorting_1">5</td>
                                        <td class="fw-semibold">Brian Cruz</td>
                                        <td class="d-none d-sm-table-cell">
                                            client5<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-success">VIP</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">10 days ago</em>
                                        </td>
                                    </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_2_info" role="status" aria-live="polite">Page <strong>1</strong> of <strong>4</strong></div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_2_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_2_first"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i></a></li><li class="paginate_button page-item previous disabled" id="DataTables_Table_2_previous"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="3" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="4" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="5" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="DataTables_Table_2_next"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="6" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li><li class="paginate_button page-item last" id="DataTables_Table_2_last"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="7" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
                </div>
            </div>
            <!-- END Dynamic Table Full Pagination -->

            <!-- Dynamic Table Simple -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Dynamic Table <small>With only sorting and pagination</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-simple class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <div id="DataTables_Table_3_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped table-vcenter js-dataTable-simple dataTable no-footer" id="DataTables_Table_3" aria-describedby="DataTables_Table_3_info">
                                    <thead>
                                    <tr><th class="text-center sorting sorting_asc" style="width: 80px;" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="#: activate to sort column descending" aria-sort="ascending">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th><th class="d-none d-sm-table-cell sorting" style="width: 30%;" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th><th class="d-none d-sm-table-cell sorting" style="width: 15%;" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">Access</th><th style="width: 15%;" class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Registered</th></tr>
                                    </thead>
                                    <tbody>




















                                    <tr class="odd">
                                        <td class="text-center sorting_1">1</td>
                                        <td class="fw-semibold">Laura Carr</td>
                                        <td class="d-none d-sm-table-cell">
                                            client1<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-primary">Personal</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">3 days ago</em>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="text-center sorting_1">2</td>
                                        <td class="fw-semibold">Lori Moore</td>
                                        <td class="d-none d-sm-table-cell">
                                            client2<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-success">VIP</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">7 days ago</em>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="text-center sorting_1">3</td>
                                        <td class="fw-semibold">Jesse Fisher</td>
                                        <td class="d-none d-sm-table-cell">
                                            client3<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-danger">Disabled</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">7 days ago</em>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="text-center sorting_1">4</td>
                                        <td class="fw-semibold">Justin Hunt</td>
                                        <td class="d-none d-sm-table-cell">
                                            client4<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-warning">Trial</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">2 days ago</em>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="text-center sorting_1">5</td>
                                        <td class="fw-semibold">Brian Cruz</td>
                                        <td class="d-none d-sm-table-cell">
                                            client5<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge bg-success">VIP</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">6 days ago</em>
                                        </td>
                                    </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="DataTables_Table_3_info" role="status" aria-live="polite">Page <strong>1</strong> of <strong>4</strong></div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_3_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_3_previous"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="DataTables_Table_3_next"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="5" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
                </div>
            </div>
            <!-- END Dynamic Table Simple -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
