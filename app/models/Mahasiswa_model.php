<?php

class Mahasiswa_model {
    private $dbh; // database handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    // private $mhs = [
    //     [
    //         "nama" => "Dena Astia",
    //         "nrp" => "223040116",
    //         "email" => "denanaw30@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Syerli Aryanti",
    //         "nrp" => "223040100",
    //         "email" => "aryntsyerli12@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    //     ];

        public function getAllMahasiswa()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}