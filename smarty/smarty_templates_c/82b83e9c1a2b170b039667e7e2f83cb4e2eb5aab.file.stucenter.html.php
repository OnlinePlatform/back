<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-30 05:16:28
         compiled from ".\smarty\templates\stucenter.html" */ ?>
<?php /*%%SmartyHeaderCode:1453955921aee801221-13834829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82b83e9c1a2b170b039667e7e2f83cb4e2eb5aab' => 
    array (
      0 => '.\\smarty\\templates\\stucenter.html',
      1 => 1435641222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1453955921aee801221-13834829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55921aee8c85d3_93244307',
  'variables' => 
  array (
    'session_username' => 0,
    'courses' => 0,
    'course' => 0,
    'researches' => 0,
    'research' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55921aee8c85d3_93244307')) {function content_55921aee8c85d3_93244307($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico">-->
    <title>
      个人中心
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <link href="css/individual_center.css" rel="stylesheet">
  </head>
  <?php echo '<script'; ?>
 src="js/individual_center.js"><?php echo '</script'; ?>
>
  <body>
    <!--Navigator Start-->
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('session_username'=>$_smarty_tpl->tpl_vars['session_username']->value), 0);?>

<!--     <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="collapse navbar-collapse pull-left">
          <ul class="nav navbar-nav">
            <li> <a href="#" class="active"> 首页 </a> </li>
            <li> <a href="#"> 教学实验 </a> </li>
            <li> <a href="#"> 科研合作 </a> </li>
            <li> <a href="#"> 就业实习 </a> </li>
            <li> <a href="#"> 关于我们 </a> </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li> <a href="#"> 注册 </a> </li>
            <li> <a href="#"> 登录 </a> </li>
          </ul>
        </div>
      </div>
    </nav> -->
    <!--Navigator End-->
    <div class="container">
      <!--个人中心Head Start-->
      <div class="row">
        <ul class="breadcrumb">
          <li>
            <a href="#"> 个人中心 </a>
            <span class="divider"> </span>
          </li>
        </ul>
      </div>
      <!--个人中心Head End-->
      <!--个人中心Body Start-->
      <div>
        <!-- Left Start -->
        <div class="modal fade" id="del_confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <p>确认删除？</p>
                </div>
                <div class='modal-footer'>
                  <a href='#' class='btn btn-success'> 确认 </a>
                  <a href='#' class='btn' data-dismiss='modal'> 关闭 </a>
                </div>
              </div>
            </div>
          </div>
        <div class="col-xs-12 col-sm-9 ">
          <!--我的课程 Head Start-->
          <div class="col-xs-12  bg">
            <ul class="nav pull-left">
              <li> <a href="course_display.php"> 我的课程 </a> </li>
            </ul>
            <p class="pull-left badge"><a href="#" data-toggle="modal" data-target="#messages" >4</a></p>
            <div class="modal fade" id="messages" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <ul>
                    <li>
                      <a href="#">李楠回复了你</a>
                    </li>
                    <li>
                      <a href="#">李楠回复了你</a>
                    </li>
                    <li>
                      <a href="#">李楠回复了你</a>
                    </li>
                    <li>
                      <a href="#">李楠回复了你</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="pull-left glyphicon" style="-webkit-margin-before:10px;-webkit-margin-after:10px;color:#31b0d5;padding-left:20px;"><a data-toggle="modal" data-target="#addcourse" href="#" title="添加课程">+</a></div>
            <div class="modal fade" id="addcourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4>添加课程</h4>
                  </div>
                  <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">
                        </span>
                        <span class="sr-only">
                          Close
                        </span>
                      </button>
                      <form action="#">
                        <div class="form-group">
                          <input type="text" id="search" placeholder="请输入要添加的课程信息"/>
                          <input type="submit" value="搜索">
                        </div>
                      </form>
                  </div>
                  <div class='modal-footer'>
                        <a href='#' class='btn' data-dismiss='modal'>
                          关闭
                        </a>
                      </div>
                </div>
              </div>
            </div>
            <ul class="nav pull-right">
              <li> <a href="course_display.php"> more </a> </li>
            </ul>
          </div>
          <!--我的课程 Head End-->
          <!--我的课程 Menu Start-->
          <div class="col-xs-12 ">
            <ul class="nav navbar-nav" id="s-nav">
              <li class=""> <a href="#s-part1"> <span> 已完成的课程 </span> </a> </li>
              <li class=""> <a href="#s-part2"> <span> 申请的课程 </span> </a> </li>
            </ul>
          </div>
          <!--我的课程 Menu End-->
          <!--我的课程 Body Start-->
          <div class="col-xs-12 col-sm-12">
            <div id="s-part1">
              <?php  $_smarty_tpl->tpl_vars['course'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop1']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['course']->key => $_smarty_tpl->tpl_vars['course']->value) {
$_smarty_tpl->tpl_vars['course']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop1']['iteration']++;
?>
              <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop1']['iteration']<=4) {?>
              <div class="col-sm-4 col-md-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#"> <h4> <?php echo $_smarty_tpl->tpl_vars['course']->value['name'];?>
 </h4> </a>
                    <p> 课程码：<?php echo $_smarty_tpl->tpl_vars['course']->value['code'];?>
 </p>
                    <p> 任课教师：<?php echo $_smarty_tpl->tpl_vars['course']->value['teacher_name'];?>
 </p>
                    <p> <a href="course_info.php?course_id=<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
" class="btn-sm btn-info" role="查看详情"> 查看详情 </a> </p>
                  </div>
                </div>
              </div>
              <?php }?>
              <?php } ?>
            </div>
            <div class="hidden" id="s-part2">
              <div class="col-sm-4 col-md-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#"> <h4> php </h4> </a>
                    <p> 课程码：A1243 </p>
                    <p> 任课教师：李晓华 </p>
                    <p> <a href="#" class="btn-sm btn-info btn-margin" role="查看详情"> 查看详情 </a> <label class="label label-danger"> 申请失败</label></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-md-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#"> <h4> Python </h4> </a>
                    <p> 课程码：A1243 </p>
                    <p> 任课教师：李晓华 </p>
                    <p> <a href="#" class="btn-sm btn-info btn-margin" role="进入课程"> 进入课程 </a> <label class="label label-success"> 申请成功</label></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-md-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#"> <h4> Python </h4> </a>
                    <p> 课程码：A1243 </p>
                    <p> 任课教师：李晓华 </p>
                    <p> <a href="#" class="btn-sm btn-info btn-margin" role="查看详情"> 查看详情 </a> <label class="label label-warning"> 正在审核</label></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--我的课程 Body End-->
          <!--科研合作 Head Start-->
          <div class="col-xs-12 bg">
            <ul class="nav pull-left">
              <li> <a href="#"> 科研合作 </a> </li>
            </ul>
            <ul class="nav pull-right">
              <li> <a href="#"> more </a> </li>
            </ul>
          </div>
          <!--科研合作 Head End-->
           <!--科研合作 Menu Start-->
          <div class="col-xs-12 ">
            <ul class="nav navbar-nav" id="s-nav">
              <li class=""> <a href="#my_program"> <span> 已完成项目 </span> </a> </li>
              <li class=""> <a href="#my_programing"> <span> 进行中的项目 </span> </a> </li>
              <li class=""> <a href="#program_apl"> <span> 申请的项目 </span> </a> </li>
            </ul>
          </div>
          <!--科研合作 Menu End-->
          <div class="modal fade" id="program_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      项目详情
                    </div>
                    <div class="modal-body">
                      本项目是有一大批985、211高校联合承办
                    </div>
                    <div class='modal-footer'>
                      <a href='#' class='btn' data-dismiss='modal'>
                        关闭
                      </a>
                    </div>
                  </div>
                </div>
          </div> 
        <div class="col-xs-12 col-sm-12">
          <!--已完成项目 Body Start-->
          <div id="my_program">
              <?php  $_smarty_tpl->tpl_vars['research'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['research']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['researches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop2']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['research']->key => $_smarty_tpl->tpl_vars['research']->value) {
$_smarty_tpl->tpl_vars['research']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop2']['iteration']++;
?>
              <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop2']['iteration']<=4) {?>
            <div class="col-sm-4 col-md-3">
              <div class="thumbnail">
                <div class="caption">
                  <a href="#"> <h4> <?php echo $_smarty_tpl->tpl_vars['research']->value['research_name'];?>
 </h4> </a>
                  <p class="solidwords"> <?php echo $_smarty_tpl->tpl_vars['research']->value['research_info'];?>
 </p>
                  <p> <a href="#program_info" data-toggle="modal" class="btn-sm btn-info" role="查看详情"> 查看详情 </a> </p>
                </div>
              </div>
            </div>
              <?php }?>
              <?php } ?>
          </div>
          <!--已完成项目 Body End-->

          <!--进行中的项目 Body Start-->
          <div id="my_programing" class="hidden">
            <div class="col-sm-4 col-md-3">
              <div class="thumbnail">
                <div class="caption">
                  <a href="#"> <h4> 线上平台 </h4> </a>
                  <p> 一个综合学习、科研、就业的平台 </p>
                  <p> <a href="#" class="btn-sm btn-info" role="进入项目"> 进入项目 </a> </p>
                </div>
              </div>
            </div>
          </div>
          <!--进行中的项目 Body End-->

          <!--申请的项目 Body Start-->
          <div id="program_apl" class="hidden">
            <div class="col-sm-4 col-md-3">
              <div class="thumbnail">
                <div class="caption">
                  <a href="#"> <h4> 大数据 </h4> </a>
                  <p> 基于云平台的***分析</p>
                  <p> <a href="#" class="btn-sm btn-info btn-margin" role="进入项目"> 进入项目 </a> <label class="label label-success"> 申请成功 </label></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-3">
              <div class="thumbnail">
                <div class="caption">
                  <div class="pull-right">
                    <a href="javascript:ele_remove('courseId');" id="courseId" >
                      <span class="glyphicon glyphicon-remove " aria-hidden="true"> </span>
                    </a>
                  </div>
                  <a href="#"> <h4> 大数据 </h4> </a>
                  <p> 基于云平台的***分析</p>
                  <p> <a href="#program_info" data-toggle="modal" class="btn-sm btn-info btn-margin" role="查看详情"> 查看详情 </a> <label class="label label-danger"> 申请失败</label></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-3">
              <div class="thumbnail">
                <div class="caption">
                  <a href="#"> <h4> 大数据 </h4> </a>
                  <p> 基于云平台的***分析</p>
                  <p> <a href="#program_info" data-toggle="modal" class="btn-sm btn-info btn-margin" role="查看详情"> 查看详情 </a> <label class="label label-warning"> 正在审核</label></p>
                </div>
              </div>
            </div>
           </div>
          </div>
           <!--申请的项目 Body End-->

          <!--实习就业 Head Start-->
          <div class="col-xs-12 bg">
            <ul class="nav pull-left">
              <li>
                <a href="#">
                  实习就业
                </a>
              </li>
            </ul>
            <ul class="nav pull-right">
              <li>
                <a href="#">
                  more
                </a>
              </li>
            </ul>
          </div>
          <!--实习就业 Head End-->

          <!--实习就业 Menu Start-->
          <div class="col-xs-12 ">
            <ul class="nav navbar-nav" id="s-nav">
              <li class="">
                <a href="#opt_end">
                  已完成的实习
                </a>
              </li>
              <li>
                <a href="#opt_apl">
                  申请的实习
                </a>
              </li>
            </ul>
          </div>
          <!--实习就业 Menu End-->

          <!--实习就业 Body Start-->
          <div class="col-xs-12 col-sm-12">
            <!--已完成的实习 Start-->
            <div class="" id="opt_end">
              <div class="col-xs-3 col-sm-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#">
                      <h4>软件工程师</h4>
                    </a>
                    <p>安码科技有限公司</p>
                    <p><a href="#" class="btn-sm btn-info" role="查看详情"> 查看详情 </a></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#">
                      <h4>软件工程师</h4>
                    </a>
                    <p>安码科技有限公司</p>
                    <p><a href="#" class="btn-sm btn-info" role="查看详情"> 查看详情 </a></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#">
                      <h4>软件工程师</h4>
                    </a>
                    <p>安码科技有限公司</p>
                    <p><a href="#" class="btn-sm btn-info" role="查看详情"> 查看详情 </a></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#">
                      <h4>软件工程师</h4>
                    </a>
                    <p>安码科技有限公司</p>
                    <p><a href="#" class="btn-sm btn-info" role="查看详情"> 查看详情 </a></p>
                  </div>
                </div>
              </div>
            </div>
            <!--已完成的实习 End-->

            <!--申请的实习 Start-->
            <div class="hidden" id="opt_apl">
              <div class="col-xs-3 col-sm-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#"> <h4>交互设计师</h4> </a>
                    <p>阿里巴巴</p>
                    <p><a href="#" class="btn-sm btn-info btn-margin" role="查看详情"> 查看详情 </a><label class="label label-success">申请成功</label></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#">
                      <h4>软件开发工程师</h4>
                    </a>
                    <p>百度</p>
                    <p><a href="#" class="btn-sm btn-info btn-margin" role="查看详情"> 查看详情 </a><label class="label label-danger">申请失败</label></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#">
                      <h4>交互设计师</h4>
                    </a>
                    <p>阿里巴巴</p>
                    <p><a href="#" class="btn-sm btn-info btn-margin" role="查看详情"> 查看详情 </a><label class="label label-warning">正在审核</label></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#">
                      <h4>软件开发工程师</h4>
                    </a>
                    <p>百度</p>
                    <p><a href="#" class="btn-sm btn-info btn-margin" role="查看详情"> 查看详情 </a><label class="label label-warning">正在审核</label></p>
                  </div>
                </div>
              </div>
            </div>
            <!--申请的实习 End-->
          </div>
          <!--实习就业 Body End-->

          <!--我的关注 Head Start-->
          <div class="col-xs-12 bg">
            <ul class="nav pull-left">
              <li>
                <a href="#">
                  我的关注
                </a>
              </li>
            </ul>
            <ul class="nav pull-right">
              <li>
                <a href="#">
                  more
                </a>
              </li>
            </ul>
          </div>
          <!--我的关注 Head End-->

          <!--我的关注 Menu Start-->
          <div class="col-xs-12 ">
            <ul class="nav navbar-nav" id="s-nav">
              <li>
                <a href="#s-course_concern">
                  关注的课程
                </a>
              </li>
              <li class="">
                <a href="#opt_concern">
                  关注的实习
                </a>
              </li>
            </ul>
          </div>
          <!--我的关注 Menu End-->

          <!--我的关注 Body Start-->
          <div class="col-xs-12 col-sm-12">
            <div id="s-course_concern">
              <div class="col-sm-4 col-md-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#">
                      <h4>
                        Python
                      </h4>
                    </a>
                    <p>
                      课程码：B0po9e4
                    </p>
                    <p>
                      任课教师：西西
                    </p>
                    <p> <a href="#" class="btn-sm btn-info" role="查看详情"> 查看详情 </a> </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="hidden" id="opt_concern">
              <div class="col-xs-12 col-sm-12">
              <div class="col-xs-3 col-sm-3">
                <div class="thumbnail">
                  <div class="caption">
                    <a href="#">
                      <h4>软件工程师</h4>
                    </a>
                    <p>安码科技有限公司</p>
                    <p><a href="#" class="btn-sm btn-info" role="查看详情"> 查看详情 </a></p>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
          <!--我的关注 Body End-->
        </div>
        <!--Left End-->
        <!-- Right Start -->
        <div class="col-xs-6 col-sm-3 pull-right ">
          <!--个人资料 Start-->
          <div class="col-xs-12 layout  bg">
            <div class="col-xs-1">
            </div>
            <!--编辑个人资料 Start-->
            <div class="modal fade" id="edit_material" tabindex="-1" role="dialog"aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">
                      </span>
                      <span class="sr-only">
                        Close
                      </span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                      编辑个人资料
                    </h4>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label class="labl" for="nickname">
                          昵 称：
                        </label>
                        <input type="text" id="nickname" class="" />
                      </div>
                      <div class="form-group">
                        <label class="labl" for="gender">
                          性 别：
                        </label>
                        <input type="radio" id="male" name="gender">
                        <label  for="male">
                          男
                        </label>
                        <input type="radio" id="female" name="gender">
                        <label  for="female">
                          女
                        </label>
                        <input type="radio" id="secret" name="gender">
                        <label  for="secret">
                          保密
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="labl" for="addr">
                          所 在 地：
                        </label>
                        <span id="addr">
                          <select>
                            <option value="" selected="true" disabled="true">
                              所在省
                            </option>
                            <option>
                              北京
                            </option>
                            <option>
                              山东
                            </option>
                          </select>
                          <select>
                            <option value="" selected="true" disabled="true">
                              所在市
                            </option>
                            <option>
                              烟台
                            </option>
                            <option>
                              青岛
                            </option>
                          </select>
                          <select>
                            <option value="" selected="true" disabled="true">
                              所在县/区
                            </option>
                            <option>
                              莱阳
                            </option>
                            <option>
                              莱州
                            </option>
                          </select>
                        </span>
                      </div>
                      <div class="form-group">
                        <label class="labl" for="position">
                          职 位：
                        </label>
                        <input type="text" id="position" class="" />
                      </div>
                      
                      <div class="form-group">
                        <label class="labl" for="school">
                          学 校：
                        </label>
                        <input type="text" id="school" class="" />
                      </div>
                      
                      <div class="form-group">
                        <label class="labl" for="email">
                          邮 箱：
                        </label>
                        <input type="email" id="email" class="" />
                      </div>
                      
                      <div class="form-group">
                        <label for="indiv_sig">
                          个 性 签 名：
                        </label>
                        <textarea placeholder="我的个性签名" class="form-control">
                        </textarea>
                      </div>
                    </form>
                  </div>
                  <div class='modal-footer'>
                    <a href='#' class='btn btn-success'>
                      保存
                    </a>
                    <a href='#' class='btn' data-dismiss='modal'>
                      关闭
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--编辑个人资料 End-->

            
            <div class="col-xs-4 portrait" onmouseover="show_mask();" onmouseout="hide_mask();">
            <div class="popWindow" id="popWindow" style="display:none;">
              </div>
              <div class="update_text" id="update_text" style="display:none;">
                <a href="#" style="cursor:pointer;"><input type="file" name="" id="" accept="image/png,image/gif,image/jpeg"> 更改头像</a>
              </div>
              <img src="img/portrait.jpg" />
            </div>
            <div class="pull-right">
              <a href="#" class="opt_ico" data-toggle="modal" data-target="#edit_material">
                <span class="glyphicon glyphicon-edit " aria-hidden="true">
                </span>
              </a>
            </div>
            
            <ul class="navbar-text nav ">
              <li> <label for="nickname"> 昵称： </label> <span id="nickname"> <?php echo $_smarty_tpl->tpl_vars['session_username']->value;?>
 </span> </li>
              <li> <label for="position"> 职位： </label> <span id="position"> 开发工程师 </span> </li>
              <li> <label for="gender"> 性别： </label> <span id="gender"> 男 </span> </li>
              <!-- <li><label for="email">邮箱：</label><br/><span id="email">1111111@qq.com</span></li>
              <li><label for="addr">所在地：</label><br/><span id="addr">北京邮电大学</span></li> -->
              <li> <label for="indiv_sig"> 个性签名： </label> <br/> <span id="indiv_sig"> 既然选择了远方，就只顾风雨兼程 </span> </li>
            </ul>
          </div>
          <!--个人资料 End-->
        </div>
        <!--Right End-->
      </div>
      <!--个人中心Body End-->
    </div>
    <!--Footer Start-->
    <div class="footer">
      <div class="footer-text">
        <p> <span> 关于我们 </span> <span> 诚征英才 </span> <span> 联系我们 </span> <span> 服务协议 </span> <span> 京ICP备15011063号 </span> </p>
        <p> Copyright 2015 GPX All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;极派客公司&nbsp;&nbsp;&nbsp;&nbsp;版权所有&nbsp;&nbsp;&nbsp;&nbsp; </p>
      </div>
    </div>
    <!--Footer End-->
    <?php echo '<script'; ?>
 src="js/jquery-1.11.1.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/common.js">
    <?php echo '</script'; ?>
>
  </body>
</html><?php }} ?>
