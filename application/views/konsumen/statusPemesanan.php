<main class="ps-main">
    <div style="text-align: center;padding-top: 20px;">
        <h1>Status Pemesanan</h1>
    </div>
    <div class="ps-blog-grid pt-40 pb-80">
        <div class="ps-container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="form-row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Jumlah Barang</th>
                                        <th scope="col">Total harga</th>
                                        <th scope="col">Status Pesanan</th>
                                        <th scope="col">Action</th>
                                <tbody>
                                    <?php
									$no = 1;
									foreach ($allPesanan as $pesanan): 
										$hasil_rupiah = 'Rp ' . number_format($pesanan['total_harga'],2,',','.');
									?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $pesanan['nama_kategori'] ?></td>
                                        <td><?= $pesanan['jumlah_barang'] ?></td>
                                        <td><?= $hasil_rupiah ?></td>
                                        <td><?= $pesanan['status_pesanan'] ?></td>
                                        <td>
                                            <center>
                                                <?php if($pesanan['status_pesanan'] == 'belum lunas'){ ?>

                                                <a href="#" class="btn btn-warning">Upload Bukti Pembayaran</a>

                                                <?php }elseif($pesanan['status_pesanan'] == 'pesanan dikirim'){ ?>

                                                <a href="<?= base_url('admin/toltervendor/4/') . $pesanan['id_pesanan'] ?>"
                                                    class="btn btn-success">Terima Barang</a>

                                                <?php } ?>

                                                <a href="<?= base_url('admin/toltervendor/4/') . $pesanan['id_pesanan'] ?>"
                                                    class="btn btn-primary">Rincian</a>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php endforeach;
                                    ?>
                                </tbody>

                            </table>
                        </div>
                    </div>



                </div>







            </div>




        </div>
    </div>



    </div>></th>