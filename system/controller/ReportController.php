<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'c:/xampp/htdocs/projeto-iemac-final/system/connector/connection.php';
include_once 'c:/xampp/htdocs/projeto-iemac-final/system/model/Pessoa.class.php';
include_once 'c:/xampp/htdocs/projeto-iemac-final/system/dataaccess/PessoaDAO.class.php';

class ReportController{
    
    public function filterActiveReports(){
        $pessoaDAO = new PessoaDAO();
        return $pessoaDAO->activePeopleReports();
    }
    
    public function filterInactiveReports(){
        $pessoaDAO = new PessoaDAO();
        return $pessoaDAO->inactivePeopleReports();
    }
}