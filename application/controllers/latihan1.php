<?php 
class Latihan1 extends CI_Controller 
{ 
    public function index() 
    { 
        echo "Selamat Datang.. selamat belajar Web Programming"; 
        //$this->load->view('view-latihan1'); 
    } 
 
    public function penjumlahan($n1, $n2) 
    { 
        $this->load->model('Model_latihan1'); 
        public function jumlah($n1 = null, $n2 = null) 
        { 
            $this->nilai1 = $nil1; 
            $this->nilai2 = $nil2; 
            $this->hasil = $this->nilai1 + $this->nilai2; 
            return $this->hasil; 
        } 
