  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Jumlah Mobil Box
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Data"><i class="fa fa-plus"></i> Tambah</button>
    <a href="<?php echo site_url('angkutanbarang2')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
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
              <?php echo form_open_multipart("Angkutanbarang2/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama</label>
                      <input type="text" class="form-control" id="password" placeholder="Judul" name="angkutanbarang2_name" required="required">
                  </div>
        <div class="form-group">
                    <label for="password">Input</label>
                      <input type="text" class="form-control" id="password" placeholder="Input" name="angkutanbarang2_input" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Verifikasi</label>
                              <select class="form-control" name="angkutanbarang2_verifikasi" required="required">
                                  <option placeholder="Verifikasi"></option>
                                  <option type = "text" name = "" value = "Ya">Ya</option>
                                  <option type = "text" name = "" value = "Tidak">Tidak</option>
                              </select>
                            </div>
                  <div class="form-group">
                    <label for="password">Satuan</label>
                              <select class="form-control" name="angkutanbarang2_satuan" required="required">
                                  <option placeholder="Satuan"></option>
                                  <option type = "text" name = "" value = "Unit">Unit</option>
                                  <option type = "text" name = "" value = "Orang">Orang</option>
                                  <option type = "text" name = "" value = "Perusahaan">Perusahaan</option>
                                  <option type = "text" name = "" value = "Ton">Ton</option>
                              </select>
                            </div>
                  <div class="form-group">
                    <label for="password">Sumber Data</label>
                      <input type="text" class="form-control" id="password" placeholder="Sumber Data" name="angkutanbarang2_sumber" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">File</label>
                    <input type="file" class="form-control" id="password" placeholder="File" name="angkutanbarang2_file">
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
              <h3 class="box-title">Jumlah Mobil Box</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama</th>
                    <th>Input</th>
                    <th>Verifikasi</th>
                    <th>Satuan</th>
                    <th>Sumber Data</th>
                    <th>File</th>

                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($angkutanbarang2 as $key) {
                    $id=$key->angkutanbarang2_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->angkutanbarang2_name;?></td>
                    <td><?php echo $key->angkutanbarang2_input;?></td>
                    <td><?php echo $key->angkutanbarang2_verifikasi;?></td>
                    <td><?php echo $key->angkutanbarang2_satuan;?></td>
                    <td><?php echo $key->angkutanbarang2_sumber;?></td>
          <td><a href="<?php echo base_url()?>assets/angkutanbarang2/<?php echo $key->angkutanbarang2_file;?>"><?php echo $key->angkutanbarang2_file;?></a></td>
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
                           <?php echo form_open_multipart("Angkutanbarang2/edit");?>
                             <div class="form-group">
                              <label for="password">Judul</label>
                              <input type="text" class="form-control"  value='<?php echo $key->angkutanbarang2_name; ?>' name="angkutanbarang2_name" required="required">
                              <input type="hidden" class="form-control"   value='<?php echo $key->angkutanbarang2_id; ?>' name="angkutanbarang2_id" required="required" >
                              <input type="hidden" class="form-control" value='<?php echo $key->angkutanbarang2_file; ?>' name="angkutanbarang2_file" required="required" readonly>
                            </div>
                            <div class="form-group">
                              <label for="password">Input</label>
                              <input type="text" class="form-control"  value='<?php echo $key->angkutanbarang2_input; ?>' name="angkutanbarang2_input" required="required">
                            </div>
                            <div class="form-group">
                    <label for="password">Verifikasi</label>
                              <select class="form-control" name="angkutanbarang2_verifikasi" value='<?php echo $key->angkutanbarang2_verifikasi; ?>' required="required">
                                  <option placeholder="Verifikasi"></option>
                                  <option type = "text" name = "" value = "Ya">Ya</option>
                                  <option type = "text" name = "" value = "Tidak">Tidak</option>
                              </select>
                            </div>
                            <div class="form-group">
                    <label for="password">Satuan</label>
                              <select class="form-control" name="angkutanbarang2_satuan" value='<?php echo $key->angkutanbarang2_satuan; ?>'required="required">
                                  <option placeholder="Satuan"></option>
                                  <option type = "text" name = "" value = "Unit">Unit</option>
                                  <option type = "text" name = "" value = "Orang">Orang</option>
                                  <option type = "text" name = "" value = "Perusahaan">Perusahaan</option>
                                  <option type = "text" name = "" value = "Ton">Ton</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="password">Sumber Data</label>
                              <input type="text" class="form-control"  value='<?php echo $key->angkutanbarang2_sumber; ?>' name="angkutanbarang2_sumber" required="required">
                            </div>

              <div class="form-group">
                              <label for="password">File</label>
                                <input type="file" class="form-control" id="password" placeholder="File"  name="angkutanbarang2_file" >
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
                        <?php echo form_open("Angkutanbarang2/delete");?>
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Hapus Data</h4>
                            </div>
                            <div class="modal-body">
                              <div class="alert alert-danger">Apakah anda yakin ingin menghapus "<b><?php echo $key->angkutanbarang2_name?></b>" ?</div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" class="form-control" value="<?php echo $key->angkutanbarang2_id?>" name="angkutanbarang2_id" required="required">
                              <input type="hidden" class="form-control" value="<?php echo $key->angkutanbarang2_file?>" name="angkutanbarang2_file" required="required">
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