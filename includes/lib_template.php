<?php
function showActivityList($user_id,$act_id=-1)
{
	$db = new DAO();
	if ($user_id == -1)
	{
		$res = $db->select('activity');
	}
	else 
	{
		if ($act_id == -1)
		{
			$res = $db->select('activity',array('user_id' => $user_id));
		}
		else
		{
			$res = $db->select('activity',array('act_id' => $act_id));
		}
	}	
	
	if ($res)
	{
		$activity_list_page = file_get_contents(TPLPATH.'activity_list.html');
		$activity_list_item_page = file_get_contents(TPLPATH.'activity_list_item.html');
		//only one row
		if (isset($res['user_id']))
		{
			$activity_list_page_rendered = render($activity_list_item_page,$res);
		}
		else
		{
			$activity_list_page_rendered = array();
			foreach ($res as $key => $value) {
				$activity_list_page_rendered[] = render($activity_list_item_page,$value);
			}
			$activity_list_page_rendered = implode('<br>', $activity_list_page_rendered);
		}

		$render_data = array(
			'list_items' => $activity_list_page_rendered
			);
		return render($activity_list_page,$render_data);
	}
}

function showAddActivity($user_id)
{
	$add_activity_page = file_get_contents(TPLPATH.'add_activity.html');
	$header_page = file_get_contents(TPLPATH.'header.html');
	$render_data = array(
		'user_id' => $user_id,
		'header'  => $header_page
		);
	return render($add_activity_page,$render_data);
}

function showHeader()
{
	$header = file_get_contents(TPLPATH.'header.html');
	echo $header;
}

function render($tpl,$data)
{
	foreach ($data as $key => $value) {
		$pattern = '{$' . $key . '}';
		$tpl = str_replace($pattern, $value, $tpl);
	}
	return $tpl;
}

//template function
function showMessage($msg = 'default',$href='./index.php')
{
	$header = file_get_contents(TPLPATH.'header.html');
	$msgtpl = file_get_contents(TPLPATH.'show message.html');
	$msgtpl = render($msgtpl,array('message' => $msg, 'href'=>$href,'header'=>$header));
	echo $msgtpl;
	die();
}

function showSheduleList($act_id,$user_id=-1)
{
	$db = new DAO();
	if ($act_id == -1)
	{
		$res = $db->select('shedule',array('user_id' => $user_id));
	}
	else 
	{
		$res = $db->select('shedule',array('act_id' => $act_id,'user_id' => $user_id));
	}	
	if ($res)
	{
		$shedule_list_page = file_get_contents(TPLPATH.'shedule_list.html');
		$shedule_list_item_page = file_get_contents(TPLPATH.'shedule_list_item.html');
		//only one row
		if (isset($res['act_id']))
		{
			$shedule_list_page_rendered = render($shedule_list_item_page,$res);
		}
		else
		{
			$shedule_list_page_rendered = array();
			foreach ($res as $key => $value) {
				$shedule_list_page_rendered[] = render($shedule_list_item_page,$value);
			}
			$shedule_list_page_rendered = implode('<br>', $shedule_list_page_rendered);
		}

		$render_data = array(
			'list_items' => $shedule_list_page_rendered
			);
		return render($shedule_list_page,$render_data);
	}
}