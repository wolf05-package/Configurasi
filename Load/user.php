<?php 
$PATH =$_SERVER['DOCUMENT_ROOT'];
$ROOT = array(
       'path'          => $PATH,
       'wolf05'        => $PATH.'/wolf05',
       'system'        => $PATH.'/wolf05/application/system/Wofl05require.php',
       'plugin'        => '/wolf05/application/assets',
);
require_once($ROOT['system']);
use wolf05\helper\tatiyeNet;
tatiyeNet::DirStyle(tatiyeNet::URLdirektori('assets',''),'wolf05.css');
tatiyeNet::DirStyle(tatiyeNet::URLdirektori('assets',''),'wolf05.js');

/*
|--------------------------------------------------------------------------
| Initializes LOADMORE RESULT_PER_PAGE
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
  $EXPLODE= $_GET['tn'];
  $SEGMENT=explode('/',$EXPLODE);
  $TABEL=$SEGMENT[0];
  $RESULT_PER_PAGE=$SEGMENT[1];
  if(isset($_POST['page'])):
        $PAGE=$_POST['page'];
        $SQL="SELECT * FROM `$TABEL`ORDER BY member_id DESC";
  if($PAGE>0){
       $PAGE_LIMIT=$RESULT_PER_PAGE*($PAGE-1);
       $SQL_PAGE=" LIMIT  $PAGE_LIMIT, $RESULT_PER_PAGE";
  }
  else{
       $SQL_PAGE=" LIMIT 0 , $RESULT_PER_PAGE";
  }
       $RESULT=mysql_query($SQL.$SQL_PAGE);
       $PAGE_ROW = mysql_num_rows($RESULT);
  if($PAGE_ROW>0){
    $no=0;
       while($data=mysql_fetch_array($RESULT)){
               $En = new tatiyeNet();
               $count  =  $En->select_Group(" * ", "$TABEL", " `member_id` = '".$data['member_id']."' ");
               $ngi = $En->getObjectResults();
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
               
<!--=====================================
=            Section Content            =
======================================-->
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
       <a class="WFbtn pull-right" href="<?php echo tatiyeNet::ULRsession('Configurasi/package/user/'.$id_trm)?>">Package </a> 
    </div>
  </div>
</li>



<!--====  End of Section Content  ====-->


<?php } }
  if($PAGE_ROW == $RESULT_PER_PAGE){
?>
 <li class="col-md-12 snippet_footer">
   <span class="pull-right"><?php echo  $PAGE+1 ;?></span>
   <a class="WFbtn large loadmore" data-page="<?php echo  $PAGE+1 ;?>">Halaman </a>
 </li>
 <?php }else{ ?>

<?php } endif; ?>
