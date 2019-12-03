<html>
    <head>
        <title><?php echo $judul ?> | Inventaris Gudang</title>
    </head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources\bootstrap.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources\style.css') ?>">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <body style="max-height: 100%; height: auto;">
        <div class="container" style="max-width: 100%; width: 100%; max-height: 100%;  height:100%; background-image: linear-gradient(to right, #35bb29, #f1eb10);">
            <div class="row" style="max-height: 100%;">
                <div class="col-lg-12" style="display: inline-block; padding: 20px; background-color: yellowgreen;">
                    <h1 style="font-family:'Courier';">INVENTARIS GUDANG</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" style="height: 100%; padding-left: 100px; transform: translateY(35%);" >
                    <img src="<?php echo base_url('resources\gambarUTKhalLogin.png') ?>" width="500px">
                    <h3>Permudah organisasi kamu dengan Inventaris Gudang!</h3>
                </div>
                <div class="col-lg-6"  style="height: 100%; padding-left: 100px; transform: translateY(25%);">
                    <div style="border-radius: 20px; margin-top: 30px; background-color: rgb(13, 71, 35); padding: 50px; width: 70%; color: white; ">
                        <form method="post" action="<?php echo base_url().'LoginControllerGudang/cekAkun'; ?>">
                            <label for="name">Username</label>
                            <input class="inputLogin" type="text" id="name" name="usernamee" required>
    
                            <label for="pass">Password</label>
                            <input class="inputLogin" type="password" id="pass" name="passwordd" required>

                            <input class="btn-halLogin" type="submit" value="Login" >
                        </form>
                        <div class="text-center">
                            atau
                        </div>
                        <div>
                            <form method="post" action="<?php echo base_url().'DaftarGudangController/index'; ?>">
                                <input class="btn-halLogin" type="submit" value="Daftar" >
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>