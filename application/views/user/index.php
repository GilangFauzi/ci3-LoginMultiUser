<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-5">
            <?php if ($this->session->flashdata('updated')) : ?>
            <div class="alert alert-success" role="alert">
                You has been <b><?= $this->session->flashdata('updated') ?></b>!
            </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('message')) : ?>
            <b><?= $this->session->flashdata('message') ?></b>!
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="card mb-3" style="max-width: 500px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="..." style="max-width: 150px;">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $user['name'] ?> (<?= $user['email']; ?>)</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural
                    lead-in to additiona.</p>
                <p class="card-text"><small class="text-muted"> Member since
                        <?= date('d F Y', $user['date_created']); ?></small></p>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->