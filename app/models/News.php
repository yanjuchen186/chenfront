<?php
class News extends Eloquent{

	public function getNewsList($offset = 0, $perPageSize = 10){
		$xss = new Xss;
		$newsData = array();
		$sql = " SELECT 
					t1.*,
					t2.`content`,
					t2.`stickyUrl`
				 FROM 
				 	eta_node t1
				 LEFT JOIN eta_node_content t2 ON t1.nid = t2.nid
				 WHERE 
				 	t1.`published` = 1
				 ORDER BY 
				 	t1.`sticky` DESC,
				 	t1.`sort` DESC,
				 	t1.`created_at` DESC
				 LIMIT {$offset},
				 	{$perPageSize}";
		$result = DB::select($sql);
		if(!empty($result)){
			foreach ($result as $key => $value) {
				$content = $xss->clean($value->content);
				$newsData[] = array(
					'title' => $value->title,
					'overview' => $value->overview ? $this->utf8Substr($value->overview, 0, 120) : $this->utf8Substr($content, 0, 120),
					'url' => '',
					'day' => date('d', strtotime($value->publishedTime ? $value->publishedTime : $value->created_at)),
					'month' => date('m', strtotime($value->publishedTime ? $value->publishedTime : $value->created_at))
				);
			}
		}

		return $newsData;
	}
}