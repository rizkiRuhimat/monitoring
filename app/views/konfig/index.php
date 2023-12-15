<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <?php Flasher::flash(); ?>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <h1><?= $data['title']; ?></h1>
        <hr>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col">
                    <a class="btn btn-primary" href="<?= BASEURL; ?>/konfig/add/">Tambah</a>
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                        Tambah Data
                    </button> -->
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <table id="myTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Operator</th>
                                <th scope="col">Server</th>
                                <th scope="col">Service</th>
                                <th scope="col">Vendor</th>
                                <th scope="col">Url's</th>
                                <th scope="col">Port</th>
                                <th scope="col">Filename</th>
                                <th scope="col">Error Status</th>
                                <th scope="col">isActive</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data['konfig'] as $d) : ?>
                                <tr>
                                    <td scope="row"><?= $no++; ?></td>
                                    <td><?= $d['operator']; ?></td>
                                    <td><?= $d['server']; ?></td>
                                    <td><?= $d['service']; ?></td>
                                    <td><?= $d['vendor']; ?></td>
                                    <td><?= $d['url']; ?></td>
                                    <td><?= $d['port']; ?></td>
                                    <td><?= $d['fname']; ?></td>
                                    <td><?= $d['status_err']; ?></td>
                                    <td><?= $d['is_active']; ?></td>
                                    <td>
                                        <a href="<?= BASEURL; ?>konfig/detail/<?= $d['id']; ?>" class="btn btn-primary ml-1"><span class="fas fa-eye"> View </span>
                                            <a href="<?= BASEURL; ?>konfig/edit/<?= $d['id']; ?>" class="btn btn-warning ml-1"><span class="fas fa-pen"> Edit </span>
                                                <!-- <a href="<?= BASEURL; ?>konfig/ubah/<?= $d['id']; ?>" class="btn btn-warning ml-1 tampilEdit" data-toggle="modal" data-target="#formModal" data-id="<?= $d['id']; ?>"><span class="fas fa-pen"> Edit </span> -->
                                                <a href="<?= BASEURL; ?>konfig/hapus/<?= $d['id']; ?>" class="btn btn-danger ml-1" onclick="return confirm('Apakah anda yakin ?');"><span class="fas fa-trash"> Delete </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal
<div class="container">
    <div class="modal fade modal-lg" id="formModal" tabindex="-1" aria-labelledby="frmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Form Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="<?= BASEURL; ?>konfig/tambah" method="POST">
                            <input type="hidden" name="id" id="id" value="">
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="opt">Operator</label>
                                    <select id="opt" class="form-control" name="opt">
                                        <option selected>Pilih</option>
                                        <option value="tsel">Telkomsel</option>
                                        <option value="isat">Indosat</option>
                                        <option value="xl">Excelcom</option>
                                        <option value="Hutch">Hutchinson</option>
                                        <option value="smart">Smartfren</option>
                                        <option value="intl">International</option>
                                        <option value="wa">WhatsApp</option>
                                        <option value="email">Email</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="srver">Server</label>
                                    <input type="text" class="form-control" name="srver" id="srver" placeholder="IP Server">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="u_ssh">SSH User</label>
                                    <input type="text" class="form-control" id="u_ssh" name="u_ssh" value=placeholder="SSH Username">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="logf">Log Filename</label>
                                    <input type="text" class="form-control" id="logf" name="logf" placeholder="logfile.log">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="pthlog">Pathlog</label>
                                    <input type="text" class="form-control" id="pthlog" name="pthlog" placeholder="/path/to/folder">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="sts_err">Error Status</label>
                                    <input type="text" class="form-control" id="sts_err" name="sts_err" placeholder="RESP: Error/Connection">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="svc">Service</label>
                                    <select id="svc" class="form-control" name="svc">
                                        <?php foreach ($data['data'] as $d) : ?>
                                            <option selected value="<?= $d['service']; ?>"><?= $d['service']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="vendor">Vendor</label>
                                    <select id="vendor" class="form-control" name="vendor">
                                        <?php foreach ($data['vendor'] as $v) : ?>
                                            <option value="<?= $v['vendor_name']; ?>"><?= $v['vendor_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="url">URL</label>
                                    <input type="text" class="form-control" id="url" name="url" placeholder="send_ip_no">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="port">Port</label>
                                    <input type="text" class="form-control" id="port" name="port" placeholder="send_port">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="uname">Username</label>
                                    <input type="text" class="form-control" id="uname" name="uname" placeholder="send_username">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="upass">Passwd</label>
                                    <input type="text" class="form-control" id="upass" name="upass" placeholder="send_password">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="fname">FileName</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="filename">
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="frmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Form Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>konfig/edit" method="POST">
                    <input type="hidden" name="id" id="id" value="">
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="opt">Operator</label>
                            <select id="opt" class="form-control" name="opt">
                                <option selected>Pilih</option>
                                <option value="tsel">Telkomsel</option>
                                <option value="isat">Indosat</option>
                                <option value="xl">Excelcom</option>
                                <option value="Hutch">Hutchinson</option>
                                <option value="smart">Smartfren</option>
                                <option value="intl">International</option>
                                <option value="wa">WhatsApp</option>
                                <option value="email">Email</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="srver">Server</label>
                            <input type="text" class="form-control" name="srver" id="srver" placeholder="IP Server">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="u_ssh">SSH User</label>
                            <input type="u_ssh" class="form-control" id="u_ssh" name="u_ssh" placeholder="SSH Username">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="logf">Log Filename</label>
                            <input type="text" class="form-control" id="logf" name="logf" placeholder="logfile.log">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="pthlog">Pathlog</label>
                            <input type="text" class="form-control" id="pthlog" name="pthlog" placeholder="/path/to/folder">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="sts_err">Error Status</label>
                            <input type="text" class="form-control" id="sts_err" name="sts_err" placeholder="RESP: Error/Connection">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="svc">Service</label>
                            <select id="svc" class="form-control" name="svc">
                                <option selected>Pilih...</option>
                                <option value="reguler">Bulk Premium</option>
                                <option value="premium">Bulk Reguler</option>
                                <option value="banking">Banking</option>
                                <option value="bulk">Bulk</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="vendor">Vendor</label>
                            <select id="vendor" class="form-control" name="vendor">
                                <?php foreach ($data['vendor'] as $v) : ?>
<option value="<?= $v['vendor_name']; ?>"><?= $v['vendor_name']; ?></option>
<?php endforeach; ?>
</select>
</div>
</div>
<div class="form-row">
    <div class="form-group col-md">
        <label for="url">URL</label>
        <input type="text" class="form-control" id="url" name="url" placeholder="send_ip_no">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md">
        <label for="port">Port</label>
        <input type="text" class="form-control" id="port" name="port" placeholder="send_port">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md">
        <label for="uname">Username</label>
        <input type="text" class="form-control" id="uname" name="uname" placeholder="send_username">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md">
        <label for="upass">Passwd</label>
        <input type="text" class="form-control" id="upass" name="upass" placeholder="send_password">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md">
        <label for="fname">FileName</label>
        <input type="text" class="form-control" id="fname" name="fname" placeholder="filename">
    </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</div>
</div>
</div>
</div> -->