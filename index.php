<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLRT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="icon" type="image/jpg/png" href="icon/slrt.jpg">
    
    <style>
        body {
        margin: 0;
        padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fff;
        }
        .card {
            background: #ffffff;
            padding: 20px;
            border: 1px solid #000;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 10px #0000001a;
            width: 340px;
        }
        .card form .card-body .form-group input, 
        .card form .card-body .form-group select {
            border: 1px solid #000;
            
        }


    </style>
</head>
<body>


     








        <div class="card">
            <div class="" align="center">
                <img class="mb-4" src="icon/slrt.jpg" width="72" height="72">
            </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="cek_login.php" method="POST">
                    <div class="card-body">
                        <div class="input-field form-group">
                            <label >Username</label>
                            <input type="text" class="form-control w-100" name="username" required autofocus>
                        </div>
                        <br>
                       
                        <div class="input-field form-group">
                            <label for="">Level</label>
                            <select class="form-control w-100" name="level" container-fluid required>
                            <option value=""></option>
                            <option value="fasilitator">FASILITATOR</option>
                            <option value="tksk">TKSK</option>
                            <option value="operator">OPERATOR</option>
                            <option value="koordinator">KOORDINATOR</option>
                            <option value="asn">MANAJER</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-field form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <br>
                  
                    <div class="container-fluid" align="center">
                        <button type="submit" class="btn btn-primary" style="width: 255px;">Login</button>
                    </div>
                 
                    <br>
                    <div class="footer" align="center">
                        <span>Sistem Layanan Dan Rujukan Tepadu</span> <br>
                        <span>All Right Rserved <?= date('Y') ?></span>
                    </div>
                </form>
        </div>
            <!-- /.card -->













    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
