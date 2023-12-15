<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1><?= $data['title']; ?></h1>
            <hr>
            <div class="container-fluid">
                <form action="<?= BASEURL; ?>konfig/detail" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $id; ?>">
                    <?php
                    $d          = $data['konfig'];
                    $id         = $d['id'];
                    $server     = $d['server'];
                    $ssh        = $d['user_ssh'];
                    $path       = $d['pathlog'];
                    $logfile    = $d['logfile'];
                    $err_stat   = $d['status_err'];
                    $opt        = $d['operator'];
                    $service    = $d['service'];
                    $vendor     = $d['vendor'];
                    $url        = $d['url'];
                    $port       = $d['port'];
                    $fname      = $d['fname'];
                    $uname      = $d['uname'];
                    $upass      = $d['upass'];
                    $actv       = $d['is_active'];
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="opt">Operator</label>
                            <input type="text" class="form-control" name="opt" id="opt" disabled value="<?= $opt; ?>">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="server">Server</label>
                            <input type="text" class="form-control" name="server" id="server" disabled value="<?= $server; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="u_ssh">SSH User</label>
                            <input type="text" class="form-control" id="u_ssh" name="u_ssh" disabled value="<?= $ssh; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="pthlog">Pathlog</label>
                            <input type="text" class="form-control" id="pthlog" name="pthlog" disabled value="<?= $path; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="logf">Log Filename</label>
                            <input type="text" class="form-control" id="logf" name="logf" disabled value="<?= $logfile; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="sts_err">Error Status</label>
                            <input type="text" class="form-control" id="sts_err" name="sts_err" disabled value="<?= $err_stat; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="svc">Service</label>
                            <input type="text" class="form-control" id="svc" name="svc" disabled value="<?= $service; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="vendor">Vendor</label>
                            <input type="text" class="form-control" id="vendor" name="vendor" disabled value="<?= $vendor; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="url">URL</label>
                            <input type="text" class="form-control" id="url" name="url" disabled value="<?= $url; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="port">Port</label>
                            <input type="text" class="form-control" id="port" name="port" disabled value="<?= $port; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="fname">FileName</label>
                            <input type="text" class="form-control" id="fname" name="fname" disabled value="<?= $fname; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="uname">Username</label>
                            <input type="text" class="form-control" id="uname" name="uname" disabled value="<?= $uname; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="upass">Passwd</label>
                            <input type="text" class="form-control" id="upass" name="upass" disabled value="<?= $upass; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="isActive">isActive</label>
                            <select id="isActive" class="form-control" name="isActive" disabled>
                                <option selected value="<?= $actv; ?>"><?= $actv; ?></option>
                                <option value="0">InActive</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    </div>
                    <input class="btn btn-primary" type="reset" onclick="history.back()" value="Kembali">
                    <a href="<?= BASEURL; ?>konfig/edit/<?= $id; ?>" class="btn btn-primary ml-2">Edit</a>
                </form>
            </div>
        </div>
    </div>
</div>