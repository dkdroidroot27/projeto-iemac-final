<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PessoaDAO{
    
    public function load(Pessoa $pessoa){
        global $connection;
        
        if($pessoa->getIdpessoa() == null){
            $sql = $connection->query("select * from pessoa");
            return $sql;
        }else{
            $sql = $connection->query("select * from pessoa where idpessoa = ".$pessoa->getIdpessoa().";");
            $resultset = $sql->fetch_array();
            
            $pessoa->setIdpessoa($resultset['idpessoa']);
            $pessoa->setNomepessoa($resultset['nomepessoa']);
            $pessoa->setEndpessoa($resultset['endpessoa']);
            $pessoa->setEmailpessoa($resultset['emailpessoa']);
            $pessoa->setTelpessoa($resultset['telpessoa']);
            $pessoa->setPaipessoa($resultset['paipessoa']);
            $pessoa->setMaepessoa($resultset['maepessoa']);
            $pessoa->setStatuspessoa($resultset['statuspessoa']);
        }
        return null;
    }
    
    public function insert(Pessoa $pessoa){
        global $connection;
        
        $sql = $connection->prepare("insert into pessoa(nomepessoa,endpessoa,emailpessoa,telpessoa,paipessoa,maepessoa,statuspessoa) values (?,?,?,?,?,?,'ATIVO');") or die($connection->error);
        
        $nome = $pessoa->getNomepessoa();
        $endereco = $pessoa->getEndpessoa();
        $email = $pessoa->getEmailpessoa();
        $telefone = $pessoa->getTelpessoa();
        $pai = $pessoa->getPaipessoa();
        $mae = $pessoa->getMaepessoa();
        
        $sql->bind_param('ssssss',$nome,$endereco,$email,$telefone,$pai,$mae);
        $sql->execute();
        
        if($sql->affected_rows > 0){
            return true;
        }
        return false;
    }
    
    public function update(Pessoa $pessoa){
        global $connection;
        
        $sql = $connection->prepare("update pessoa set nomepessoa = ?, endpessoa = ?, emailpessoa = ?, telpessoa = ?, paipessoa = ?, maepessoa = ?, statuspessoa = 'ATIVO' where idpessoa = ?");
        
        $nome = $pessoa->getNomepessoa();
        $endereco = $pessoa->getEndpessoa();
        $email = $pessoa->getEmailpessoa();
        $telefone = $pessoa->getTelpessoa();
        $pai = $pessoa->getPaipessoa();
        $mae = $pessoa->getMaepessoa();
        $idpessoa = $pessoa->getIdpessoa();
        
        $sql->bind_param('ssssssi',$nome,$endereco,$email,$telefone,$pai,$mae,$idpessoa);
        $sql->execute();
        
        if($sql->affected_rows > 0){
            return true;
        }
        return false;
    }
    
    public function delete(Pessoa $pessoa){
        global $connection;
        
        $sql = $connection->prepare("delete from pessoa where idpessoa = ?");
        
        $idpessoa = $pessoa->getIdpessoa();
        
        $sql->bind_param('i',$idpessoa);
        $sql->execute();
        
        if($sql->affected_rows > 0){
            return true;
        }
        return false;
    }
    
     public function deactivate(Pessoa $pessoa){
        global $connection;
        
        $sql = $connection->prepare("update pessoa set statuspessoa = 'INATIVO' where idpessoa = ?");
        
        $idpessoa = $pessoa->getIdpessoa();
        
        $sql->bind_param('i',$idpessoa);
        $sql->execute();
        
        if($sql->affected_rows > 0){
            return true;
        }
        return false;
    }
    
      public function reactivate(Pessoa $pessoa){
        global $connection;
        
        $sql = $connection->prepare("update pessoa set statuspessoa = 'ATIVO' where idpessoa = ?");
        
        $idpessoa = $pessoa->getIdpessoa();
        
        $sql->bind_param('i',$idpessoa);
        $sql->execute();
        
        if($sql->affected_rows > 0){
            return true;
        }
        return false;
    }
    
    public function activePeopleReports(){
        global $connection;
        
        $sql = $connection->query("select * from pessoa where statuspessoa = 'ATIVO';");
        return $sql;
    }
    
    public function inactivePeopleReports(){
        global $connection;
        
        $sql = $connection->query("select * from pessoa where statuspessoa = 'INATIVO';");
        return $sql;
    }
}