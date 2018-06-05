<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "c:/xampp/htdocs/projeto-iemac-final/system/connector/connection.php";
include_once "c:/xampp/htdocs/projeto-iemac-final/system/model/Pessoa.class.php";
include_once "c:/xampp/htdocs/projeto-iemac-final/system/dataaccess/PessoaDAO.class.php";

header("Content-type: text/html; charset=utf-8");

class PessoaController extends Pessoa{
    
    public function filterLoad(Pessoa $pessoa){
        
        $pessoaDAO = new PessoaDAO();
        return $pessoaDAO->load($pessoa);
        
    }
    
    public function filterInsert(Pessoa $pessoa){
        
        if(isset($_GET["new"])){
            
            $pessoa->setNomepessoa($_POST["nome"]);
            $pessoa->setEndpessoa($_POST["endereco"]);
            $pessoa->setEmailpessoa($_POST["email"]);
            $pessoa->setTelpessoa($_POST["telefone"]);
            $pessoa->setPaipessoa($_POST["pai"]);
            $pessoa->setMaepessoa($_POST["mae"]);
            
            $pessoaDAO = new PessoaDAO();
            
            if($pessoaDAO->insert($pessoa)){
               echo " <script>window.location = 'indexsis.php';"
               . "alert('Pessoa cadastrada com sucesso!');</script>";
           }else{
            echo "<script>alert('Erro ao cadastrar pessoa! Contate o administrador do sistema e tente novamente.');</script>";
        }
    }
}

public function filterUpdate(Pessoa $pessoa){
 
    if(isset($_GET["id"])){
        $pessoa->setIdpessoa($_GET["id"]);
    }
    
    if(isset($_GET["update"])){
        
        $pessoa->setNomepessoa($_POST["nome"]);
        $pessoa->setEndpessoa($_POST["endereco"]);
        $pessoa->setEmailpessoa($_POST["email"]);
        $pessoa->setTelpessoa($_POST["telefone"]);
        $pessoa->setPaipessoa($_POST["pai"]);
        $pessoa->setMaepessoa($_POST["mae"]);
        
        $pessoaDAO = new PessoaDAO();
        
        if($pessoaDAO->update($pessoa)){
         echo " <script>window.location = 'indexsis.php';"
         . "alert('Pessoa alterada com sucesso!');</script>";
     }else{
        echo "<script>alert('Erro ao alterar pessoa! Contate o administrador do sistema e tente novamente.');"
        . "window.location = 'indexsis.php';</script>";
    }
}
$pessoaDAO = new PessoaDAO();
return $pessoaDAO->load($pessoa);
}

public function filterDelete(Pessoa $pessoa){
    
    if(isset($_GET["id"])){
        $pessoa->setIdpessoa($_GET["id"]);
        $pessoaDAO = new PessoaDAO();
        
        if($pessoaDAO->delete($pessoa)){
            echo "<script>alert('Pessoa removida com sucesso do sistema. Caso deseje reinserir a pessoa, considere utilizar a opção Desativar');"
            . "window.location = 'sd-listagem.php';</script>";
        }else{
            echo "<script>alert('Erro ao deletar pessoa. Contate o administrador do sistema para mais detalhes.');"
            . "window.location = 'sd-listagem.php';</script>";
        }
    }
    
}

public function filterDeactivate(Pessoa $pessoa){
    
    if(isset($_GET["id"])){
        $pessoa->setIdpessoa($_GET["id"]);
        $pessoaDAO = new PessoaDAO();
        
        if($pessoaDAO->deactivate($pessoa)){
          echo "<script>alert('Pessoa desativada com sucesso do sistema.');"
          . "window.location = 'sd-listagem.php';</script>";
      }else{
       echo "<script>alert('Erro ao desativar pessoa. Contate o administrador do sistema para mais detalhes.');"
       . "window.location = 'sd-listagem.php';</script>";
   }
}
}

public function filterActivate(Pessoa $pessoa){
    
    if(isset($_GET["id"])){
        $pessoa->setIdpessoa($_GET["id"]);
        $pessoaDAO = new PessoaDAO();
        
        if($pessoaDAO->reactivate($pessoa)){
          echo "<script>alert('Pessoa reativada com sucesso no sistema.');"
          . "window.location = 'sd-listagem.php';</script>";
      }else{
       echo "<script>alert('Erro ao reativar pessoa. Contate o administrador do sistema para mais detalhes.');"
       . "window.location = 'sd-listagem.php';</script>";
   }
}
}

}