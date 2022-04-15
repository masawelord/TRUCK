<!DOCTYPE html>
<html lang="en">

<head>
    @include('./assets.css')

</head>

<!-- body start -->

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        @include('layouts.header')
        @include('layouts.navi-store')


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
                                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Route</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Route</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
  <!-- status row -->
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-primary">
                                                <i class="fe-tag font-22 avatar-title text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">7</span></h3>
                                                <p class="text-dark mb-1">Comments</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-warning">
                                                <i class="fe-clock font-22 avatar-title text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">10</span></h3>
                                                <p class="text-dark text-bold mb-1">Pending Route</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-success">
                                                <i class="fe-check-circle font-22 avatar-title text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">10</span></h3>
                                                <p class="text-dark text-bold font-weight-bold temb-1 ">Approved Route</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-danger">
                                                <i class="fe-trash-2 font-22 avatar-title text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">128</span></h3>
                                                <p class="text-muted mb-1">Deleted Route</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->




                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <div class="text-md-end mt-3 mt-md-0 text-center" >
                                                <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#routepath"><i class="mdi mdi-plus-circle me-1"></i> Add New Route</button>
                                            </div>
                                        </div><!-- end col-->
                                    </div> <!-- end row -->
                                </div>
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row -->

                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <h4 class="header-title mb-4">Manage Route</h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Route ID 
                                                    </th>
                                                    <th>Drive ID</th>
                                                    <th>From - To</th>
                                                    <th>Driver</th>
                                                    <th>Priority</th>
                                                    <th>Status</th>
                                                    <th>Created Date</th>
                                                    <th>Due Date</th>
                                                    <th class="hidden-sm">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td><b>#1256</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">George A. Llanes</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        Support for theme
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-secondary text-secondary">Low</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-success">Open</span>
                                                    </td>

                                                    <td>
                                                        2017/04/28
                                                    </td>

                                                    <td>
                                                        2017/04/28
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#2542</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">Jose D. Delacruz</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        New submission on your website
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-9.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-warning text-warning">Medium</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-secondary text-light">Closed</span>
                                                    </td>

                                                    <td>
                                                        2008/04/25
                                                    </td>

                                                    <td>
                                                        2008/04/25
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#320</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">Phyllis K. Maciel</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        Verify your new email address!
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-danger text-danger">High</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-success">Open</span>
                                                    </td>

                                                    <td>
                                                        2017/04/20
                                                    </td>

                                                    <td>
                                                        2017/04/25
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#1254</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">Margeret V. Ligon</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        Your application has been received!
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-danger text-danger">High</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-secondary text-light">Closed</span>
                                                    </td>

                                                    <td>
                                                        01/04/2017
                                                    </td>

                                                    <td>
                                                        21/05/2017
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#1020</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-9.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">Erwin E. Brown</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        A new rating has been received
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-1.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-warning text-warning">Medium</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-secondary text-light">Closed</span>
                                                    </td>

                                                    <td>
                                                        2013/08/11
                                                    </td>

                                                    <td>
                                                        2013/08/30
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#854</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">William L. Trent</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        Your Profile has been accepted
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-danger text-danger">High</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-success">Open</span>
                                                    </td>

                                                    <td>
                                                        01/04/2017
                                                    </td>

                                                    <td>
                                                        21/05/2017
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#9501</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">Amy R. Barnaby</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        Homeworth for your property increased
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-secondary text-secondary">Low</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-success">Open</span>
                                                    </td>

                                                    <td>
                                                        01/04/2017
                                                    </td>

                                                    <td>
                                                        21/05/2017
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#3652</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">Jessica T. Phillips</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        Item Support Message sent
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-9.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-warning text-warning">Medium</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-secondary text-light">Closed</span>
                                                    </td>

                                                    <td>
                                                        01/04/2017
                                                    </td>

                                                    <td>
                                                        21/05/2017
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#9852</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">Debra J. Wilson</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        Your item has been updated!
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-danger text-danger">High</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-success">Open</span>
                                                    </td>

                                                    <td>
                                                        01/04/2017
                                                    </td>

                                                    <td>
                                                        21/05/2017
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#3652</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">Luke J. Sain</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        Your password has been reset
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-secondary text-secondary">Low</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-success">Open</span>
                                                    </td>

                                                    <td>
                                                        01/04/2017
                                                    </td>

                                                    <td>
                                                        21/05/2017
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#1352</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">Karen R. Doyle</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        Question regarding your Bootstrap Theme
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-danger text-danger">High</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-success">Open</span>
                                                    </td>

                                                    <td>
                                                        01/04/2017
                                                    </td>

                                                    <td>
                                                        21/05/2017
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#3562</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">Freddie J. Plourde</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        Security alert for my account
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-secondary text-secondary">Low</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-success">Open</span>
                                                    </td>

                                                    <td>
                                                        01/04/2017
                                                    </td>

                                                    <td>
                                                        21/05/2017
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#3658</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-9.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">Darrell J. Cook</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        Christopher S. Ahmad
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-warning text-warning">Medium</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-secondary text-light">Closed</span>
                                                    </td>

                                                    <td>
                                                        01/04/2017
                                                    </td>

                                                    <td>
                                                        21/05/2017
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#2251</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">Mark C. Diaz</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        Verify your new email address!
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-danger text-danger">High</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-success">Open</span>
                                                    </td>

                                                    <td>
                                                        01/04/2017
                                                    </td>

                                                    <td>
                                                        21/05/2017
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#3654</b></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="text-body">
                                                            <img src="../assets/images/users/user-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                            <span class="ms-2">Robert K. Joseph</span>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        Support for theme
                                                    </td>

                                                    <td>
                                                        <a href="javascript: void(0);">
                                                            <img src="../assets/images/users/user-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-soft-secondary text-secondary">Low</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge bg-success">Open</span>
                                                    </td>

                                                    <td>
                                                        01/04/2017
                                                    </td>

                                                    <td>
                                                        21/05/2017
                                                    </td>

                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-check-all me-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-star me-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->


                    <!-- end row -->


                </div> <!-- container -->

            </div> <!-- content -->

            @include('layouts.footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <!-- Modal -->
    <div class="modal fade" id="routepath" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Add New Route</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body p-4">
                    <form method="POST" action="#">
                        <div class="mb-3">
                            <label for="name" class="form-label">Start Point</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter place">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Ending Point</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter place">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Date</label>
                            <input type="date" class="form-control" id="position" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Cargo</label>
                            <input type="text" class="form-control" id="position" placeholder="name">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Kilogram</label>
                            <input type="number" class="form-control" id="position" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="position" placeholder="amount of the cargo">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Driver</label> <br />
                            <select id="selectize-select" class="form-control">
                                <option data-display="Select">select registered</option>
                                <option value="1">name 1</option>
                                <option value="2">name 2</option>
                                <option value="3">name 3</option>
                                <option value="4">name 4</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Vehicle</label> <br />
                            <select id="selectize-select" class="form-control">
                                <option data-display="Select">select registered</option>
                                <option value="1">name 1</option>
                                <option value="2">name 2</option>
                                <option value="3">name 3</option>
                                <option value="4">name 4</option>
                            </select>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success waves-effect waves-light">Send to Approve</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Continue</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link py-2" data-bs-toggle="tab" href="#chat-tab" role="tab">
                        <i class="mdi mdi-message-text d-block font-22 my-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2" data-bs-toggle="tab" href="#tasks-tab" role="tab">
                        <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
                        <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content pt-0">
                <div class="tab-pane" id="chat-tab" role="tabpanel">

                    <form class="search-bar p-3">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="mdi mdi-magnify"></span>
                        </div>
                    </form>

                    <h6 class="fw-medium px-3 mt-2 text-uppercase">Group Chats</h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-success"></i>
                            <span class="mb-0 mt-1">App Development</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-warning"></i>
                            <span class="mb-0 mt-1">Office Work</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-danger"></i>
                            <span class="mb-0 mt-1">Personal Group</span>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item ps-3 d-block">
                            <i class="mdi mdi-checkbox-blank-circle-outline me-1"></i>
                            <span class="mb-0 mt-1">Freelance</span>
                        </a>
                    </div>

                    <h6 class="fw-medium px-3 mt-3 text-uppercase">Favourites <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="../assets/images/users/user-10.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Andrew Mackie</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="../assets/images/users/user-1.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Rory Dalyell</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="../assets/images/users/user-9.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status busy"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Jaxon Dunhill</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <h6 class="fw-medium px-3 mt-3 text-uppercase">Other Chats <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                    <div class="p-2 pb-4">
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="../assets/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Jackson Therry</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="../assets/images/users/user-4.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Charles Deakin</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="../assets/images/users/user-5.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Ryan Salting</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="../assets/images/users/user-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status online"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Sean Howse</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="../assets/images/users/user-7.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status busy"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Dean Coward</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex align-items-start noti-user-item">
                                <div class="position-relative me-2">
                                    <img src="../assets/images/users/user-8.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    <i class="mdi mdi-circle user-status away"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="mt-0 mb-1 font-14">Hayley East</h6>
                                    <div class="font-13 text-muted">
                                        <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="text-center mt-3">
                            <a href="javascript:void(0);" class="btn btn-sm btn-white">
                                <i class="mdi mdi-spin mdi-loading me-2"></i>
                                Load more
                            </a>
                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="tasks-tab" role="tabpanel">
                    <h6 class="fw-medium p-3 m-0 text-uppercase">Working Tasks</h6>
                    <div class="px-2">
                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">App Development<span class="float-end">75%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">Database Repair<span class="float-end">37%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">Backup Create<span class="float-end">52%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>
                    </div>

                    <h6 class="fw-medium px-3 mb-0 mt-4 text-uppercase">Upcoming Tasks</h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">Sales Reporting<span class="float-end">12%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">Redesign Website<span class="float-end">67%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                            <p class="text-muted mb-0">New Admin Design<span class="float-end">84%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>
                    </div>

                    <div class="p-3 mt-2 d-grid">
                        <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Create Task</a>
                    </div>

                </div>
                <div class="tab-pane active" id="settings-tab" role="tabpanel">
                    <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                        <span class="d-block py-1">Theme Settings</span>
                    </h6>

                    <div class="p-3">
                        <div class="alert alert-warning" role="alert">
                            <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                        </div>

                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light" id="light-mode-check" checked />
                            <label class="form-check-label" for="light-mode-check">Light Mode</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark" id="dark-mode-check" />
                            <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                        </div>

                        <!-- Width -->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="width" value="fluid" id="fluid-check" checked />
                            <label class="form-check-label" for="fluid-check">Fluid</label>
                        </div>
                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="width" value="boxed" id="boxed-check" />
                            <label class="form-check-label" for="boxed-check">Boxed</label>
                        </div>

                        <!-- Menu positions -->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="menus-position" value="fixed" id="fixed-check" checked />
                            <label class="form-check-label" for="fixed-check">Fixed</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="menus-position" value="scrollable" id="scrollable-check" />
                            <label class="form-check-label" for="scrollable-check">Scrollable</label>
                        </div>

                        <!-- Left Sidebar-->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="light" id="light-check" />
                            <label class="form-check-label" for="light-check">Light</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="dark" id="dark-check" checked />
                            <label class="form-check-label" for="dark-check">Dark</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="brand" id="brand-check" />
                            <label class="form-check-label" for="brand-check">Brand</label>
                        </div>

                        <div class="form-check form-switch mb-3">
                            <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="gradient" id="gradient-check" />
                            <label class="form-check-label" for="gradient-check">Gradient</label>
                        </div>

                        <!-- size -->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="default" id="default-size-check" checked />
                            <label class="form-check-label" for="default-size-check">Default</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="condensed" id="condensed-check" />
                            <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="compact" id="compact-check" />
                            <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                        </div>

                        <!-- User info -->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftsidebar-user" value="fixed" id="sidebaruser-check" />
                            <label class="form-check-label" for="sidebaruser-check">Enable</label>
                        </div>


                        <!-- Topbar -->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check" checked />
                            <label class="form-check-label" for="darktopbar-check">Dark</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                            <label class="form-check-label" for="lighttopbar-check">Light</label>
                        </div>


                        <div class="d-grid mt-4">
                            <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                            <a href="https://1.envato.market/uboldadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                        </div>

                    </div>

                </div>
            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->


    @include('./assets.js')


</body>

</html>