<?php
class Latihan1 extends Ci_controller
{
    public function index()
    {
        echo "Selamat Datang... Selamat belajar web programming";
    }

    public function penjumlahan ($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari". $n1." + ". $n2." = ".$hasil;
    }
}