<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Invoice</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Invoice</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="callout callout-info">
                                <h5 style="color: red;"><i class="fas fa-info"></i> Note:</h5>
                                Jika Pesanan Anda Sudah Benar maka Bisa Pilih Tombol <strong>Submit Payment</strong> Untuk Mengupload Bukti Pembayaran.
                            </div>


                            <!-- Main content -->
                            <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            <i class="fas fa-globe"></i> Dadi Resik.
                                            <small class="float-right">Date: <span id="tanggal"></span></small>
                                            <script>
                                                var dt = new Date();
                                                document.getElementById("tanggal").innerHTML = dt.toLocaleDateString();
                                            </script>
                                        </h4>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        From
                                        <address>
                                            <strong>Dadi Resik</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            Phone: (804) 123-5432<br>
                                            Email: info@almasaeedstudio.com
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        To
                                        <address>
                                            <strong><?= $user['nama']; ?></strong><br>
                                            <?= $user['alamat']; ?><br>
                                            Phone: <?= $user['hp']; ?><br>
                                            Email: <?= $user['email']; ?>
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">

                                        <b>Order Date:</b> <span id="tanggalwaktu"></span><br>
                                        <script>
                                            var dt = new Date();
                                            document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleDateString();
                                        </script>
                                        <b>Order Time:</b> <span id="time"></span><br>
                                        <script>
                                            var dt = new Date();
                                            document.getElementById("time").innerHTML = dt.toLocaleTimeString();
                                        </script>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                            <form action="<?= base_url('formpesan/checkout') ?>" method="POST">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>ID Order</th>
                                                        <th>Barang</th>
                                                        <th>Harga</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $pemesanan = $this->db->get_where('pemesanan', ['email' => $this->session->userdata('email')])->result_array();
                                                    $no = 0;
                                                    foreach ($pemesanan as $p) :
                                                        $no++;
                                                    ?>
                                                        <tr>
                                                            <td><?= $no ?></td>
                                                            <td> <?= $p['id_pemesanan'] ?></td>
                                                            <td> <?= $p['nama_brg'] ?></td>
                                                            <td> <?= $p['harga'] ?></td>
                                                            <td> <?= $p['status'] ?></td>
                                                            <td><a href="#" class="badge badge-danger">Cancel</a></td>

                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>

                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->




                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                    <div class="col-12">


                                        </form>
                                        <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-success float-right"><i class="fas fa-print"></i> Print</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.invoice -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
</body>