<?php
class Kotak extends CFormModel
	{
		public $panjang;
		public $lebar;
		public $tebal;
		public $jari;
		public $tinggi;

		public function rules()

		{
			return array (
				array('panjang, lebar, tebal , jari, tinggi ' , 'required'),
				array('panjang, lebar, tebal, jari, tinggi ' , 'numerical','integerOnly'=>true),
			);

		}

		public function attributeLabels()
		{
			return array(
				'panjang'=>'panjang Kotak',
				'lebar'=>'Lebar Kotak',
				'tebal'=>'Tebal Kotak',
				'jari'=>'r ',
				'tinggi'=>'Tinggi',
				);

		}

		public function luas()
		{
			return $this->panjang * $this->lebar;
		}
		
		public function keliling()
		{
			return 2 * ($this->panjang+$this->lebar);
		}

		public function volume ()
		{
			return $this->panjang * $this->lebar * $this->tebal;
		}

		public function luaslingkaran()
		{
			return 22/7 * ($this->jari*$this->jari);
		} 

		public function silinder()
		{
			return 22/7 * ($this->jari*$this->jari * $this->tinggi);
		} 

}