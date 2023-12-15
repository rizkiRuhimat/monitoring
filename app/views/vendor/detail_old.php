<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1><?= $data['title']; ?></h1>
            <hr>
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['konfig']['server'] . ' - ' . $data['konfig']['operator'] . ' - ' . $data['konfig']['url'] . ':' . $data['konfig']['port'] . '/' . $data['konfig']['fname']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['konfig']['vendor']; ?></h6>
                    <!-- <h6 class="card-subtitle mb-2 text-muted"><?= $data['konfig']['service']; ?></h6> -->
                    <!-- <h6 class="card-subtitle mb-2 text-muted"><?= $data['konfig']['fname']; ?></h6> -->
                    <!-- <h6 class="card-subtitle mb-2 text-muted"><?= $data['konfig']['pathlog']; ?></h6> -->
                    <a href="<?= BASEURL; ?>konfig/" class="card-link">kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>