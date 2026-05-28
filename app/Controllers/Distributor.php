<?php

namespace App\Controllers;

use App\Models\DistribusiModel;

class Distributor extends BaseController
{
    protected $distribusiModel;

    public function __construct()
    {
        $this->distribusiModel = new DistribusiModel();
    }

    // dashboard
    public function index()
    {
        $data = [
            'title' => 'Dashboard Distributor'
        ];

        return view('distributor/v_dashboard', $data);
    }

    // data distribusi
    public function distribusi()
    {
        $db = \Config\Database::connect();

        $builder = $db->table('distribusi');

        $builder->select('
            distribusi.*,
            panen.kode_batch,
            penggilingan.kualitas_beras
        ');

        $builder->join(
            'penggilingan',
            'penggilingan.id = distribusi.penggilingan_id'
        );

        $builder->join(
            'panen',
            'panen.id = penggilingan.panen_id'
        );

        $query = $builder->get();

        $data = [
            'title' => 'Data Distribusi',
            'distribusi' => $query->getResultArray()
        ];

        return view('distributor/v_index', $data);
    }

    public function create()
    {
        $db = \Config\Database::connect();

        $builder = $db->table('penggilingan');

        $builder->select('
        penggilingan.id,
        panen.kode_batch,
        penggilingan.kualitas_beras
    ');

        $builder->join(
            'panen',
            'panen.id = penggilingan.panen_id'
        );

        $query = $builder->get();

        $data = [
            'title' => 'Tambah Distribusi',
            'penggilingan' => $query->getResultArray()
        ];

        return view('distributor/v_create', $data);
    }

    public function store()
    {
        $this->distribusiModel->save([

            'penggilingan_id' =>
            $this->request->getPost('penggilingan_id'),

            'tujuan_distribusi' =>
            $this->request->getPost('tujuan_distribusi'),

            'tanggal_distribusi' =>
            $this->request->getPost('tanggal_distribusi'),

            'status_distribusi' =>
            $this->request->getPost('status_distribusi'),

        ]);

        return redirect()->to('/data-distribusi');
    }

    public function edit($id)
    {
        $db = \Config\Database::connect();

        $builder = $db->table('penggilingan');

        $builder->select('
        penggilingan.id,
        panen.kode_batch
    ');

        $builder->join(
            'panen',
            'panen.id = penggilingan.panen_id'
        );

        $query = $builder->get();

        $data = [
            'title' => 'Edit Distribusi',
            'distribusi' => $this->distribusiModel->find($id),
            'penggilingan' => $query->getResultArray()
        ];

        return view('distributor/v_edit', $data);
    }

    public function update($id)
    {
        $this->distribusiModel->update($id, [

            'penggilingan_id' =>
            $this->request->getPost('penggilingan_id'),

            'tujuan_distribusi' =>
            $this->request->getPost('tujuan_distribusi'),

            'tanggal_distribusi' =>
            $this->request->getPost('tanggal_distribusi'),

            'status_distribusi' =>
            $this->request->getPost('status_distribusi'),

        ]);

        return redirect()->to('/data-distribusi');
    }

    public function delete($id)
    {
        $this->distribusiModel->delete($id);

        return redirect()->to('/data-distribusi');
    }
}