<?php 
use wolf05\helper\tatiyeNet;
      tatiyeNet::Modal([
          'status'    =>'dialog',
          'package'   =>SEGMENT_2,
          'model'     =>'auto', //Facebook Mac ,Bootstrap ,auto
          'view'      =>'guide1', //guide
       ]);
      
 ?>
<style type="text/css">
      .is-accent,.is-taller{
        background-color: #FFF;
      }
      .category-box img {
    display: block;
    margin: 0 auto;
    min-height: 70%;
    max-height: 110px;
    margin-bottom: 30px;
    -webkit-filter: grayscale(1);
    filter: grayscale(1);
    opacity: .6;
    transition: all .3s;
    margin-bottom: 10px;
}
.box-content h3{
   padding-top: 10px;
}
  </style>
        
        <!-- Question wrap -->
        <div class="questions-wrap is-smaller">
            <!-- Container -->
            <div class="container">
                <div class="question-content is-large">
                    <div class="columns true-dom ">
                        <div class="column">
                            <div class="categories-header">
                                <h2>Configurasi</h2>
                                <div class="control">
                                    <input class="input is-rounded" type="text" placeholder="Filter...">
                                    <div class="search-icon">
                                        <i data-feather="search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="tile is-ancestor categories-tile-grid">
                                <div class="tile is-vertical is-8">
                                    <div class="tile">
                                        <div class="tile is-parent is-vertical">
                                            <a href="<?php echo tatiyeNet::ULRstepget('2','dbrealtime')?>"class="tile is-child category-box is-accent">
                                                <img src="<?php echo tatiyeNet::IMG('url-img',"accurate.svg");?>" alt="">
                                                <div class="box-content">
                                                    <h3 class="title is-6">API Database Realtime</h3>
                                                    <p>Update Applications :API Database Realtime </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tile is-parent is-vertical">
                                    <a href="#"class="tile is-child category-box is-accent is-taller">
                                        <img src="<?php echo tatiyeNet::IMG('url-img',"mobile-apps.svg");?>" alt="">
                                        <div class="box-content">
                                            <h3 class="title is-6"><i class="ti-46"></i> Theme </h3>
                                            <p>Theme Configurasi </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tile is-vertical is-12">
                            <div class="row">
                              <div class="col-md-4">
                                <a href="<?php echo tatiyeNet::ULRstepget('2','Oauth')?>"class="tile is-child category-box is-primary is-taller">
                                    <img src="<?php echo tatiyeNet::IMG('url-img',"programming.svg");?>" alt="">
                                    <div class="box-content">
                                        <h3 class="title is-6">Oauth Apps</h3>
                                        <p>Oauth Apps login API </p>
                                    </div>
                                </a>
                              </div>
                              <div class="col-md-4">
                                    <a onclick="WFmodal('Package Applications/Package/Interface/Package/panePackage/<?php echo $id_trm?>/width-500px');"class="tile is-child category-box is-primary is-taller">
                                        <img src="<?php echo tatiyeNet::IMG('url-img',"home-illo-team.svg");?>" alt="">
                                        <div class="box-content">
                                            <h3 class="title is-6"><i class="ti-46"></i> Applications</h3>
                                            <p>Package Applications</p>
                                        </div>
                                    </a>
                              </div>
                              <div class="col-md-4">
                                    <a href="<?php echo tatiyeNet::ULRstepget('2','package')?>"class="tile is-child category-box is-primary is-taller">
                                        <img src="<?php echo tatiyeNet::IMG('url-img',"reading.svg");?>" alt="">
                                        <div class="box-content">
                                            <h3 class="title is-6">User Package</h3>
                                            <p>User Package Controler</p>
                                        </div>
                                    </a>
                              </div>
                            </div>

                            </div>  
                            <!-- Load more Categories -->
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>




