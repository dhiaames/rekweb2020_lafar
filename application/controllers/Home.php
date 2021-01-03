<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelcrud');
        $this->load->library('upload');
        $this->load->library('pagination');
    }

    // Ambil data
    public function index()
    {

        $cari = $this->input->get('cari');
        $page = $this->input->get('per_page');

        $search = array('nama_menu' => $cari);

        $batas =  5;
        if (!$page) :
            $offset = 0;
        else :
            $offset = $page;
        endif;

        $config['page_query_string'] = TRUE;
        $config['base_url']          = base_url() . 'index.php/home/?cari=' . $cari;
        $config['total_rows']        = $this->modelcrud->jumlah_row($search);

        $config['per_page']          = $batas;
        $config['uri_segment']        = $page;

        $config['full_tag_open']     = '<ul class="pagination">';
        $config['full_tag_close']   = '<ul>';

        $config['first_link']       = 'first';
        $config['first_tag_open']   = '<li><a>';
        $config['first_tag_close']   = '</a></li>';

        $config['last_link']         = 'last';
        $config['last_tag_open']     = '<li><a>';
        $config['last_tag_close']   = '</a></li>';

        $config['next_link']         = '&raquo;';
        $config['next_tag_open']     = '<li><a>';
        $config['next_tag_close']   = '</a></li>';

        $config['prev_link']         = '&laquo;';
        $config['prev_tag_open']     = '<li><a>';
        $config['prev_tag_close']   = '</a></li>';

        $config['cur_tag_open']     = '<li class="active"><a>';
        $config['cur_tag_close']     = '</a></li>';

        $config['num_tag_open']     = '<li><a>';
        $config['num_tag_close']     = '</a></li>';

        $this->pagination->initialize($config);
        $data['pagination']   = $this->pagination->create_links();
        $data['jumlah_page'] = $page;


        $data['data'] = $this->modelcrud->get($batas, $offset, $search);

        $this->load->view('home', $data);
    }

    // untuk menampilkan halaman tambah data
    public function tambah()
    {
        return $this->load->view('tambah_data');
    }

    // untuk memasukan data ke database
    public function insertdata()
    {
        $nama_menu   = $this->input->post('nama_menu');
        $harga_menu = $this->input->post('harga_menu');

        // get foto
        $config['upload_path'] = './assets/img/menu';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];

        $this->upload->initialize($config);

        //Kondisi upload berhasil/tidak 
        if (!empty($_FILES['fotopost']['name'])) {
            if ($this->upload->do_upload('fotopost')) {
                $foto_menu = $this->upload->data();
                $data = array(
                    'nama_menu'       => $nama_menu,
                    'foto_menu'       => $foto_menu['file_name'],
                    'harga_menu'     => $harga_menu,
                );
                $this->modelcrud->insert($data);
                redirect('home');
            } else {
                die("Data Gagal Ditambahkan / File gambar besar");
            }
        } else {
            echo "Ada data yang belum diisi";
        }
    }

    // delete
    public function deletedata($id_menu, $foto_menu)
    {
        $path = './assets/img/menu/';
        @unlink($path . $foto_menu);

        $where = array('id_menu' => $id_menu);
        $this->modelcrud->delete($where);
        return redirect('home');
    }

    // edit
    public function edit($id_menu)
    {
        $kondisi = array('id_menu' => $id_menu);

        $data['data'] = $this->modelcrud->get_by_id($kondisi);
        return $this->load->view('edit_data', $data);
    }

    // update
    public function updatedata()
    {
        $id_menu   = $this->input->post('id_menu');
        $nama_menu = $this->input->post('nama_menu');
        $harga_menu = $this->input->post('harga_menu');

        $path = './assets/img/menu/';

        $kondisi = array('id_menu' => $id_menu);

        // get foto
        $config['upload_path'] = './assets/img/menu';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];

        $this->upload->initialize($config);
        //Kondisi upload berhasil/tidak
        if (!empty($_FILES['fotopost']['name'])) {
            if ($this->upload->do_upload('fotopost')) {
                $foto_menu = $this->upload->data();
                $data = array(
                    'nama_menu'       => $nama_menu,
                    'foto_menu'       => $foto_menu['file_name'],
                    'harga_menu'     => $harga_menu,
                );
                // hapus foto yang sebelumnya
                @unlink($path . $this->input->post('filelama'));

                $this->modelcrud->update($data, $kondisi);
                redirect('home');
            } else {
                die("Data Gagal Update / Foto terlalu besar");
            }
        } else {
            echo "Ada data yang belum diisi";
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('is_login');
        redirect('welcome');
    }
}
