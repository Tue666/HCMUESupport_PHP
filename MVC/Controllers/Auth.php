<?php
class Auth extends ViewModel
{
	public function Index()
	{
		$this->loadView('Auth', 'Index', [
			'title' => 'Auth',
		]);
	}
	public function Update()
	{
		if (isset($_POST['update-btn'])) {
			$accounts = $this->getModel('AccountsDAL');
			$name = strtolower($_POST['update-name']);
			$email = $_POST['update-email'];
			$address = $_POST['update-address'];
			$phone = $_POST['update-phone'];

			if (json_decode($accounts->updateAccount($_SESSION['USER_ID_SESSION'],$name,$email,$phone,$address,0,1))) {
				header('Location:' . BASE_URL);
			}
			else{
				$this->loadView('Auth', 'Index', [
					'title' => 'Auth',
					'message' => 'Lỗi. Liên hệ BCH để hỗ trợ :D',
					'type' => 'error'
				]);
			}
		}
	}
}