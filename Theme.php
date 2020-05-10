        <?php 
      use wolf05\helper\tatiyeNet;
      tatiyeNet::Modal([
          'status'    =>'dialog',
          'package'   =>SEGMENT_2,
          'model'     =>'auto', //Facebook Mac ,Bootstrap ,auto
          'view'      =>'guide1', //guide
       ]);

        tatiyeNet::options('validasi',[
        'categori' =>'checkbox',
        'token'    =>KEY,
        'tabel'    =>'panel',
        'file'     =>'kategori',
      ]);

   
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
                                        <span>Theme Configurasi</span>
                                    </div>
                                    <div class="main-stats">
                                        <div class="stat-block">
                                            <h4>Access</h4>
                                            <p><?php echo tatiyeNet::UserAgents('Session','VISIT');?></p>
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
<table class="table">
    <tbody>
        <?php
        $no=0;
        $data = new tatiyeNet();
        $count  =  $data->select_Group(" * ", "panel", " `data_id` = 'Theme' ");
        while ($ngi = $data->getObjectResults()){
          $id=$ngi->id;
          $id_trm=tatiyeNet::paramEncrypt($id);
          $no=$no+1;
        ?>
        <tr id="ID<?php echo $id_trm?>">
            <td style="width: 60px; text-align: center;">
                <i class="WFsvg1<?php echo $no .' '. $ngi->name?> 40"></i>
              </td>
            <td style="font-size: 13px;">
                <b><?php echo $ngi->name;?></b>
                <dt><?php echo $ngi->ketulr;?></dt>
                <dd>Update Date : <?php echo tatiyeNet::Format("stamp-$ngi->date");?></dd>     
            </td>
            <td>
                <label class="pull-right el-switch el-switch-sm">
                   <input id="WFcheckboxID<?php echo $no?>" class="ON-<?php echo $no?>/sectionDB/active/<?php echo $id_trm;?>" type="checkbox"name="ON-<?php echo $no?>" value="">
                    <span class="el-switch-style"></span>
                </label>
            </td>

        </tr>
    <?php }?>
    </tbody>
</table>
 <!--====  End of Section comment  ====-->
 

                        </div>
                    </div>
                </div>
            </div>

