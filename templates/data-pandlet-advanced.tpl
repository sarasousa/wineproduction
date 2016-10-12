

 <script src="../js/graphs/amcharts.js"></script>
 <script src="../js/graphs/serial.js"></script>
 <script src="../js/graphs/light.js"></script>
 <script src="../js/graphs/dataloader.min.js"></script>
 <script var1 = "{$pandlet}"src="{$url1}"></script>
 <script src="{$url2}"></script>
 <script src="{$url3}"></script>
 <script src="{$url4}"></script>
 <script src="{$url5}"></script>

{include file="header.tpl"}

 <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">    
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-left" href="#">Pandlet {$pandlet} - Farm {$farm} - Advanced Mode</a>
                </div>
               <div class="collapse navbar-collapse"> 
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="../php/logout_action.php">
                                Log out
                            </a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
                     
    <button type="submit" class="btn-switch" onclick="window.location.href='../php/data-pandlet-simple.php?pandlet={$pandlet}&farm={$farm}'"><span>Switch to Simple Mode</span></button> 
                     
        <div class="content simple-mode">
            <div class="container-fluid">    
                <div class="row">
                    <!--<div class="col-md-4">-->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Temperature of the Air</h4>
                            </div>
                            <div class="content"> 

                                <!-- Graph -->
                                <input type="hidden" id="myPhpValue" value="<?php echo {$pandlet} ?>" />
                                <div id="chartdiv1" style="width: 100%; height: 200px;"></div>
                                
                                
                                <div class="footer">
                                	<hr>
                                    <div class="stats">
                                        
                                    </div>                                
                                </div>
                            </div> <!-- content -->
                        </div>  <!-- /card-->
                    <!--</div>     -->          
                </div> <!-- /row -->

                <div class="row">
                    <!--<div class="col-md-4">-->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Temperature of the Soil</h4>
                            </div>
                            <div class="content"> 

                                <!-- Graph -->
                                <div id="chartdiv2" style="width: 100%; height: 200px;"></div>
                                
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        
                                    </div>                                    
                                </div>
                            </div>
                        </div>  <!-- /card-->
                    <!--</div>     -->          
                </div> <!-- /row -->

                <div class="row">
                    <!--<div class="col-md-4">-->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Humidity of the Air</h4>
                            </div>
                            <div class="content"> 

                                <!-- Graph -->
                                <div id="chartdiv3" style="width: 100%; height: 200px;"></div>
                                
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        
                                    </div>                                    
                                </div>
                            </div>
                        </div>  <!-- /card-->
                    <!--</div>     -->          
                </div> <!-- /row -->

                <div class="row">
                    <!--<div class="col-md-4">-->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Moisture of the Soil</h4>
                            </div>
                            <div class="content"> 

                                <!-- Graph -->
                                <div id="chartdiv4" style="width: 100%; height: 200px;"></div>
                                
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        
                                    </div>                                    
                                </div>
                            </div>
                        </div>  <!-- /card-->
                    <!--</div>     -->          
                </div> <!-- /row -->

                <div class="row">
                    <!--<div class="col-md-4">-->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Light Exposure</h4>
                            </div>
                            <div class="content"> 

                                <!-- Graph -->
                                <div id="chartdiv5" style="width: 100%; height: 200px;"></div>
                                
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        
                                    </div>                                    
                                </div>
                            </div>
                        </div>  <!-- /card-->
                    <!--</div>     -->          
                </div> <!-- /row -->

            </div> <!-- /container-fluid -->   
        </div> <!-- /content -->




{include file="footer.tpl"}
