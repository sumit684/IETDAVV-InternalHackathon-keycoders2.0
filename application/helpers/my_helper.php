<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//protected $CI;
if ( ! function_exists('loadView'))
{
	function loadView($CI, $body, $data = null){
		if($data != null)
			$CI->load->view($CI->header, $data);
		else
			$CI->load->view($CI->header);
		$CI->load->view($body);
		$CI->load->view($CI->footer);
	}
}