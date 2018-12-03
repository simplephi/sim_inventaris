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

<h1 style="text-align: center;">Data KIB C Gedung & Bangunan</h1>
<div class="row">
<div class="col-lg-12">

<div class="box">

            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-striped" border="1">
                <tr>
                    <th>No</th>
                    <th style="width: 80px">Jenis Barang / Nama Barang</th>
                    <th style="width: 60px">Kode Barang</th>
                    <th style="width: 50px">Nomor Register</th>
                    <th style="width: 70px">Kondisi Bangunan (B, KB, RB)</th>
                    <th style="width: 60px">Bertingkat / Tidak</th>
                    <th style="width: 40px">Beton / Tidak</th>
                    <th style="width: 40px">Luas Lantai (M2)</th>
                    <th style="width: 80px">Letak / Lokasi Alamat</th>
                    <th style="width: 70px">Tanggal Dokumen Gedung</th>
                    <th style="width: 70px">Nomor Dokumen Gedung</th>
                    <th style="width: 40px">Luas (M2)</th>
                    <th style="width: 40px">Status Tanah</th>
                    <th style="width: 40px">Nomor Kode Tanah</th>
                    <th style="width: 70px">Asal-usul</th>
                    <th style="width: 70px">Harga (ribuan Rp)</th>
                    <th style="width: 70px">Keterangan</th>

                </tr>
                <?php
                  $no=1;
                  foreach ($kibc as $key) {

                ?>
                <tr>

                    <td><?php echo $no; ?></td>
                    <td style="width: 80px"><?php echo $key->kibc_name;?></td>
                    <td style="width: 60px"><?php echo $key->kibc_kodeb;?></td>
                    <td style="width: 50px"><?php echo $key->kibc_noreg;?></td>
                    <td style="width: 70px"><?php echo $key->kibc_bangunan;?></td>
                    <td style="width: 60px"><?php echo $key->kibc_bertingkat;?></td>
                    <td style="width: 40px"><?php echo $key->kibc_beton;?></td>
                    <td style="width: 40px"><?php echo $key->kibc_lantai;?></td>
                    <td style="width: 80px"><?php echo $key->kibc_letak;?></td>
                    <td style="width: 70px"><?php echo $key->kibc_tgldok;?></td>
                    <td style="width: 70px"><?php echo $key->kibc_nodok;?></td>
                    <td style="width: 40px"><?php echo $key->kibc_luas;?></td>
                    <td style="width: 40px"><?php echo $key->kibc_status;?></td>
                    <td style="width: 40px"><?php echo $key->kibc_kodet;?></td>
                    <td style="width: 70px"><?php echo $key->kibc_asal;?></td>
                    <td style="width: 70px"><?php echo $key->kibc_harga;?></td>
                    <td style="width: 70px"><?php echo $key->kibc_ket;?></td>
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
