<?php
$d = $data['konfig'];
$id         = $d['id'];
$server     = $d['server'];
$ssh        = $d['user_ssh'];
$pathlog    = $d['pathlog'];
$logfile    = $d['logfile'];
$status_err = $d['status_err'];
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
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1><?= $data['title']; ?></h1>
            <hr>
            <div class="container-fluid">
                <form action="<?= BASEURL; ?>konfig/update/" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $id; ?>">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="opt">Operator</label>
                            <select id="opt" class="form-control" name="opt">
                                <option selected value="<?= $opt; ?>"><?= $opt; ?></option>
                                <option value="Telkomsel">Telkomsel</option>
                                <option value="Indosat">Indosat</option>
                                <option value="Excelcom">Excelcom</option>
                                <option value="Hutchinson">Hutchinson</option>
                                <option value="Smartfren">Smartfren</option>
                                <option value="International">International</option>
                                <option value="WhatsApp">WhatsApp</option>
                                <option value="Email">Email</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="server">Server</label>
                            <input type="text" class="form-control" name="server" id="server" placeholder="IP Server" value="<?= $server; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ssh">SSH User</label>
                            <input type="text" class="form-control" id="ssh" name="ssh" placeholder="SSH Username" value="<?= $ssh; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="pathlog">Pathlog</label>
                            <input type="text" class="form-control" id="pathlog" name="pathlog" placeholder="/path/to/folder" value="<?= $pathlog; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="logfile">Log Filename</label>
                            <input type="text" class="form-control" id="logfile" name="logfile" placeholder="logfile.log" value="<?= $logfile; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="status_err">Error Status</label>
                            <input type="text" class="form-control" id="status_err" name="status_err" placeholder="RESP: Error/Connection" value="<?= $status_err; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="service">Service</label>
                            <select id="service" class="form-control" name="service">
                                <option selected value="<?= $service; ?>"><?= $service; ?></option>
                                <option value="Bulk Premium">Bulk Premium</option>
                                <option value="Bulk Reguler">Bulk Reguler</option>
                                <option value="Banking">Banking</option>
                                <option value="Bulk">Bulk</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="vendor">Vendor</label>
                            <select id="vendor" class="form-control" name="vendor">
                                <option value="<?= $vendor; ?>"><?= $vendor; ?></option>
                                <?php foreach ($data['vendor'] as $v) : ?>
                                    <option value="<?= $v['vendor_name']; ?>"><?= $v['vendor_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="url">URL</label>
                            <input type="text" class="form-control" id="url" name="url" placeholder="send_ip_no" value="<?= $url; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="port">Port</label>
                            <input type="text" class="form-control" id="port" name="port" placeholder="send_port" value="<?= $port; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="fname">FileName</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="filename" value="<?= $fname; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="uname">Username</label>
                            <input type="text" class="form-control" id="uname" name="uname" placeholder="send_username" value="<?= $uname; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="upass">Password</label>
                            <input type="text" class="form-control" id="upass" name="upass" placeholder="send_password" value="<?= $upass; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="isActive">isActive</label>
                            <select id="isActive" class="form-control" name="isActive">
                                <option selected value="<?= $actv; ?>"><?= $actv; ?></option>
                                <option value="0">InActive</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    </div>
                    <!-- <a href="<?= BASEURL; ?>konfig/detail/<?= $d['id']; ?>" class="btn btn-primary ml-1"> -->
                    <input class="btn btn-primary" type="reset" onclick="history.back()" value="Kembali">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>