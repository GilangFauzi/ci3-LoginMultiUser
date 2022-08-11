<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <a href="#" class="btn btn-primary btn-icon-split mb-3 " data-toggle="modal" data-target="#newMenuModal">
        <span class=" icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Add New Menu</span>
    </a>

    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu',  '<div class="alert alert-warning" role="alert">
            ', '</div>') ?>

            <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                New Menu <?= $this->session->flashdata('success'); ?>
            </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('message')) : ?>
            <div class="alert alert-success" role="alert">
                Menu Berhasil <?= $this->session->flashdata('message'); ?>
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
                        <th scope="col">Menu</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($menu as $m) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $m['menu']; ?></td>
                        <td>
                            <a href="<?= base_url('menu/ubahMenu/') ?><?= $m['id']; ?>"
                                class="btn btn-primary btn-circle btn-sm" data-toggle="modal"
                                data-target="#editModal<?= $m['id'] ?>">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?= base_url('menu/deleteMenu/') ?><?= $m['id']; ?>"
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
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">

                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Menu Name"
                            name="menu">
                        <small class="text-danger"><?= form_error('menu'); ?></small>
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
<form action="<?= base_url('menu/ubahMenu/'); ?>" method="post">
    <div class="modal fade" id="editModal<?= $m['id'] ?>" tabindex="-1" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $m['id'] ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" name="menu"
                            value="<?= $m['menu'] ?>">

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