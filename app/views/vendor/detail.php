<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1><?= $data['title']; ?></h1>
            <hr>
            <div class="container-fluid">
                <form action="<?= BASEURL; ?>vendor/detail" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $id; ?>">
                    <?php
                    $d          = $data['vendor'];
                    $id         = $d['id'];
                    $vendor     = $d['vendor_name'];
                    $status     = $d['status'];
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="vendor">Vendor Name</label>
                            <input type="text" class="form-control" id="vendor" name="vendor" disabled value="<?= $vendor; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" name="status" disabled value="<?= $status; ?>">
                        </div>
                    </div>
                    <input class="btn btn-primary" type="reset" onclick="history.back()" value="Kembali">
                    <a href="<?= BASEURL; ?>vendor/edit/<?= $id; ?>" class="btn btn-primary ml-2">Edit</a>
                </form>
            </div>
        </div>
    </div>
</div>