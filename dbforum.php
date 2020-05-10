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
          'tabel'   =>'panel',
          'post'    =>[
                         'a1'=>'name',
                         'a2'=>'ketulr',
                         'a3'=>'appid',
                         'a4'=>'key',
                         'a5'=>'secret',
                         
                      ],
   ]);

/*
|--------------------------------------------------------------------------
| Initializes FORUM
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/

 ?>
<div class="row">
     <div class="form-group col-md-4">
         <label id="a1">Channels</label>
         <input type="text" class="form-control" name="a1" placeholder="Input field" value="">
     </div>
     <div class="form-group col-md-8">
         <label id="a2">Ulr Vendor</label>
         <input type="text" class="form-control" name="a2" placeholder="Input field" value="">
     </div>

     <div class="form-group col-md-6">
         <label id="a3">App id</label>
         <input type="text" class="form-control" name="a3" placeholder="Input field" value="">
     </div>

     <div class="form-group col-md-6">
         <label id="a4">Key</label>
         <input type="text" class="form-control" name="a4" placeholder="Input field" value="">
     </div>

     <div class="form-group col-md-12">
         <label id="a5">Secret</label>
         <input type="text" class="form-control" name="a5" placeholder="Input field" value="">
     </div>
 </div>

<script type="text/javascript">
    $(document).ready(function() {

         
    });
</script>