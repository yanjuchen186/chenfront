<?php
class Partner extends Eloquent{
	
	public function getPartnerData(){
		$sql =" SELECT
					t1.*
				FROM
					eta_partner t1
				ORDER BY  t1.sort  DESC ";
		$result = DB::select($sql);
		
		return $result;
	}

}