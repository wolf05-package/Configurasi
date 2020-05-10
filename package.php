        <?php 
      use wolf05\helper\tatiyeNet;
      tatiyeNet::Modal([
          'status'    =>'dialog',
          'package'   =>SEGMENT_2,
          'model'     =>'auto', //Facebook Mac ,Bootstrap ,auto
          'view'      =>'guide1', //guide
       ]);
//       setcookie('theme', 'dantrik', strtotime('+7 days'), '/');
// echo $_COOKIE['theme'];
            tatiyeNet::options('following',[
             'click'  =>'.loadmore',
             'append' =>'#LiID',
             'url'    =>'Configurasi/Load/user.php?tn=members/10',
           ]); 

  tatiyeNet::options('Search',
      [
       'element' => [
                     'Ulli'=>[
                                  'keyup'=>'#search',
                                  'each' =>'#LiID',
                                  'find' =>'li',
                                ]
                     ],
      ]

    );



         ?>
            <div class="container is-custom">
                <div id="pages-about" class="view-wrap is-headless">
                    <div class="columns has-portrait-padding">
                        <div class="column is-4">
                        <?php  
                            tatiyeNet::Format("Calender",[
                             'style'=>[
                                  'width'     =>'100%',
                                  'background'=>'#2F62FF',
                                  'color'     =>'#FFF'
                              ],
                              'SendDestroyLoader'=>[
                                  'send'     =>'off', //on ,off
                                  'format'   =>'IN', // IN,EN
                                  'url'      =>'Account/calenderData.php',
                                  'resultsID'=>'#LiID',
                              ]
                            ]);
                        ?>



                            <div class="card">
                                <div class="card-heading is-bordered">
                                    <h4>List Package</h4>
                                </div>
                                <div class="card-body no-padding">
                                    <?php
                                    $data = new tatiyeNet();
                                    $count  =  $data->select_Group(" * ", " package ", " `user_id` = '".ID."' "," ");
                                    while ($ngi = $data->getObjectResults()){
                                        $Key=tatiyeNet::paramEncrypt($ngi->id);
                                    ?>
                                    <div class="page-block transition-block" id="page<?php echo $Key?>">
                                        <i class="WFsvg0 box1 30"></i>
                                        <div class="page-meta">
                                            <span class="text-uppercasek"><?php echo $ngi->paket;?></span>
                                            <span><?php echo $ngi->data_ins;?> <br></span>
                                        </div>
                                        <div class="add-page add-transition">
                                           
                                        </div>
                                    </div>
                                   <?php }?>
                                   <div id="PagesSosialMedia"></div>
                                </div>
                            </div>





                        </div>
                        <div class="column is-8">
                               <div class="stats-wrapper">
                                <div class="stats-header">
                                    <div class="avatar-wrapper">
                                        <img class="avatar" src="<?php echo tatiyeNet::IMG('account');?>" data-demo-src="#" data-user-popover="0" alt="">
                                        <div class="badge">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="user-info">
                                        <h4><?php echo tatiyeNet::Account('name');?></h4>
                                        <?php
                                         if(SEGMENT_4 == 'user') {?>
                                        <a class="button is-follow" href="<?php echo tatiyeNet::URLstep('3')?>">Beranda</a>
                                        <?php } elseif (OPENID_ID == 'diteruskan'){?>
                                        2
                                        <?php } else {?>
                                         <h5>Administrator</h5>
                                        <?php }?>
                                        
                                    </div>
                                    <div class="main-stats">
                                        <div class="stat-block">
                                            <h4>User</h4>
                                            <p><?php echo tatiyeNet::UserAgents('Session','USER');?></p>
                                        </div>
                                        <div class="stat-block is-centered">
                                            <h4>package</h4>
                                            <p><?php echo tatiyeNet::UserAgents('Session','PAC');?></p>
                                        </div>
                                     <svg class="sparkline sparkline--blue sparkline--filled" width="160" height="70" stroke-width="2"></svg>
                                    </div>
                                </div>
                            </div>
 <!--=====================================
 =            Section comment            =
 ======================================-->
