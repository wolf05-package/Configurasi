<?php 
// use wolf05\helper\Wofl05;
use wolf05\helper\tatiyeNet;
use wolf05\helper\tatiyeNetJson;
tatiyeNetJson::filePut([
  'status'=>'save1', //open, save
  'title' =>[
      'icon'   =>'inbox',
      'name'   =>tatiyeNet::Text('ucfirst',SEGMENT_2),  //tatiyeNet::Text('ucfirst',SEGMENT_2),
  ]
]);
?>
