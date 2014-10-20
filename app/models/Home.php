<?php
class Home extends Eloquent{

	public function getBannerData(){
		//获取推荐幻灯片新闻
		$newsData = $this->getNews();

		$psData = $this->getPSData();

		$currData = array_merge($newsData, $psData);
		//根据sort排序
		$currData = $this->KKSort($currData);

		return $currData;
	}

	private function getNews($type = "promote"){
		$newsData = array();
		$sql = " SELECT 
					t1.`nid`,
					t1.`sort`,
					t1.`title`,
					t2.`promoteUrl`,
					t2.`stickyUrl`
				 FROM 
				 	eta_node t1
				 LEFT JOIN eta_node_content t2 ON t1.nid = t2.nid
				 WHERE 
				 	t1.{$type} = 1 
				 AND t1.`published` = 1
				 ORDER BY t1.`sort` DESC
				 LIMIT 3";
		$result = DB::select($sql);
		if(!empty($result)){
			foreach ($result as $key => $value) {
				$newsData[] = array(
					'url' => '',
					'title' => $value->title,
					 'promoteUrl' => $value->promoteUrl ? $value->promoteUrl : HTML::imageUrl('upload/default/slide-1.jpg'),
					// 'promoteUrl' =>  $value->promoteUrl
					'stickyUrl' => '',
					'sort' => $value->sort
				);
			}
		}


		return $newsData;
	}

	/**
	 * 获取产品与服务幻灯片与推荐
	 */
	private function getPSData(){
		$psData = array();
		$sql = "SELECT 
				   t1.id,
				   t1.tid,
				   t1.promoteUrl,
				   t2.name,
				   t2.weight
				FROM 
				   eta_product t1
				LEFT JOIN eta_taxonomy_term_data t2 ON t1.tid = t2.tid
				WHERE isPromote = 1
				AND t2.isDele = 0
				LIMIT 3";
		$result = DB::select($sql);
		if(!empty($result)){
			foreach ($result as $key => $value) {
				$psData[] = array(
					'url' => '',
					'title' => $value->name,
					 'promoteUrl' => $value->promoteUrl ? $value->promoteUrl : HTML::imageUrl('upload/default/slide-1.jpg'),
					// 'promoteUrl' =>  $value->promoteUrl
					'stickyUrl' => '',
					'sort' => $value->weight
				);
			}
		}

		return $psData;

	}



	/**
	 * 冒泡排序
	 */
	public function KKSort($propertyMenu){
		sort($propertyMenu);
		$c = count($propertyMenu);
		for($i=0; $i<$c;$i++){
			for($j=$c-1; $j>$i; $j--){
				if($propertyMenu[$j]['sort'] > $propertyMenu[$j-1]['sort']){
					$tmp = $propertyMenu[$j];
					$propertyMenu[$j] =  $propertyMenu[$j-1];
					$propertyMenu[$j-1] = $tmp;
				}
			}
			if(isset($propertyMenu[$i]['child']) && !empty($propertyMenu[$i]['child'])){
				//递归
				$propertyMenu[$i]['child'] = $this->KKSort($propertyMenu[$i]['child']);
			}
		}
		return $propertyMenu;
	
	}

}