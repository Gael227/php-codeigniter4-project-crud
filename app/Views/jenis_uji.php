<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

    <div class="container-fluid">
        <div class="row">
            <!-- SIDEBAR -->
            <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Nota Pengujian</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Jenis Uji</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>

            <!-- MAIN CONTENT -->
            <div class="col-md-10">
                <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                    <h2>Jenis Uji</h2>
                    <div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addUserModal">Tambah</button>
                    <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="addData">Refresh</button>
                    </div>
                </div>

                <!--INPUT DATA-->
                <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="addUserForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Add Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label>nama spesimen</label>
                        <input type="text" name="nama_spesimen" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>harga spesimen umum</label>
                        <input type="text" name="harga_spesimen_umum" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>harga spesimen mahasiswa</label>
                        <input type="text" name="harga_spesimen_mahasiswa" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>satuan</label>
                        <input type="text" name="satuan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <select class="form-select" aria-label="Default select example" name="status_spesimen" required>
                            <option selected value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--EDIT DATA-->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editUserForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id_spesimen" id="edit_id_spesimen">
                    <div class="mb-3">
                        <label>nama spesimen</label>
                        <input type="text" name="nama_spesimen" id="edit_nama_spesimen" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>harga spesimen umum</label>
                        <input type="text" name="harga_spesimen_umum" id="edit_harga_spesimen_umum" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>harga spesimen mahasiswa</label>
                        <input type="text" name="harga_spesimen_mahasiswa" id="edit_harga_spesimen_mahasiswa" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>satuan</label>
                        <input type="text" name="satuan" id="edit_satuan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <select class="form-select" aria-label="Default select example" name="status_spesimen" id="edit_status_spesimen" required>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


                <!-- TABLE -->
                <table id="userTable" class="table table-striped">
            <thead>
                <tr>
                    <th>nama spesimen</th>
                    <th>harga Spesimen umum</th>
                    <th>harga spesimen mahasiswa</th>
                    <th>satuan</th>
                    <th>status</th>
                </tr>
            </thead>
         </table>
    </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>


    <script>
    $(document).ready(function() {
    // Inisialisasi DataTables
    var table = $('#userTable').DataTable({
    ajax: {
        url: '<?= base_url(); ?>/JenisUjiController/fetch',
        dataSrc: ''
    },
    columns: [
        { data: 'nama_spesimen' },
        { data: 'harga_spesimen_umum' },
        { data: 'harga_spesimen_mahasiswa' },
        { data: 'satuan' },
        { data: 'status_spesimen' },
        {
            data: 'id_spesimen',
            render: function(data, type, row) {
                return `
                    <button onclick="editUser(${data})" class="btn btn-sm btn-warning">Edit</button>
                    <button onclick="deleteUser(${data})" class="btn btn-sm btn-danger">Hapus</button>
                `;
            }
        }
    ]
});


    // Event submit untuk addUserForm
    $('#addUserForm').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: '<?= base_url(); ?>/JenisUjiController/store', // Endpoint untuk menyimpan data
        method: 'POST',
        data: $(this).serialize(), // Kirim semua data form
        success: function(response) {
            if (response.success) {
                alert(response.success); // Tampilkan pesan sukses
                $('#addUserModal').modal('hide'); // Tutup modal
                $('#userTable').DataTable().ajax.reload(); // Reload DataTables
            } else {
                alert(response.error); // Tampilkan pesan error jika ada
            }
        },
        error: function() {
            alert('Terjadi kesalahan saat menyimpan data.');
        }
    });
});

});

//EDIT
function editUser(id) {
    $.ajax({
        url: '<?= base_url(); ?>/JenisUjiController/edit/' + id,
        method: 'GET',
        success: function(data) {
            $('#edit_id_spesimen').val(data.id_spesimen);
            $('#edit_nama_spesimen').val(data.nama_spesimen);
            $('#edit_harga_spesimen_umum').val(data.harga_spesimen_umum);
            $('#edit_harga_spesimen_mahasiswa').val(data.harga_spesimen_mahasiswa);
            $('#edit_satuan').val(data.satuan);
            $('#edit_status_spesimen').val(data.status_spesimen);
            $('#editUserModal').modal('show');
        }
    });
}

$('#editUserForm').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: '<?= base_url(); ?>/JenisUjiController/update',
        method: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            if (response.success) {
                alert(response.success);
                $('#editUserModal').modal('hide');
                $('#userTable').DataTable().ajax.reload();
            } else {
                alert(response.error);
            }
        },
        error: function() {
            alert('Terjadi kesalahan saat mengupdate data.');
        }
    });
});

function deleteUser(id) {
    if (confirm('Yakin ingin menghapus data ini?')) {
        $.ajax({
            url: '<?= base_url(); ?>/JenisUjiController/delete/' + id,
            method: 'POST',
            success: function(response) {
                if (response.success) {
                    alert(response.success);
                    $('#userTable').DataTable().ajax.reload();
                } else {
                    alert(response.error);
                }
            },
            error: function() {
                alert('Terjadi kesalahan saat menghapus data.');
            }
        });
    }
}
    </script>
</html>