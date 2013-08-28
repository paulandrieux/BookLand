<?php

    // Cet objet concerne toutes les images

    class img {
        protected $idBook;
        protected $imgBookId;
        protected $imgName;
        protected $imgDescription;

        public function __construct ($idBook, $imgBookId, $imgName, $imgDescription) {
            $this -> idBook = $idBook;
            $this -> imgBookId = $imgBookId;
            $this -> imgName = $imgName;
            $this -> imgDescription = $imgDescription;
        }

        public function getIdBook () {
            return $this -> idBook;
        }
        public function setIdBook ($setData) {
            $this -> idBook = $setData;
        }

        public function getImgBookId () {
            return $this -> imgBookId;
        }
        public function setImgBookId ($setData) {
            $this -> imgBookId = $setData;
        }

        public function getImgName () {
            return $this -> imgName;
        }
        public function setImgName ($setData) {
            $this -> imgName = $setData;
        }

        public function getImgDescription () {
            return $this -> imgDescription;
        }
        public function setImgDescription ($setData) {
            $this -> imgDescription = $setData;
        }

        public function addImginDb ($pdo) {
            $req = $pdo -> prepare('INSERT INTO images SET imgBookId=:imgBookId, imgName=:imgName, imgDescription=:imgDescription');
            $parametres = array('imgBookId' => $this -> getImgBookId(), 'imgName' => $this -> getImgName(), 'imgDescription' => $this -> getImgDescription());
            $req -> execute($parametres);
        }

    }
?>