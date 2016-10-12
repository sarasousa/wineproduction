{include file="header.tpl"}


<script>


function closewarning(){
    $('#login').show();
    $('#warn').hide();
    }


$(document).ready(function() {
    $('#btn1').click(function(e) {
        var isValid = true;
        $('input').each(function() {
            if ($.trim($(this).val()) == '') {
                isValid = false;

                $("#pastes").html('<div id="warn"><button type="button" onclick="closewarning()" class="close" data-dismiss="alert">×</button><div class="alert alert-info"><strong>Warning!</strong> Empty input</div></div>' );

                $(this).css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });
            }
            else {

                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });

        if (isValid == false) 
            e.preventDefault();
        else 
        {
            $("#pastes").html('');
           // alert('Thank you for submitting');
        }
    });


});

</script>
    
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
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse">       
    
                    

                </div>
            </div>
        </nav>
                     
                     
        <div class="content">
            <div class="container-fluid" id="body">
                <div class="row">                   
   


                        <div class="col-md-12">
                            <div class="login">

                                <img alt="Grape_logo" height="75" width="60" src="../img/preto.png" />

                                <h1>SETEC Project!</h1>
                                 <div id="pastes">

                                </div>

                                <form action="../php/login_action.php" id="loginform" method="post">

                                <input class="form-control" id="username" name="username" placeholder="E-mail" type="text" />

                                <input class="form-control" id="password" name="password" placeholder="Password" type="password" />

                                <button class="btnn btn-2 btn-2g" name="button" id="btn1" type="submit" >Sign in</button>
                                </form>
                                
                            </div>
                        </div>
                      


                                            
                </div>                    
            </div>
        </div>


{include file="footer.tpl"}
