<?php 

class Home extends CI_Controller
{
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id_brg)
	{
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('templates/header');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_ke_keranjang($id_brg)
	{
		$barang = $this->model_barang->find($id_brg);

		$data = array(

			'id_brg' => $barang->id_brg,
			'qty' => 1,
			'price' => $barang->harga,
			'name' => $barang->nama_brg
		);

	$this->cart->insert($data);
	redirect('home');
	}

	public function detail_keranjang()
	{
		$this->load->view('templates/header');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('home/index');
	}

	public function pembayaran()
	{
		$this->load->view('templates/header');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function proses_pesanan()
	{
		$is_processed = $this->model_invoice->index();
		if($is_processed)
		{
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('proses_pesanan');
			$this->load->view('templates/footer');
		}else{
			echo "Maaf, Pesanan Anda Gagal diproses!";
		}
	}		
}