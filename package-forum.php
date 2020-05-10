<?php 
    $path =$_SERVER['DOCUMENT_ROOT'];
    $config = array(
        'path'          => $path,
        'wolf05'        => $path.'/wolf05',
        'application'   => $path.'/wolf05/application',
        'system'        => $path.'/wolf05/application/system/Wofl05require.php',
        'autoload'      => $path.'/wolf05/vendor/',
    );
    require_once($config['system']);
    use wolf05\helper\tatiyeNet;
    use wolf05\helper\tatiyeNetmodal;

/*
|--------------------------------------------------------------------------
| Initializes ESPLOID IF POST GET 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
   $explode= $_GET['tn'];
   $sgmt=explode('/',$explode);
   tatiyeNetmodal::value([
          'token'   =>$sgmt[0],
          'status'  =>$sgmt[1],
          'tabel'   =>'members',
          'post'    =>[
                         'a1'=>'UserName',
                         'a2'=>'Password',
                         
                      ],
   ]);
    $ID=tatiyeNet::paramDecrypt($sgmt[0]); 
    $Account = new tatiyeNet();
    $count  =  $Account->select_Group(" * ", "members", " `member_id` = '".$ID."' ");
    $En = $Account->getObjectResults();
/*
|--------------------------------------------------------------------------
| Initializes FORUM
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/

 ?>
<div class="row">
<div class="media">
  <a class="pull-left" href="#">
   <img style="width: 80px" class="img-circle"  src="<?php echo tatiyeNet::IMG('url-user',$ID)?>" alt="Image">
  </a>
  <div class="media-body">
    <h3 class="media-heading"><?php echo $En->FirstName?></h3>
     <div class="form-group col-md-12">
         <label id="a1">Emai</label>
         <input type="text" class="form-control" name="a1" placeholder="Input field" value=""required>
     </div>
     <div class="form-group col-md-12">
         <label id="a2">Paswword</label>
         <input type="text" class="form-control" name="a2" placeholder="Input field" value=""required>
     </div>

  </div>
</div>
 </div>

