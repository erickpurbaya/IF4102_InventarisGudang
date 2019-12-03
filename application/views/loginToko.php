<html>
    <head>
        <title>Login | Inventaris Gudang</title>
    </head>
    <link rel="stylesheet" type="text/css" href="resources/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="resources/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <body style="max-height: 100%; height: auto;">
        <div class="container" style="max-width: 100%; width: 100%; max-height: 100%;  height:100%; background-image: linear-gradient(to right, #35bb29, #f1eb10);">
            <div class="row" style="max-height: 100%;">
                <div class="col-lg-12" style="display: inline-block; padding: 20px; background-color: yellowgreen;">
                    <h1 style="font-family:'Courier';">INVENTARIS GUDANG</h1>
                </div>
                <div class="col-lg-6" style="height: 100%; padding-left: 100px;">
                    <img src="gambarUTKhalLogin.png" width="500px">
                    <h3>Permudah organisasi kamu dengan Inventaris Gudang!</h3>
                </div>
                <div class="col-lg-6"  style="height: 100%; padding-left: 100px;">
                    <div style="border-radius: 20px; margin-top: 30px; background-color: rgb(13, 71, 35); padding: 50px; width: 50%; color: white; ">
                        <form action="javascript:popupLogin()">
                            <label for="name">Username</label>
                            <input class="inputLogin" type="text" id="name" name="username" required>
    
                            <label for="pass">Password</label>
                            <input class="inputLogin" type="password" id="pass" name="password" required>

                            <label>Jenis Pengguna</label>
                            <p>
                            <input type="radio" name="jPengguna" value="toko"> Toko<br>
                            <input type="radio" name="jPengguna" value="gudang"> Gudang<br>
                            </p>

                            <input class="btn-halLogin" type="submit" value="Login" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function popupLogin() {
              location.replace("daftarSebagai.html");
            }
        </script>
    </body>

</html>