<?php
	header("Content-Type:text/html; charset=utf-8");
	class calculator{
		private $str;
		public $op;
		private $result;
		public $array_num = array();
		public function __construct($str){
			$symbol = array('+', '-', '*', '/' );
			$flag =array(0,0,0,0);
			for ($i=0; $i <=3 ; $i++) { 
				$flag[$i] = substr_count($str, "$symbol[$i]");
			}
			for ($i=0; $i <3; $i++) { 
				switch($flag){
					case $flag[0] == 1:
						$this->op = '+';
						break;
					case $flag[1] == 1;
						$this->op = '-';
						break;
					case $flag[2] == 1:
						$this->op = '*';
						break;
					case $flag[3] == 1:
						$this->op = '/';
						break;
					default:
						die('未知错误');
						break;
				}
			}
			$op = $this->op;
			$array_num = $this->array_num;
			$array_num = explode($op, $str);
			for($i=0;$i<count($array_num);$i++) {
				$array_num[$i] = floatval($array_num[$i]);
			}
			$this->array_num =  $array_num;
		}
		function option($op){
			
			$array_num = $this->array_num;
			switch ($op) {
				case '+':
					$this->result = $array_num[0] +$array_num[1];
					echo "result = ".$this->result."</br>";
					break;
				case '/':
					if ($array_num[1] == 0) {
					die("除数不能为0！")."</br>";
					}
					else{
					$this->result = (float)$array_num[0] / $array_num[1];
					echo "result = ".$this->result."</br>";
					}
					break;
				case '*':
					$this->result = $array_num[0] * $array_num[1];
					echo "result = ".$this->result."</br>";
					break;
				case '-':
					$this->result = $array_num[0] - $array_num[1];
					echo "result = ".$this->result."</br>";
					break;
				default:
					die("未知错误");
					break;
			}
		}
	}
	$str_get = $_POST['num'];
	$calculator1 = new calculator("$str_get");
	$calculator1->option($calculator1->op);