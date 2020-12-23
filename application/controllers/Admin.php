<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Admin';

        $data['admindata'] = $this->Admin_model->getAdmin();

        $data['countKonsumen'] = $this->Admin_model->getJmlKonsum();
        $data['countVendor'] = $this->Admin_model->getJmlVendor();
        $data['countBarang'] = $this->Admin_model->getJmlBarang();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates_admin/footer', $data);
    }

    public function accVendor()
    {
        $data['title'] = 'Acc Vendor By Admin';

        $data['admindata'] = $this->Admin_model->getAdmin();

        $data['pesanan'] = $this->Admin_model->getAllPesanan();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/accVendor', $data);
        $this->load->view('templates_admin/footer', $data);
    }

    public function toltervendor($status, $id)
    {
        if ($status == 1) {
            $status = 'sedang diproses';
            $data = [
                'status_pesanan' => $status,
            ];

            $this->Admin_model->tolakatauterima($data, $id);
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Pesanan Berhasil Diterima!
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>'
            );
            redirect('admin/accVendor');
        } elseif ($status == 0) {
            $status = 'pesanan ditolak';
            $data = [
                'status_pesanan' => $status,
            ];

            $this->Admin_model->tolakatauterima($data, $id);
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Pesanan Berhasil Ditolak!
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>'
            );
            redirect('admin/accVendor');
        } elseif ($status == 3) {
            $status = 'pesanan dikirim';
            $data = [
                'status_pesanan' => $status,
            ];

            $this->Admin_model->tolakatauterima($data, $id);
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Pesanan Berhasil Dikirimkan!
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
      </div>'
            );
            redirect('admin/accVendor');
        } elseif ($status == 4) {
            $status = 'pesanan selesai';
            $data = [
                'status_pesanan' => $status,
            ];

            $this->Admin_model->tolakatauterima($data, $id);
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Pesanan Berhasil Diterima!
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
      </div>'
            );
            redirect('konsumen/statusPemesanan');
        }
    }

    public function detailPesanan($id)
    {
        $data['title'] = 'Acc Vendor By Admin';

        $data['admindata'] = $this->Admin_model->getAdmin();

        $data['pesanan'] = $this->Admin_model->getAllPesanan();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/detailPesanan', $data);
        $this->load->view('templates_admin/footer', $data);
    }

    public function allKonsumen()
    {
        $data['title'] = 'Data Konsumen';

        $data['admindata'] = $this->Admin_model->getAdmin();
        $data['konsum'] = $this->Admin_model->getAllKonsum();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/dataKonsumen', $data);
        $this->load->view('templates_admin/footer', $data);
    }

    public function allVendor()
    {
        $data['title'] = 'Data Vendor';

        $data['admindata'] = $this->Admin_model->getAdmin();
        $data['vendor'] = $this->Admin_model->getAllVendor();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/dataVendor', $data);
        $this->load->view('templates_admin/footer', $data);
    }

    public function barang()
    {
        $data['title'] = 'Dashboard Admin';

        $data['admindata'] = $this->Admin_model->getAdmin();

        $data['countKonsumen'] = $this->Admin_model->getJmlKonsum();
        $data['countVendor'] = $this->Admin_model->getJmlVendor();
        $data['countBarang'] = $this->Admin_model->getJmlBarang();
        $data['allBarang'] = $this->Admin_model->getAllBarang();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/barang', $data);
        $this->load->view('templates_admin/footer', $data);
    }

    public function dataBarang($idbarang)
    {
        $data['title'] = 'Dashboard Admin';

        $data['admindata'] = $this->Admin_model->getAdmin();

        $data['countKonsumen'] = $this->Admin_model->getJmlKonsum();
        $data['countVendor'] = $this->Admin_model->getJmlVendor();
        $data['countBarang'] = $this->Admin_model->getJmlBarang();

        $data['allKategori'] = $this->Admin_model->getAllKategori($idbarang);
        $namaKolom = $this->Admin_model->getAllKategori($idbarang);
        foreach ($namaKolom as $kolom) {
            $nama = $kolom['nama_kategori'];
        }
        $namatanpaspasi = str_replace(' ', '', $nama);
        $data['allKolomBarang'] = $this->Admin_model->getAllKolomBarang(
            $namatanpaspasi
        );

        $data['allDataBarang'] = $this->Admin_model->getAllDataBarang(
            $namatanpaspasi
        );

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer', $data);
    }

    public function tambahKategori()
    {
        $data['title'] = 'Dashboard Admin';

        $data['admindata'] = $this->Admin_model->getAdmin();

        $data['countKonsumen'] = $this->Admin_model->getJmlKonsum();
        $data['countVendor'] = $this->Admin_model->getJmlVendor();
        $data['countBarang'] = $this->Admin_model->getJmlBarang();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/tambahKategori', $data);
        $this->load->view('templates_admin/footer', $data);
    }

    public function addKategori()
    {
        $namaKategori = $this->Admin_model->getAllNamaKategori();
        $inputNamaKategori = $this->input->post('namaKategori');

        foreach ($namaKategori as $kategori) {
            if ($kategori['nama_kategori'] == $inputNamaKategori) {
                $this->session->set_flashdata(
                    'pesan',
                    '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Nama Kategori Sudah Ada!!!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
                );
                redirect('admin/tambahKategori');
            } else {
                $data = [
                    'nama_kategori' => $this->input->post('namaKategori'),
                ];
                $this->Admin_model->addKategori($data);
                $namatable = str_replace(' ', '', $inputNamaKategori);
                $this->Admin_model->addTable($namatable);
                redirect('admin/barang');
            }
        }
    }
}