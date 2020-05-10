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
                                        <a style="width: 180px;"class="button is-follow"onclick="WFinsert('API Realtime/dbforum/Save Channels/insertDB/on/x/120x600x0');">API Realtime </a>
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
        $count  =  $data->select_Group(" * ", "panel", " `data_id` = 'Realtime' ");
        while ($ngi = $data->getObjectResults()){
          $id=$ngi->id;
          $id_trm=tatiyeNet::paramEncrypt($id);
          $no=$no+1;
        ?>
        <tr id="ID<?php echo $id_trm?>">
            <td style="width: 40px;">
               <img style="width: 40px;"src="<?php echo tatiyeNet::IMG('url-favicon',$ngi->ketulr);?>">
              </td>
            <td style="font-size: 13px;">
                <dd>Channels :<?php echo $ngi->name;?></dd>
                <dt>Ulr Provider : <?php echo tatiyeNet::hideUrl($ngi->ketulr)?></dt>
                <dd>Update Date : <?php echo tatiyeNet::Format("stamp-$ngi->date");?></dd>     
            </td>
            <td>
                <label class="el-switch el-switch-sm">
                   <input id="WFcheckboxID<?php echo $no?>" class="API<?php echo $no?>/sectionDB/active/<?php echo $id_trm;?>" type="checkbox"name="API<?php echo $no?>" value="">
                    <span class="el-switch-style"></span>
                </label>
            </td>
            <td>
                <div class="pull-right dropdown is-spaced is-right is-neutral dropdown-trigger">
                    <div>
                        <div class="WFbtn">
                            Setting
                        </div>
                    </div>
                    <div class="dropdown-menu" role="menu">
                        <div class="dropdown-content">
                            <a onclick="WFupdate('API Channels/dbforum/Update Channels/updaterealtime/on/<?php echo $id_trm?>/120x600x0');"class="dropdown-item">
                                <div class="media">
                                    <i data-feather="settings"></i>
                                    <div class="media-content">
                                        <h3>Update Channels</h3>
                                        <small>Channels name <?php echo $ngi->name;?>.</small>
                                    </div>
                                </div>
                            </a>
                            <a onclick="WFupdate('Code Configure/dbconfigure/xxx/sxxave/off/xxxxx/120x600x0');"class="dropdown-item">
                                <div class="media">
                                    <i data-feather="settings"></i>
                                    <div class="media-content">
                                        <h3>Configure</h3>
                                        <small>Access widget Channels.</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a onclick="WFdelete('deleterealtime/id/<?php echo $id_trm?>');" class="dropdown-item">
                                <div class="media">
                                    <i data-feather="trash-2"></i>
                                    <div class="media-content">
                                        <h3>Remove</h3>
                                        <small>Removes Channels.</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

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

