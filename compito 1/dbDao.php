<?php
require_once("./ignora_me/credenzialiDao.php");

class DbDao
{
    static public $T_ADDETTO = "prg1_Addetto";
    static public $T_VIDEO = "prg1_Video";
    public function lookByTitolo($titolo = "")
    {
        $qry = "SELECT * FROM ".DbDao::$T_ADDETTO." JOIN Video on Disponibilita.Video = Video.Id WHERE Titolo = ?";
        $dbh = (new DbSalulabHelper())->dbh;
        $stm = $dbh->prepare($qry);
        $stm->execute([$titolo]);
    }
    public function lookByGenere($genere = "")
    {
        $qry = "SELECT * FROM ".DbDao::$T_ADDETTO." WHERE Geneere = ?";
        $dbh = (new DbSalulabHelper())->dbh;
        $stm = $dbh->prepare($qry);
        $stm->execute([$genere]);
    }
    public function testDb()
    {
        $dbh = (new DbSalulabHelper())->dbh;
        printf("test db in corso..\n");

        $qry = "SELECT * FROM Addetto ";
        
        $qr = $dbh->exec($qry);
    }
}

class DbSalulabHelper
{
    public $dbh;
    public function __construct()
    {
        $this->dbh = new PDO(
            "mysql:host=${CredenzialiDao::$host};dbname=${CredenzialiDao::$dbname}",
            CredenzialiDao::$user,
            CredenzialiDao::$pssw
        );
    }
}
