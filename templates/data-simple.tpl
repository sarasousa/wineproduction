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
                    <a class="navbar-brand navbar-left" href="#">Pandlet {$pandlet} - Farm {$farm} - Simple Mode </a>
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
               
                     
<button type="submit" class="btn-switch" onclick="window.location.href='../php/data-pandlet-advanced.php?pandlet={$pandlet}&farm={$farm}'"><span>Switch to Advanced Mode</span></button> 
                     
        <div class="content simple-mode">
            <div class="container-fluid">

                <div class="row">
                      <div class="col-md-6">
                        <div class="card data">
                            <div class="header">
                                <h3 class="title">Temperature of the Air</h3>
                                <p class="category">Pandlet {$pandlet} </p>
                            </div>
                            
                            <div class="content"> 
                                <div class="traffic-light">
                                    <span class="red"></span>
                                    <span class="yellow"></span>
                                    <span class="green"></span>
                                </div>
                                <div class="pandlet-info">
                                   <div class="select-section">
                                        <section>
                                                <select id="sensor-time" class="cs-select cs-skin-border" measures="air temperature">
                                                    <option value="" disabled selected>Choose a time window</option>
                                                    <option value="1" >1 Hour</option>
                                                    <option value="2" >2 Hours</option>
                                                    <option value="6" >6 Hours</option>
                                                    <option value="24" >1 Day</option>
                                                    <option value="48" >2 Days</option>
                                                    <option value="168" >1 Week</option>
                                                    <option value="336" >2 Weeks</option>
                                                    <option value="504" >3 Weeks</option>
                                                    <option value="720" >1 Month</option>
                                                    <option value="1440" >2 Months</option>
                                                    <option value="2160">3 Months</option>
                                                    <option value="4320">6 Months</option>
                                                    <option value="8640">1 Year</option>
                                                </select>
                                        </section>  
                                    </div>
                                   <!-- <h5 class="pandlet-state state-green">Green State: Safe!</h5>-->
                                    <h5 class="pandlet-state"></h5>

                                    <h5 class="status-text"></h5>  
                                    <h5 class="max-text"></h5>
                                    <h5 class="min-text"></h5>
                                </div>
                                <div class="footer">
                                	<hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Green State: [10-32] <br>
                                        <i class="fa fa-clock-o"></i> Yellow State: ]0-10] or ]32-37[ <br>
                                        <i class="fa fa-clock-o"></i> Red State: other values <br>
                                        <!--<i class="fa fa-clock-o"></i> Information sent by the sensor <br>-->
                                    </div>                                    
                                </div>
                            </div><!--/content-->
                        </div>  <!-- /card-->
                     </div><!-- col-md-6-->      
   
                     <div class="col-md-6">
                        <div class="card data">
                            <div class="header">
                                <h3 class="title">Humidity of the Air</h3>
                                <p class="category">Pandlet {$pandlet} </p>
                            </div>
                            <div class="content">
                                <div class="traffic-light moist">
                                    <span class="red"></span>
                                    <span class="yellow"></span>
                                    <span class="green"></span>
                                </div> 
                             <div class="pandlet-info">
                                <div class="select-section">
                                        <section>
                                                <select id="sensor-time" class="cs-select cs-skin-border" measures="air humidity">
                                                    <option value="" disabled selected>Choose a time window</option>
                                                    <option value="1" >1 Hour</option>
                                                    <option value="2" >2 Hours</option>
                                                    <option value="6" >6 Hours</option>
                                                    <option value="24" >1 Day</option>
                                                    <option value="48" >2 Days</option>
                                                    <option value="168" >1 Week</option>
                                                    <option value="336" >2 Weeks</option>
                                                    <option value="504" >3 Weeks</option>
                                                    <option value="720" >1 Month</option>
                                                    <option value="1440" >2 Months</option>
                                                    <option value="2160">3 Months</option>
                                                    <option value="4320">6 Months</option>
                                                    <option value="8640">1 Year</option>
                                                </select>
                                        </section>  
                                    </div>
                                   <!-- <h5 class="pandlet-state state-green">Green State: Safe!</h5>-->
                                    <h5 class="pandlet-state"></h5>
                                     <!--<p>The moisture in the zone X has been 30% in the last hour.</p> -->  

                                    <h5 class="status-text"></h5>  
                                    <h5 class="max-text"></h5>
                                    <h5 class="min-text"></h5>
                                </div>
                                                           
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Green State: [75-100] <br>
                                        <i class="fa fa-clock-o"></i> Yellow State: [50-75[ <br>
                                        <i class="fa fa-clock-o"></i> Red State: Lower than 50 <br>
                                        <!--<i class="fa fa-clock-o"></i> Information sent by the sensor-->
                                    </div>                                    
                                </div>
                            </div><!--/content-->
                        </div>  <!-- /card--> 
                    </div><!--col-md-6-->
                </div><!-- /row-->       

                  <div class="row">
                     <div class="col-md-6">
                        <div class="card data">
                            <div class="header">
                                <h3 class="title">Temperature of the Soil</h3>
                                <p class="category">Pandlet {$pandlet} </p>
                            </div>
                            <div class="content"> 
                                  <div class="traffic-light">
                                    <span class="red"></span>
                                    <span class="yellow"></span>
                                    <span class="green"></span>
                                </div>  
                            <div class="pandlet-info">
                               <div class="select-section">
                                        <section>
                                                <select id="sensor-time" class="cs-select cs-skin-border" measures="soil temperature">
                                                    <option value="" disabled selected>Choose a time window</option>
                                                    <option value="1" >1 Hour</option>
                                                    <option value="2" >2 Hours</option>
                                                    <option value="6" >6 Hours</option>
                                                    <option value="24" >1 Day</option>
                                                    <option value="48" >2 Days</option>
                                                    <option value="168" >1 Week</option>
                                                    <option value="336" >2 Weeks</option>
                                                    <option value="504" >3 Weeks</option>
                                                    <option value="720" >1 Month</option>
                                                    <option value="1440" >2 Months</option>
                                                    <option value="2160">3 Months</option>
                                                    <option value="4320">6 Months</option>
                                                    <option value="8640">1 Year</option>
                                                </select>
                                        </section>  
                                    </div>
                                   <!-- <h5 class="pandlet-state state-green">Green State: Safe!</h5>-->
                                     <!--<p>The eletrical conductivity in the zone X has been 10E-4(S/m) in the last hour.</p>  -->  
                                    <h5 class="pandlet-state"></h5>

                                    <h5 class="status-text"></h5>  
                                    <h5 class="max-text"></h5>
                                    <h5 class="min-text"></h5>
                                </div>                      
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                         <i class="fa fa-clock-o"></i> Green State: [10-32] <br>
                                        <i class="fa fa-clock-o"></i> Yellow State: ]0-10] or ]32-37[ <br>
                                        <i class="fa fa-clock-o"></i> Red State: other values <br>
                                       <!-- <i class="fa fa-clock-o"></i> Information sent by the sensor-->
                                    </div>                                    
                                </div>
                            </div><!--/content-->
                        </div>  <!-- /card-->  
                    </div> <!--col-md-6-->     


                  <div class="col-md-6">
                        <div class="card data">
                            <div class="header">
                                <h3 class="title">Moisture of the Soil</h3>
                                <p class="category">Pandlet {$pandlet} </p>
                            </div>
                            <div class="content"> 
                                <div class="traffic-light moist">
                                    <span class="red"></span>
                                    <span class="yellow"></span>
                                    <span class="green"></span>
                                </div>  
                             <div class="pandlet-info"> 
                                  <div class="select-section">
                                        <section>
                                                <select id="sensor-time" class="cs-select cs-skin-border" measures="soil moisture">
                                                    <option value="" disabled selected>Choose a time window</option>
                                                    <option value="1" >1 Hour</option>
                                                    <option value="2" >2 Hours</option>
                                                    <option value="6" >6 Hours</option>
                                                    <option value="24" >1 Day</option>
                                                    <option value="48" >2 Days</option>
                                                    <option value="168" >1 Week</option>
                                                    <option value="336" >2 Weeks</option>
                                                    <option value="504" >3 Weeks</option>
                                                    <option value="720" >1 Month</option>
                                                    <option value="1440" >2 Months</option>
                                                    <option value="2160">3 Months</option>
                                                    <option value="4320">6 Months</option>
                                                    <option value="8640">1 Year</option>
                                                </select>
                                        </section>  
                                    </div>
                                   <!-- <h5 class="pandlet-state state-green">Green State: Safe!</h5>-->
                                                                     <!--<p>The light exposure in the zone X has been 300 cd in the last hour.</p> -->       
                                    <h5 class="pandlet-state"></h5>

                                    <h5 class="status-text"></h5>  
                                    <h5 class="max-text"></h5>
                                    <h5 class="min-text"></h5>
                                </div>                         
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Green State: [75-100] <br>
                                        <i class="fa fa-clock-o"></i> Yellow State: [50-75[ <br>
                                        <i class="fa fa-clock-o"></i> Red State: Lower than 50 <br>
                                    </div>                                    
                                </div>
                            </div><!--/content-->
                        </div>  <!-- /card-->      
                   </div><!-- /col-md-6--> 
                </div><!--/row-->       

                    <div class="row">
                      <div class="col-md-6">
                        <div class="card data">
                            <div class="header">
                                <h3 class="title">Light Exposure</h3>
                                <p class="category">Pandlet {$pandlet} </p>
                            </div>
                            <div class="content">
                            <div class="traffic-light">
                                    <span class="red"></span>
                                    <span class="yellow"></span>
                                    <span class="green"></span>
                            </div>  
                            <div class="pandlet-info"> 
                               <div class="select-section">
                                        <section>
                                                <select id="sensor-time" class="cs-select cs-skin-border" measures="light exposure">
                                                    <option value="" disabled selected>Choose a time window</option>
                                                    <option value="1" >1 Hour</option>
                                                    <option value="2" >2 Hours</option>
                                                    <option value="6" >6 Hours</option>
                                                    <option value="24" >1 Day</option>
                                                    <option value="48" >2 Days</option>
                                                    <option value="168" >1 Week</option>
                                                    <option value="336" >2 Weeks</option>
                                                    <option value="504" >3 Weeks</option>
                                                    <option value="720" >1 Month</option>
                                                    <option value="1440" >2 Months</option>
                                                    <option value="2160">3 Months</option>
                                                    <option value="4320">6 Months</option>
                                                    <option value="8640">1 Year</option>
                                                </select>
                                        </section>  
                                    </div>
                                   <!-- <h5 class="pandlet-state state-green">Green State: Safe!</h5>-->
                                  <!-- <p>The pH in the zone X has been 5.2 in the last hour.</p>  -->    
                                    <h5 class="pandlet-state"></h5>

                                    <h5 class="status-text"></h5>  
                                    <h5 class="max-text"></h5>
                                    <h5 class="min-text"></h5>
                                </div>                         
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Green State: Lower than or equal to 300 <br>
                                        <i class="fa fa-clock-o"></i> Yellow State: ]300-400[ <br>
                                        <i class="fa fa-clock-o"></i> Red State: Greater than or equal to 400 <br>
                                        <!--<i class="fa fa-clock-o"></i> Information sent by the sensor-->
                                    </div>                                    
                                </div>
                            </div><!--/content-->
                        </div>  <!-- /card-->    
                    </div> <!-- col-md-6-->  
                </div><!-- /row-->        


            </div><!-- /container-fluid-->
        </div><!--/content-->

     
        <script src="../js/classie.js"></script>
        <script src="../js/selectFx.js"></script>

        <script>
            (function() {
                [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {    
                    new SelectFx(el);
                } );
            })();
       

            function run(element) {

                    var time = element.value;

                     var today = new Date();

                     var val;
                     var time_window = new Date();
                     time_window.setHours(today.getHours()-time);

                     var s_data;
                     var j=0;

                     s_data = [];

                    for (i = 0; i < data.length; i++)
                    {
                        if (data[i].type == $(element).attr('measures'))
                        {
                            s_data[j] = $.extend(true, [], data)[i];

                            s_data[j].dat = s_data[j].dat.split('-');
                            var t_day = s_data[j].dat[2];
                            var t_month = s_data[j].dat[1];
                            var t_year = s_data[j].dat[0];
                            var t_hour = s_data[j].t.split(':')[0];

                            s_data[j].dat = new Date(t_year, t_month-1, t_day, t_hour, 0, 0, 0);


                            j++;
                        }
                    }

                    j=0;
                    val=0;
                    var max=-999999999;
                    var min=999999999;

                    for (k = 0; k < s_data.length; k++)
                    {
                        if (s_data[k].dat > time_window)
                        {
                            val += parseFloat(s_data[k].val);
                            j++;

                            if (max < parseFloat(s_data[k].val))
                                max = parseFloat(s_data[k].val);
                            if (min > parseFloat(s_data[k].val))
                                min = parseFloat(s_data[k].val);
                        }

                    }
                      val = val/j;

                      var num = parseFloat(val);
                      var str = num.toFixed(10);
                      str = str.substring(0, str.length-7);
                      val = parseFloat(str);




                      var state;
                      var unit;

                      if ($(element).attr('measures') == 'air temperature')
                        unit = 'ºC';
                      else if ($(element).attr('measures') == 'air humidity')
                        unit = '%';
                      else if ($(element).attr('measures') == 'soil moisture')
                        unit = '%';
                      else if ($(element).attr('measures') == 'soil temperature')
                        unit = 'ºC';
                      else if ($(element).attr('measures') == 'light exposure')
                        unit = 'lx';



                      state = getState(val, $(element).attr('measures'));

                      if (j==0)
                        {
                        $(element).parent().parent().parent().parent().siblings().filter('.traffic-light').css('visibility', 'hidden');
                        $(element).parent().parent().parent().siblings().filter('.pandlet-state').text('');
                        $(element).parent().parent().parent().parent().siblings().children('.green').css('visibility', 'hidden');
                        $(element).parent().parent().parent().parent().siblings().children('.yellow').css('visibility', 'hidden');
                        $(element).parent().parent().parent().parent().siblings().children('.red').css('visibility', 'hidden');
                        $(element).parent().parent().parent().siblings().filter('.status-text').text('There are no measures in this time window.');
                        $(element).parent().parent().parent().siblings().filter('.max-text').text('');
                        $(element).parent().parent().parent().siblings().filter('.min-text').text('');
                        }
                      else if (j!=0)
                        {
                            $(element).parent().parent().parent().siblings().filter('.status-text').text('The ' + $(element).attr('measures') + ' in the zone around Pandlet {$pandlet} has been ' + val + unit + ' in the last ' +  $(element).find(":selected").text() + '.');
                            $(element).parent().parent().parent().siblings().filter('.max-text').text('The max value in the past ' + $(element).find(":selected").text() + ' was: ' + max + unit + '.');
                            $(element).parent().parent().parent().siblings().filter('.min-text').text('The min value in the past ' + $(element).find(":selected").text() + ' was: ' + min + unit + '.');
                        }

                 if (j!=0)
                 {
                    if (state == 'green')
                      {
                        $(element).parent().parent().parent().parent().siblings().filter('.traffic-light').css('visibility', 'visible');
                        $(element).parent().parent().parent().siblings().filter('.pandlet-state').text('Green State: Safe!').css('color', '#339966');
                        $(element).parent().parent().parent().parent().siblings().children('.green').css('visibility', 'visible');
                        $(element).parent().parent().parent().parent().siblings().children('.yellow').css('visibility', 'hidden');
                        $(element).parent().parent().parent().parent().siblings().children('.red').css('visibility', 'hidden');
                      }
                    else if (state == 'yellow')
                    {

                      $(element).parent().parent().parent().parent().siblings().filter('.traffic-light').css('visibility', 'visible');
                      $(element).parent().parent().parent().siblings().filter('.pandlet-state').text('Yellow State: Warning!').css('color', '#ffcb66');
                      $(element).parent().parent().parent().parent().siblings().children('.green').css('visibility', 'visible');
                      $(element).parent().parent().parent().parent().siblings().children('.yellow').css('visibility', 'visible');
                      $(element).parent().parent().parent().parent().siblings().children('.red').css('visibility', 'hidden');
                    }
                    else if (state == 'red')
                    {

                      $(element).parent().parent().parent().parent().siblings().filter('.traffic-light').css('visibility', 'visible');
                      $(element).parent().parent().parent().siblings().filter('.pandlet-state').text('Red State: Dangerous!').css('color', '#ff3333');
                      $(element).parent().parent().parent().parent().siblings().children('.green').css('visibility', 'visible');
                      $(element).parent().parent().parent().parent().siblings().children('.yellow').css('visibility', 'visible');
                      $(element).parent().parent().parent().parent().siblings().children('.red').css('visibility', 'visible');
                    }
                }

                    return;
            }

            function getState(val, type){

                var state;


                 if (type == 'air temperature') 
                {
                    if (val >= 37 || val <= 0)
                      state = 'red';
                    else if ((val < 37 && val > 32) || (val <= 10 && val > 0))
                     state = 'yellow';
                    else if (val <= 32 && val > 10)
                     state = 'green';
                }
                else  if (type == 'air humidity')
                {
                    if (val <= 100 && val >= 75)
                      state = 'green';
                    else if (val < 75 && val >= 50)
                     state = 'yellow';
                    else if (val < 50)
                     state = 'red';
                }
                 else  if (type == 'soil moisture')
                {
                    if (val <= 100 && val >= 75)
                      state = 'green';
                    else if (val < 75 && val >= 50)
                     state = 'yellow';
                    else if (val < 50)
                     state = 'red';
                }
                 else  if (type == 'light exposure')
                {
                    if (val <= 300)
                      state = 'green';
                    else if (val < 400 && val > 300)
                     state = 'yellow';
                    else if (val >= 400)
                     state = 'red';
                }
                else if (type == 'soil temperature') 
                {
                    if (val >= 37 || val <= 0)
                      state = 'red';
                    else if ((val < 37 && val > 32) || (val <= 10 && val > 0))
                     state = 'yellow';
                    else if (val <= 32 && val > 10)
                     state = 'green';
                }


                 return state;
            }

        </script>


{include file="footer.tpl"}
