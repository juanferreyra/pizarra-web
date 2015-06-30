<?php
include_once '../dao/dataBaseConnector.php'


class LaboratorioDataBaseLinker
{
    var $dbLabo;

    function LaboratorioDataBaseLinker()
    {

        $this->dbLabo = new dataBaseConnector(HOSTLocal,0,DBUti,USRDBAdmin,PASSDBAdmin);
    }

    




}
