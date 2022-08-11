<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <a href="#" class="btn btn-primary btn-icon-split mb-3 " data-toggle="modal" data-target="#newSubMenuModal">
        <span class=" icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Add New Submenu</span>
    </a>

    <div class="row">
        <div class="col-lg">
            <?= form_error('menu',  '<div class="alert alert-warning" role="alert">
            ', '</div>') ?>

            <?php if ($this->session->flashdata('message')) : ?>
            <div class="alert alert-success" role="alert">
                SubMenu Berhasil <?= $this->session->flashdata('message'); ?>
            </div>
            <?php endif; ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">URL</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($subMenu as $sm) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $sm['title']; ?></td>
                        <td><?= $sm['menu']; ?></td>
                        <td><?= $sm['url']; ?></td>
                        <td><?= $sm['icon']; ?></td>
                        <td><?= $sm['is_active']; ?></td>
                        <td>
                            <a href="<?= base_url('menu/edit') ?><?= $sm['id']; ?>"
                                class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#editModal">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?= base_url('menu/deleteSubMenu/') ?><?= $sm['id']; ?>"
                                onclick="return confirm('Yakin?')" class="btn btn-danger btn-circle btn-sm">
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
<div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Add New Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">

                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" placeholder="Title SubMenu Name"
                            name="title">
                        <small class="text-danger"><?= form_error('title'); ?></small>
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>

                            <?php foreach ($menu as $m) : ?>
                            <option value="<?= $m['id'] ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class="text-danger"><?= form_error('menu_id'); ?></small>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="url" placeholder="URL SubMenu Name" name="url">
                        <small class="text-danger"><?= form_error('url'); ?></small>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" placeholder="Icon SubMenu Name" name="icon">
                        <small class="text-danger"><?= form_error('icon'); ?></small>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" aria-label="Checkbox for following text input" value="1"
                                class="form-check-input" name="is_active" id="is_active">
                            <label for="is_active" class="form-check-label">Active?</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<form action="<?= base_url('menu/edit'); ?>" method="post">
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Add New Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" name="menu"
                            placeholder="Edit Belum Berfungsi">

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>

            </div>
        </div>
    </div>
</form>