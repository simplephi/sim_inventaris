<html>
<head>
	<title>Cetak PDF</title>
</head>
<body>
<style>
table {
  border-collapse: collapse;
}

table, th {
  border: 1px solid black;
  text-align: center;
}

table, td{
  text-align: center;
    vertical-align: middle;
}
</style>

<h1 style="text-align: center;">Data Pegawai</h1>
<div class="row">
<div class="col-lg-12">

<div class="box">

            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-striped" border="1">
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>Golongan</th>
                  <th>Jabatan</th>
                  <th>Pendidikan terakhir</th>
                  <th style="width: 100px">Kompetensi</th>
                  <th style="width: 140px">Pendidikan Formal</th>
                  <th style="width: 160px">Pendidikan Fungsional</th>
                  <th>Foto</th>

                </tr>
                <?php
                  $no=1;
                  foreach ($pegawai as $key) {

                ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $key->pegawai_name;?></td>
                  <td><?php echo $key->pegawai_nip;?></td>
                  <td><?php echo $key->pegawai_gol;?></td>
                  <td><?php echo $key->pegawai_jabatan;?></td>
                  <td><?php echo $key->pegawai_pen;?></td>
                  <td style="width: 100px"><?php echo $key->pegawai_kompetensi;?></td>
                  <td style="width: 140px"><?php echo $key->pegawai_formal;?></td>
                  <td style="width: 160px"><?php echo $key->pegawai_fungsional;?></td>
                  <td><img src="<?php echo base_url()?>assets/pegawai/<?php echo $key->pegawai_file;?>" width="100" height="100"/></td>
                </tr>
                <?php
                $no++;
                }
                ?>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
  </div>
  </div>
</body>
</html>
