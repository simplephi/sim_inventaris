  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Kartu Inventaris Barang (KIB) B Peralatan & Mesin
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Data"><i class="fa fa-plus"></i> Tambah</button>
    <a href="<?php echo site_url('kibb')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
                          <i class="fa fa-refresh"></i>
                        </a>
    <a href="<?php echo site_url('Kibb/cetak')?>" class="btn btn-white btn-warning btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Cetak">
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
              <?php echo form_open_multipart("Kibb/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Kode barang</label>
                      <input type="text" class="form-control" id="password" placeholder="Kode Barang" name="kibb_kode" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Jenis Barang / Nama Barang</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama Barang / Jenis Barang" name="kibb_name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Register</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Nomor Register" name="kibb_noreg" required="required">
                  </div>
        <div class="form-group">
                    <label for="password">Merk / Type</label>
                      <input type="text" class="form-control" id="password" placeholder="Merk / Type" name="kibb_type" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Ukuran / CC</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Ukuran / CC" name="kibb_cc" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Bahan</label>
                      <input type="text" class="form-control" id="password" placeholder="Bahan" name="kibb_bahan" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tahun Pembelian</label>
                      <input type="number" class="form-control sembarang" min="1000" max="3000" id="sembarang" placeholder="Tahun Pembelian" name="kibb_tahun" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Pabrik</label>
                      <input type="text" class="form-control" id="password" placeholder="Nomor Pabrik" name="kibb_pabrik" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Rangka</label>
                      <input type="text" class="form-control" id="password" placeholder="Nomor Rangka" name="kibb_rangka" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Mesin</label>
                      <input type="text" class="form-control" id="password" placeholder="Nomor Mesin" name="kibb_mesin" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Polisi</label>
                      <input type="text" class="form-control" id="password" placeholder="Nomor Polisi" name="kibb_polisi" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor BPKB</label>
                      <input type="text" class="form-control" id="password" placeholder="Nomor BPKB" name="kibb_bpkb" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Asal-usul</label>
                      <input type="text" class="form-control" id="password" placeholder="Asal-usul" name="kibb_asal" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Harga(ribuan Rp)</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Harga (ribuan Rp)" name="kibb_harga" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                      <input type="text" class="form-control" id="password" placeholder="Keterangan" name="kibb_ket" required="required">
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
              <h3 class="box-title">Kartu Inventaris Barang (KIB) B Peralatan & Mesin</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Kode Barang</th>
                    <th>Jenis Barang / Nama Barang</th>
                    <th>Nomor Register</th>
                    <th>Merk / Type</th>
                    <th>Ukuran / CC</th>
                    <th>Bahan</th>
                    <th>Tahun Pembelian</th>
                    <th>Nomor Pabrik</th>
                    <th>Nomor Rangka</th>
                    <th>Nomor Mesin</th>
                    <th>Nomor Polisi</th>
                    <th>Nomor BPKB</th>
                    <th>Asal-usul</th>
                    <th>Harga (ribuan Rp)</th>
                    <th>Keterangan</th>
                    <th style="width: 20px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($kibb as $key) {
                    $id=$key->kibb_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->kibb_kode;?></td>
                    <td><?php echo $key->kibb_name;?></td>
                    <td><?php echo $key->kibb_noreg;?></td>
                    <td><?php echo $key->kibb_type;?></td>
                    <td><?php echo $key->kibb_cc;?></td>
                    <td><?php echo $key->kibb_bahan;?></td>
                    <td><?php echo $key->kibb_tahun;?></td>
                    <td><?php echo $key->kibb_pabrik;?></td>
                    <td><?php echo $key->kibb_rangka;?></td>
                    <td><?php echo $key->kibb_mesin;?></td>
                    <td><?php echo $key->kibb_polisi;?></td>
                    <td><?php echo $key->kibb_bpkb;?></td>
                    <td><?php echo $key->kibb_asal;?></td>
                    <td><?php echo $key->kibb_harga;?></td>
                    <td><?php echo $key->kibb_ket;?></td>
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
                           <?php echo form_open_multipart("kibb/edit");?>
                           <div class="form-group">
                    <label for="password">Kode barang</label>
                      <input type="text" class="form-control" id="password" value='<?php echo $key->kibb_kode; ?>' placeholder="Kode Barang" name="kibb_kode" required="required">
                  </div>
                             <div class="form-group">
                              <label for="password">Jenis Barang / Nama Barang</label>
                              <input type="text" class="form-control"  value='<?php echo $key->kibb_name; ?>' name="kibb_name" required="required">
                              <input type="hidden" class="form-control"   value='<?php echo $key->kibb_id; ?>' name="kibb_id" required="required" >
                            </div>
                             <div class="form-group">
                    <label for="password">Nomor Register</label>
                      <input type="number" class="form-control" value='<?php echo $key->kibb_noreg; ?>' id="password" placeholder="Nomor Register" name="kibb_noreg" required="required">
                  </div>
        <div class="form-group">
                    <label for="password">Merk / Type</label>
                      <input type="text" class="form-control" id="password" value='<?php echo $key->kibb_type; ?>' placeholder="Merk / Type" name="kibb_type" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Ukuran / CC</label>
                      <input type="number" class="form-control" value='<?php echo $key->kibb_cc; ?>' id="password" placeholder="Ukuran / CC" name="kibb_cc" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Bahan</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibb_bahan; ?>' id="password" placeholder="Bahan" name="kibb_bahan" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tahun Pembelian</label>
                      <input type="number" class="form-control" value='<?php echo $key->kibb_tahun; ?>' min="1000" max="3000" id="sembarang" placeholder="Tahun Pembelian" name="kibb_tahun" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Pabrik</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibb_pabrik; ?>' id="password" placeholder="Nomor Pabrik" name="kibb_pabrik" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Rangka</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibb_rangka; ?>' id="password" placeholder="Nomor Rangka" name="kibb_rangka" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Mesin</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibb_mesin; ?>' id="password" placeholder="Nomor Mesin" name="kibb_mesin" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Polisi</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibb_polisi; ?>' id="password" placeholder="Nomor Polisi" name="kibb_polisi" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor BPKB</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibb_bpkb; ?>' id="password" placeholder="Nomor BPKB" name="kibb_bpkb" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Asal-usul</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibb_asal; ?>' id="password" placeholder="Asal-usul" name="kibb_asal" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Harga(ribuan Rp)</label>
                      <input type="number" class="form-control sembarang" value='<?php echo $key->kibb_harga; ?>' id="password" placeholder="Harga (ribuan Rp)" name="kibb_harga" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                      <input type="text" class="form-control" value='<?php echo $key->kibb_ket; ?>' id="password" placeholder="Keterangan" name="kibb_ket" required="required">
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
                        <?php echo form_open("kibb/delete");?>
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Hapus Data</h4>
                            </div>
                            <div class="modal-body">
                              <div class="alert alert-danger">Apakah anda yakin ingin menghapus "<b><?php echo $key->kibb_name?></b>" ?</div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" class="form-control" value="<?php echo $key->kibb_id?>" name="kibb_id" required="required">
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