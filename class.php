<?php
    class hesapMakinesi {
        private $sayi1 = 0;
        private $sayi2 = 0;
        private $islem = "toplama";
        private $sonuc = 0;

        public function __construct ($sayi1,$sayi2,$islem) {
            $this->sayi1 = $sayi1;
            $this->sayi2 = $sayi2;
            $this->islem = $islem;
        }

        public function topla() {
            $this->sonuc = $this->sayi1 + $this->sayi2;
            return $this->sonuc;
        }

        public function cikar() {
            $this->sonuc = $this->sayi1 - $this->sayi2;
            return $this->sonuc;
        }

        public function carp() {
            $this->sonuc = $this->sayi1 * $this->sayi2;
            return $this->sonuc;
        }

        public function bol() {
            $this->sonuc = $this->sayi1 / $this->sayi2;
            return $this->sonuc;
        }
    }
?>