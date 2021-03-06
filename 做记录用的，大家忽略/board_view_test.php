<?php require_once('config/tank_config.php'); ?>
<?php require_once('session_unset.php'); ?>
<?php require_once('session.php'); ?>
<?php require_once('function/board_function.php'); ?>

<?php 
    $pid = "-1";
    $leader_id = -1;
    if(isset($_GET['pid'])){
        $pid = $_GET['pid'];
    }

    $uid=$_SESSION['MM_uid'];

    $id_seq=0;
    $bid = "-1";
    $now_role = 0;//对于项目看板当前角色

    if($pid != -1){
        $board_info = get_board_info($pid);
         $leader_id = get_leader($pid);
    }else{
        $board_info = get_personal_board_info($uid);
        $now_role = 1;//个人看板时自己也是最高权限者
    }

    if($uid==$leader_id)
    {
        $now_role = 1;//是项目组长
    }
        
    $board_num =mysql_num_rows($board_info);

    $editID = "-1";
        if (isset($_POST['edit_board_id'])) {
    $editID = $_POST['edit_board_id'];

}
?>

<?php require('head.php');  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 



<head> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style> 
#displayRoom{background:white;position:relative;float:left;clear:both;padding:10px 0px 0px 20px;margin-left:20px;margin-top:10px;} 
.row{display:inline-block;float:left;width:16em;margin-right: 30px;margin-left: 30px;clear:none;top:0;background:white;} 

.row span{width:15em;line-height:1.5em;margin-bottom:30px;text-align:center;} 
span.usr{text-decoration:none; 
color:#000; 
background:#ffc; 
display:block; 
height:15em; 
width:15em; 
padding:1em;  

-moz-box-shadow: 5px 5px 7px rgba(33,33,33,1); /* Safari+Chrome */ 
-webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7); /* Opera */ 
box-shadow: 5px 5px 7px rgba(33,33,33,.7);
cursor:pointer;display:block;width:15em;clear:none;height:15em;line-height:30px;margin-right: 2em;margin-bottom:30px;text-align:left;} 

span.usr_text{
    width: 13em;
    height: 10.5em;
    margin: 0px;
    margin-left: 3px;
    margin-top: 0.8em;
    background: rgba(255,255,255,0);
    text-align: left;
    text-decoration: none; 
    overflow-y:auto;
    position: absolute;
}

span.usr.catch{background:#ffc!important;}

/* 设置滚动条的样式 */
::-webkit-scrollbar {
    width: 0px;
}
/* 滚动槽 */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0);
    border-radius: 10px;
}
/* 滚动条滑块 */
:window-inactive
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background: rgba(0,0,0,0.1);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0);
}
::-webkit-scrollbar-thumb:window-inactive {
    background: rgba(0,0,0,0);
}

</style>

