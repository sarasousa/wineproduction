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
        <a class="navbar-brand navbar-left" href="#">Warning</a>
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


  
    
            
            
            <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-md-4">-->
        <div class="card">
          <div class="header">
            <h4 class="title">Scalding</h4>
           
          </div>
          <div class="content">

            <table>
                
            {foreach from=$esc item=new1}
                <tr>
                     <?php
                   
                    $curYear=date('Y');
                    $curMonth=date('m'); //'M' gives name of month

                     $dates =$new1['dates'];
                     $values =$new1['value'];

                    list ($year, $month, $day) = explode('-',$dates);
         
                    if($year!=$curYear)
                        { $alarms = NULL; 
                        }
                      $inutil=  intval($values);
                      $val = 45;
                    if($val<$inutil)
                        {
                        $rad = NULL;
                        }
                    ?>
                    
             
                   
                </tr>
            {/foreach}
            
            <p> {if $rad!=NULL }<img id="warn-img" alt="warning_logo" height="105" src="../img/warning.png" /> {else} <img id="warn-img" alt="warning_logo" height="105" src="../img/warningred.png" /> {/if} </p>
                

           
            <p>  {if ($esc != NULL) && ($alarm != NULL)} Warning: Scald. The temperature exceeded 36ºC.{else} No danger.{/if}  </p>
            </table>
            
            <div class="footer">
                <p> More about diseases at <a href="../php/information.php">Information</a> page</p>
           
             
            </div>
          </div>
        </div>
        <!--</div>     -->
      
 
            
             <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-md-4">-->
        <div class="card">
          <div class="header">
            <h4 class="title">Frost</h4>
           
          </div>
          <div class="content">
            
            <img id="warn-img" alt="warning_logo" height="105" src="../img/warning.png" />
            
            <table>
                
            {foreach from=$gead item=new1}
                <tr>
                     <?php 
                   
                    $curYear=date('Y');
                    $curMonth=date('m'); //'M' gives name of month

                     $dates =$gead['dates'];

                    list ($year, $month, $day) = explode('-',$dates);
         
                    if($year!=$curYear)
                        { $alarms = NULL; 
                        }
                    if($month=="11"||$month=="12"||$month=="01"||$month=="02")
                        {
                        $alarms = NULL;
                        }
                    ?>  
                    
                    <!--<p> {if ($alarms != NULL)}Estiveram {$new1.value} ºC, às {$new1.times} de dia {$new1.dates}.{else} {/if} </p>-->
                    
                </tr>
            {/foreach}
            <p> {if ($gead != NULL) && ($alarms != NULL)} Ice or frost in a critical time of the year.{else} No danger.{/if}   </p>
            </table>
            
            <div class="footer">
                <p> More about diseases at <a href="../php/information.php">Information</a> page</p>
           
             
            </div>
          </div>
        </div>
   
      
            
            
            
             <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-md-4">-->
        <div class="card">
          <div class="header">
            <h4 class="title">Mildew</h4>
           
          </div>
          <div class="content">
            
         
            
            <table>
                
            {if (($mildtemp != 0) && ($mildmois !=0))}
                <img id="warn-img" alt="warning_logo" height="105" src="../img/warningred.png" />
                <p> Warning: Danger. </p>
                {else}
                <img id="warn-img" alt="warning_logo" height="105" src="../img/warning.png" />
                <p> No danger.</p>
            {/if}
            
            
            </table>
            
            <div class="footer">
                <p> More about diseases at <a href="../php/information.php">Information</a> page</p>
           
             
            
          </div>
        </div>
        <!--</div>     -->
      </div>
            
            
            
             <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-md-4">-->
        <div class="card">
          <div class="header">
            <h4 class="title">Oidium</h4>
           
          </div>
          <div class="content">
            
           
            
            <table>
                
            {if (($oitemp != 0) && ($oimois !=0))}
               <img id="warn-img" alt="warning_logo" height="105" src="../img/warningred.png" />
                <p> Warning: Danger. </p>
                {else}
               <img id="warn-img" alt="warning_logo" height="105" src="../img/warning.png" />
                <p> No danger.</p>
            {/if}
            
            </table>
            
            <div class="footer">
                <p> More about diseases at <a href="../php/information.php">Information</a> page</p>
           
             
            </div>
          </div>
        </div>
     
            
            
             <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-md-4">-->
        <div class="card">
          <div class="header">
            <h4 class="title">Rottenness</h4>
           
          </div>
          <div class="content">
            
            
            
            <table>
                
            {if (($mildtemp != 0) && ($mildmois !=0))}
                <img id="warn-img" alt="warning_logo" height="105" src="../img/warningred.png" />
                <p> Warning: Danger. </p>
                {else}
                <img id="warn-img" alt="warning_logo" height="105" src="../img/warning.png" />
                <p> No danger.</p>
            {/if}
            </table>
            
            <div class="footer">
               <p> More about diseases at <a href="../php/information.php">Information</a> page</p>
           
             
            </div>
          </div>
        </div>
      
            
            
             <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-md-4">-->
        <div class="card">
          <div class="header">
            <h4 class="title">Esca</h4>
           
          </div>
          <div class="content">
            
        
            <table>
            {if ($esca == 1)}
                <img id="warn-img" alt="warning_logo" height="105" src="../img/warningred.png" />
                <p> Warning: Notice the weather. Very hot temperatures after raining creates the perfect environment for Esca. </p>
                {else}
                <img id="warn-img" alt="warning_logo" height="105" src="../img/warning.png" />
                <p> No danger.</p>
            {/if}
           
            </table>
            
            <div class="footer">
               <p> More about diseases at <a href="../php/information.php">Information</a> page</p>
           
             
            </div>
          </div>
        </div>

            


            
            
            
            
  {include file="footer.tpl"}