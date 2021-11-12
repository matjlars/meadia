<?php
namespace models;

class show extends \funky\model{
	public static function fields(){
		return f()->load->fields([
			['name', 'text'],
		]);
	}
}