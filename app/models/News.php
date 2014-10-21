<?php
class News extends Eloquent{

	public function getNewsList($offset = 0, $perPageSize = 3){
		$xss = new Xss;
		$newsData = array();
		$sql = " SELECT 
					t1.*,
					t2.`content`,
					t2.`stickyUrl`,
					t3.`userName`
				 FROM 
				 	eta_node t1
				 LEFT JOIN eta_node_content t2 ON t1.nid = t2.nid
				 LEFT JOIN eta_users t3 ON t1.uid = t3.id
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
					'userName' => $value->userName,
					'overview' => $value->overview ? $this->utf8Substr($value->overview, 0, 120) : $this->utf8Substr($content, 0, 120),
					'url' => URL::to("news/news-detail/".$value->nid),
					'stickyUrl' => $value->stickyUrl ? $value->stickyUrl : HTML::imageUrl('upload/default/blog-image-1.jpg'),
					'dateType' => date('F d, Y', strtotime($value->publishedTime ? $value->publishedTime : $value->created_at)),
					
				);
			}
		}

		return $newsData;
	}

	public function getNewsDetail($id){
		$sql = " SELECT 
					t1.*,
					t2.`content`,
					t2.`stickyUrl`,
					t3.`userName`
				 FROM 
				 	eta_node t1
				 LEFT JOIN eta_node_content t2 ON t1.nid = t2.nid
				 LEFT JOIN eta_users t3 ON t1.uid = t3.id
				 WHERE 
				 	t1.`nid` = " . intval($id);
		$result = DB::select($sql);
		if(!empty($result)){
			$result[0]->url = URL::to("news/news-detail/".$result[0]->nid);
			$result[0]->day = date('d', strtotime($result[0]->publishedTime ? $result[0]->publishedTime : $result[0]->created_at));
			$result[0]->month = date('m', strtotime($result[0]->publishedTime ? $result[0]->publishedTime : $result[0]->created_at));
		}
		return $result;
	}

	private function utf8Substr($str, $from, $len){ 
		return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'. 
		'((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s', 
		'$1',$str); 
	} 
}