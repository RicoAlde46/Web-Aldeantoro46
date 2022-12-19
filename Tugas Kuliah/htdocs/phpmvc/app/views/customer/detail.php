<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['csr']['Id']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['csr']['Username']; ?></h6>
            <p class="card-text"><?= $data['csr']['Alamat']; ?></p>
            <p class="card-text"><?= $data['csr']['No Telepon']; ?></p>
            <p class="card-text"><?= $data['csr']['Email']; ?></p>
            <p class="card-text"><?= $data['csr']['Password']; ?></p>
            <a href="<?= BASEURL; ?>/custo" class="card-link">Kembali</a>

        </div>
    </div>
</div>