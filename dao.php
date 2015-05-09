<?php 
require_once('config/tank_config.php'); 

/**
* 对项目数据库操作的类
*/
class project_dao
{

    //根据项目id获得项目信息的数据库操作
    public function get_project_by_id($project_id){
        global $tankdb;
        global $database_tankdb;
        mysql_select_db($database_tankdb, $tankdb);
        $query_project =  sprintf("SELECT * FROM tk_project WHERE id = %s",GetSQLValueString($project_id, "int"));  
        $project = mysql_query($query_project, $tankdb) or die(mysql_error());
        $row_project = mysql_fetch_assoc($project);
          
        $projectinfo->id = $row_project['id'];
        $projectinfo->name = $row_project['project_name'];
        $projectinfo->text = $row_project['project_text'];
        $projectinfo->start = $row_project['project_start'];
        $projectinfo->end = $row_project['project_end'];
        $projectinfo->leader = $row_project['project_to_user'];
        $projectinfo->lastupdate = $row_project['project_lastupdate'];
        $projectinfo->del_status = $row_project['project_del_status'];
        $projectinfo->create_time = $row_project['project_create_time'];

        return $projectinfo;
    }

    //获取某个用户负责的项目的数量
    public function get_my_total_project_num($user_id){
        global $tankdb;
        global $database_tankdb;
        mysql_select_db($database_tankdb, $tankdb);
        $query_Recordset_sumtotal = sprintf("SELECT COUNT(*) as count_prj   
                                             FROM tk_project         
                                             WHERE project_to_user = %s", 
                                             GetSQLValueString($user_id, "int"));
        $Recordset_sumtotal = mysql_query($query_Recordset_sumtotal, $tankdb) or die(mysql_error());
        $row_Recordset_sumtotal = mysql_fetch_assoc($Recordset_sumtotal);
        $my_totalprj=$row_Recordset_sumtotal['count_prj'];
        return $my_totalprj;
    }


}


/**
* 对用户信息数据库操作类
*/
class user_dao 
{
    //根据用户id获得用户信息
    public function get_user_by_userid($userid){
        global $tankdb;
        global $database_tankdb;
        $query_touser =  sprintf("SELECT * FROM tk_user WHERE uid = %s AND tk_user_del_status=1",
                                GetSQLValueString($userid, "int"));  
        $touser = mysql_query($query_touser, $tankdb) or die(mysql_error());
        $row_touser = mysql_fetch_assoc($touser);

        $userinfo->name = $row_touser["tk_display_name"];
        $userinfo->id = $row_touser["uid"];
        $userinfo->user_login = $row_touser["tk_user_login"];
        $userinfo->register = $row_touser["tk_user_registered"];
        $userinfo->contact = $row_touser["tk_user_contact"];
        $userinfo->email = $row_touser["tk_user_email"];
        $userinfo->user_lastuse = $row_touser["tk_user_lastuse"];
        $userinfo->del_status = $row_touser["tk_user_del_status"];
        $userinfo->token_exptime = $row_touser["token_exptime"];
        $userinfo->status = $row_touser["status"];

        return $userinfo;
    }

    //获得和该项目有关的用户信息
    public function get_user_select_by_project($prjid) {
        global $tankdb;
        global $database_tankdb;
        $query_user ="SELECT * 
        FROM tk_user 
        inner join tk_team on tk_team.tk_team_uid=tk_user.uid 
        WHERE tk_team.tk_team_pid = $prjid ORDER BY CONVERT(tk_display_name USING gbk )";
        $userRS = mysql_query($query_user, $tankdb) or die(mysql_error());
        $row_user = mysql_fetch_assoc($userRS);
 
        $user_arr = array ();
        do { 
        $user_arr[$row_user['uid']]['uid'] =  $row_user['uid'];
        $user_arr[$row_user['uid']]['name'] =  $row_user['tk_display_name'];
        $user_arr[$row_user['uid']]['email'] =  $row_user['tk_user_email'];
        $user_arr[$row_user['uid']]['phone_num'] =  $row_user['tk_user_contact'];
        $user_arr[$row_user['uid']]['ulimit'] =  $row_user['tk_team_ulimit'];
        } while ($row_user = mysql_fetch_assoc($userRS));     
    
        return $user_arr;
    }


    //获得所有的用户信息
    public function get_all_user() {
        global $tankdb;
        global $database_tankdb;
        $query_user ="SELECT * FROM tk_user ORDER BY CONVERT(tk_display_name USING gbk )";
        $userRS = mysql_query($query_user, $tankdb) or die(mysql_error());
        $row_user = mysql_fetch_assoc($userRS);
        $user_arr = array ();
        do { 
        $user_arr[$row_user['uid']]['uid'] =  $row_user['uid'];
        $user_arr[$row_user['uid']]['name'] =  $row_user['tk_display_name'];
        $user_arr[$row_user['uid']]['email'] =  $row_user['tk_user_email'];
        $user_arr[$row_user['uid']]['phone_num'] =  $row_user['tk_user_contact'];
        } while ($row_user = mysql_fetch_assoc($userRS));     
    
        return $user_arr;
    }



}


