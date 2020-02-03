<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('admin-dashboard/fragments/admin_head_code') ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view('admin-dashboard/fragments/admin_sidebar') ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('admin-dashboard/fragments/admin_topnav') ?>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Rental Admins</h1>
                    <?php if ($this->session->flashdata('ordersuccess')) : ?>
                        <div class="alert alert-success">
                            <p class="mb-4"><?= $this->session->flashdata('ordersuccess') ?>.</p>
                        </div>
                    <?php else : ?>
                        <p class="mb-4">List of user with admin role.</p>
                    <?php endif; ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 style="float: left;" class="m-0 font-weight-bold text-primary">Admin List</h6>
                            <a href="<?= base_url('admin/pin') ?>" style="float: right;" class="btn btn-info pull-right"><i class="fa fa-plus-circle"> </i> Register new Admin</a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="white-space:nowrap;">#</th>
                                            <th style="white-space:nowrap;">Name</th>
                                            <th style="white-space:nowrap;">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0;
                                        foreach ($admins as $admin) :  $i++; ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $admin->first_name . ' ' . $admin->surname ?></td>
                                                <td><?= $admin->email ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->


            <?php $this->load->view('admin-dashboard/fragments/admin_footer') ?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <?php $this->load->view('admin-dashboard/fragments/admin_scripts') ?>
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('.dataTable').DataTable();
        });
    </script>
</body>

</html>