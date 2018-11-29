  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Data Pegawai
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Data"><i class="fa fa-plus"></i> Tambah</button>
    <a href="<?php echo site_url('pegawai')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
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
              <?php echo form_open_multipart("Pegawai/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama" name="pegawai_name" required="required">
                  </div>
        <div class="form-group">
                    <label for="password">Nip</label>
                      <input type="text" class="form-control" id="password" placeholder="Nip" name="pegawai_nip" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Golongan</label>
                      <input type="text" class="form-control" id="password" placeholder="Golongan" name="pegawai_gol" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Kompetensi</label>
                              <select class="form-control" name="pegawai_kompetensi" required="required">
                                  <option placeholder="Verifikasi"></option>
                                  <option type = "text" name = "" value = "Penguji Kendaraan Bermotor">Penguji Kendaraan Bermotor</option>
                                  <option type = "text" name = "" value = "Manajemen Rekayasa Lalu Lintas">Manajemen Rekayasa Lalu Lintas</option>
                                  <option type = "text" name = "" value = "Trafick Light">Trafick Light</option>
                                  <option type = "text" name = "" value = "Pengelolaan Terminal">Pengelolaan Terminal</option>
                                  <option type = "text" name = "" value = "Penyidik PNS">Penyidik PNS</option>
                                  <option type = "text" name = "" value = "Analisa Data LLAJ">Analisa Data LLAJ</option>
                                  <option type = "text" name = "" value = "Manajemen Angkutan Umum">Manajemen Angkutan Umum</option>
                                  <option type = "text" name = "" value = "Manajemen Transportasi Perkotaan">Manajemen Transportasi Perkotaan</option>
                                  <option type = "text" name = "" value = "Analisa Dampak Lalu Lintas">Analisa Dampak Lalu Lintas</option>
                                  <option type = "text" name = "" value = "Pengawasan Lalu Lintas">Pengawasan Lalu Lintas</option>
                                  <option type = "text" name = "" value = "Orientasi Lalu Lintas">Orientasi Lalu Lintas</option>
                                  <option type = "text" name = "" value = "Parkir">Parkir</option>
                                  <option type = "text" name = "" value = "Administrasi Keuangan">Administrasi Keuangan</option>
                                  <option type = "text" name = "" value = "Administrasi Kepegawaian">Administrasi Kepegawaian</option>
                              </select>
                            </div>
                  <div class="form-group">
                    <label for="password">Pendidikann Formal</label>
                              <select class="form-control" name="pegawai_formal" required="required">
                                  <option placeholder="Satuan"></option>
                                  <option type = "text" name = "" value = "Diklat I">Diklat I</option>
                                  <option type = "text" name = "" value = "Diklat II">Diklat II</option>
                                  <option type = "text" name = "" value = "Diklat III">Diklat III</option>
                                  <option type = "text" name = "" value = "Diklat IV">Diklat IV</option>
                              </select>
                            </div>
                            <div class="form-group">
                    <label for="password">Pendidikann Fungsional</label>
                              <select class="form-control" name="pegawai_satuan" required="required">
                                  <option placeholder="Satuan"></option>
                                  <option type = "text" name = "" value = "Penguji Kendaraan Bermotor">Penguji Kendaraan Bermotor</option>
                                  <option type = "text" name = "" value = "Perencanaan">Perencanaan</option>
                                  <option type = "text" name = "" value = "Pengarsipan">Pengarsipan</option>
                              </select>
                            </div>
                  <div class="form-group">
                    <label for="password">Foto</label>
                    <input type="file" class="form-control" id="password" placeholder="Foto" name="pegawai_file">
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
              <h3 class="box-title">Data Pegawai</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama</th>
                    <th>Nip</th>
                    <th>Golongan</th>
                    <th>Kompetensi</th>
                    <th>Pendidikan Formal</th>
                    <th>Pendidikan Fungsional</th>
                    <th>Foto</th>

                    <th style="width: 60px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($pegawai as $key) {
                    $id=$key->pegawai_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->pegawai_name;?></td>
                    <td><?php echo $key->pegawai_nip;?></td>
                    <td><?php echo $key->pegawai_gol;?></td>
                    <td><?php echo $key->pegawai_kompetensi;?></td>
                    <td><?php echo $key->pegawai_formal;?></td>
                    <td><?php echo $key->pegawai_fungsional;?></td>
          <td><a href="<?php echo base_url()?>assets/pegawai/<?php echo $key->pegawai_file;?>"><?php echo $key->pegawai_file;?></a></td>
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
                           <?php echo form_open_multipart("Pegawai/edit");?>
                             <div class="form-group">
                              <label for="password">Nama</label>
                              <input type="text" class="form-control"  value='<?php echo $key->pegawai_name; ?>' name="pegawai_name" required="required">
                              <input type="hidden" class="form-control"   value='<?php echo $key->pegawai_id; ?>' name="pegawai_id" required="required" >
                              <input type="hidden" class="form-control" value='<?php echo $key->pegawai_file; ?>' name="pegawai_file" required="required" readonly>
                            </div>
                            <div class="form-group">
                    <label for="password">Nip</label>
                      <input type="text" class="form-control" id="password" value='<?php echo $key->pegawai_nip; ?>' name="pegawai_nip"  required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Golongan</label>
                      <input type="text" class="form-control" id="password" value='<?php echo $key->pegawai_gol; ?>' name="pegawai_gol" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Kompetensi</label>
                              <select class="form-control" name="pegawai_kompetensi" value='<?php echo $key->pegawai_kompetensi; ?>' required="required">
                                  <option placeholder="Verifikasi"></option>
                                  <option type = "text" name = "" value = "Penguji Kendaraan Bermotor">Penguji Kendaraan Bermotor</option>
                                  <option type = "text" name = "" value = "Manajemen Rekayasa Lalu Lintas">Manajemen Rekayasa Lalu Lintas</option>
                                  <option type = "text" name = "" value = "Trafick Light">Trafick Light</option>
                                  <option type = "text" name = "" value = "Pengelolaan Terminal">Pengelolaan Terminal</option>
                                  <option type = "text" name = "" value = "Penyidik PNS">Penyidik PNS</option>
                                  <option type = "text" name = "" value = "Analisa Data LLAJ">Analisa Data LLAJ</option>
                                  <option type = "text" name = "" value = "Manajemen Angkutan Umum">Manajemen Angkutan Umum</option>
                                  <option type = "text" name = "" value = "Manajemen Transportasi Perkotaan">Manajemen Transportasi Perkotaan</option>
                                  <option type = "text" name = "" value = "Analisa Dampak Lalu Lintas">Analisa Dampak Lalu Lintas</option>
                                  <option type = "text" name = "" value = "Pengawasan Lalu Lintas">Pengawasan Lalu Lintas</option>
                                  <option type = "text" name = "" value = "Orientasi Lalu Lintas">Orientasi Lalu Lintas</option>
                                  <option type = "text" name = "" value = "Parkir">Parkir</option>
                                  <option type = "text" name = "" value = "Administrasi Keuangan">Administrasi Keuangan</option>
                                  <option type = "text" name = "" value = "Administrasi Kepegawaian">Administrasi Kepegawaian</option>
                              </select>
                            </div>
                  <div class="form-group">
                    <label for="password">Pendidikann Formal</label>
                              <select class="form-control" name="pegawai_formal" value='<?php echo $key->pegawai_formal; ?>' required="required">
                                  <option placeholder="Satuan"></option>
                                  <option type = "text" name = "" value = "Diklat I">Diklat I</option>
                                  <option type = "text" name = "" value = "Diklat II">Diklat II</option>
                                  <option type = "text" name = "" value = "Diklat III">Diklat III</option>
                                  <option type = "text" name = "" value = "Diklat IV">Diklat IV</option>
                              </select>
                            </div>
                            <div class="form-group">
                    <label for="password">Pendidikann Fungsional</label>
                              <select class="form-control" value='<?php echo $key->pegawai_input; ?>' name="pegawai_fungsional" required="required">
                                  <option placeholder="Satuan"></option>
                                  <option type = "text" name = "" value = "Penguji Kendaraan Bermotor">Penguji Kendaraan Bermotor</option>
                                  <option type = "text" name = "" value = "Perencanaan">Perencanaan</option>
                                  <option type = "text" name = "" value = "Pengarsipan">Pengarsipan</option>
                              </select>
                            </div>
                  <div class="form-group">
                    <label for="password">Foto</label>
                    <input type="file" class="form-control" id="password" placeholder="Foto" name="pegawai_file">
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
                        <?php echo form_open("Pegawai/delete");?>
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Hapus Data</h4>
                            </div>
                            <div class="modal-body">
                              <div class="alert alert-danger">Apakah anda yakin ingin menghapus "<b><?php echo $key->pegawai_name?></b>" ?</div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" class="form-control" value="<?php echo $key->pegawai_id?>" name="pegawai_id" required="required">
                              <input type="hidden" class="form-control" value="<?php echo $key->pegawai_file?>" name="pegawai_file" required="required">
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