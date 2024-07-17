<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">        
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center ">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 bg-transparent">
                        <div class="card-body">
                            <!-- Nested Row within Card Body -->
                            <div class="row justify-content-center">
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <h4>Periksa Entrian Form</h4>
                                    </hr />
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                                <div class="col-lg-6">
                                    <div class="p-5 bg-white shadow-lg rounded">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                        </div>
                                        <form method="post" class="user" action="<?= base_url('register/process')?>">
                                            <?= csrf_field(); ?>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user mb-3"                                                    
                                                    placeholder="Username" id="username" name="username">     
                                            </div>                             
                                            <div class="form group mb-3">
                                                <input type="password" class="form-control form-control-user"
                                                    id="password" placeholder="Password" name="password">
                                            </div>
                                            <div class="form group mb-3">
                                                <input type="password" class="form-control form-control-user"
                                                    id="password_conf" placeholder="Repeat Password" name="password_conf">
                                            </div>                                        
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user mb-3"                                                    
                                                    placeholder="Name" id="name" name="name">     
                                            </div>                             
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Register Account
                                            </button>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url('/login')?>">Already have an Account? Login!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('js/sb-admin-2.min.js')?>"></script>

</body>

</html>