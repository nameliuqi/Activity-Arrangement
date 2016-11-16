<?php
class DAO
{
	private $link;
	private $db_config;
	private $prefix;
	function __construct()
	{
		$this->db_config = array(
			'DB_HOST' => '127.0.0.1',
			'DB_NAME' => 'activity_arrangement',
			'DB_USER' => 'root',
			'DB_PWD' => 'root'
			);
		$db_config = $this->db_config;
		$host = $db_config["DB_HOST"];
        $user = $db_config["DB_USER"];
        $pwd = $db_config["DB_PWD"];
        $db_name = $db_config["DB_NAME"];
		$this->prefix = '';
		$this->link = mysql_connect($host, $user, $pwd) or die('数据库服务器连接错误:' . mysql_error());
		mysql_select_db($db_name,$this->link) or die('数据库连接错误:' . mysql_error());
	}

	function query($sql)
	{
		return mysql_query($sql,$this->link);
	}

	// function select($sql)
	// {
	// 	$ans = array();
	// 	$res = mysql_query($sql,$this->link);
	// 	while ($res && $row = mysql_fetch_assoc($res))
	// 	{
	// 		$ans[] = $row;
	// 	}
	// 	return $ans;
	// }

	function select($table,$data='',$logic='AND',$condition="")
	{
		//logic is AND or OR
		if ($data == '')
		{
			$where = "where 1";
		}
		else
		{
			$where = "where ";	
			$count_number = 0;
			foreach ($data as $key => $value) {
				$count_number += 1;
				if ($count_number > 1)
				{
					$where .= "{$logic} ";
				}
				$where .= "`{$key}`='{$value}' ";
			}
		}	
		$sql = "select * from {$table} " . $where . $condition;
		$res = mysql_query($sql);
		$resArr = array();
		if ($res)
		{
			while ($res && $row = mysql_fetch_array($res))
			{
				$resArr[] = $row;
			}
			if (count($resArr) == 1)
			{
				return $resArr[0];
			}
			else
			{
				return $resArr;	
			}
		}
		else
		{
			return  false;
		}
	}

	function insert($table,$data)
	{
		$keyArr = array();
		$valueArr = array();
		foreach ($data as $key => $value) {
			$keyArr[] = $key;
			$valueArr[] = $value;
		}
		$keys = "`" . implode("`,`", $keyArr) . "`";
		$values = "'" . implode("','", $valueArr) . "'";
		$sql = "insert into {$table}({$keys}) values({$values})";
		return mysql_query($sql);
	}
}