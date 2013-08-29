<?php

    // Cet objet concerne toutes informations necessaire à un book

    class book {
        protected $id;
        protected $creationDate;
        protected $lastName;
        protected $firstName;
        protected $mail;
        protected $phone;
        protected $website;
        protected $description;
        protected $commentaire1;
        // protected $commentaire2;
        // protected $commentaire3;
        // protected $commentaire4;

        public function __construct ($id, $creationDate, $lastName, $firstName, $mail, $phone, $website, $description, $commentaire1) {
            $this -> id = $id;
            $this -> creationDate = $creationDate;
            $this -> lastName = $lastName;
            $this -> firstName = $firstName;
            $this -> mail = $mail;
            $this -> phone = $phone;
            $this -> website = $website;
            $this -> description = $description;
            $this -> commentaire1 = $commentaire1;
            // $this -> commentaire2 = $commentaire2;
            // $this -> commentaire3 = $commentaire3;
            // $this -> commentaire4 = $commentaire4;
        }

        public function getIdBook () {
            return $this -> id;
        }
        public function setIdBook ($setData) {
            $this -> id = $setData;
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

        public function getCommentaire1 () {
            return $this -> commentaire1;
        }
        public function setCommentaire1 ($setData) {
            $this -> commentaire1 = $setData;
        }

        // public function getCommentaire2 () {
        //     return $this -> commentaire2;
        // }
        // public function setCommentaire2 ($setData) {
        //     $this -> commentaire2 = $setData;
        // }

        // public function getCommentaire3 () {
        //     return $this -> commentaire3;
        // }
        // public function setCommentaire3 ($setData) {
        //     $this -> commentaire3 = $setData;
        // }

        // public function getCommentaire4 () {
        //     return $this -> commentaire4;
        // }
        // public function setCommentaire4 ($setData) {
        //     $this -> commentaire4 = $setData;
        // }
    }
?>