</head> 
<body>
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <script type="text/javascript" src="js/jquery/jquery-1.9.1.js"></script>
    <script type="text/javascript">
    var curTarget = null; //鼠标拖拽的目标元素 
    var curPos = null; 
    var dropTarget = null; //要放下的目标元素 
    var activeTarget = null;
    var iMouseDown = false; //鼠标是否按下 
    var lMouseState = false; //前一个iMouseDown状态 
    var dragreplaceCont = []; 
    var mouseOffset = null; 
    var callbackFunc = null; 
    var isboundary = 0;
    Number.prototype.NaN0 = function() { return isNaN(this) ? 0 : this; } 
    function setdragreplace(obj, callback) { 
        dragreplaceCont.push(obj); 
        obj.setAttribute('candrag', '1'); 
        if (callback != null && typeof (callback) == 'function') { 
            callbackFunc = callback; 
        } 
    } 
    //鼠标移动 
    function mouseMove(ev) { 
        ev = ev || window.event; 
        var target = ev.target || ev.srcElement; 
        var mousePos = mouseCoords(ev); 
        //如果当前元素可拖拽 
        var dragObj = target.getAttribute('candrag'); 
        if (dragObj != null) { 
            if (iMouseDown && !lMouseState) { 
                //刚开始拖拽 
                curTarget = target; 
                curPos = getPosition(target); 
                mouseOffset = getMouseOffset(target, ev); 
                // 清空辅助层 
                for (var i = 0; i < dragHelper.childNodes.length; i++) dragHelper.removeChild(dragHelper.childNodes[i]); 
                //克隆元素到辅助层，并移动到鼠标位置 
                dragHelper.appendChild(curTarget.cloneNode(true)); 
                dragHelper.style.display = 'block'; 
                dragHelper.firstChild.removeAttribute('candrag'); 
                //记录拖拽元素的位置信息 
                curTarget.setAttribute('startWidth', parseInt(curTarget.offsetWidth)); 
                curTarget.setAttribute('startHeight', parseInt(curTarget.offsetHeight)); 
                curTarget.style.display = 'none'; 
                //记录每个可接纳元素的位置信息，这里一次记录以后多次调用，获取更高性能 
                for (var i = 0; i < dragreplaceCont.length; i++) { 
                        with (dragreplaceCont[i]) { 
                        if (dragreplaceCont[i] == curTarget) 
                        continue; 
                        var pos = getPosition(dragreplaceCont[i]); 
                        setAttribute('startWidth', parseInt(offsetWidth)); 
                        setAttribute('startHeight', parseInt(offsetHeight)); 
                        setAttribute('startLeft', pos.x); 
                        setAttribute('startTop', pos.y); 
                    } 
                } //记录end 
            } //刚开始拖拽end 
        } 
        //正在拖拽 
        if (curTarget != null) { 
            // move our helper div to wherever the mouse is (adjusted by mouseOffset) 
            dragHelper.style.top = mousePos.y - mouseOffset.y + "px"; 
            dragHelper.style.left = mousePos.x - mouseOffset.x + "px"; 
            //拖拽元素的中点 
            var xPos = mousePos.x - mouseOffset.x + (parseInt(curTarget.getAttribute('startWidth')) / 2); 
            var yPos = mousePos.y - mouseOffset.y + (parseInt(curTarget.getAttribute('startHeight')) / 2); 
            var havedrop = false; 
            for (var i = 0; i < dragreplaceCont.length; i++) { 
                with (dragreplaceCont[i]) { 
                    if (dragreplaceCont[i] == curTarget) 
                        continue; 
                    if (((parseInt(getAttribute('startLeft'))+0.3*parseInt(getAttribute('startWidth'))) < xPos) && 
                        ((parseInt(getAttribute('startTop'))+0.3*parseInt(getAttribute('startHeight'))) < yPos) && 
                        ((parseInt(getAttribute('startLeft')) + 0.6*parseInt(getAttribute('startWidth'))) > xPos) && 
                        ((parseInt(getAttribute('startTop')) + 0.6*parseInt(getAttribute('startHeight'))) > yPos)) { 
                            havedrop = true; 
                            isboundary = 0;
                            dropTarget = dragreplaceCont[i]; 
                            dropTarget.className = 'usr catch'; 
                            activeTarget = null;
                            break; 
                    }
                    if (((parseInt(getAttribute('startLeft'))+0.7*parseInt(getAttribute('startWidth'))) < xPos) && 
                        ((parseInt(getAttribute('startTop'))+0.3*parseInt(getAttribute('startHeight'))) < yPos) && 
                        ((parseInt(getAttribute('startLeft')) + 1.425*parseInt(getAttribute('startWidth'))) > xPos) && 
                        ((parseInt(getAttribute('startTop')) + 0.6*parseInt(getAttribute('startHeight'))) > yPos)) { 
                            havedrop = true; 
                            isboundary = 0;
                            activeTarget = dragreplaceCont[i]; 
                            dropTarget = null;
                            break; 
                    } 

                    if ((parseInt(getAttribute('startLeft')) < 650)&&((parseInt(getAttribute('startLeft'))-0.325*parseInt(getAttribute('startWidth'))) < xPos) && 
                    ((parseInt(getAttribute('startTop'))+0.3*parseInt(getAttribute('startHeight'))) < yPos) && 
                    ((parseInt(getAttribute('startLeft')) + 0.3*parseInt(getAttribute('startWidth'))) > xPos) && 
                    ((parseInt(getAttribute('startTop')) + 0.6*parseInt(getAttribute('startHeight'))) > yPos))
                    {
                            havedrop = true;
                            isboundary = 1;//是左边的时候
                            activeTarget = dragreplaceCont[i]; 
                            dropTarget = null;
                            break; 
                    }
                        
                } 
            }
            /*将元素“放”在合适的地方*/
            if(activeTarget){
                if(isboundary==0 && beforeOrAfter(dragHelper,activeTarget) == "before" && activeTarget.parentNode.parentNode != nextElement(curTarget)){
                    document.getElementById("displayRoom").insertBefore(curTarget.parentNode.parentNode,activeTarget.parentNode.parentNode);
                }else if(isboundary==0 && beforeOrAfter(dragHelper,activeTarget) == "after" && activeTarget != previousElement(curTarget)){
                    document.getElementById("displayRoom").insertBefore(curTarget.parentNode.parentNode,nextElement(activeTarget));
                }
                else if(isboundary == 1 && activeTarget != curTarget)
                {
                    document.getElementById("displayRoom").insertBefore(curTarget.parentNode.parentNode,activeTarget.parentNode.parentNode);
                }
            }

            if (!havedrop && dropTarget != null) { 
                dropTarget.className = 'usr'; 
                dropTarget = null; 
            } 
            if (!havedrop && activeTarget != null) {
                activeTarget = null; 
            } 
        } //正在拖拽end 
        lMouseState = iMouseDown; 
        if (curTarget) return false; //阻止其它响应（如：鼠标框选文本） 
    } 
    //鼠标松开 
    function mouseUp(ev) { 
        if (curTarget) { 
            dragHelper.style.display = 'none'; //隐藏辅助层 
            if (curTarget.style.display == 'none' && dropTarget != null) { 
                //有元素接纳，两者互换 
                var destP = dropTarget.parentNode; 
                var sourceP = curTarget.parentNode;
                var curBID = curTarget.parentNode.id;
                var desBID = dropTarget.parentNode.id;
                $.ajax( {
                        type: "post",
                        url : "trans_board.php",
                        data: {"cur_board":curBID,"drop_board":desBID},
                        success: function(data){//如果调用php成功,data为执行php文件后的返回值
                        if(data == 1);
                        else;
                        }
                 });
                destP.appendChild(curTarget); 
                sourceP.appendChild(dropTarget); 
                dropTarget.className = 'usr'; 
                dropTarget = null; 
                isboundary=0;
                if (callbackFunc != null) { 
                    callbackFunc(curTarget); 
                }
            } 
            else if(curTarget.style.display == 'none' && activeTarget != null)
            {
                var curID = curTarget.parentNode.id;
                var actID = activeTarget.parentNode.id;
                var tag = 0; //顺序改变的时候是否activeTarget也要加1
                //alert(curID);
                // alert(actID);
                if(isboundary == 1)//是换了左边界的 便签
                {
                    tag = 1;//active的顺序也要+1,cur变为active的顺序，cur之前的都要+1
                }else//其他位置的标签
                {
                    tag = 0;//active以后的顺序+1,cur变为active+1的顺序，cur之前的都要+1
                }
                $.ajax( {
                        type: "post",
                        url : "insert_board.php",
                        data: {"cur_board":curID,"act_board":actID,"tag":tag},
                        success: function(data){//如果调用php成功,data为执行php文件后的返回值
                        if(data == 1);
                        else;
                        }
                 });
                activeTarget=null;
                isboundary = 0;
            }
            curTarget.style.display = ''; 
            curTarget.style.visibility = 'visible'; 
            curTarget.setAttribute('candrag', '1'); 
        } 
        curTarget = null; 
        iMouseDown = false; 
    } 
    //鼠标按下 
    function mouseDown(ev) { 
        //记录变量状态 
        iMouseDown = true; 
        //获取事件属性 
        ev = ev || window.event; 
        var target = ev.target || ev.srcElement; 
        if (target.onmousedown || target.getAttribute('candrag')) {//阻止其它响应（如：鼠标双击文本） 
            return false; 
        } 
    } 

    /*
     * 返回下一个兄弟“元素”节点（跳过文本节点），为了应付非ie浏览器将换行符视为文本节点的想象。
     */
    function nextElement(node){
        var rowNode = node.parentNode.parentNode;
        for(var nextNode = rowNode.nextSibling;nextNode;nextNode = nextNode.nextSibling){
            if(nextNode.nodeType == 1){
                return nextNode;
            }
        }
        return null;
    }
    /*
     * 返回上一个兄弟“元素”节点（跳过文本节点），为了应付非ie浏览器将换行符视为文本节点的想象。
     */
    function previousElement(node){
        var rowNode = node.parentNode.parentNode;
        for(var previousNode = rowNode.previousSibling;previousNode;previousNode = previousNode.previousSibling){
            if(previousNode.nodeType == 1){
                return previousNode;
            }
        }
        return null;
    }

    /*
     * 判断obj1（的中点）是在obj2之前还是之后。用于决定curItem应该插在activeItem之前还是之后
     */
    function beforeOrAfter(obj1,obj2){
        var center = {
            x : obj1.offsetLeft + (obj1.offsetWidth)/2
        };
        if(center.x < (obj2.offsetLeft + (obj2.offsetWidth)/2)){
            return "before";
        }else{
            return "after";
        }
    }

    //返回当前item相对页面左上角的坐标 
    function getPosition(e) { 
        var left = 0; 
        var top = 0; 
        while (e.offsetParent) { 
            left += e.offsetLeft + (e.currentStyle ? (parseInt(e.currentStyle.borderLeftWidth)).NaN0() : 0); 
            top += e.offsetTop + (e.currentStyle ? (parseInt(e.currentStyle.borderTopWidth)).NaN0() : 0); 
            e = e.offsetParent; 
        } 
        left += e.offsetLeft + (e.currentStyle ? (parseInt(e.currentStyle.borderLeftWidth)).NaN0() : 0); 
        top += e.offsetTop + (e.currentStyle ? (parseInt(e.currentStyle.borderTopWidth)).NaN0() : 0); 
        return { x: left, y: top }; 
    } 
    //返回鼠标相对页面左上角的坐标 
    function mouseCoords(ev) { 
        if (ev.pageX || ev.pageY) { 
            return { x: ev.pageX, y: ev.pageY }; 
        } 
        return { 
            x: ev.clientX + document.body.scrollLeft - document.body.clientLeft, 
            y: ev.clientY + document.body.scrollTop - document.body.clientTop 
        }; 
    } 
    //鼠标位置相对于item的偏移量 
    function getMouseOffset(target, ev) { 
        ev = ev || window.event; 
        var docPos = getPosition(target); 
        var mousePos = mouseCoords(ev); 
        return { x: mousePos.x - docPos.x, y: mousePos.y - docPos.y }; 
    } 
    window.onload = function() { 
        document.onmousemove = mouseMove; 
        document.onmousedown = mouseDown; 
        document.onmouseup = mouseUp; 
        //辅助层用来显示拖拽 
        dragHelper = document.createElement('DIV'); 
        dragHelper.style.cssText = 'position:absolute;display:none;'; 
        document.body.appendChild(dragHelper); 
        var bNum = document.getElementById('boardNum').value;
        var userrole = document.getElementById('now_role').value;
        if(userrole == "1")
        {
            for(var i =1; i<=bNum;i++)
            {
                setdragreplace(document.getElementById(i)); 
            }
        }
        //setdragreplace(document.getElementById('1')); 
        //setdragreplace(document.getElementById('2')); 
        //setdragreplace(document.getElementById('3')); 
    }; 

