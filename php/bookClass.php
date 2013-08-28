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

        public function __construct ($lastName, $firstName, $mail, $phone, $website, $description) {
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

        public function addBookInDb ($pdo) {
            $searchplace = $pdo -> prepare('SELECT mail FROM book WHERE mail=?');
            $paramsearch = array($this -> getMail());
            $searchplace -> execute($paramsearch);

            if ($searchplace -> rowCount() > 0) {
                return "already in ddb";
            } else {
                $req = $pdo -> prepare('INSERT INTO book SET firstName=:firstName, lastName=:lastName, mail=:mail, phone=:phone, website=:website, description=:description');
                $parametres = array('firstName' => $this -> getFirstName(), 'lastName' => $this -> getLastName(), 'mail' => $this -> getMail(), 'phone' => $this -> getPhone(), 'website' => $this -> getWebsite(), 'description' => $this -> getDescription());
                $req -> execute($parametres);
            }
        }

    }
?>