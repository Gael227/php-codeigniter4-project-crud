<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url(); ?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?= base_url(); ?>asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>asset/bootstrap/js/jquery.min.js"></script>
    <title><?= $title; ?></title>
</head>

<body>
    <div class="container">
        <h1><?= $msg1; ?></h1>
        <h2><?= $msg2; ?></h2>
        <br><br>
        <div class="row mt-0">
            <div class="col-4 px-8">
                <h1 class="text-center pt-3">Login Mahasiswa</h1>
                <form id="loginform">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-danger">Login</button>
                </form>
                <div id="message"></div>
            </div>
            <div class="col-8 card px-2">
                <div class="mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url(); ?>asset/gambar/logoupy.jpeg" class="img-fluid rounded-start"
                                alt="Logo UPY Yogyakarta">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Universitas PGRI Yogyakarta</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#loginform').submit(function(event) {
                event.preventDefault();

                var formData = {
                    username: $('#username').val(),
                    password: $('#password').val()
                };

                $.ajax({
                    url: '<?= base_url('AuthController/login') ?>',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#message').html('<div class="alert alert-success">Login berhasil! Redirecting...</div>');
                            setTimeout(function() {
                                window.location.href = '<?= base_url('DashboardController') ?>';
                            }, 2000);
                        } else {
                            $('#message').html('<div class="alert alert-danger">' + response.message + '</div>');
                        }
                    },
                    error: function() {
                        $('#message').html('<div class="alert alert-danger">Terjadi kesalahan, coba lagi nanti.</div>');
                    }
                });
            });
        });
    </script>
</body>

</html>