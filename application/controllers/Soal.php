<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {
	public function soal3()
	{
		$number = range(1,100);
		$result = array_map(function($num){
			if ($num%3==0 && $num%5==0) {
				return 'Karirpad';
			} elseif ($num%5==0) {
				return 'Pad';
			} elseif ($num%3==0) {
				return 'Karir';
			} else {
				return $num;
			}
		}, $number);

		$data['result'] = implode(', ',$result);

		$header['active'] = 'soal3';
		$this->load->view('includes/header', $header);
		$this->load->view('soal3', $data);
		$this->load->view('includes/footer');
	}

	function soal4(){
		$header['active'] = 'soal4';
		$this->load->view('includes/header', $header);
		$this->load->view('soal4');
		$this->load->view('includes/footer');
	}

	function frontend(){
		$this->load->view('frontend');
	}
}
