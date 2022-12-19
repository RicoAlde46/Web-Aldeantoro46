<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Customer</h3>

            <ul class="list-group">
                <?php foreach ($data['csr'] as $csr) : ?>
                    <li class="list-group-item  d-flex justify-content-between align-items-center">
                        <?= $csr['nama']; ?>
                        <a href="<?= BASEURL; ?>/customer/detail/<?= $csr['id']; ?>" class="badge text-bg-danger">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>