</script> 
<script type="text/javascript">
  //禁止滚动条
  /*$(document.body).css({
     "overflow-x":"hidden",
     "overflow-y":"hidden"
  });

      $(document).ready(function() {
              var h = $(window).height(), h2;
              var h = h - <?php echo "90";?>;
              $("#displayRoom").css("height", h);
              $(window).resize(function() {
                  h2 = $(this).height()-90;
                  $("#displayRoom").css("height", h2);
              });
          })*/
  </script>

<script src="js/bootstrap/bootstrap-transition.js"></script>
<script src="js/bootstrap/bootstrap-modal.js"></script>

<script charset="utf-8" src="plug-in/editor/kindeditor.js"></script>
<script charset="utf-8" src="plug-in/editor/lang/zh_CN.js"></script>
<script>
        var editor1;
        KindEditor.ready(function(K) {
                editor1 = K.create('#tk_stage_desc', {
            width : '100%',
            height: '150px',
            items:[
        'source', '|', 'undo', 'redo', '|',
         'insertorderedlist', 'insertunorderedlist', '|', 'fullscreen',
        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'bold',
        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat'
           ]
        });
      });
</script>
<script>
        var editor2;
        KindEditor.ready(function(K) {
                editor2 = K.create('#tk_edit_content', {
            width : '100%',
            height: '150px',
            items:[
        'source', '|', 'undo', 'redo', '|',
         'insertorderedlist', 'insertunorderedlist', '|', 'fullscreen',
        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'bold',
        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat'
           ]
        });
      });

                        function eb(data) {
                                       // var data = data;
                            var obj = document.getElementById("edit_board_id");
                            var obj2 = document.getElementById("tk_edit_content");
                            obj.value=data;
                            $.ajax( {
                                    type: "post",
                                    url : "base_edit_getContent.php",
                                    data: {"cur_board":data},
                                    success: function(getdata){//如果调用php成功,data为执行php文件后的返回值
                                        //document.getElementById("tk_edit_content").innerHTML=getdata;
                                       // $("#tk_edit_content").html(getdata);
                                       // obj2.value=getdata;
                                       //$("#document.body").html("getdata");
                                        editor2.html(getdata);
                                    }
                             });

                            $("#editmodal").modal("toggle");
                        }
                    </script>

      
    <input type="hidden" id="boardNum" name="boardNum" value="<?php echo $board_num; ?>" />

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>

            <!-- 左边20%的宽度的树或者说明  -->
            <td width="20%" class="input_task_right_bg" valign="top">
                <table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <td valign="top" class="gray2">
                            <h4 style="margin-top:40px; margin-left: 5px;"><strong><?php echo $multilingual_board_view_nowbs; ?></strong></h4>
                            <p>
                                <?php echo $multilingual_board_add_text; ?>
                            </p>

                        </td>
                    </tr>
                </table>
            </td>

            <!-- 右边80%宽度的主体内容 -->
            <td  id="tb" position=relative width="80%" valign="top" >
            <?php if($pid!=-1){ ?>
                <p style="padding: 10px 0px 0px 30px;font-size: 1.5em;font-weight: 300;">项目看板
                    <a class="mouse_over" href="project_view.php?recordID=<?php echo $pid;?> " style="float: right;margin-right: 5em;">
                                                    <span class="glyphicon glyphicon-arrow-left"></span> <?php echo $multilingual_global_action_back; ?></a></p>
            <?php }else{ ?>
                <p style="padding: 10px 0px 0px 30px;font-size: 1.5em;font-weight: 300;">个人看板</p>
            <?php }?>

            <div id="displayRoom" style="overflow-y:auto;"> 
             <input type="hidden" id="now_role" name="now_role" value="<?php echo $now_role; ?>" />
                <?php while($row_board = mysql_fetch_assoc($board_info)){ 
                     $id_seq = $id_seq + 1;?>
                    <div class="row"style="margin-right:0px"> 
                        <input type="hidden" id="ID" name="ID" value="<?php echo $row_board['board_id']; ?>" />
                        <span id="parent<?php echo $row_board['board_seq']; ?>" style="display:block;width:15em;clear:none;background:white;height:15em;line-height:30px;margin-right: 30px;margin-bottom:30px;text-align:center;">
                            <span class="usr" id="<?php echo $id_seq; ?>">
                                <p style="margin: 0px;margin-bottom: 10px;">
                                    <?php if($row_board['board_from']==$uid || $now_role == 1){ $close_ok = 1;}else{$close_ok = 0;} ?>
                                    <a  onclick="ch1(<?php echo $row_board['board_id']; ?>,<?php echo $close_ok; ?>)">
                                         <input type="hidden" id="ID" name="ID" value="<?php echo $row_board['board_id']; ?>" />
                                        <img src="images/ui/base_close.png" style="float: right;margin-left: 11.5em;" width="16px">
                                    </a>
                                <!--<a href="#editmodal" role="button" class="edit" data-toggle="modal" <?php $bid=$row_board['board_id'] ?> >-->
                                    <?php if($row_board['board_from'] == $uid){//是自己的发的便签 ?>
                                        <a role="button"  onclick="eb(<?php echo $row_board['board_id']; ?>)">
                                           <!-- <script>
                                              $(function(){
                                                $(".edit").click(function(){
                                                  $("#editmodal").modal("toggle");
                                              });
                                            });
                                            </script> -->
                                            <img src="images/ui/base_edit.png" style="float: left;margin-top: -2px;position: absolute;" height="18px">
                                        </a>
                                    <?php } ?>
                                </p>
                                
                                <span class="usr_text" ><?php echo $row_board['board_content']; ?></span>
                                <?php if($pid!=-1){ ?>
                                     <p style="margin-top: 92%;text-align: right;color:rgb(86, 86, 86);font-size: 1em;"><?php echo $row_board['tk_display_name'] ?></p>
                                <?php }else{ ?>
                                    <p style="margin-top: 92%;text-align: right;color:rgb(86, 86, 86);font-size: 1em;"><?php echo $row_board['board_time'] ?></p>
                                <?php } ?>
                                <!--<div class="form-group col-xs-12">
                                    <label for="tk_stage_desc"><?php echo $multilingual_default_task_description; ?><span  id="tk_stage_title_msg"></span></label>
                                <div>
                                    <textarea id="tk_stage_desc" name="tk_stage_desc" style="width: 155px;height: 150px;background: #ffc;border: 0px;" ></textarea>-->
                                <!--</div>
                                </div>
                                <span style="width: 13em;
height: 1em;
padding: 11.5em 0 0 0;
text-align: right;
position: absolute;
font-size: 100%;color: rgb(129, 129, 129);">from:  <?php echo $row_board['tk_display_name']; ?></span>-->
                            </span>
                        </span>
                    </div>
                    <script language="javascript">
                        function ch1(data,isok) {
                            if(isok == 1){
                                       // var data = data;
                                if (confirm("您确定要删除吗?")) {
                                   // window.location = "show_news.php?flag=1&id={$row['news_id']}";  href="base_delete.php?delID=<?php echo $row_board['board_id']; ?>&pid=<?php echo $pid; ?>"    
                                   window.location = "base_delete.php?delID="+data+"&pid=<?php echo $pid; ?>";
                                    return true;
                                } else {
                                    return false;
                                }
                            }
                            else{
                                alert("对不起，您没有删除的权限！");
                            }
                        }
                    </script>
                   
                <?php }//while ?>

                <div class="row"style="margin-right:0px"> 
                    <!--<div class="row"style="margin-right:0px"> -->
                <span><span class="usr" id="add"><button  data-toggle="modal" data-target="#mymodal" class="btn btn-primary"  style="display:inline-block;-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.5);
                        background-color: #ffc;border-color: #ffc;
                        text-shadow: 0 -1px 1px rgba(0,0,0,0.25);width: 202px;clear: none;height: 202px;line-height: 30px;margin-top: 25px;
