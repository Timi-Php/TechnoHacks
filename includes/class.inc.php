<?php 
	class sum_of_two_nums
	{
		public $first_no; 
		public $sec_no; 

		function set_no($f_name,$s_num)
		{
			$this->first_no=$f_name;
			$this->sec_no=$s_num;
		}

		//Add both number
		function getNo()
		{
			return	($this->first_no + $this->sec_no);
		}
	}


 ?>