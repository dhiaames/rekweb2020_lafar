<?php

class Modelcrud extends CI_Model
{

    //Fungsi untuk pagination
    public function get($batas = NULL, $offset = NULL, $cari = NULL)
    {
        if ($batas != NULL) {
            $this->db->limit($batas, $offset);
        }
        if ($cari != NULL) {
            $this->db->or_like($cari);
        }
        $this->db->from('menu');
        $query = $this->db->get();
        return $query->result();
    }

    //hitung row tabel
    public function jumlah_row($search)
    {
        $this->db->or_like($search);
        $query = $this->db->get('menu');

        return $query->num_rows();
    }

    //Ambil data berdasarkan ID
    public function get_by_id($kondisi)
    {
        $this->db->from('menu');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }

    //Tambah
    public function insert($data)
    {
        $this->db->insert('menu', $data);
        return TRUE;
    }

    //delete
    public function delete($where)
    {
        $this->db->where($where);
        $this->db->delete('menu');
        return TRUE;
    }

    //update
    public function update($data, $kondisi)
    {
        $this->db->update('menu', $data, $kondisi);
        return TRUE;
    }
}
