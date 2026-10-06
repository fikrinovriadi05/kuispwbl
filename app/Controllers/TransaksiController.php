<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class TransaksiController extends Controller
{
    public function index()
    {
        return view('transaksi/form_transaksi');
    }
    public function simpan()
    {
        $session= session();
        $harga = $this->request->getPost('harga');
        $jumlah = $this->request->getPost('jumlah');

        $total= $harga * $jumlah;
        $data = [
            'nofaktur'  => $this->request->getPost('nofaktur'),
            'nama'      => $this->request->getPost('nama'),
            'harga'     => $harga,
            'jumlah'    => $jumlah,
            'total'     => $total,
        ];
        $data_lama = $session->get('transaksi') ?? [];
        $data_lama[] = $data;
        $session->set('transaksi', $data_lama);
        return redirect()->to('/transaksi/tampil');

        

    

        

        


    }
    public function tampil()
    {
        $data['transaksi'] = session()->get('transaksi') ?? [];
        return view('transaksi/tampil_transaksi', $data);
    }
    public function hapus()
    {
        session()->remove('transaksi');
        return redirect()->to('/transaksi');
    }
}