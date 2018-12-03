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

<h1 style="text-align: center;">Data Surat Masuk</h1>
<div class="row">
<div class="col-lg-12">

<div class="box">

            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped" border="1">
                <tr>
                  <th>No.</th>
                  <th>Pengirim</th>
                  <th>Tanggal Surat</th>
                  <th>Agenda Masuk</th>
                  <th>No. Surat</th>
                  <th style="width: 100px">Perihal</th>
                  <th>File</th>
                  <th style="width: 100px">Keterangan</th>

                </tr>
                <?php
                  $no=1;
                  foreach ($masuk as $key) {

                ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $key->masuk_pengirim;?></td>
                  <td><?php echo $key->masuk_tanggal;?></td>
                  <td><?php echo $key->masuk_agenda;?></td>
                  <td><?php echo $key->masuk_nomor;?></td>
                  <td style="width: 100px"><?php echo $key->masuk_perihal;?></td>
                  <td><?php echo $key->masuk_berkas;?></td>
                  <td style="width: 100px"><?php echo $key->masuk_keterangan;?></td>
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
