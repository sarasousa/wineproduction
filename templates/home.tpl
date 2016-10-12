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
        <a class="navbar-brand navbar-left" href="#">Home</a>
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
            <h4 class="title">Warnings</h4>
            <p class="category">Pandlets' State</p>
          </div>
          <div class="content">
            {if $red > 0 or $yellow > 0}
            <img id="warn-img" alt="warning_logo" height="85" width="90" src="../img/warning.png" />

            <p>{$red} {if $red == 1} pandlet is{else} pandlets are{/if} in a <span id="red">red</span> state. (Pandlet: {foreach from=$rpan item=pid} {$pid}; {/foreach})</p>
            
            <p>{$yellow} {if $yellow == 1} pandlet is{else} pandlets are{/if} in a <span id="yellow">yellow</span> state. (Pandlet: {foreach from=$ypan item=pid} {$pid}; {/foreach})</p>
            

            {else}

            <p>Everything seems <span id="green">ok!</span></p>
            {/if}
            <div class="footer">
              <a class="btn" id="vm-btn" name="button" href="../php/warnings.php">View More</a>
              <hr>
              <div class="stats">
                <i class="fa fa-clock-o"></i> Updated {$time} ago
              </div>
            </div>
          </div>
        </div>
        <!--</div>     -->
      </div>



      <div class="row" id="vn-state">
        <div class="col-md-12">
          <div class="card">
            <div class="header">
              <h4 class="title">Today's Vineyard State</h4>
              <p class="category">News</p>
            </div>
            <div class="content">
              <h5>Temperature (Air): </h5>
              <p>{$tmp}ºC</p>
              <h5>Temperature (Soil): </h5>
              <p>{$tmpsoil}ºC</p>
              <h5>Humidity (Air): </h5>
              <p>{$mst}%</p>
              <h5>Moisture (Soil): </h5>
              <p>{$mstsoil}%</p>
              <h5>Light Exposure: </h5>
              <p>{$lgt}lx</p>
              <div class="footer">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated {$time} ago
                </div>
              </div>
            </div>
          </div>
        </div>




        <!--<div class="col-md-6">
          <div class="card ">
            <div class="header">
              <h4 class="title">Tasks</h4>
            </div>
            <div class="content">
              <div class="table-responsive table-full-width">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <label class="checkbox">
                          <input type="checkbox" value="" data-toggle="checkbox">
                        </label>
                      </td>
                      <td>Task1?</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                          <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="fa fa-times"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label class="checkbox">
                          <input type="checkbox" value="" data-toggle="checkbox" checked="">
                        </label>
                      </td>
                      <td>Task2?</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                          <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="fa fa-times"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label class="checkbox">
                          <input type="checkbox" value="" data-toggle="checkbox" checked="">
                        </label>
                      </td>
                      <td>Task3?</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                          <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="fa fa-times"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="footer">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </div>


  {include file="footer.tpl"}
