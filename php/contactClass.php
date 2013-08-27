<?php

    // Cet objet concerne toutes informations necessaire au contact d'une personne ayant son book sur bookland

    class contact {
        protected $idContact;
        protected $idBookContacted;
        protected $lastName;
        protected $firstName;
        protected $phone;
        protected $mail;
        protected $companyName;
        protected $companyAdress;
        protected $companyZip;
        protected $companyCity;
        protected $messageObject;
        protected $messageContent;


        public function __construct ($idBookContacted, $lastName, $firstName, $phone, $mail, $companyName, $companyAdress, $companyZip, $companyCity, $messageObject, $messageContent) {
            $this -> idBookContacted = $idBookContacted;
            $this -> lastName = $lastName;
            $this -> firstName = $firstName;
            $this -> phone = $phone;
            $this -> mail = $mail;
            $this -> companyName = $companyName;
            $this -> companyAdress = $companyAdress;
            $this -> companyZip = $companyZip;
            $this -> companyCity = $companyCity;
            $this -> messageObject = $messageObject;
            $this -> messageContent = $messageContent;
        }

        public function getIdContact () {
            return $this -> idContact;
        }
        public function setIdContact ($setData) {
            $this -> idContact = $setData;
        }

        public function getIdBookContacted () {
            return $this -> idBookContacted;
        }
        public function setIdBookContacted ($setData) {
            $this -> idBookContacted = $setData;
        }

        public function getLastName () {
            return $this -> lastName;
        }
        public function setLastName ($setData) {
            $this -> lastName = $setData;
        }

        public function getFirstName () {
            return $this -> firstName;
        }
        public function setFirstName ($setData) {
            $this -> firstName = $setData;
        }

        public function getPhone () {
            return $this -> phone;
        }
        public function setPhone ($setData) {
            $this -> phone = $setData;
        }

        public function getMail () {
            return $this -> mail;
        }
        public function setMail ($setData) {
            $this -> mail = $setData;
        }

        public function getCompanyName () {
            return $this -> companyName;
        }
        public function setCompanyName ($setData) {
            $this -> companyName = $setData;
        }

        public function getCompanyAdress () {
            return $this -> companyAdress;
        }
        public function setCompanyAdress ($setData) {
            $this -> companyAdress = $setData;
        }

        public function getCompanyZip () {
            return $this -> companyZip;
        }
        public function setCompanyZip ($setData) {
            $this -> companyZip = $setData;
        }

        public function getCompanyCity () {
            return $this -> companyCity;
        }
        public function setCompanyCity ($setData) {
            $this -> companyCity = $setData;
        }

        public function getMessageObject () {
            return $this -> messageObject;
        }
        public function setMessageObject ($setData) {
            $this -> messageObject = $setData;
        }

        public function getId () {
            return $this -> id;
        }
        public function setId ($setData) {
            $this -> id = $setData;
        }

        public function getMessageContent () {
            return $this -> messageContent;
        }
        public function setMessageContent ($setData) {
            $this -> messageContent = $setData;
        }

    }
?>