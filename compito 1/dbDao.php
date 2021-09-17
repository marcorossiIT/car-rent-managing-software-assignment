<?php
require_once("./ignora_me/credenzialiDao.php");

class DbDao
{
    public function lookByTitolo($titolo = "")
    {
        $qry = "SELECT * FROM Disponibilita WHERE Video = ?";
        $dbh = (new DbSalulabHelper())->dbh;
        $stm = $dbh->prepare($qry);
        $stm->execute([$titolo]);
    }
    public function caricaDemoDb()
    {
        $dbh = (new DbSalulabHelper())->dbh;
        printf("Uploading schema structure..\n");
        
        $sql = file_get_contents('dbone.sql');

        $qr = $dbh->exec($sql);

    }
}

class DbSalulabHelper
{
    public $dbh;
    public function __construct()
    {
        $this->dbh = new PDO(
            `mysql:host=${CredenzialiDao::$host};dbname=${CredenzialiDao::$dbname}`,
            CredenzialiDao::$user,
            CredenzialiDao::$pssw
        );
    }
}
