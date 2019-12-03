<html>
    <head>
        <title>
            <?php echo $judul ?> | Inventaris Gudang
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
                            Haii, Athariq!
                            Bagaimana hari Anda?
                        </P>
                        </div>
                    </div>
                    <div class="sidebarDaftarBarang" onclick="location.href='#';">
                        Daftar Barang
                    </div>
                    <div class="sidebarDaftarBarang" onclick="location.href='tambahBarangGudang.html';">
                        Tambah Barang
                    </div>
                    <div class="sidebarDaftarBarang" onclick="location.href='hapusBarangGudang.html';">
                        Hapus Barang
                    </div>
                    <div class="sidebarDaftarBarang" onclick="location.href='#'" style="position:absolute; bottom:0;">
                        Pengaturan Akun
                    </div>
                </div>
                <div class="col-lg-10" style="padding: 0px; max-width: 100%;">
                    <div style="background-color: rgb(33, 179, 33); color: white; padding: 30px;">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1><?php echo $judul ?></h1>
                            </div>
                            <div class="col-lg-6" style="text-align:right">
                                <h1>Gudang Abjad</h1>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 100px;">
                        <div class="row">
                            <div class="col-lg-4">
                                <div style="transform: translateY(25%);">
                                    <img src="<?php echo base_url('resources\test.jpg') ?>" width="100%">
                                    <div style="margin-top: 20px;">
                                        <input type="file" name="myFile" style="width: 100px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <?php foreach ($profil as $pr) : ?>
                                <form method="post" action="">
                                        <label for="nameG">Nama Gudang </label>
                                        <input class="inputProfil" type="text" value="Abjad"  id="nameG" name="namaGud" readonly style="background-color: rgb(218, 218, 218); color: black;">
                                        
                                        <label for="nameL">Nama Lengkap Pemilik</label>
                                        <input class="inputProfil" type="text" value="Sutrisno"  id="nameL" name="namaLeng" required style="background-color: rgb(218, 218, 218); color: black;">
                
                                        <label for="jenisG">Jenis Gudang</label>
                                        <input class="inputProfil" type="text" value="Makanan"  id="jenisG" name="jeniGud" required style="background-color: rgb(218, 218, 218); color: black;">
                
                                        <label for="email">Email</label>
                                        <input class="inputprofil" type="text" value="abjadsutrisno123@gmail"  id="email" name="Email" required style="background-color: rgb(218, 218, 218); color: black;">
                                        
                                        <label for="almt">Nomor Telepon</label>
                                        <input class="inputProfil" type="text" value="" id="noT" name="noTelp" required style="background-color: rgb(218, 218, 218); color: black;">

                                        <label for="almt">Alamat</label>
                                        <input class="inputProfil" type="text" value="<Jl. Kenanganku Sayang No. 77 Rt.07 Kota Kenangan Barat 2"  id="almt" name="alamat" required style="background-color: rgb(218, 218, 218); color: black;">
                                        <div style="text-align: right; margin-top:100px;">
                                            <button type="submit" class="btn btn-primary" style="width: 100px; background-color:rgb(33, 179, 33); ">Terapkan</button>
                                        </div>
                                </form>
                                <?php endforeach; ?>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>