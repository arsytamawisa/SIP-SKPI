<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login_admin($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$ambil = $this->db->get('admin');
		$cek = $ambil->num_rows();

		if($cek==1){
			$akun = $ambil->row_array();
			$this->session->set_userdata("admin",$akun);
			return 'admin';
		}
		else{
			return 'gagal';
		}
	}

	function login_admin_prodi($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$ambil = $this->db->get('admin_prodi');
		$cek = $ambil->num_rows();

		if($cek==1){
			$akun = $ambil->row_array();
			$this->session->set_userdata("admin_prodi",$akun);
			return 'admin_prodi';
		}
		else{
			return 'gagal';
		}
	}

	function login_mahasiswa($username,$password)
	{
		$this->db->where('nim', $username);
		$this->db->where('password', $password);

		$ambil = $this->db->get('mahasiswa');
		$cek = $ambil->num_rows();

		if($cek==1){
			$akun = $ambil->row_array();
			$this->session->set_userdata("mahasiswa",$akun);
			return 'mahasiswa';
		}
		else{
			return 'gagal';
		}
	}

	function lupa_password($email)
	{
		include_once APPPATH.'third_party/phpmailer/PHPMailerAutoload.php';

		$this->db->where('email', $email);
		$ambil = $this->db->get('mahasiswa');

		if($ambil->num_rows() == 1)
		{

			function randomString($length = 10, $chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ')
			{
				if($length > 0)
				{
					$len_chars = (strlen($chars) - 1);
					$the_chars = $chars{rand(0, $len_chars)};
					for ($i = 1; $i < $length; $i = strlen($the_chars))
					{
						$r = $chars{rand(0, $len_chars)};
						if ($r != $the_chars{$i - 1}) $the_chars .=  $r;
					}
					return $the_chars;
				}
			}

			$password = randomString();

			$this->db->set('password',"'".sha1($password)."'",FALSE);
			$this->db->where('email', $email);
			$this->db->update('mahasiswa');

			$mail = new PHPMailer();
			$mail->IsSMTP();

			$isi = "Password anda yang baru adalah :".$password;

			$mail->SMTPOptions = array (
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);

			$mail->Host 		= "smtp.gmail.com";
			$mail->SMTPDebug 	= 0;
			$mail->SMTPAuth 	= "tls";
			$mail->Port 		= 587;
			$mail->Username 	= "revenero@gmail.com";
			$mail->Password 	= "waskita20";

			$mail->SetFrom('revenero@gmail.com','Admin');
			$mail->AddReplyTo('revenero@gmail.com','Admin');

			$mail->Subject 	= "Email lupa password";
			$mail->AltBody 	= "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur aut at quod assumenda officiis.";
			$mail->MsgHTML("$isi");
			$address = $email;
			$mail->AddAddress($address,$email);
			$mail->Send();

		}
		else
		{
			return 'gagal';
		}

	}
}