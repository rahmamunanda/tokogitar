<?php

namespace App\Controllers;

use App\Models\GitarsModel;

class Gitars extends BaseController
{
    protected $gitarsModel;

    public function __construct()
    {
        $this->gitarsModel = new GitarsModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Gitar',
            'gitars' => $this->gitarsModel->findAll()
        ];
        return view('gitars/index', $data);
    }

    public function home()
    {
        // Data yang diteruskan ke view untuk halaman home
        $data = [
            'title' => 'Selamat Datang di Toko Gitar'
        ];
        return view('gitars/home', $data);
    }

    // Halaman Tentang Kami
    public function about()
    {
        $data = [
            'title' => 'Tentang Kami'
        ];
        return view('gitars/about', $data); // Pastikan ada file about.php di folder gitars
    }

    // Halaman Kontak Kami
    public function contact()
    {
        $data = [
            'title' => 'Kontak Kami'
        ];
        return view('gitars/contact', $data); // Pastikan ada file contact.php di folder gitars
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Gitar',
            'gitar' => $this->gitarsModel->find($id)
        ];
        return view('gitars/detail', $data);
    }

    public function add()
    {
        return view('gitars/add', ['title' => 'Tambah Gitar']);
    }

    public function create()
    {
        $this->gitarsModel->save([
            'nama_produk' => $this->request->getPost('nama_produk'),
            'merek' => $this->request->getPost('merek'),
            'jenis' => $this->request->getPost('jenis'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
        ]);
        return redirect()->to('/gitars');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Gitar',
            'gitar' => $this->gitarsModel->find($id)
        ];
        return view('gitars/edit', $data);
    }

    public function update($id)
    {
        $this->gitarsModel->update($id, [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'merek' => $this->request->getPost('merek'),
            'jenis' => $this->request->getPost('jenis'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
        ]);
        return redirect()->to('/gitars');
    }

    public function delete($id)
    {
        $this->gitarsModel->delete($id);
        return redirect()->to('/gitars');
    }
}
