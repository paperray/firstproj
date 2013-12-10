<?php 
Class Database extends WebApp{
	
	/*
	| Our property to use when querying
	*/
	private $query;
	/*
	| Our property to use to wrap the return data on select
	*/
	private $data;
	/*
	| Constructor to load PDO. so that in every query, we will encapsulate 
	| $this->myPDO on prepare() statement
	*/
	public function __construct(){
		/*
		| Load our PDO from its parent class WebApp.
		*/
		return parent::loadMySql();
	}
	
	/*
	| Test query. follow this format when querying.
	*/
	public function selectAllGirls(){
		unset($this->data);
		$this->query = mysql_query("SELECT * FROM girls");
		while($row = mysql_fetch_array($this->query)){
			$this->data[] = $row;
		}
		return $this->data;
	}
	
	public function selectAllSites(){
		unset($this->data);
		$this->query = mysql_query("SELECT * FROM sites");
		while($row = mysql_fetch_array($this->query)){
			$this->data[] = $row;
		}
		return $this->data;
	}
	
	public function selectAllTags(){
		unset($this->data);
		$this->query = mysql_query("SELECT * FROM tags");
		while($row = mysql_fetch_array($this->query)){
			$this->data[] = $row;
		}
		return $this->data;
	}

	
	public function selectGirlsByLetter($letter){
		$letter = Functions::sanitizeString($letter);
		$this->query = mysql_query("SELECT * FROM girls WHERE girl_name REGEXP '[[:<:]][".$letter."]' ");
		while($row = mysql_fetch_array($this->query)){
			$this->data[] = $row;
		}
		return $this->data;
	}
	
	public function selectGirlsBySite($site){
		$letter = Functions::sanitizeString($letter);
		$this->query = mysql_query("SELECT * FROM girls WHERE LOWER(girl_site_name) ='".$site."' ");
		while($row = mysql_fetch_array($this->query)){
			$this->data[] = $row;
		}
		return $this->data;
	}
	
	public function selectAllGirlsByDate(){
		unset($this->data);
		$this->query = mysql_query("SELECT * FROM girls ORDER BY girl_date DESC");
		while($row = mysql_fetch_array($this->query)){
			$this->data[] = $row;
		}
		return $this->data;
	}
	
	public function selectAllGirlsByViews(){
		unset($this->data);
		$this->query = mysql_query("SELECT * FROM girls ORDER BY girl_num_views DESC");
		while($row = mysql_fetch_array($this->query)){
			$this->data[] = $row;
		}
		return $this->data;
	}
	
	
	public function selectAllGirlsByRate(){
		unset($this->data);
		$this->query = mysql_query("SELECT * FROM girls ORDER BY girl_model_rate DESC");
		while($row = mysql_fetch_array($this->query)){
			$this->data[] = $row;
		}
		return $this->data;
	}
	
	public function selectAllGirlsByTags($tags){
		unset($this->data);
		$this->query = mysql_query("SELECT * FROM girls WHERE  girl_tags REGEXP '[[:<:]][".$tags."]' ");
		while($row = mysql_fetch_array($this->query)){ 
			$this->data[] = $row;
		}
		return $this->data;
	}

}