<?php
 if(SEGMENT_4 == 'user') {

      tatiyeNet::options('validasi',[
        'categori' =>'checkbox',
        'token'    =>SEGMENT_5,
        'tabel'    =>'package',
        'file'     =>'pacname',
      ]);

  ?>
<!--===================================
=            USER PACKAGE             =
====================================-->
   <ul >
    <?php
    $no=0;

    $data = new tatiyeNet();
    $count  =  $data->select_Group(" * ", "members", " `row` = '1' ","AND member_id='".tatiyeNet::paramDecrypt(SEGMENT_5)."'");
    while ($ngi = $data->getObjectResults()){
      $id=$ngi->member_id;
      $id_trm=tatiyeNet::paramEncrypt($id);
      $no=$no+1;
      switch (tatiyeNet::user_online($ngi->member_id)) {
          case "Offline":
              $sts= '<i class="WFicon1 mdi \f12f fs-15 cr-E0E0E0"></i>';
              break;
          default:
              $sts= '<i class="WFicon1 mdi \f12f fs-15 cr-66BB6A"></i>';
      }
      
    ?>

   <!--   -->
<li class="col-md-12 snippet"id="dataID">
  <div class="row">
    <div class="col-md-6">
          <div class="media">
            <div class="pull-left" href="#">
              <img style="width: 40px" class="img-circle" src="<?php echo tatiyeNet::IMG('url-user',$id)?>"  alt="Image">
            </div>
            <div class="media-body">
              <h4 class="media-heading"><?php echo $ngi->FirstName;?></h4>
               <dt style="font-size: 13px;"><?php echo $ngi->UserName;?></dd>
                <dt style="font-size: 11px;">Date Accses: <?php echo tatiyeNet::Format("stamp-$ngi->created");?></dt>
                <dt><?php echo tatiyeNet::options('password',ID);?></dt>
                
            </div>
          </div>
    </div>
    <div class="col-md-4 ">
      <dt style="font-size: 11px;"><i class="WFsvg<?php echo $no .' '. tatiyeNet::options('OuthIMG',$ngi->oauth_provider)?> 14"></i> Oauth Provider:<?php echo $ngi->oauth_provider;?></dt>
     <dt style="font-size: 11px;"><?php echo $sts?> Status :<?php echo tatiyeNet::user_online($ngi->member_id);?></dt>
     <dt style="font-size: 11px;"><i class="WFicon3 mdi \f3d7 fs-15"></i>Accses :<?php echo tatiyeNet::UserAgents('Session','ACCESS',$ngi->member_id);?></dt>
     <dt style="font-size: 11px;"><a  onclick="WFdelete('delete/id/<?php echo SEGMENT_5;?>');"><i class="picons-56  cr-EF5350 fs-12"></i>Delete Account</a></dt>
    </div>
    <div class="col-md-2">
      <a class="WFbtn pull-right" onclick="WFupdate('Package/package-forum/Update Account/Update/on/<?php echo $id_trm?>/120x600x0');">Settings</a>
  
    </div>
    <div class="col-md-12">
      <br>
       <table class="table table-hover">
          <tbody>
       <?php
       $no=0;
       $data = new tatiyeNet();
       $count  =  $data->select_Group(" * ", " package ", " `user_id` = '".ID."' ");
       while ($ngi = $data->getObjectResults()){
         $id=$ngi->id;
         $id_trm=tatiyeNet::paramEncrypt($id);
         $no=$no+1;



       ?>
          <tr>
              <td style="width: 30px;"> <i class="WFsvg0 box1 20"></i></td>
              <td><?php echo $ngi->paket;?></td>
              <td class="">

              <span class="margin-r"></span>
              <label class="el-switch el-switch-sm pull-right">
                   <input id="WFcheckboxID<?php echo $no?>" class="<?php echo $ngi->paket;?>/package/<?php echo 'box'.$no?>/<?php echo SEGMENT_5;?>"name="<?php echo 'box'.$no?>" type="checkbox"value="">
                  <span class="el-switch-style "></span>
              </label>
   
              </td>
            </tr>

    
     <?php }?>
               </tbody>
        </table>
    </div>
  </div>
</li>


<!--====  End of USER PACKAGE   ====-->

<?php }?>
</ul>
<?php } else {?>
    <div class="categories-header">
      <h2>Account</h2>
      <div class="control">
          <input id="search"class="input is-rounded " type="text" placeholder="Filter...">
          <div class="search-icon">
              <i data-feather="search"></i>
          </div>
      </div>
  </div>
   <ul class="snippet-li" id="LiID">
    <?php
    $no=0;
    $data = new tatiyeNet();
    $count  =  $data->select_Group(" * ", "members", " `row` = '1' ","AND member_id<>'".ID."'ORDER BY member_id DESC LIMIT 10");
    while ($ngi = $data->getObjectResults()){
      $id=$ngi->member_id;
      $id_trm=tatiyeNet::paramEncrypt($id);
      $no=$no+1;
      switch (tatiyeNet::user_online($ngi->member_id)) {
          case "Offline":
              $sts= '<i class="WFicon1 mdi \f12f fs-15 cr-E0E0E0"></i>';
              break;
          default:
              $sts= '<i class="WFicon1 mdi \f12f fs-15 cr-66BB6A"></i>';
      }

    ?>

   <!--   -->
<li class="col-md-12 snippet"id="dataID">
  <div class="row">
    <div class="col-md-6">
          <div class="media">
            <div class="pull-left" href="#">
              <img style="width: 40px" class="img-circle" src="<?php echo tatiyeNet::IMG('url-user',$id)?>"  alt="Image">
            </div>
            <div class="media-body">
              <h4 class="media-heading"><?php echo $ngi->FirstName;?></h4>
               <dt style="font-size: 13px;"><?php echo $ngi->UserName;?></dd>
                <dt style="font-size: 11px;">Date Accses: <?php echo tatiyeNet::Format("stamp-$ngi->created");?></dt>
                
            </div>
          </div>
    </div>
    <div class="col-md-4 ">
       
      <dt style="font-size: 11px;"><i class="WFsvg<?php echo $no .' '. tatiyeNet::options('OuthIMG',$ngi->oauth_provider)?> 14"></i> Oauth Provider:<?php echo $ngi->oauth_provider;?></dt>
     <dt style="font-size: 11px;"><?php echo $sts?> Status :<?php echo tatiyeNet::user_online($ngi->member_id);?></dt>
     <dt style="font-size: 11px;"><i class="WFicon3 mdi \f3d7 fs-15"></i>Accses :<?php echo tatiyeNet::UserAgents('Session','ACCESS',$ngi->member_id);?></dt>
    </div>
    <div class="col-md-2">
       <a class="WFbtn pull-right" href="<?php echo tatiyeNet::ULRstepget('3','user/'.$id_trm)?>">Package</a> 
    </div>
  </div>
</li>
<?php }?>
<?php
 if($no == '10') {?>
   <li class="col-md-12 snippet_footer">
      <span class="pull-right">2</span>
     <a class="WFbtn large loadmore" data-page="2">Halaman </a>
   </li>
<?php }?>

</ul>
<?php }?>

 <!--====  End of Section comment  ====-->
 

                        </div>
                    </div>
                </div>
            </div>

