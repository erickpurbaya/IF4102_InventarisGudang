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
    <body style="background-color: rgb(131, 170, 73); height: auto  ;">
        <div class="container" style="text-align: center; height: 100%;">
            <div class="center" style="background-color: rgb(13, 71, 35); color: white; border-radius: 10px; max-height: auto; height: auto; max-width: 100%; width:50%; padding: 50px; display: inline-block; text-align:left; margin-top: auto; margin-bottom: auto;">
                <div>
                    <h1 style="text-align: center;"><?php echo $judul ?></h1>    
                </div>
                <div style="margin-top: 30px;">
                    <form method="post" action="<?php echo base_url().'DaftarTokoController/tambahDataAkunToko'; ?>">
                        <label for="nameTok">Nama Toko </label>
                        <input class="inputLogin" type="text" id="nameT" name="namaTok" required >

                        <label for="nameLeng">Nama Lengkap Pemilik</label>
                        <input class="inputLogin" type="text" id="nameL" name="namaLeng" required >

                        <label for="emailTok">Email</label>
                        <input class="inputLogin" type="text" id="email" name="emailTok" required>
                        
                        <label for="username">Username</label>
                        <input class="inputLogin" type="text" id="name" name="username" required>

                        <label for="password">Password</label>
                        <input class="inputLogin" type="password" id="pass" name="password" required>

                        <label for="Cpass">Confirm Password</label>
                        <input class="inputLogin" type="password" id="Cpass" name="conPass" required>

                        <label for="alamat">Alamat</label>
                        <input class="inputLogin" type="text" id="almt" name="alamat" required >

                        <input class="btn-halLogin" type="submit" value="Daftar Sekarang" >
					</form>
                </div>  
            </div>
        </div>
    </body>
</html>