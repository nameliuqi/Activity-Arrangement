<?php
function showActivityList($user_id)
{
	$db = new DAO();
	$res = $db->select('activity',array('user_id' => $user_id));
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