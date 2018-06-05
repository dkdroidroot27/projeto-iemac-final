<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Pessoa{
    
    private $idpessoa;
    private $nomepessoa;
    private $endpessoa;
    private $emailpessoa;
    private $telpessoa;
    private $paipessoa;
    private $maepessoa;
    private $statuspessoa;
    
    function getIdpessoa() {
        return $this->idpessoa;
    }

    function getNomepessoa() {
        return $this->nomepessoa;
    }

    function getEndpessoa() {
        return $this->endpessoa;
    }

    function getEmailpessoa() {
        return $this->emailpessoa;
    }

    function getTelpessoa() {
        return $this->telpessoa;
    }

    function getPaipessoa() {
        return $this->paipessoa;
    }

    function getMaepessoa() {
        return $this->maepessoa;
    }
    
      function getStatuspessoa() {
        return $this->statuspessoa;
    }

    function setIdpessoa($idpessoa) {
        $this->idpessoa = $idpessoa;
    }

    function setNomepessoa($nomepessoa) {
        $this->nomepessoa = $nomepessoa;
    }

    function setEndpessoa($endpessoa) {
        $this->endpessoa = $endpessoa;
    }

    function setEmailpessoa($emailpessoa) {
        $this->emailpessoa = $emailpessoa;
    }

    function setTelpessoa($telpessoa) {
        $this->telpessoa = $telpessoa;
    }

    function setPaipessoa($paipessoa) {
        $this->paipessoa = $paipessoa;
    }

    function setMaepessoa($maepessoa) {
        $this->maepessoa = $maepessoa;
    }
    
      function setStatuspessoa($statuspessoa) {
        $this->statuspessoa = $statuspessoa;
    }


}