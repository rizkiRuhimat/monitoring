<?php

class Home_model
{
    private $table = 'monitoring_telco';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTraffic()
    {
        $this->db->query("SELECT opt,`host`,`service`,ROUND(SUM(sukses) / SUM(total) * 100, 2) AS 'success_rate',ROUND(SUM(error) / SUM(total) * 100, 2) AS 'error_rate',SUM(total) AS 'total',SUM(error) AS 'error' FROM Monitoring.`monitoring_telco` WHERE DATE(time_log) = DATE(NOW()) GROUP BY opt,HOST,service ORDER BY HOST,opt ASC;
        ");
        return $this->db->resultSet();
    }
}
