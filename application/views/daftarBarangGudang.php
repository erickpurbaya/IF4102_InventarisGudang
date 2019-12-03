<html>
    <head>
        <title>
            Daftar Barang | Inventaris Gudang
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources\bootstrap.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources\style.css') ?>">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </head>
    <body style="max-width:100%; width: 100%;">
        <div class="container" style="max-width: 100%; width: 100%; max-height: 100%;  height:100%; padding-right: 0px;">
            <div class="row" style="height: 100%;">
                <div class="col-lg-2" style="background-color: rgb(62, 131, 62); padding: 0; color: white;">
                    <div class="row" style="padding:20px;">
                        <div class="col-lg-4" style="padding: 10px;">
                            <img src="<?php echo base_url('resources\test.jpg') ?>" width="100%" style="border-radius: 50px;">
                        </div>
                        <div class="col-lg-8" style="padding: 10px;">
                        <P>
                            Haii, <?php echo $usernameke ?>!
                            Bagaimana hari Anda?
                        </div>
                    </div>
                    <div class="sidebarDaftarBarang" onclick="location.href='#';">
                        Daftar Barang
                    </div>
                    <a href="<?php echo base_url('TambahBarangController/index'); ?>">
                    <div class="sidebarDaftarBarang">
                        Tambah Barang
                    </div>
                    </a>
                    <a href="<?php echo base_url('HapusBarangController/index'); ?>">
                    <div class="sidebarDaftarBarang">
                        Hapus Barang
                    </div>
                    </a>
                    <a href="<?php echo base_url('ProfilGudangController/index'); ?>">
                    <div class="sidebarDaftarBarang" onclick="location.href='profilGudang.html'" style="position:absolute; bottom:0;">
                        Pengaturan Akun
                    </div>
                    </a>
                </div>
                <div class="col-lg-10" style="padding: 0px; max-width: 100%;">
                    <div style="background-color: rgb(33, 179, 33); color: white; padding: 30px;">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1>Daftar Barang</h1>
                            </div>
                            <div class="col-lg-6" style="text-align:right">
                                <h1>Gudang <?php echo $nameke ?></h1>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 100px;">
                    <?php if(!empty($barang)) { ?> 
                        <table class="table table-bordered table-responsive-md table-striped">
								<thead>
									<tr>
										<th class="text-center">Kode Barang</th>
										<th class="text-center">Nama Barang</th>
                                        <th class="text-center">Jumlah Barang</th>
									</tr>
								<tbody>
                                    <?php foreach ($barang as $brg) : ?>
                                    <tr>
										<td class="pt-3-half text-center"><?php echo $brg['kodebarangg'] ; ?></td>
										<td class="pt-3-half text-center"><?php echo $brg['namabarangg'] ; ?></td>
                                        <td class="pt-3-half text-center"><?php echo $brg['stokbarangg'] ; ?></td>
									</tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        
                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-primary" style="width: 100px; background-color:rgb(33, 179, 33); ">Terapkan</button>
                             </div>
                    <?php } else { ?>
                        <h1 class="text-center">Anda Belum Memasukkan Data Barang</h1>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>