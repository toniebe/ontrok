<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('tools');
        $this->load->helper(array('form','url'));
        $this->load->database();
    }
	public function index()
	{
        //$this->load->library('tools');
        //$file='./data.xlsx';
        //$this->tools->importdata($file,'client',5,FALSE);
        //$this->tools->exportdata('client','tes','tes2','dataexport',FALSE);
        $this->load->view('toolphpexcel');
	}

    public function importdata()
    {
        $tb=$this->input->post('tb1');
        $fl=$this->input->post('file');
        // $br=$this->input->post('mulai');
        $br=2;
        $config['upload_path'] = './';
        $config['allowed_types'] = 'xls|xlsx';
        $config['max_size'] = 100000 * 8;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);


        if ($this->upload->do_upload('file'))
        {
            $data = $this->upload->data();
            $nama=$data['file_name'];
            if(file_exists("./".$nama))
            {
                $file="./".$nama;
                $this->tools->importdata($file,$tb,$br,TRUE);
                unlink($file);
                echo json_encode('Berhasil import data');
            }else{
                echo json_encode('Gagal, karena kesalahan file atau file tidak ditemukan');
            }
        }else{
            echo json_encode('Gagal upload file');
        }

    }

    function exportdata()
    {
        $tb=$this->input->post('tb1');
        $title=$this->input->post('title');
        $desc=$this->input->post('description');

        $namafile="Export ".$tb."-".time();
        $folderpath="./";
        $this->tools->exportdata($tb,$title,$desc,$namafile,$folderpath);
        if(file_exists("./".$namafile.'.xls'))
        {
            echo json_encode('<a href="'.base_url().$namafile.'.xls" target="_blank"> Download File</a>');
        }else{
            echo json_encode('Gagal, karena kesalahan file atau file '.$namafile.'.xls tidak ditemukan');
        }
    }


}
