<div class="container-fluid">
    <div class="row">
        <h1><?= $data['title']; ?></h1>
        <hr>
    </div>
    <div class="container">
        <div class="col">
            <div class="row">
                <div class="col-md-8">
                    <!-- <h4>this is a Test Dashboards</h4> -->
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Operator</th>
                                <th scope="col">Host</th>
                                <th scope="col">Service</th>
                                <th scope="col">Success Rate</th>
                                <th scope="col">Error Rate</th>
                                <th scope="col">Total Traffic</th>
                                <th scope="col">Total Error</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = '1';
                            foreach ($data['traffic'] as $n) : ?>
                                <tr>
                                    <td scope="row"><?= $no++; ?></td>
                                    <td><?= $n['opt']; ?></td>
                                    <td><?= $n['host']; ?></td>
                                    <td><?= $n['service']; ?></td>
                                    <td><?= $n['success_rate']; ?></td>
                                    <td><?= $n['error_rate']; ?></td>
                                    <td><?= $n['total']; ?></td>
                                    <td><?= $n['error']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>