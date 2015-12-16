<?php
	/**
	 一5KG物体在水平桌面上，动摩擦因数μ为0.5，受到斜上方30°角的拉力f
     40N,2s后撤出拉力，求物体运动的距离？
	*/
	header("Content-Type:text/html; charset=utf-8");
	class Distance{
		private $f;
		private $m;
		private $u;
		private $x;
		private $g;
		private $t;
		private $a = 0;
		function __construct($f = 0, $u = 0, $m = 0, $g = 0, $t = 0){
			$this->f=$f;
			$this->m=$m;
			$this->u=$u;
			$this->g=$g;
			$this->t=$t;
		}
		function HandleA($f, $u, $m, $g, $t){
			$this->a = (($f*1.732/2)-$u*($m*$g-$f*0.5))/$m;
			$this->x = 0.5*$this->a*$t*$t+$this->a*$this->a*$t*$t/(2*$u*$m*$g);
		}
		function __destruct(){
			echo "1：结果是:".$this->x;
		}
	}
	$resultA = new Distance(40,0.5,5,10,2);
	$resultA->HandleA(40,0.5,5,10,2);
	/**
	一光滑R=1m的圆环内，小球获得初速度v0，从最低点沿轨道上升，恰好经过最高点，
	求初速度v0?
	*/
	class Balance{
		private $g;
		private $r;
		private $v0;
		function HandleB($g, $r){
			$this->g = $g;
			$this->r = $r;
			$this->v0 = sqrt(5*$this->g*$this->r);
		}
		function __destruct(){
			echo "2：结果是:".$this->v0."<br>";
		}
	}
	$resultB = new Balance();
	$resultB->HandleB(10,1);
	/**
	一倾斜角为30°的斜面，动摩擦因数u = 0.5; h = 5m;g = 10N/kg;求物体下落到底的速度
	*/
	class energy{
		private $g;
		private $h;
		private $u = 0.5;
		private $v;
		function HandleC($h, $g){
			$this->g = $g;
			$this->h = $h;
			$this->v = sqrt(2*$this->g*$this->h-$this->u*$this->g*$this->h*3/2);
		}
		function __destruct(){
			echo "3：结果是:".$this->v."<br>";
		}
	}
	$resultC = new energy(5,10);
	$resultC->HandleC(5,10);


	