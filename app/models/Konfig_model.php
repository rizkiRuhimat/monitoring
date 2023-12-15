<?php

class Konfig_model
{
    private $table = 'config_status_telco_new';
    private $table2 = 'g_vendor_copy';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getConfig()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getVendor()
    {
        $this->db->query('SELECT * FROM ' . $this->table2);
        return $this->db->resultSet();
    }

    public function getDetail($id)
    {
        $this->db->query('SELECT * FROM `' . $this->table . '` WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahConfig($data)
    {
        // isi NULL untuk autoincrement pada table
        // $query  =   "INSERT INTO {$this->table} (`operator`, `server`, `user_ssh`, `logfile`, `pathlog`, `status_err`, `service`, `vendor`, `url`, `port`, `uname`, `upass`, `time_log`, `fname`) VALUE ('$opt','$srver','$u_ssh','$logf','$pthlog','$sts_err','$svc','$vndr','$s_url','$port','$fname','$uname','$upass');";
        $query  =   "INSERT INTO {$this->table} SET
        `operator`      =   :operator,
        `server`        =   :server,
        `user_ssh`      =   :user_ssh,
        `pathlog`       =   :pathlog,
        `logfile`       =   :logfile,
        `status_err`    =   :status_err,
        `service`       =   :service,
        `vendor`        =   :vendor,
        `url`           =   :url,
        `port`          =   :port,
        `fname`         =   :fname,
        `uname`         =   :uname,
        `upass`         =   :upass,
        `is_active`     =   :is_active
        ";
        $this->db->query($query);

        $this->db->query($query);
        $this->db->bind('operator', $data['opt']);
        $this->db->bind('server', $data['server']);
        $this->db->bind('user_ssh', $data['ssh']);
        $this->db->bind('pathlog', $data['pathlog']);
        $this->db->bind('logfile', $data['logfile']);
        $this->db->bind('status_err', $data['status_err']);
        $this->db->bind('service', $data['service']);
        $this->db->bind('vendor', $data['vendor']);
        $this->db->bind('url', $data['url']);
        $this->db->bind('port', $data['port']);
        $this->db->bind('fname', $data['fname']);
        $this->db->bind('uname', $data['uname']);
        $this->db->bind('upass', $data['upass']);
        $this->db->bind('is_active', $data['isActive']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusConfig($id)
    {
        $query  =   "DELETE FROM {$this->table} where id= :id;";
        // var_dump($query);
        // die;
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        // return $query;
        return $this->db->rowCount();
    }

    public function updateData($data)
    {
        $query  =   "UPDATE {$this->table} SET
                                `operator`      =   :operator,
                                `server`        =   :server,
                                `user_ssh`      =   :user_ssh,
                                `pathlog`       =   :pathlog,
                                `logfile`       =   :logfile,
                                `status_err`    =   :status_err,
                                `service`       =   :service,
                                `vendor`        =   :vendor,
                                `url`           =   :url,
                                `port`          =   :port,
                                `fname`         =   :fname,
                                `uname`         =   :uname,
                                `upass`         =   :upass,
                                `is_active`     =   :isactive
                        where `id`= :id ";

        $this->db->query($query);
        $this->db->bind('operator', $data['opt']);
        $this->db->bind('server', $data['server']);
        $this->db->bind('user_ssh', $data['ssh']);
        $this->db->bind('pathlog', $data['pathlog']);
        $this->db->bind('logfile', $data['logfile']);
        $this->db->bind('status_err', $data['status_err']);
        $this->db->bind('service', $data['service']);
        $this->db->bind('vendor', $data['vendor']);
        $this->db->bind('url', $data['url']);
        $this->db->bind('port', $data['port']);
        $this->db->bind('fname', $data['fname']);
        $this->db->bind('uname', $data['uname']);
        $this->db->bind('upass', $data['upass']);
        $this->db->bind('isactive', $data['isActive']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }


    public function ubahDataConfig($data)
    {
        // var_dump($data);
        // die;
        $query  =   "UPDATE config_status_telco SET
                                operator    = :operator
                                server      = :server
                                user_ssh    = :user_ssh
                                pathlog     = :pathlog
                                logfile     = :logfile
                                status_err  = :status
                                service     = :service
                                vendor      = :vendor
                                url         = :url
                                port        = :port
                                fname       = :fname
                                uname       = :uname
                                upass       = :upass
                        WHERE id = :id
                        ";

        $this->db->query($query);
        $this->db->bind('operator', $data['opt']);
        $this->db->bind('server', $data['srver']);
        $this->db->bind('user_ssh', $data['ssh']);
        $this->db->bind('pathlog', $data['pthlog']);
        $this->db->bind('logfile', $data['logf']);
        $this->db->bind('status', $data['sts_err']);
        $this->db->bind('service', $data['svc']);
        $this->db->bind('vendor', $data['vendor']);
        $this->db->bind('url', $data['url']);
        $this->db->bind('port', $data['port']);
        $this->db->bind('fname', $data['fname']);
        $this->db->bind('uname', $data['uname']);
        $this->db->bind('upass', $data['upass']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariConfig()
    {
        $keyword    =   $_POST['keyword'];
        $query      =   "SELECT * FROM config_status_telco WHERE `server` like :keyword  or url like :keyword or operator like :keyword or status_err like :keyword";

        $this->db->query($query);

        $this->db->bind("keyword", "%$keyword%");

        return $this->db->resultSet();
    }
}
