<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <a href="#" class="btn btn-primary btn-icon-split mb-3 " data-toggle="modal" data-target="#newRoleModal">
        <span class=" icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Add New Role</span>
    </a>

    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu',  '<div class="alert alert-warning" role="alert">
            ', '</div>') ?>

            <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                New Role <?= $this->session->flashdata('success'); ?>
            </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('message')) : ?>
            <div class="alert alert-success" role="alert">
                Role Success <?= $this->session->flashdata('message'); ?>
            </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('updated')) : ?>
            <div class="alert alert-success" role="alert">
                You has been <b><?= $this->session->flashdata('updated') ?></b>!
            </div>
            <?php endif; ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($role as $r) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $r['role']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/roleaccess/') ?><?= $r['id']; ?>"
                                class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-question-circle"></i>
                            </a>
                            <a href="<?= base_url('admin/edit/') ?><?= $r['id']; ?>"
                                class="btn btn-primary btn-circle btn-sm" data-toggle="modal"
                                data-target="#editModal<?= $r['id'] ?>">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?= base_url('admin/deleteRole/') ?><?= $r['id']; ?>"
                                class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Yakin?');">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->


<!-- Modal Add -->
<div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">

                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Role Name"
                            name="role">
                        <small class="text-danger"><?= form_error('role'); ?></small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<form action="<?= base_url('admin/edit'); ?>" method="post">
    <div class="modal fade" id="editModal<?= $r['id'] ?>" tabindex="-1" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Add New Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $r['id'] ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" name="role"
                            placeholder="Edit Belum Berfungsi" value="<?= $r['role'] ?>">

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>

            </div>
        </div>
    </div>
</form>