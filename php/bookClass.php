<?php

    // Cet objet concerne toutes informations necessaire à un book

    class book {
        protected $idBook;
        protected $creationDate;
        protected $lastName;
        protected $firstName;
        protected $mail;
        protected $phone;
        protected $website;
        protected $description;

        public function __construct ($creationDate, $lastName, $mail, $phone, $website, $description) {
            $this -> creationDate = $creationDate;
            $this -> lastName = $lastName;
            $this -> firstName = $firstName;
            $this -> mail = $mail;
            $this -> phone = $phone;
            $this -> website = $website;
            $this -> description = $description;
        }

        public function getIdBook () {
            return $this -> idBook;
        }
        public function setIdBook ($setData) {
            $this -> idBook = $setData;
        }

        public function getCreationDate () {
            return $this -> creationDate;
        }
        public function setCreationDate ($setData) {
            $this -> creationDate = $setData;
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

        public function getMail () {
            return $this -> mail;
        }
        public function setMail ($setData) {
            $this -> mail = $setData;
        }

        public function getPhone () {
            return $this -> phone;
        }
        public function setPhone ($setData) {
            $this -> phone = $setData;
        }

        public function getWebsite () {
            return $this -> website;
        }
        public function setWebsite ($setData) {
            $this -> website = $setData;
        }

        public function getDescription () {
            return $this -> description;
        }
        public function setDescription ($setData) {
            $this -> description = $setData;
        }

    }
?>