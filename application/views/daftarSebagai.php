<html>
    <head>
        <title>
            Inventaris Gudang
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources\bootstrap.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources\style.css') ?>">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" style="height: 100%; max-width:100%; width: 100%; padding: 0%; margin: 0%; color: white;">
            <div class="row" style="height: 100%; width: 100%;">
                <div class="col-lg-6 daftarSbg dafSbg1" onclick="javascript:relocate2()">
                    <div class="vertical-center">
                        <P>
                            <h1 style="vertical-align: middle;">Toko</h1>
                        </P>
                        <img src="dead.jpg">
                    </div>
                </div>
                <div class="col-lg-6 daftarSbg dafSbg2" onclick="javascript:relocate1()">
                    <div class="vertical-center">
                        <P>
                            <h1 style="vertical-align: middle;">Gudang</h1>
                        </P>
                        <img src="test.jpg">
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function relocate1(){
                location.replace("daftar.html");
            }

            function relocate2(){
                location.replace("daftarToko.html");
            }
        </script>
    </body>
</html>