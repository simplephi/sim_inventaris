  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Data Surat Keluar
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Data"><i class="fa fa-plus"></i> Tambah</button>
    <a href="<?php echo site_url('keluar')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
                          <i class="fa fa-refresh"></i>
                        </a>
                                                <a href="<?php echo site_url('Keluar/cetak')?>" class="btn btn-white btn-warning btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Cetak">
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
              <?php echo form_open_multipart("Keluar/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Penerima</label>
                      <input type="text" class="form-control" id="password" placeholder="Penerima" name="keluar_penerima" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tanggal Surat</label>
                      <input type="date" class="form-control" id="password" placeholder="Tanggal" name="keluar_tanggal" >
                  </div>
                  <div class="form-group">
                    <label for="password">keluar Agenda</label>
                      <input type="date" class="form-control" id="password" placeholder="Tanggal" name="keluar_agenda" >
                  </div>
                  <div class="form-group">
                    <label for="password">No. Surat</label>
                      <input type="text" class="form-control" id="password" placeholder="Nomor Surat" name="keluar_nomor" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Perihal</label>
                      <input type="text" class="form-control" id="password" placeholder="Perihal" name="keluar_perihal" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Berkas</label>
                    <input type="file" class="form-control" id="password" placeholder="Berkas" name="keluar_berkas">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                      <input type="text" class="form-control" id="password" placeholder="Keterangan" name="keluar_keterangan" required="required">
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
              <h3 class="box-title">Data Surat Keluar</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Penerima</th>
                    <th>Tanggal Surat</th>
                    <th>Masuk Agenda</th>
                    <th>No. Surat</th>
                    <th>Perihal</th>
                    <th>Berkas</th>
                    <th>Keterangan</th>
                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($keluar as $key) {
                    $id=$key->keluar_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->keluar_penerima;?></td>
                    <td><?php echo $key->keluar_tanggal;?></td>
                    <td><?php echo $key->keluar_agenda;?></td>
                    <td><?php echo $key->keluar_nomor;?></td>
                    <td><?php echo $key->keluar_perihal;?></td>
          <td><a href="<?php echo base_url()?>assets/keluar/<?php echo $key->keluar_berkas;?>"><?php echo $key->keluar_berkas;?></a></td>
          <td><?php echo $key->keluar_keterangan;?></td>
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
                           <?php echo form_open_multipart("Keluar/edit");?>
                             <div class="form-group">
                              <label for="password">Penerima</label>
                              <input type="text" class="form-control"  value='<?php echo $key->keluar_penerima; ?>' name="keluar_penerima" required="required">
                              <input type="hidden" class="form-control"   value='<?php echo $key->keluar_id; ?>' name="keluar_id" required="required" >
                              <input type="hidden" class="form-control" value='<?php echo $key->keluar_berkas; ?>' name="keluar_berkas" required="required" readonly>
                            </div>
                            <div class="form-group">
                              <label for="password">Tanggal Surat</label>
                                <input type="date" class="form-control" id="password" placeholder="Tanggal" name="keluar_tanggal" value='<?php echo $key->keluar_tanggal; ?>' >
                            </div>
                            <div class="form-group">
                              <label for="password">Masuk Agenda</label>
                                <input type="date" class="form-control" id="password" placeholder="Tanggal" name="keluar_agenda" value='<?php echo $key->keluar_agenda; ?>' >
                            </div>
                            <div class="form-group">
                              <label for="password">No. Surat</label>
                              <input type="text" class="form-control"  value='<?php echo $key->keluar_nomor; ?>' name="keluar_nomor" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Perihal</label>
                              <input type="text" class="form-control"  value='<?php echo $key->keluar_perihal; ?>' name="keluar_perihal" required="required">
                            </div>
              <div class="form-group">
                              <label for="password">Berkas</label>
                                <input type="file" class="form-control" id="password" placeholder="Berkas"  name="keluar_berkas" >
                            </div>
                            <div class="form-group">
                              <label for="password">Keterangan</label>
                              <input type="text" class="form-control"  value='<?php echo $key->keluar_keterangan; ?>' name="keluar_keterangan" required="required">
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
                        <?php echo form_open("Keluar/delete");?>
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Hapus Data</h4>
                            </div>
                            <div class="modal-body">
                              <div class="alert alert-danger">Apakah anda yakin ingin menghapus surat untuk "<b><?php echo $key->keluar_penerima?></b>" ?</div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" class="form-control" value="<?php echo $key->keluar_id?>" name="keluar_id" required="required">
                              <input type="hidden" class="form-control" value="<?php echo $key->keluar_berkas?>" name="keluar_berkas" required="required">
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