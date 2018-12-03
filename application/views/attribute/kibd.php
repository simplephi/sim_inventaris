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

<h1 style="text-align: center;">Data KIB D Jalan, Irigasi & Jaringan</h1>
<div class="row">
<div class="col-lg-12">

<div class="box">

            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-striped" border="1">
                <tr>
                    <th>No</th>
                    <th style="width: 60px">Jenis Barang / Nama Barang</th>
                    <th style="width: 60px">Kode Barang</th>
                    <th style="width: 60px">Nomor Register</th>
                    <th style="width: 70px">Konstruksi</th>
                    <th style="width: 50px">Panjang (Km)</th>
                    <th style="width: 40px">Lebar (M)</th>
                    <th style="width: 40px">Luas (M2)</th>
                    <th style="width: 60px">Letak / Lokasi Alamat</th>
                    <th style="width: 70px">Tanggal Dokumen Gedung</th>
                    <th style="width: 60px">Nomor Dokumen Gedung</th>
                    <th style="width: 60px">Status Tanah</th>
                    <th style="width: 60px">Nomor Kode Tanah</th>
                    <th style="width: 60px">Asal-usul</th>
                    <th style="width: 60px">Harga (ribuan Rp)</th>
                    <th style="width: 60px">Kondisi (B, KB, RB)</th>
                    <th style="width: 70px">Keterangan</th>

                </tr>
                <?php
                  $no=1;
                  foreach ($kibd as $key) {

                ?>
                <tr>

                    <td><?php echo $no; ?></td>
                    <td style="width: 60px"><?php echo $key->kibd_name;?></td>
                    <td style="width: 60px"><?php echo $key->kibd_kodeb;?></td>
                    <td style="width: 60px"><?php echo $key->kibd_noreg;?></td>
                    <td style="width: 70px"><?php echo $key->kibd_konstruksi;?></td>
                    <td style="width: 50px"><?php echo $key->kibd_panjang;?></td>
                    <td style="width: 40px"><?php echo $key->kibd_lebar;?></td>
                    <td style="width: 40px"><?php echo $key->kibd_luas;?></td>
                    <td style="width: 60px"><?php echo $key->kibd_letak;?></td>
                    <td style="width: 70px"><?php echo $key->kibd_tgldok;?></td>
                    <td style="width: 60px"><?php echo $key->kibd_nodok;?></td>
                    <td style="width: 60px"><?php echo $key->kibd_status;?></td>
                    <td style="width: 60px"><?php echo $key->kibd_kodet;?></td>
                    <td style="width: 60px"><?php echo $key->kibd_asal;?></td>
                    <td style="width: 60px"><?php echo $key->kibd_harga;?></td>
                    <td style="width: 60px"><?php echo $key->kibd_bangunan;?></td>
                    <td style="width: 70px"><?php echo $key->kibd_ket;?></td>
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
