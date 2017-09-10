<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-zF4BRsG/fLiTGfR9QL82DrilZxrwgY/+du4p/c7J72zZj+FLYq4zY00RylP9ZjiT" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/main.css" type="text/css" />
        <script type="text/javascript">
            $( document ).ready(function() {
            console.log( "ready!" );
            // $("#component-button-remove").click(function () {
            //     $(".component-body-glow").children().css( "display", "none" );
            //     $(".component-body-glow").css({ "height": "80%", "background": "rgba(0,130,245,0.8)" });
            //     var selectedChunk;
            //     // need to find a way to pass a chunk to the removesquare after it's turned blue
            //     function removeSquare(chunk){
            //         $("#chunk").remove();
            //         console.log("I recieved the chunk to delete!!")
            //     }

            //     console.log("Component-button-remove click handler has run correctly!!");
            // });
            });
        </script>
    </head>
    <body>
        <!--how to get animation bar to spin while loading pages http://stackoverflow.com/questions/10007212/twitter-bootstrap-progress-bar-animation-on-page-load-->
        <div class="container-fluid">
            <section class="row">
                <div id="container1" class="col-md-6 col-sm-12 col-xs-12 component-body-glow">
                    <div class="panel">
                        <div class="panel-heading">
                            <header class="component-header-rightheader">
                                <h1>Website: <span id="main-header-website1"><!--grab the website entered into the textbox-->None</span></h1>
                                <!--<section class="circle component-button-destroy" id="component-button-remove" onclick="componentDestroy(1)">-->
                                <!--    <i class="fa fa-minus" aria-hidden="true"></i>-->
                                <!--</section>-->
                                <button type="button" class="btn btn-danger component-button-destroy" onclick="componentDestroy(1)">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                        </div>
                        <div class="panel-body">
                            <!--change the styling ofe the h1 so it stops overflowing - potentially lock a character limit or decide the -->
                            <!--font size based upon how many characters are in it using a switch statement-->
                            <div class="input-group component-input-search">
                                <h3 class="input-group-addon">Browse To?</h3>
                                <input type="text" id="browser1" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                            <button class="btn btn-default component-button-browser" onclick="websiteSend(1)" type="button">Go!</button>
                                          </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                        </header>
                    </div>
                    <section class="component-body-rightbody">
                        <!--textext-->
                        <iframe src="" width="100%" height="100%" id="frame1"></iframe>
                    </section>
                </div>
                <section id="generatedChunk"></section>
            </section>
        </div>
        <sidebar class="component-button-sidebar">
            <section class="circle component-button-addchunk btn btn-success" id="component-button-add" onclick="newchunk()">
                <i class="fa fa-plus" aria-hidden="true"></i>

            </section>
            <!--<section class="circle component-button-removechunk" id="component-button-remove"> this wasn't the proper way to solve it, it makes it easier to just throw it on every pre-existing element so we reduce two clicks to one for element deletions-->
            <!--    <i class="fa fa-times" aria-hidden="true"></i>-->
                    <!--removechunk function makes all col's glow a blue that does a transform or does a transition and when clicked it removes the entire chunk from the dom-->
            <!--</section>-->
        </sidebar>
        <!--add a circular icon with fa-plus that adds new tabs in the same format as the established template in right component-->
        <script type="text/javascript" src="controls.js"></script>
    </body>
</html>
