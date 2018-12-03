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

<h1 style="text-align: center;">Data KIB B Peralatan & Mesin</h1>
<div class="row">
<div class="col-lg-12">

<div class="box">

            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-striped" border="1">
                <tr>
                  <th>No</th>
                    <th style="width: 60px">Kode Barang</th>
                    <th style="width: 80px">Jenis Barang / Nama Barang</th>
                    <th style="width: 60px">Nomor Register</th>
                    <th style="width: 60px">Merk / Type</th>
                    <th style="width: 60px">Ukuran / CC</th>
                    <th style="width: 60px">Bahan</th>
                    <th style="width: 70px">Tahun Pembelian</th>
                    <th style="width: 60px">Nomor Pabrik</th>
                    <th style="width: 60px">Nomor Rangka</th>
                    <th style="width: 60px">Nomor Mesin</th>
                    <th style="width: 60px">Nomor Polisi</th>
                    <th style="width: 60px">Nomor BPKB</th>
                    <th style="width: 80px">Asal-usul</th>
                    <th style="width: 60px">Harga (ribuan Rp)</th>
                    <th style="width: 80px">Keterangan</th>

                </tr>
                <?php
                  $no=1;
                  foreach ($kibb as $key) {

                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                    <td style="width: 60px"><?php echo $key->kibb_kode;?></td>
                    <td style="width: 80px"><?php echo $key->kibb_name;?></td>
                    <td style="width: 60px"><?php echo $key->kibb_noreg;?></td>
                    <td style="width: 60px"><?php echo $key->kibb_type;?></td>
                    <td style="width: 60px"><?php echo $key->kibb_cc;?></td>
                    <td style="width: 60px"><?php echo $key->kibb_bahan;?></td>
                    <td style="width: 70px"><?php echo $key->kibb_tahun;?></td>
                    <td style="width: 60px"><?php echo $key->kibb_pabrik;?></td>
                    <td style="width: 60px"><?php echo $key->kibb_rangka;?></td>
                    <td style="width: 60px"><?php echo $key->kibb_mesin;?></td>
                    <td style="width: 60px"><?php echo $key->kibb_polisi;?></td>
                    <td style="width: 60px"><?php echo $key->kibb_bpkb;?></td>
                    <td style="width: 80px"><?php echo $key->kibb_asal;?></td>
                    <td style="width: 60px"><?php echo $key->kibb_harga;?></td>
                    <td style="width: 80px"><?php echo $key->kibb_ket;?></td>
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
