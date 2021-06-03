                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <div class="row">
                        <div class="col-lg">
                            <?php if (validation_errors()) :  ?>
                                <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
                            <?php endif; ?>
                            <?= $this->session->flashdata('pesan');  ?>

                            <table class="table table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID Pesanan</th>
                                        <th scope="col">ID Barang</th>
                                        <th scope="col">Tanggal Pesanan</th>
                                        <th scope="col">Jam Pesanan</th>
                                        <th scope="col">Metode Bayar</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($pesan as $psn) : ?>
                                        <tr>
                                            <th scope="row"> <?= $i; ?></th>
                                            <td><?= $psn['id_pemesanan']; ?></td>
                                            <td><?= $psn['id_brg']; ?></td>
                                            <td><?= $psn['tanggal']; ?></td>
                                            <td><?= $psn['waktu']; ?></td>
                                            <td><?= $psn['metode_bayar']; ?></td>
                                            <td><?= $psn['status']; ?></td>

                                            <td>
                                                <a href="" class="badge badge-primary" data-toggle="modal" data-target="#submenuedit">Edit</a>
                                                <a href="<?= base_url() ?>menu/usermenuhapus/<?= $brg['id_brg'] ?>" class="badge badge-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Modal -->

                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="usermenubaru" tabindex="-1" role="dialog" aria-labelledby="myLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLabel">Tambah Menu User Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('menu/submenu'); ?>" method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Masukan SubMenu Baru">
                                    </div>
                                    <div class="form-group">
                                        <select name="menu_id" id="menu_id" class="form-control">
                                            <option value="">Pilih Menu</option>
                                            <?php foreach ($menu as $m) : ?>
                                                <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="url" name="url" placeholder="Masukan URL SubMenu Baru">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Masukan Ikon SubMenu Baru">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                            <label class="form-check-label" for="is_active">
                                                Aktif?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>