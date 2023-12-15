<?php
$d      = $data['vendor'];
$id     = $d['id'];
$vendor = $d['vendor_name'];
$status = $d['status'];
?>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1><?= $data['title']; ?></h1>
            <hr>
            <div class="container-fluid">
                <form action="<?= BASEURL; ?>vendor/update/" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $id; ?>">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="vendor">Vendor</label>
                            <input type="text" class="form-control" name="vendor" value="<?= $vendor; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="status">Status</label>
                            <select id="status" class="form-control" name="status">
                                <option selected value="<?= $status; ?>"><?= $status; ?></option>
                                <option value="0">In Active</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    </div>
                    <input class="btn btn-primary" type="reset" onclick="history.back()" value="Kembali">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>