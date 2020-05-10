<?php 
$PATH =$_SERVER['DOCUMENT_ROOT'];
$ROOT = array(
    'path'          => $PATH,
    'wolf05'        => $PATH.'/wolf05',
    'application'   => $PATH.'/wolf05/application',
    'system'        => $PATH.'/wolf05/application/system/Wofl05require.php',
    'autoload'      => $PATH.'/wolf05/vendor/',
    'package'       => __DIR__.'/SendDestroyLoader.php',
);
require_once($ROOT['system']);
use wolf05\helper\tatiyeNet;
use wolf05\helper\tatiyeNetmodal;
/*
|--------------------------------------------------------------------------
| Initializes ESPLOID IF POST GET 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
  $EXPLODE= $_GET['tn'];
  $SEGMENT=explode('/',$EXPLODE);
  $DIR=$ROOT['package'];
/*
|--------------------------------------------------------------------------
| Initializes CEK SESS_MEMBER_ID LOGIN  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:54:08  WITA
*/
 if (isset($_SESSION['SESS_MEMBER_ID'])) { 
/*
|--------------------------------------------------------------------------
| Initializes IF GET POST 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:41:38  WITA
*/
    if($SEGMENT[0] == tatiyeNetmodal::validasi('package')) { 
       /*
       |--------------------------------------------------------------------------
       | Initializes  POST UPDATE
       |--------------------------------------------------------------------------
       | Develover Tatiye.Net 2018
       | @Date Sel 21 Apr 2020 12:45:57  WITA
       */
      $ID=explode('/',$_POST['id']);
      $Check = new tatiyeNet();
      $count =  $Check->select_Group(" * ", " package ", " `paket` = '".$ID[1]."' ","AND user_id='".tatiyeNet::paramDecrypt($SEGMENT[2])."'");
      $En    = $Check->getObjectResults();
      switch ($ID[0]) {
          case "on":
              switch ($En->paket) {
                  case $ID[1]:
                      break;
                  default:
                   $data = new tatiyeNet();   
                   $arr = array();                   
                   $arr["notif"]    ='on';     
                   $arr["pacname"]    =$SEGMENT[1];    
                   $arr["paket"]    =$ID[1];     
                   $arr["elements"] =tatiyeNet::Text('strtolower',$ID[1]);   
                   $arr["data_ins"] =tatiyeNet::Format("DT-hariIN@ pukul@h:i:s A");
                   $arr["user_id"]  =tatiyeNet::paramDecrypt($SEGMENT[2]);
                   $count=$data->insert("package", $arr); 
              }
              break;
          case "off":
                   $data = new tatiyeNet();     
                   $count  =  $data->delete("package", " `paket` = '".$ID[1]."'","user_id='".tatiyeNet::paramDecrypt($SEGMENT[2])."'");
              break;
      }



     } elseif ($SEGMENT[0] == 'Update'){
      /*
      |--------------------------------------------------------------------------
      | Initializes UPDATE AKUN 
      |--------------------------------------------------------------------------
      | Develover Tatiye.Net 2018
      | @Date Rab 29 Apr 2020 10:36:59  WITA
      */
      $data = new tatiyeNet();     
      $arr = array();                   
      $arr["UserName"] = $_POST['a1'];     
      $arr["Password"] = $_POST['a2'];  
      $arr["md5"]      = md5($_POST['a2']);    
      $count=$data->update(" members ", $arr, " `member_id` = '".tatiyeNet::paramDecrypt($SEGMENT[1])."'","row='1'"); 

     } elseif ($SEGMENT[0] == 'delete'){
            $ID=tatiyeNet::paramDecrypt($_POST['id']);
            /*
            |--------------------------------------------------------------------------
            | Initializes DELETE AKUN
            |--------------------------------------------------------------------------
            | Develover Tatiye.Net 2018
            | @Date Sel 21 Apr 2020 01:28:33  WITA
            */
            $data = new tatiyeNet();     
            $count  =  $data->delete("members", " `member_id` = '".$ID."'","row='1'");
            /*
            |--------------------------------------------------------------------------
            | Initializes DELETE PACKAGE 
            |--------------------------------------------------------------------------
            | Develover Tatiye.Net 2018
            | @Date Rab 29 Apr 2020 11:05:22  WITA
            */
            $Package = new tatiyeNet();     
            $count  =  $Package->delete("package", " `user_id` = '".$ID."'","row='1'");


     } elseif ($SEGMENT[0] == 'insertDB'){
        /*
        |--------------------------------------------------------------------------
        | Initializes INSERT DB REALTIME 
        |--------------------------------------------------------------------------
        | Develover Tatiye.Net 2018
        | @Date Jum 01 Mei 2020 12:24:39  WITA
        */
        $data = new tatiyeNet();     
        $arr = array();                   
        $arr["name"]  = $_POST['a1'];     
        $arr["ketulr"]    = $_POST['a2'];     
        $arr["appid"]     = $_POST['a3'];     
        $arr["key"]       = $_POST['a4'];     
        $arr["secret"]    = $_POST['a5']; 
        $arr["date"]      =tatiyeNet::Format("Time");    
        $arr["data_id"]   ='Realtime';
        $arr["status"]    = tatiyeNet::hideUrl($_POST['a2']);
        $arr["kategori"]  ='API';
        $arr["user_id"]   = ID;
        $count=$data->insert("panel", $arr); 


     } elseif ($SEGMENT[0] == 'sectionDB'){
      /*
      |--------------------------------------------------------------------------
      | Initializes SELECT CHANNELS DB 
      |--------------------------------------------------------------------------
      | Develover Tatiye.Net 2018
      | @Date Jum 01 Mei 2020 02:16:10  WITA
      */
        $ID=explode('/',$_POST['id']);
        switch ($ID[0]) {
            case "on":
                $data = new tatiyeNet();     
                $arr = array();                   
                $arr["kategori"]  = $ID[1]; 
                $arr["date"]      =tatiyeNet::Format("Time");        
                $count=$data->update(" panel ", $arr, " `id` = '".tatiyeNet::paramDecrypt($SEGMENT[2])."'","user_id='".ID."'"); 
                break;
            case "off":
                $data = new tatiyeNet();     
                $arr = array();                   
                $arr["kategori"]  = 'OFF';
                $arr["date"]      =tatiyeNet::Format("Time");         
                $count=$data->update(" panel ", $arr, " `id` = '".tatiyeNet::paramDecrypt($SEGMENT[2])."'","user_id='".ID."'"); 
                break;
        }


     } elseif ($SEGMENT[0] == 'updaterealtime'){
      /*
      |--------------------------------------------------------------------------
      | Initializes UPDATE DB REALTIME 
      |--------------------------------------------------------------------------
      | Develover Tatiye.Net 2018
      | @Date Jum 01 Mei 2020 12:24:59  WITA
      */
 
        $data = new tatiyeNet();     
        $arr = array();                   
        $arr["name"]  = $_POST['a1'];     
        $arr["ketulr"]    = $_POST['a2'];     
        $arr["appid"]     = $_POST['a3'];     
        $arr["key"]       = $_POST['a4'];     
        $arr["secret"]    = $_POST['a5']; 
        $arr["date"]      =tatiyeNet::Format("Time");    
        $arr["data_id"]   ='Realtime';
        $arr["status"]    = tatiyeNet::hideUrl($_POST['a2']);
        $count=$data->update(" panel ", $arr, " `id` = '".tatiyeNet::paramDecrypt($SEGMENT[1])."'","user_id='".ID."'"); 
   
 } elseif ($SEGMENT[0] == 'deleterealtime'){
            $ID=tatiyeNet::paramDecrypt($_POST['id']);
            /*
            |--------------------------------------------------------------------------
            | Initializes DELETE AKUN
            |--------------------------------------------------------------------------
            | Develover Tatiye.Net 2018
            | @Date Sel 21 Apr 2020 01:28:33  WITA
            */
            $data = new tatiyeNet();     
            $count  =  $data->delete("panel", " `id` = '".$ID."'","user_id='".ID."'");

  } elseif ($SEGMENT[0] == 'Oauth'){
        /*
        |--------------------------------------------------------------------------
        | Initializes INSERT DB REALTIME 
        |--------------------------------------------------------------------------
        | Develover Tatiye.Net 2018
        | @Date Jum 01 Mei 2020 12:24:39  WITA
        */
        $data = new tatiyeNet();     
        $arr = array();                   
        $arr["name"]     = $_POST['a1'];     
        $arr["ketulr"]    = $_POST['a2'];  
        $arr["appid"]     = $_POST['a3'];     
        $arr["key"]       = $_POST['a4'];     
        $arr["secret"]    = $_POST['a5']; 
        $arr["date"]      =tatiyeNet::Format("Time");    
        $arr["data_id"]   ='Oauth';
        $arr["status"]    = tatiyeNet::hideUrl($_POST['a2']);
        $arr["kategori"]  ='Oauth';
        $arr["user_id"]   = ID;
        $count=$data->insert("panel", $arr); 

     } elseif ($SEGMENT[0] == 'updateoauth'){
      /*
      |--------------------------------------------------------------------------
      | Initializes UPDATE DB REALTIME 
      |--------------------------------------------------------------------------
      | Develover Tatiye.Net 2018
      | @Date Jum 01 Mei 2020 12:24:59  WITA
      */
 
        $data = new tatiyeNet();     
        $arr = array();                   
        $arr["name"]  = $_POST['a1'];     
        $arr["ketulr"]    = $_POST['a2'];     
        $arr["appid"]     = $_POST['a3'];     
        $arr["key"]       = $_POST['a4'];     
        $arr["secret"]    = $_POST['a5']; 
        $arr["date"]      =tatiyeNet::Format("Time");    
        $count=$data->update(" panel ", $arr, " `id` = '".tatiyeNet::paramDecrypt($SEGMENT[1])."'","user_id='".ID."'"); 
}
/*
|--------------------------------------------------------------------------
| Initializes AND  SESS_MEMBER_ID
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date 
*/
}
require_once($ROOT['package']);
?>
