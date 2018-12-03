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

<h1 style="text-align: center;">Data KIB F Konstruksi Dalam Pengerjaan</h1>
<div class="row">
<div class="col-lg-12">

<div class="box">

            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-striped" border="1">
                <tr>
                    <th>No</th>
                    <th style="width: 80px">Nama Barang / Jenis Barang</th>
                    <th style="width: 65px">Bangunan (P, SP, D)</th>
                    <th style="width: 65px">Bertingkat / Tidak</th>
                    <th style="width: 50px">Beton / Tidak</th>
                    <th style="width: 40px">Luas (M2)</th>
                    <th style="width: 80px">Letak / Lokasi Alamat</th>
                    <th style="width: 70px">Tanggal Dokumen Gedung</th>
                    <th style="width: 60px">Nomor Dokumen Gedung</th>
                    <th style="width: 70px">Tgl, Bln, Thn Mulai</th>
                    <th style="width: 60px">Status Tanah</th>
                    <th style="width: 60px">Nomor Kode Tanah</th>
                    <th style="width: 80px">Asal-usul Pembiayaan</th>
                    <th style="width: 100px">Nilai Kontrak (ribuan Rp)</th>
                    <th style="width: 70px">Keterangan</th>

                </tr>
                <?php
                  $no=1;
                  foreach ($kibf as $key) {

                ?>
                <tr>

                    <td><?php echo $no; ?></td>
                    <td style="width: 80px"><?php echo $key->kibf_name;?></td>
                    <td style="width: 65px"><?php echo $key->kibf_bangunan;?></td>
                    <td style="width: 65px"><?php echo $key->kibf_bertingkat;?></td>
                    <td style="width: 50px"><?php echo $key->kibf_beton;?></td>
                    <td style="width: 40px"><?php echo $key->kibf_luas;?></td>
                    <td style="width: 80px"><?php echo $key->kibf_letak;?></td>
                    <td style="width: 70px"><?php echo $key->kibf_tgldok;?></td>
                    <td style="width: 60px"><?php echo $key->kibf_nodok;?></td>
                    <td style="width: 70px"><?php echo $key->kibf_tglmulai;?></td>
                    <td style="width: 60px"><?php echo $key->kibf_status;?></td>
                    <td style="width: 60px"><?php echo $key->kibf_kode;?></td>
                    <td style="width: 80px"><?php echo $key->kibf_asal;?></td>
                    <td style="width: 100px"><?php echo $key->kibf_nilai;?></td>
                    <td style="width: 70px"><?php echo $key->kibf_ket;?></td>
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
