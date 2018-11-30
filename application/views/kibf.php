  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Kartu Inventaris Barang (KIB) F Konstruksi Dalam Pengerjaan
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Data"><i class="fa fa-plus"></i> Tambah</button>
    <a href="<?php echo site_url('kibf')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
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
              <?php echo form_open_multipart("Kibf/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama Barang / Jenis Barang</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama Barang / Jenis Barang" name="kibf_name" required="required">
                  </div>
        <div class="form-group">
                    <label for="password">Bangunan (P, SP, D)</label>
                      <input type="text" class="form-control" id="password" placeholder="Bangunan" name="kibf_bangunan" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Bertingkat / Tidak</label>
                              <select class="form-control" name="kibf_bertingkat" required="required">
                                  <option value="" selected>Pilih</option>
                                  <option type = "text" name = "" value = "Ya">Ya</option>
                                  <option type = "text" name = "" value = "Tidak">Tidak</option>
                              </select>
                            </div>
                                              <div class="form-group">
                    <label for="password">Beton / Tidak</label>
                              <select class="form-control" name="kibf_beton" required="required">
                                  <option value="" selected>Pilih</option>
                                  <option type = "text" name = "" value = "Ya">Ya</option>
                                  <option type = "text" name = "" value = "Tidak">Tidak</option>
                              </select>
                            </div>
                  <div class="form-group">
                    <label for="password">Luas (M2)</label>
                      <input type="number" class="form-control" id="password" placeholder="Luas" name="kibf_luas" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Letak / Lokasi Alamat</label>
                      <input type="text" class="form-control" id="password" placeholder="Letak / Lokasi Alamat" name="kibf_letak" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tanggal Dokumen Gedung</label>
                      <input type="date" class="form-control" id="password" placeholder="Tanggal Dokumen Gedung" name="kibf_tgldok" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Dokumen Gedung</label>
                      <input type="number" class="form-control" id="password" placeholder="Nomor Dokumen Gedung" name="kibf_nodok" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tgl, Bln, Thn Mulai</label>
                      <input type="date" class="form-control" id="password" placeholder="Tanggal Mulai" name="kibf_tglmulai" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Status Tanah</label>
                      <input type="text" class="form-control" id="password" placeholder="Status Tanah" name="kibf_status" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Kode Tanah</label>
                      <input type="text" class="form-control" id="password" placeholder="Nomor Kode Tanah" name="kibf_kode" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Asal-usul Pembiayaan</label>
                      <input type="text" class="form-control" id="password" placeholder="Asal-usul Pembiayaan" name="kibf_asal" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nilai Kontak (ribuan Rp)</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Nilai Kontrak (ribuan Rp)" name="kibf_nilai" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                      <input type="text" class="form-control" id="password" placeholder="Keterangan" name="kibf_ket" required="required">
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
                    <th>Nama Barang / Jenis Barang</th>
                    <th>Bangunan (P, SP, D)</th>
                    <th>Bertingkat / Tidak</th>
                    <th>Beton / Tidak</th>
                    <th>Luas (M2)</th>
                    <th>Letak / Lokasi Alamat</th>
                    <th>Tanggal Dokumen Gedung</th>
                    <th>Nomor Dokumen Gedung</th>
                    <th>Tgl, Bln, Thn Mulai</th>
                    <th>Status Tanah</th>
                    <th>Nomor Kode Tanah</th>
                    <th>Asal-usul Pembiayaan</th>
                    <th>Nilai Kontrak (ribuan Rp)</th>
                    <th>Keterangan</th>
                    <th style="width: 20px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($kibf as $key) {
                    $id=$key->kibf_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->kibf_name;?></td>
                    <td><?php echo $key->kibf_bangunan;?></td>
                    <td><?php echo $key->kibf_bertingkat;?></td>
                    <td><?php echo $key->kibf_beton;?></td>
                    <td><?php echo $key->kibf_luas;?></td>
                    <td><?php echo $key->kibf_letak;?></td>
                    <td><?php echo $key->kibf_tgldok;?></td>
                    <td><?php echo $key->kibf_nodok;?></td>
                    <td><?php echo $key->kibf_tglmulai;?></td>
                    <td><?php echo $key->kibf_status;?></td>
                    <td><?php echo $key->kibf_kode;?></td>
                    <td><?php echo $key->kibf_asal;?></td>
                    <td><?php echo $key->kibf_nilai;?></td>
                    <td><?php echo $key->kibf_ket;?></td>
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
                           <?php echo form_open_multipart("Kibf/edit");?>
                             <div class="form-group">
                              <label for="password">Nama Barang / Jenis Barang</label>
                              <input type="text" class="form-control"  value='<?php echo $key->kibf_name; ?>' name="kibf_name" required="required">
                              <input type="hidden" class="form-control"   value='<?php echo $key->kibf_id; ?>' name="kibf_id" required="required" >
                            </div>
                             <div class="form-group">
                    <label for="password">Bangunan (P, SP, D)</label>
                      <input type="text" class="form-control" id="password" value='<?php echo $key->kibf_bangunan; ?>' placeholder="Bangunan" name="kibf_bangunan" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Bertingkat / Tidak</label>
                              <select class="form-control" name="kibf_bertingkat" value='<?php echo $key->kibf_bertingkat; ?>' required="required">
                                  <option value="" selected>Pilih</option>
                                  <option type = "text" name = "" value = "Ya">Ya</option>
                                  <option type = "text" name = "" value = "Tidak">Tidak</option>
                              </select>
                            </div>
                                              <div class="form-group">
                    <label for="password">Beton / Tidak</label>
                              <select class="form-control" name="kibf_beton" value='<?php echo $key->kibf_beton; ?>' required="required">
                                  <option value="" selected>Pilih</option>
                                  <option type = "text" name = "" value = "Ya">Ya</option>
                                  <option type = "text" name = "" value = "Tidak">Tidak</option>
                              </select>
                            </div>
                  <div class="form-group">
                    <label for="password">Luas (M2)</label>
                      <input type="number" class="form-control" value='<?php echo $key->kibf_luas; ?>' id="password" placeholder="Luas" name="kibf_luas" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Letak / Lokasi Alamat</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibf_letak; ?>' id="password" placeholder="Letak / Lokasi Alamat" name="kibf_letak" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tanggal Dokumen Gedung</label>
                      <input type="date" class="form-control" value='<?php echo $key->kibf_tgldok; ?>' id="password" placeholder="Tanggal Dokumen Gedung" name="kibf_tgldok" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Dokumen Gedung</label>
                      <input type="number" class="form-control" value='<?php echo $key->kibf_nodok; ?>' id="password" placeholder="Nomor Dokumen Gedung" name="kibf_nodok" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tgl, Bln, Thn Mulai</label>
                      <input type="date" class="form-control" value='<?php echo $key->kibf_tglmulai; ?>' id="password" placeholder="Tanggal Mulai" name="kibf_tglmulai" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Status Tanah</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibf_status; ?>' id="password" placeholder="Status Tanah" name="kibf_status" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Kode Tanah</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibf_kode; ?>' id="password" placeholder="Nomor Kode Tanah" name="kibf_kode" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Asal-usul Pembiayaan</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibf_asal; ?>' id="password" placeholder="Asal-usul Pembiayaan" name="kibf_asal" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nilai Kontak (ribuan Rp)</label>
                      <input type="number" class="form-control sembarang" value='<?php echo $key->kibf_nilai; ?>' id="password" placeholder="Nilai Kontrak (ribuan Rp)" name="kibf_nilai" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibf_ket; ?>' id="password" placeholder="Keterangan" name="kibf_ket" required="required">
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
                        <?php echo form_open("Kibf/delete");?>
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Hapus Data</h4>
                            </div>
                            <div class="modal-body">
                              <div class="alert alert-danger">Apakah anda yakin ingin menghapus "<b><?php echo $key->kibf_name?></b>" ?</div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" class="form-control" value="<?php echo $key->kibf_id?>" name="kibf_id" required="required">
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