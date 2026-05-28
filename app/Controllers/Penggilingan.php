<?php

namespace App\Controllers;

use App\Models\PenggilinganModel;
use App\Models\PanenModel;

class Penggilingan extends BaseController
{
    protected $penggilinganModel;
    protected $panenModel;

    public function __construct()
    {
        $this->penggilinganModel = new PenggilinganModel();
        $this->panenModel = new PanenModel();
    }

    //dashboard
    public function index()
    {
        $data = [
            'title' => 'Dashboard Penggilingan',
        ];
        return view('penggilingan/v_dashboard', $data);
    }

    // Menampilkan daftar penggilingan
    public function dataPenggilingan()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('penggilingan');
        $builder->select('penggilingan.*, panen.kode_batch');
        $builder->join('panen', 'panen.id = penggilingan.panen_id');
        $query = $builder->get();
        $data = [
            'title' => 'Data Penggilingan',
            'penggilingan' => $query->getResultArray()
        ];
        return view('penggilingan/v_index', $data);
    }

    // Menampilkan form tambah penggilingan
    public function create()
    {
        $data = [
            'title' => 'Tambah Penggilingan',
            'panen' => $this->panenModel->findAll()
        ];
        return view('penggilingan/v_create', $data);
    }

    // Menyimpan data penggilingan
    public function store()
    {
        $this->penggilinganModel->save([
            'panen_id' => $this->request->getPost('panen_id'),
            'tanggal_giling' => $this->request->getPost('tanggal_giling'),
            'kualitas_beras' => $this->request->getPost('kualitas_beras'),
            'catatan' => $this->request->getPost('catatan'),
        ]);
        return redirect()->to('/data-penggilingan');
    }

    // Menampilkan form edit penggilingan
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Penggilingan',
            'penggilingan' => $this->penggilinganModel->find($id),
            'panen' => $this->panenModel->findAll()
        ];
        return view('penggilingan/v_edit', $data);
    }

    // Menyimpan update data penggilingan
    public function update($id)
    {
        $this->penggilinganModel->update($id, [
            'panen_id' => $this->request->getPost('panen_id'),
            'tanggal_giling' => $this->request->getPost('tanggal_giling'),
            'kualitas_beras' => $this->request->getPost('kualitas_beras'),
            'catatan' => $this->request->getPost('catatan'),
        ]);
        return redirect()->to('/data-penggilingan');
    }

    public function delete($id)
    {
        $this->penggilinganModel->delete($id);
        return redirect()->to('/data-penggilingan');
    }
}