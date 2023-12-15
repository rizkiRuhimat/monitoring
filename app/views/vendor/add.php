<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <h1><?= $data['title']; ?></h1>
            <hr>
            <div class="container">
                <form action="<?= BASEURL; ?>vendor/tambah/" method="POST">
                    <input type="hidden" name="id" id="id" value="">
                    <div class="form-group col-md-4">
                        <label for="vendor">Vendor Name</label>
                        <input type="text" class="form-control" name="vendor" id="vendor" placeholder="Vendor Name" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="status">Status Active</label>
                        <select id="status" class="form-control" name="status">
                            <option selected value="0">Default In Active</option>
                            <option value="0">In Active</option>
                            <option value="1">Active</option>
                        </select>
                    </div>
                    <!-- <a href="<?= BASEURL; ?>vendor/detail/<?= $d['id']; ?>" class="btn btn-primary ml-1"> -->
                    <input class="btn btn-primary" type="reset" onclick="history.back()" value="Kembali">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>