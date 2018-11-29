  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Kartu Inventaris Barang (KIB) F Konstruksi Dalam Pengerjaan
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Data"><i class="fa fa-plus"></i> Tambah</button>
    <a href="<?php echo site_url('kibc')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
                          <i class="fa fa-refresh"></i>
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
              <?php echo form_open_multipart("Kibc/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama Barang / Jenis Barang</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama Barang / Jenis Barang" name="kibc_name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Kode barang</label>
                      <input type="text" class="form-control" id="password" placeholder="Kode Barang" name="kibc_kodeb" required="required">
                  </div>
                            <div class="form-group">
                    <label for="password">Nomor Register</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Nomor Register" name="kibc_noreg" required="required">
                  </div>
        <div class="form-group">
                    <label for="password">Kondisi Bangunan (B, KB, RB)</label>
                      <input type="text" class="form-control" id="password" placeholder="Bangunan" name="kibc_bangunan" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Bertingkat / Tidak</label>
                              <select class="form-control" name="kibc_bertingkat" required="required">
                                  <option value="" selected>Pilih</option>
                                  <option type = "text" name = "" value = "Ya">Ya</option>
                                  <option type = "text" name = "" value = "Tidak">Tidak</option>
                              </select>
                            </div>
                                              <div class="form-group">
                    <label for="password">Beton / Tidak</label>
                              <select class="form-control" name="kibc_beton" required="required">
                                  <option value="" selected>Pilih</option>
                                  <option type = "text" name = "" value = "Ya">Ya</option>
                                  <option type = "text" name = "" value = "Tidak">Tidak</option>
                              </select>
                            </div>
                            <div class="form-group">
                    <label for="password">Luas Lantai (M2)</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Luas Lantai" name="kibc_lantai" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Letak / Lokasi Alamat</label>
                      <input type="text" class="form-control" id="password" placeholder="Letak / Lokasi Alamat" name="kibc_letak" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tanggal Dokumen Gedung</label>
                      <input type="date" class="form-control" id="password" placeholder="Tanggal Dokumen Gedung" name="kibc_tgldok" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Dokumen Gedung</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Nomor Dokumen Gedung" name="kibc_nodok" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Luas (M2)</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Luas" name="kibc_luas" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Status Tanah</label>
                      <input type="text" class="form-control" id="password" placeholder="Status Tanah" name="kibc_status" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Kode Tanah</label>
                      <input type="text" class="form-control" id="password" placeholder="Nomor Kode Tanah" name="kibc_kodet" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Asal-usul</label>
                      <input type="text" class="form-control" id="password" placeholder="Asal-usul" name="kibc_asal" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Harga(ribuan Rp)</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Harga(ribuan Rp)" name="kibc_harga" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                      <input type="text" class="form-control" id="password" placeholder="Keterangan" name="kibc_ket" required="required">
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
              <h3 class="box-title">Kartu Inventaris Barang (KIB) F Konstruksi Dalam Pengerjaan</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Jenis Barang / Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Nomor Register</th>
                    <th>Kondisi Bangunan (B, KB, RB)</th>
                    <th>Bertingkat / Tidak</th>
                    <th>Beton / Tidak</th>
                    <th>Luas Lantai (M2)</th>
                    <th>Letak / Lokasi Alamat</th>
                    <th>Tanggal Dokumen Gedung</th>
                    <th>Nomor Dokumen Gedung</th>
                    <th>Luas (M2)</th>
                    <th>Status Tanah</th>
                    <th>Nomor Kode Tanah</th>
                    <th>Asal-usul</th>
                    <th>Harga(ribuan Rp)</th>
                    <th>Keterangan</th>
                    <th style="width: 20px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($kibc as $key) {
                    $id=$key->kibc_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->kibc_name;?></td>
                    <td><?php echo $key->kibc_kodeb;?></td>
                    <td><?php echo $key->kibc_noreg;?></td>
                    <td><?php echo $key->kibc_bangunan;?></td>
                    <td><?php echo $key->kibc_bertingkat;?></td>
                    <td><?php echo $key->kibc_beton;?></td>
                    <td><?php echo $key->kibc_lantai;?></td>
                    <td><?php echo $key->kibc_letak;?></td>
                    <td><?php echo $key->kibc_tgldok;?></td>
                    <td><?php echo $key->kibc_nodok;?></td>
                    <td><?php echo $key->kibc_luas;?></td>
                    <td><?php echo $key->kibc_status;?></td>
                    <td><?php echo $key->kibc_kodet;?></td>
                    <td><?php echo $key->kibc_asal;?></td>
                    <td><?php echo $key->kibc_harga;?></td>
                    <td><?php echo $key->kibc_ket;?></td>
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
                           <?php echo form_open_multipart("Kibc/edit");?>
                             <div class="form-group">
                              <label for="password">Nama Barang / Jenis Barang</label>
                              <input type="text" class="form-control"  value='<?php echo $key->kibc_name; ?>' name="kibc_name" required="required">
                              <input type="hidden" class="form-control"   value='<?php echo $key->kibc_id; ?>' name="kibc_id" required="required" >
                            </div>
                            <div class="form-group">
                    <label for="password">Kode barang</label>
                      <input type="text" class="form-control" id="password" value='<?php echo $key->kibc_kodeb; ?>' placeholder="Kode Barang" name="kibc_kodeb" required="required">
                  </div>
                            <div class="form-group">
                    <label for="password">Nomor Register</label>
                      <input type="number" class="form-control sembarang" value='<?php echo $key->kibc_noreg; ?>' id="password" placeholder="Nomor Register" name="kibc_noreg" required="required">
                  </div>
                             <div class="form-group">
                    <label for="password">Bangunan (P, SP, D)</label>
                      <input type="text" class="form-control" id="password" value='<?php echo $key->kibc_bangunan; ?>' placeholder="Bangunan" name="kibc_bangunan" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Bertingkat / Tidak</label>
                              <select class="form-control" name="kibc_bertingkat" value='<?php echo $key->kibc_bertingkat; ?>' required="required">
                                  <option value="" selected>Pilih</option>
                                  <option type = "text" name = "" value = "Ya">Ya</option>
                                  <option type = "text" name = "" value = "Tidak">Tidak</option>
                              </select>
                            </div>
                                              <div class="form-group">
                    <label for="password">Beton / Tidak</label>
                              <select class="form-control" name="kibc_beton" value='<?php echo $key->kibc_beton; ?>' required="required">
                                  <option value="" selected>Pilih</option>
                                  <option type = "text" name = "" value = "Ya">Ya</option>
                                  <option type = "text" name = "" value = "Tidak">Tidak</option>
                              </select>
                            </div>
                  <div class="form-group">
                    <label for="password">Luas Lantai (M2)</label>
                      <input type="number" class="form-control sembarang" value='<?php echo $key->kibc_lantai; ?>' id="password" placeholder="Luas Lantai" name="kibc_lantai" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Letak / Lokasi Alamat</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibc_letak; ?>' id="password" placeholder="Letak / Lokasi Alamat" name="kibc_letak" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tanggal Dokumen Gedung</label>
                      <input type="date" class="form-control" value='<?php echo $key->kibc_tgldok; ?>' id="password" placeholder="Tanggal Dokumen Gedung" name="kibc_tgldok" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Dokumen Gedung</label>
                      <input type="number" class="form-control sembarang" value='<?php echo $key->kibc_nodok; ?>' id="password" placeholder="Nomor Dokumen Gedung" name="kibc_nodok" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Luas (M2)</label>
                      <input type="number" class="form-control sembarang" value='<?php echo $key->kibc_luas; ?>' id="password" placeholder="Luas" name="kibc_luas" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Status Tanah</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibc_status; ?>' id="password" placeholder="Status Tanah" name="kibc_status" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Kode Tanah</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibc_kodet; ?>' id="password" placeholder="Nomor Kode Tanah" name="kibc_kodet" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Asal-usul</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibc_asal; ?>' id="password" placeholder="Asal-usul" name="kibc_asal" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Harga (ribuan Rp)</label>
                      <input type="number" class="form-control sembarang" value='<?php echo $key->kibc_harga; ?>' id="password" placeholder="Harga (ribuan Rp)" name="kibc_harga" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibc_ket; ?>' id="password" placeholder="Keterangan" name="kibc_ket" required="required">
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
                        <?php echo form_open("Kibc/delete");?>
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Hapus Data</h4>
                            </div>
                            <div class="modal-body">
                              <div class="alert alert-danger">Apakah anda yakin ingin menghapus "<b><?php echo $key->kibc_name?></b>" ?</div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" class="form-control" value="<?php echo $key->kibc_id?>" name="kibc_id" required="required">
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