/**
* 对团队的数据库操作
*/
class team_dao 
{
    //设置某一个用户在某一个项目中的权限
    public function set_user_authority($uid,$pid,$ulimit){
        global $tankdb;
        global $database_tankdb;
        $modmemSQL="UPDATE tk_team SET tk_team_ulimit=$ulimit WHERE  tk_team_uid=$uid and tk_team_pid=$pid";//修改权限
        mysql_select_db($database_tankdb, $tankdb);
        $Result2 = mysql_query($modmemSQL, $tankdb) or die(mysql_error());
    }

    //获得某一个用户在这个项目里的权限
    public function get_user_authority($uid,$pid){
        global $tankdb;
        global $database_tankdb;
        $user_authority =1; 
        
        mysql_select_db($database_tankdb, $tankdb);
        $query_team =  "SELECT * FROM tk_team WHERE tk_team_uid=$uid and tk_team_pid=$pid";  
        $team = mysql_query($query_team, $tankdb) or die(mysql_error());
        $row_team = mysql_fetch_assoc($team);
        //获得权限
        $user_authority = $row_team['tk_team_ulimit'];

        return $user_authority;
    }

}


/**
* 对个人日程的数据库操作
*/
class schedule_dao
{
    //获取个人任务的数据
    public function get_task_events($userid){
        $sql = "select * from tk_task where csa_to_user='$userid'";
        $query = mysql_query($sql);
        while($row=mysql_fetch_array($query)){
            $data[] = array(
                'id' => $row['tid'],
                'title' => $row['csa_text'],
                'start' => $row['csa_plan_et'],
                'end' => $row['csa_plan_et'],
                'url' => $row['url'],
                'allDay' => TRUE,
                // 'color' => $row['color']
            );
        }


        return $data;
    }

    //获取个人日程的数据
    public function get_person_events($userid){
        $sql = "select * from tk_schedule where uid='$userid'";
        $query = mysql_query($sql);
        while($row=mysql_fetch_array($query)){
            if($row['is_allday'] ==0){
                $allday = FALSE;
            }else{
                $allday = TRUE;
            }
            $data[] = array(
            'id' => $row['id'],
            'title' => $row['name'],
            'start' => $row['start_time'],
            'end' => $row['end_time'],
            'url' => $row['url'],
            'color' => '#008573',
            'allDay' => $allday
            );
        }
        return $data;
    }

    //获取个人所有日程的数据
    public function get_person_all_events($userid){
        //获得用户的个人日程信息
        $sql = "select * from tk_schedule where uid='$userid'";
        $query = mysql_query($sql);
        while($row=mysql_fetch_array($query)){
            if($row['is_allday'] ==0){
                $allday = FALSE;
            }else{
                $allday = TRUE;
            }
            $data[] = array(
            'id' => $row['id'],
            'title' => '[个人]'.$row['name'],
            'start' => $row['start_time'],
            'end' => $row['end_time'],
            'url' => $row['url'],
            'color' => '#008573',
            'allDay' => $allday
            );
        }

        //获得用户的任务信息
        $sql = "select * from tk_task where csa_to_user=$userid";
        $query = mysql_query($sql);
        while($row=mysql_fetch_array($query)){
            $data[] = array(
                'id' => $row['tid'],
                'title' => '[任务]'.$row['csa_text'],
                'start' => $row['csa_plan_et'],
                'end' => $row['csa_plan_et'],
                'url' => $row['url'],
                'allDay' => TRUE,
                // 'color' => '#1874CD'
            );
        }
        //这里还需要添加课业信息

        return $data;
    }

    //获取团队事件的数据
    public function get_team_events($project_id){
        //获得user数据库操作类
        $user_dao_obj = new user_dao();
        //获得该项目的所有成员
        $user_arr = $user_dao_obj->get_user_select_by_project($project_id);
        foreach($user_arr as $key => $val){ 
            //获得用户id
            $userid = $val['uid'];
            //获得用户在本项目中的任务信息
            $sql = "select * from tk_task where csa_to_user=$userid and csa_project=$project_id";
            $query = mysql_query($sql);
            while($row=mysql_fetch_array($query)){
                $data[] = array(
                    'id' => $row['tid'],
                    'title' => '[任务]-['.$val['name'].']'.$row['csa_text'],
                    'start' => $row['csa_plan_et'],
                    'end' => $row['csa_plan_et'],
                    'url' => $row['url'],
                    'allDay' => TRUE,
                    // 'color' => '#1874CD'
                );
            }
            //获得用户的个人日程
            $sql = "select * from tk_schedule where uid='$userid'";
            $query = mysql_query($sql);
            while($row=mysql_fetch_array($query)){
                if($row['is_allday'] ==0){
                    $allday = FALSE;
                }else{
                    $allday = TRUE;
                }
                $data[] = array(
                'id' => $row['id'],
                'title' => '[个人]-['.$val['name'].']'.$row['name'],
                'start' => $row['start_time'],
                'end' => $row['end_time'],
                'url' => $row['url'],
                'color' => '#008573',
                'allDay' => $allday
                );
            }
            //这里还需要添加每个成员的课业信息

        }    

        return $data;
    }
}


