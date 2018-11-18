<div class="content-wrapper">
    <section class="content-header">
      <h1>
      User Sistem Administrasi
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah User"><i class="fa fa-plus"></i> Tambah</button>
      <a href="<?php echo site_url('user')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
                          <i class="fa fa-refresh"></i>
                        </a>
    
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah User Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("User/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama User</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama User" name="user_name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" name="user_password" required="required">
                  </div>
				  <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="user_fullname" placeholder="Nama Lengkap" required="required">
                                  </div>
                  <div class="form-group">
                      <label for="password">Kategori</label>
                    <select class="form-control" name="group_id" required="required">
                        <option>--Pilih Kategori--</option>
                        <?php foreach ($kategori as $key1): ?>
                        <option value="<?php echo $key1->group_id?>" selected ><?php echo $key1->group_name?></option>
                      <?php endforeach ?>
                    </select>
                  </div>


                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" title="Tambah User">Tambah</button>
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
              <h3 class="box-title">Daftar User</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama User</th>
                    <!--th>IP Address</th>
                    <th>Email</th>
                    <th>Dibuat Pada</th-->
                    <th>Nama Lengkap</th>
                    <th>Kategori</th>
                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($kategori1 as $key) {
                    $id=$key->user_id;
                    $id1=$key->group_id;
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->user_name;?></td>
                    <!--td><?php echo $key->user_ipaddress;?></td>
                    <td><?php echo $key->user_email;?></td>
                    <td><?php echo $key->user_created;?></td-->
                    <td><?php echo $key->user_fullname;?></td>
                    <td><?php echo $key->group_name;?></td>

                    <td>

                      <button type="button" class="btn btn-xs btn-success" title="Edit User" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus User" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                   <!-- Modal Edit-->
                      <div class="modal fade" id="edit<?php echo $id?>" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><b>Ubah Data User</b></h4>
                            </div>
                            <div class="modal-body">
                              <?php echo form_open("User/edit");?>
                              <div class="box-body">
                                <div class="nav-tabs-custom">
                                  <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1<?php echo $id?>" data-toggle="tab">User Info</a></li>
                                    <li><a href="#tab_2<?php echo $id?>" data-toggle="tab">Ganti Password</a></li>
                                  </ul>
                                  <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1<?php echo $id?>">
                                      <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control"  value='<?php echo $key->user_name; ?>' name="user_name" required="required" placeholder="Username">
                                        <input type="hidden" class="form-control"  value='<?php echo $key->user_id; ?>' name="user_id" required="required" readonly>
                                      </div>
                                      <div class="form-group">
                                        <label>Fullname</label>
                                        <input type="text" class="form-control"  value='<?php echo $key->user_fullname;?>' name="user_fullname" placeholder="Nama Lengkap" required="required">
                                      </div>
                                      <div class="form-group">
                                <label for="password">Kategori</label>
                              <select class="form-control" name="group_id" required="required">
                                  <option>--Pilih Kategori--</option>
                                  <?php foreach ($kategori as $key1): ?>
                                  <option value="<?php echo $key1->group_id?>"
                                  <?php
                                      if($id1==$key1->group_id){
                                        echo "selected";
                                      }
                                  ?> ><?php echo $key1->group_name?></option>
                                <?php endforeach ?>
                              </select>
                            </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2<?php echo $id?>">
                                      <div class="form-group">
                                        <label>Password Lama</label>
                                        <input type="password" class="form-control"  name="old_password" placeholder="Old Password">
                                        <input type="hidden" class="form-control"  name="user_password" value="<?php echo $key->user_password?>">
                                      </div>
                                      <div class="form-group">
                                        <label>Password Baru</label>
                                        <input type="password" class="form-control"  name="new_password" placeholder="New Password">
                                      </div>
                                      <div class="form-group">
                                        <label>Konfirmasi Password Baru</label>
                                        <input type="password" class="form-control"  name="confirm_password" placeholder="Confirm New Password">
                                      </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                  </div>
                                  <!-- /.tab-content -->
                                </div>
                              </div>
                              <!-- /.box-body -->
                              <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                              </div>
                              <!-- /.box-footer -->
                              <?php echo form_close(); ?>
                            </div>
                          </div>
                        </div>
                      </div>
                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data User</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("User/edit");?>
                             <div class="form-group">
                              <label for="password">User</label>
                              <input type="hidden" class="form-control" value='<?php echo $key->user_id; ?>' name="user_id" required="required" readonly>
                                <input type="text" class="form-control"  value='<?php echo $key->user_name; ?>' name="user_name" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="user_password" value='<?php echo $key->user_password; ?>' required="required">
                            </div>
							<div class="form-group">
                                        <label>Fullname</label>
                                        <input type="text" class="form-control"  value='<?php echo $key->user_fullname;?>' name="user_fullname" placeholder="Nama Lengkap" required="required">
                                      </div>
                            <div class="form-group">
                                <label for="password">Kategori</label>
                              <select class="form-control" name="group_id" required="required">
                                  <option>--Pilih Kategori--</option>
                                  <?php foreach ($kategori as $key1): ?>
                                  <option value="<?php echo $key1->group_id?>"
                                  <?php
                                      if($id1==$key1->group_id){
                                        echo "selected";
                                      }
                                  ?> ><?php echo $key1->group_name?></option>
                                <?php endforeach ?>
                              </select>
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
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Hapus User <?php echo $key->user_name ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus User ini?</div>
                        </div>
                        <div class="modal-footer">
                        <?php echo form_open("User/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->user_id?>" name="user_id" required="required">
                          <button type="submit" class="btn btn-danger">&nbsp;Ya</button>
                          <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Batal</button>
                        <?php echo form_close(); ?>
                      </div>
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