margin-left: 27px;text-align:center;background: url(images/ui/add.png)no-repeat;"; type="button"; ></button></span></span> 

                          
                    <!--<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
                    <script src="http://cdn.bootcss.com/bootstrap/2.3.1/js/bootstrap-transition.js"></script>
                    <script src="http://cdn.bootcss.com/bootstrap/2.3.1/js/bootstrap-modal.js"></script>-->
                    
                    </div> 
                </div>
            </td>

        </tr>
        
    </table>

<?php require( 'foot.php'); ?>
<script>

    $(window).load(function()
    {
        $(window).resize(); 
    });
    $(window).resize(function()
    {   
        //$("#tbody_br").css("width",$("#tasktab").width()-551+"px");
        //$("#headerlink").css("width",$("#tasktab").width()/0.9+"px");
        //var o = document.getElementById("view");
        //var h = o.offsetHeight;  //高度
        $("#foot_div").css("margin-top",0);
        
    });
</script>

<form action="<?php echo "base_edit.php?pid=".$pid ?>"  method="post" name="form2" id="form2">
<div class="modal" id="editmodal">
    <div 
    style="margin-top: 80px;"
    class="modal-dialog">
    <div class="modal-content"style="align="center";">
        <div class="modal-header">
            <h4 class="modal-title">编辑标签</h4>
            <input type="hidden" id="edit_board_id" name="edit_board_id"  />
        </div>
        <div class="modal-body">
         <textarea id="tk_edit_content" name="tk_edit_content" ></textarea> 
        <!-- <div>nihao</div> -->
     </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">保存</button>
    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</form>

<form action="<?php echo "base_add.php?pid=".$pid ?>"  method="post" name="form1" id="form1">
<div class="modal" id="mymodal">
    <div 
    style="margin-top: 80px;"
    class="modal-dialog">
    <div class="modal-content"style="align="center";">
        <div class="modal-header">
            <h4 class="modal-title">添加新的标签</h4>
        </div>
        <div class="modal-body">
         <textarea id="tk_stage_desc" name="tk_stage_desc" ></textarea> 
        <!-- <div>nihao</div> -->
     </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">保存</button>
    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal 
<script>
  $(function(){
    $(".btn").click(function(){
      $("#mymodal").modal("toggle");
  });
});
</script> -->

 </form>

 
</body>

</html>