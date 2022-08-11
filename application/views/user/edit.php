<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-5">

            <?= form_open_multipart('user/edit'); ?>
            <!-- <form action="" method="post"> -->
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>"
                    readonly>
            </div>
            <div class="form-group">
                <label for="name">Full name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>

            </div>
            <div class="form-group">
                <label>Picture</label>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-0">
                            <img src="" alt="" class="img-tumbnail">
                        </div>
                        <!-- <div class="col-sm-9"> -->
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        <div class="col-md-2">
                            <div class="row mt-3">
                                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt=""
                                    style="max-width: 110px;">
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-sm-4">Edit</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->