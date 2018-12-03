  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Kartu Inventaris Barang (KIB) D Jalan, Irigasi & Jaringan
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Data"><i class="fa fa-plus"></i> Tambah</button>
    <a href="<?php echo site_url('kibd')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
                          <i class="fa fa-refresh"></i>
                        </a>
    <a href="<?php echo site_url('Kibd/cetak')?>" class="btn btn-white btn-warning btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Cetak">
                          <i class="fa fa-print"></i> Cetak
                        </a>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Kibd/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama Barang / Jenis Barang</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama Barang / Jenis Barang" name="kibd_name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Kode barang</label>
                      <input type="text" class="form-control" id="password" placeholder="Kode Barang" name="kibd_kodeb" required="required">
                  </div>
                            <div class="form-group">
                    <label for="password">Nomor Register</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Nomor Register" name="kibd_noreg" required="required">
                  </div>
        <div class="form-group">
                    <label for="password">Konstruksi</label>
                      <input type="text" class="form-control" id="password" placeholder="Konstruksi" name="kibd_konstruksi" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Panjang (Km)</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Panjang" name="kibd_panjang" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Lebar (M)</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Lebar" name="kibd_lebar" required="required">
                  </div>
                            <div class="form-group">
                    <label for="password">Luas (M2)</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Luas" name="kibd_luas" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Letak / Lokasi Alamat</label>
                      <input type="text" class="form-control" id="password" placeholder="Letak / Lokasi Alamat" name="kibd_letak" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tanggal Dokumen</label>
                      <input type="date" class="form-control" id="password" placeholder="Tanggal Dokumen" name="kibd_tgldok" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Dokumen</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Nomor Dokumen" name="kibd_nodok" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Status Tanah</label>
                      <input type="text" class="form-control" id="password" placeholder="Status Tanah" name="kibd_status" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Kode Tanah</label>
                      <input type="text" class="form-control" id="password" placeholder="Nomor Kode Tanah" name="kibd_kodet" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Asal-usul</label>
                      <input type="text" class="form-control" id="password" placeholder="Asal-usul" name="kibd_asal" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Harga(ribuan Rp)</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Harga(ribuan Rp)" name="kibd_harga" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Kondisi (B, KB, RB)</label>
                      <input type="text" class="form-control" id="password" placeholder="Kondisi" name="kibd_bangunan" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                      <input type="text" class="form-control" id="password" placeholder="Keterangan" name="kibd_ket" required="required">
                  </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" alt="Tambah">Tambah</button>
                </div><!-- /.box-footer -->
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kartu Inventaris Barang (KIB) D Jalan, Irigasi & Jaringan</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Jenis Barang / Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Nomor Register</th>
                    <th>Konstruksi</th>
                    <th>Panjang (Km)</th>
                    <th>Lebar (M)</th>
                    <th>Luas (M2)</th>
                    <th>Letak / Lokasi Alamat</th>
                    <th>Tanggal Dokumen Gedung</th>
                    <th>Nomor Dokumen Gedung</th>
                    <th>Status Tanah</th>
                    <th>Nomor Kode Tanah</th>
                    <th>Asal-usul</th>
                    <th>Harga(ribuan Rp)</th>
                    <th>Kondisi (B, KB, RB)</th>
                    <th>Keterangan</th>
                    <th style="width: 20px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($kibd as $key) {
                    $id=$key->kibd_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->kibd_name;?></td>
                    <td><?php echo $key->kibd_kodeb;?></td>
                    <td><?php echo $key->kibd_noreg;?></td>
                    <td><?php echo $key->kibd_konstruksi;?></td>
                    <td><?php echo $key->kibd_panjang;?></td>
                    <td><?php echo $key->kibd_lebar;?></td>
                    <td><?php echo $key->kibd_luas;?></td>
                    <td><?php echo $key->kibd_letak;?></td>
                    <td><?php echo $key->kibd_tgldok;?></td>
                    <td><?php echo $key->kibd_nodok;?></td>
                    <td><?php echo $key->kibd_status;?></td>
                    <td><?php echo $key->kibd_kodet;?></td>
                    <td><?php echo $key->kibd_asal;?></td>
                    <td><?php echo $key->kibd_harga;?></td>
                    <td><?php echo $key->kibd_bangunan;?></td>
                    <td><?php echo $key->kibd_ket;?></td>
                    <td>
                      <button type="button" class="btn btn-xs btn-success" title="Ubah Data" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus Data" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
            <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Kibd/edit");?>
                             <div class="form-group">
                              <label for="password">Nama Barang / Jenis Barang</label>
                              <input type="text" class="form-control"  value='<?php echo $key->kibd_name; ?>' name="kibd_name" required="required">
                              <input type="hidden" class="form-control"   value='<?php echo $key->kibd_id; ?>' name="kibd_id" required="required" >
                            </div>
                            <div class="form-group">
                    <label for="password">Kode barang</label>
                      <input type="text" class="form-control" id="password" value='<?php echo $key->kibd_kodeb; ?>' placeholder="Kode Barang" name="kibd_kodeb" required="required">
                  </div>
                            <div class="form-group">
                    <label for="password">Nomor Register</label>
                      <input type="number" class="form-control sembarang" value='<?php echo $key->kibd_noreg; ?>' id="password" placeholder="Nomor Register" name="kibd_noreg" required="required">
                  </div>
                             <div class="form-group">
                    <label for="password">Konstruksi</label>
                      <input type="text" class="form-control" id="password" value='<?php echo $key->kibd_konstruksi; ?>' placeholder="Konstruksi" name="kibd_konstruksi" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Panjang (Km)</label>
                      <input type="number" class="form-control sembarang" value='<?php echo $key->kibd_panjang; ?>' id="password" placeholder="Panjang" name="kibd_panjang" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Lebar (M)</label>
                      <input type="number" class="form-control sembarang" value='<?php echo $key->kibd_lebar; ?>' id="password" placeholder="Lebar" name="kibd_lebar" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Luas (M2)</label>
                      <input type="number" class="form-control sembarang" value='<?php echo $key->kibd_luas; ?>' id="password" placeholder="Luas" name="kibd_luas" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Letak / Lokasi Alamat</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibd_letak; ?>' id="password" placeholder="Letak / Lokasi Alamat" name="kibd_letak" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tanggal Dokumen Gedung</label>
                      <input type="date" class="form-control" value='<?php echo $key->kibd_tgldok; ?>' id="password" placeholder="Tanggal Dokumen Gedung" name="kibd_tgldok" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Dokumen Gedung</label>
                      <input type="number" class="form-control sembarang" value='<?php echo $key->kibd_nodok; ?>' id="password" placeholder="Nomor Dokumen Gedung" name="kibd_nodok" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Status Tanah</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibd_status; ?>' id="password" placeholder="Status Tanah" name="kibd_status" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Kode Tanah</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibd_kodet; ?>' id="password" placeholder="Nomor Kode Tanah" name="kibd_kodet" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Asal-usul</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibd_asal; ?>' id="password" placeholder="Asal-usul" name="kibd_asal" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Harga (ribuan Rp)</label>
                      <input type="number" class="form-control sembarang" value='<?php echo $key->kibd_harga; ?>' id="password" placeholder="Harga (ribuan Rp)" name="kibd_harga" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Kondisi (B, KB, RB)</label>
                      <input type="text" class="form-control" id="password" value='<?php echo $key->kibd_bangunan; ?>' placeholder="Kondisi (B, KB, RB)" name="kibd_bangunan" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibd_ket; ?>' id="password" placeholder="Keterangan" name="kibd_ket" required="required">
                  </div>
                          </div><!-- /.box-body -->
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                          </div>
                        <?php echo form_close(); ?>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Modal Delete-->
                  <div class="modal fade" id="delete<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog">
                    <!-- Modal content-->
                      <div class="modal-content">
                        <?php echo form_open("Kibd/delete");?>
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Hapus Data</h4>
                            </div>
                            <div class="modal-body">
                              <div class="alert alert-danger">Apakah anda yakin ingin menghapus "<b><?php echo $key->kibd_name?></b>" ?</div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" class="form-control" value="<?php echo $key->kibd_id?>" name="kibd_id" required="required">
                              <button type="submit" class="btn btn-danger">Ya</button>
                              <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Batal</button>
                            </div>
                            <?php echo form_close(); ?>
                      </div>
                    </div>
                  </div>
                <?php
                  $no++;
                  }
                ?>
                </tbody>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box-primary -->
        </div><!-- /.col-md -->
      </div><!-- /.row -->
    </section>
  </div>