/**
* 对task的数据库操作
*/
class task_dao 
{
    //获得任务id获得对应的task值
    public function get_task_by_id($tid){
        global $tankdb;
        global $database_tankdb;
        mysql_select_db($database_tankdb, $tankdb);
        $query_task =  sprintf("SELECT * FROM tk_task WHERE tid = %s",GetSQLValueString($tid, "int")); 
        $task = mysql_query($query_task, $tankdb) or die(mysql_error());
        $row_task = mysql_fetch_assoc($task);

        $taskinfo->id = $tid;
        $taskinfo->from = $row_task['csa_from_user'];
        $taskinfo->to = $row_task['csa_to_user'];
        $taskinfo->project = $row_task['csa_project'];
        $taskinfo->project_stage = $row_task['csa_project_stage'];
        $taskinfo->text = $row_task['csa_text'];
        $taskinfo->priority = $row_task['csa_priority'];
        $taskinfo->plan_st = $row_task['csa_plan_st'];
        $taskinfo->plan_et = $row_task['csa_plan_et'];
        $taskinfo->plan_hour = $row_task['csa_plan_hour'];
        $taskinfo->description = $row_task['csa_description'];
        $taskinfo->status = $row_task['csa_status'];
        $taskinfo->check_time = $row_task['csa_check_time'];
        $taskinfo->check_context = $row_task['csa_check_context'];
        $taskinfo->link = $row_task['csa_linl'];
        $taskinfo->tag = $row_task['csa_tag'];
        $taskinfo->last_update = $row_task['csa_last_update'];
        $taskinfo->leader_grade = $row_task['csa_leader_grade'];
        $taskinfo->final_grade = $row_task['csa_final_grade'];
        $taskinfo->document_id = $row_task['csa_document_id'];
        $taskinfo->commint_time = $row_task['csa_commit_time'];
        $taskinfo->del_status = $row_task['csa_del_status'];
        $taskinfo->testto = $row_task['csa_testto'];

        return $taskinfo;
    }



}


/**
* 对stage的数据库操作
*/
class stage_dao
{
    //根据项目id获得stages
    public function get_stages($project_id)
    {
        global $tankdb;
        global $database_tankdb;
        $query_stage ="SELECT * FROM tk_stage WHERE  tk_stage_pid= $project_id";
        $stageRS = mysql_query($query_stage, $tankdb) or die(mysql_error());
        $row_stage = mysql_fetch_assoc($stageRS);
 
        $stage_arr = array ();
        do { 
        $stage_arr[$row_stage['sid']]['sid'] =  $row_stage['stageid'];
        $stage_arr[$row_stage['sid']]['pid'] =  $row_stage['tk_stage_pid'];
        $stage_arr[$row_stage['sid']]['title'] =  $row_stage['tk_stage_title'];
        $stage_arr[$row_stage['sid']]['start_time'] =  $row_stage['tk_stage_st'];
        $stage_arr[$row_stage['sid']]['end_time'] =  $row_stage['tk_stage_et'];
        } while ($row_stage = mysql_fetch_assoc($userRS));     
    
        return $stage_arr;
    }


}

/**
* message数据库操作
*/
class message_dao
{
    //删除某条消息
    public function delete_message($mid)
    {
        global $tankdb;
        global $database_tankdb;
        $deleteSQL = sprintf("DELETE FROM tk_message WHERE meid=%s",GetSQLValueString($mid, "int"));
        mysql_select_db($database_tankdb, $tankdb);
        $Result1 = mysql_query($deleteSQL, $tankdb) or die(mysql_error());
    }
    //把某条消息置为已读
    public function update_message_read($mid)
    {
        global $tankdb;
        global $database_tankdb;
        //1表示未读，0表示已读
        $deleteSQL = sprintf("UPDATE tk_message set tk_mess_status = 0 WHERE meid=%s",GetSQLValueString($mid, "int"));
        mysql_select_db($database_tankdb, $tankdb);
        $Result1 = mysql_query($deleteSQL, $tankdb) or die(mysql_error());
    }

}


?>
