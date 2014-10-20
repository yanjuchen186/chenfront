<?php
class Career extends Eloquent{
	public function getCareerBasicInfo($type = 'career'){
		$sql =" SELECT
					t1.*
				FROM
					eta_basic t1
				WHERE 
					t1.type = '".$type."' ";

		$result = DB::select($sql);

		return $result;
	}

	public function getCareerData(){
		$sql =" SELECT
					t1.*
				FROM
					eta_career t1
				WHERE 
					t1.`status` = 1
				ORDER BY t1.`sort` DESC ";

		$result = DB::select($sql);

		return $result;
	}
}