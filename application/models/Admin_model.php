<?php
class Admin_model extends CI_model
{
    public function getAdmin()
    {
        return $this->db
            ->get_where('admin', [
                'username' => $this->session->userdata('username'),
            ])
            ->result_array();
    }

    public function getAllPesanan()
    {
        $pesanan = array('di dalam keranjang', 'pesanan selesai');
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('user', 'pemesanan.id_user = user.id_user');
        $this->db->join('kategori', 'pemesanan.id_kategori = kategori.id_kategori');
        $this->db->where_not_in('status_pesanan', $pesanan);
        return $this->db->get()->result_array();
    }

    public function tolakatauterima($data, $id)
    {
        $this->db->where('id_pesanan', $id);
        $this->db->update('pemesanan', $data);
    }

    public function getJmlKonsum()
    {
        $query = $this->db->query(
            'SELECT count(id_konsumen) jml from konsumen'
        );

        return $query->row();
    }

    public function getJmlVendor()
    {
        $query = $this->db->query('SELECT count(id_vendor) jml from vendor');

        return $query->row();
    }

    public function getJmlBarang()
    {
        $query = $this->db->query('SELECT count(idbarang) jml from barang');

        return $query->row();
    }

    public function getAllKonsum()
    {
        return $this->db->get('konsumen')->result_array();
    }

    public function getAllVendor()
    {
        return $this->db->get('vendor')->result_array();
    }
    public function getAllBarang()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function getAllKolomBarang($id)
    {
        $this->db->select('*');
        $this->db->from('INFORMATION_SCHEMA.COLUMNS');
        $this->db->where('TABLE_SCHEMA =', 'dprint');
        $this->db->where('TABLE_NAME =', $id);
        return $this->db->get()->result_array();
    }

    public function getAllDataBarang($id)
    {
        $this->db->select('*');
        $this->db->from($id);
        return $this->db->get()->result_array();
    }

    public function getAllKategori($id)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('id_kategori =', $id);
        return $this->db->get()->result_array();
    }

    public function getNamaKategori($id)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('id_kategori =', $id);
        return $this->db->get()->result_array();
    }

    public function getAllNamaKategori()
    {
        $this->db->select('nama_kategori');
        $this->db->from('kategori');
        return $this->db->get()->result_array();
    }

    public function addKategori($data)
    {
        $this->db->insert('kategori', $data);
    }

    public function addTable($namaTable)
    {
        $query = $this->db->query(
            'CREATE TABLE ' .
                $namaTable .
                " (
				ID int NOT NULL AUTO_INCREMENT,
				ID_Kategori int(11),
				kualitas varchar(255),
				PRIMARY KEY (ID)
			)"
        );
    }
}
