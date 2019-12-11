<?php
	 class c_barang extends CI_Controller
	 {

	 	function __construct()
	 	{
	 		parent :: __construct();
	 		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login_adm"));
		}
	 		$this->load->model("m_barang");
	 			$this->load->helper('url');
	 	}
	 	
	 	function index()
	 	{
	 		$data['produk']=$this->m_barang->tampil_data();
	 		$this->load->view("admin/v_barang",$data);
	 	}

	 	function tambah()
	 	{
	 		$this->load->view("admin/v_tambahbarang");
	 	}

	 	function tambah_aksi(){
		$nama_barang = $this->input->post('nama_barang');
		$kategori = $this->input->post('kategori');
		$gambar = $this->_uploadImage();
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
 
		$data = array(
			'nama_barang' => $nama_barang,
			'kategori' => $kategori,
			'gambar' => $gambar,
			'deskripsi' => $deskripsi,
			'harga' => $harga
			);
		$this->m_barang->input_data($data,'barang');
		redirect('admin/c_barang');
	}

	 	//membuat fungsi edit, cek di adress /edit
	 	function edit($id_barang){
	 		$where = array('id_barang' => $id_barang);
			$data['barang'] = $this->m_barang->edit_data($where,'barang')->result();
			$this->load->view("admin/v_editbarang",$data);
	 	}

			function update(){
			$id_barang = $this->input->post('id_barang');
			$nama_barang = $this->input->post('nama_barang');
			$kategori = $this->input->post('kategori');
			$deskripsi = $this->input->post('deskripsi');
			$harga = $this->input->post('harga');
		 
			$data = array(
				'nama_barang' => $nama_barang,
				'kategori' => $kategori,
				'deskripsi' => $deskripsi,
				'harga' => $harga
			);
		 
			$where = array(
				'id_barang' => $id_barang
			);
		 
			$this->m_barang->update_data($where,$data,'barang');
			redirect('admin/c_barang');
		}

		//membuat fungsi hapus, cek di adress /hapus
	 	function delete($id_barang){
	 		$where = array('id_barang' => $id_barang);
			$this->m_barang->hapus_data($where,'barang');
			redirect('admin/c_barang');
	 	}

	 	private function _uploadImage()
		{
		    $config['upload_path']          = './assets/upload/';
		    $config['allowed_types']        = 'gif|jpg|png|jpeg';
		    $config['file_name']            = $_FILES['gambar']['name'];
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB
		    // $config['max_width']            = 1024;
		    // $config['max_height']           = 768;

		    $this->load->library('upload', $config);

		    if ($this->upload->do_upload('gambar')) {
		        return $this->upload->data("file_name");
		    }
		    
		    return "default.jpg";
		}

	 } 
 ?>