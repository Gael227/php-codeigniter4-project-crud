<!-- dashboard.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?= base_url(); ?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/dt-2.1.8/datatables.min.css" rel="stylesheet">

    <script src="https://cdn.datatables.net/v/bs5/dt-2.1.8/datatables.min.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- Header -->
        </nav>

        <div class="container mt-5">
            <h1 class="text-center">Selamat datang, <?= session()->get('nama_user') ?>!</h1>
            <p class="text-center">Level Pengguna: <?= session()->get('level_pengguna') ?></p>
            <p class="text-center">Status Pengguna: <?= session()->get('status_user') ?></p>

            <div class="row"> <!-- GRID col -->
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1>Kelola User</h1>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addUserModal">
         Tambah User
        </button>

        <table id="userTable" class="table table-striped">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Nama User</th>
                    <th>Level Pengguna</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
         </table>
    </div>

    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="addUserForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama User</label>
                        <input type="text" name="nama_user" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Level Pengguna</label>
                        <select class="form-select" aria-label="Default select example" required name="level_pengguna">
                            <option selected>Pilih Level Pengguna</option>
                            <option value="Admin">Admin</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Status User</label>
                        <select class="form-select" aria-label="Default select example" name="status_user" required>
                            <option selected value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan User</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editUserForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id_user" id="edit_id_user">
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" name="username" id="edit_username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama User</label>
                        <input type="text" name="nama_user" id="edit_nama_user" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Level Pengguna</label>
                        <select id="edit_level_pengguna" class="form-select" name="level_pengguna" required>
                            <option value="Admin">Admin</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Status User</label>
                        <select id="edit_status_user" class="form-select" name="status_user" required>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update User</button>
                </div>
            </form>
        </div>
    </div>
</div>




            <div class="text-center">
                <a href="<?= base_url('authController/logout') ?>" class="btn btn-danger">Logout</a>
            </div><br><br>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-2.1.8/datatables.min.js"></script>


<script>
$(document).ready(function() {
    // Inisialisasi DataTables
    var table = $('#userTable').DataTable({
        ajax: {
            url: '<?= base_url(); ?>/UserController/fetch',
            dataSrc: ''
        },
        columns: [
            
            { data: 'username' },
            { data: 'nama_user' },
            { data: 'level_pengguna' },
            { data: 'status_user' },
            {
                data: null,
                render: function (data, type, row) {
                    return '<a class="btn btn-warning btn-sm" href="javascript:void(0)" title="Edit" onclick="editUser(' + row.id_user + ')">Edit</a> ' +
                           '<button class="btn btn-danger btn-sm" onclick="deleteUser(' + row.id_user + ')">Delete</button>';
                }
            }
        ]
    });

    // Event submit untuk addUserForm
    $('#addUserForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: '<?= base_url(); ?>/UserController/store',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#addUserModal').modal('hide');
                table.ajax.reload();
            }
        });
    });
});

function editUser(id) {
    $.ajax({
        url: '<?= base_url(); ?>/UserController/edit/' + id,
        method: 'GET',
        success: function(data) {
            $('#edit_id_user').val(data.id_user);
            $('#edit_username').val(data.username);
            $('#edit_nama_user').val(data.nama_user);
            $('#edit_level_pengguna').val(data.level_pengguna);
            $('#edit_status_user').val(data.status_user);
            $('#editUserModal').modal('show');
        }
    });
}

$('#editUserForm').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: '<?= base_url(); ?>/UserController/update',
        method: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            $('#editUserModal').modal('hide');
            table.ajax.reload();
        }
    });
});

function deleteUser(id) {
    if (confirm('Yakin ingin menghapus pengguna ini?')) {
        $.ajax({
            url: '<?= base_url(); ?>/UserController/delete/' + id,
            method: 'POST',
            success: function(response) {
                if (response.status === 'error') {
                    alert(response.message);
                }
                table.ajax.reload();
            },
            error: function() {
                alert('Terjadi kesalahan saat menghapus pengguna.');
            }
        });
    }
}


</script>



    <script src="<?= base_url(); ?>asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>