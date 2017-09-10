var currentchunk = 2;

// var htmlchunk = [
//     '<div class="col-md-6 col-sm-6 col-xs-12">',
//         '<header class="component-header-rightheader">',
//             '<h1>Website: <span id="main-header-website'+currentchunk+'">None</span></h1>',
//             '<div class="input-group component-input-search">',
//                 '<h3 class="input-group-addon">Browse To?</h3>',
//               '<input type="text" id="browser'+currentchunk+'" class="form-control" placeholder="Search for...">',
//               '<span class="input-group-btn">',
//                 '<button class="btn btn-default component-button-browser" onclick="websiteSend('+currentchunk+')" type="button">Go!</button>',
//               '</span>',
//             '</div>',
//         '</header>',
//         '<section class="component-body-rightbody">',
//             '<iframe src="" width="100%" height="100%" id="frame'+currentchunk+'"></iframe>',
//         '</section>',
//     '</div>'].join('');

// the website is currently registering as websitesend current chunk part as undefined - solved
// the currentchunk is being registered permanently as a 2 - solved (it was initiated once and called as the same each time so put it in the function block)

function websiteSend(chunk){
    // accept a variable based upon what the javascript that generates from the html button click that creates the new segment
    var sentchunk = chunk;
    var newWebsite = document.getElementById("browser"+sentchunk).value;
    // var loc = "http://www.w3schools.com/";
    document.getElementById("browser"+sentchunk).value = "";
    document.getElementById("browser"+sentchunk).placeholder = newWebsite;
    document.getElementById("frame"+sentchunk).setAttribute('src', newWebsite);
    document.getElementById("main-header-website"+sentchunk).textContent = newWebsite;
    // alert(newWebsite);
}
function newchunk(){
    var htmlchunk = [
    '<div id="container'+currentchunk+'" class="col-md-6 col-sm-12 col-xs-12 component-body-glow">',
    '<div class="panel">',
        '<div class="panel-heading">',
            '<header class="component-header-rightheader">',
                '<h1>Website: <span id="main-header-website'+currentchunk+'">None</span></h1>',
                '<button type="button" class="btn btn-danger component-button-destroy" onclick="componentDestroy('+currentchunk+')">',
                                    '<i class="fa fa-minus" aria-hidden="true"></i>',
                                '</button>',
        '</div>',
        '<div class="panel-body">',
            '<div class="input-group component-input-search">',
                '<h3 class="input-group-addon">Browse To?</h3>',
                '<input type="text" id="browser'+currentchunk+'" class="form-control" placeholder="Search for...">',
                '<span class="input-group-btn">',
                            '<button class="btn btn-default component-button-browser" onclick="websiteSend('+currentchunk+')" type="button">Go!</button>',
                          '</span>',
            '</div>',
        '</div>',
        '</header>',
    '</div>',
    '<section class="component-body-rightbody">',
        '<iframe src="" width="100%" height="100%" id="frame'+currentchunk+'"></iframe>',
    '</section>',
'</div>'].join('');
    document.getElementById('generatedChunk').insertAdjacentHTML('afterend', htmlchunk);
    currentchunk ++;

}
// the passed variable of container is fucking up everything
function componentDestroy(container){
    console.log("The componentDestroy function is running.");
    var containerNumber = container;
    var currentContainer = document.getElementById("container"+containerNumber);
    while(currentContainer.hasChildNodes()){
        currentContainer.removeChild(currentContainer.childNodes[0]);
        console.log("I ran the while loop for the child nodes.");
    }
    // document.getElementById("generatedChunk").removeChild(currentContainer); doesn't work
    document.getElementById("container"+containerNumber).remove(); //is the best solution because it fully removes it from the dom tree after
    // currentContainer.style.display = "none"; works but it still has the elements in the dom which I don't want
}
// $(function removechunk(){
//     // cant create remove chunk until all id's are created properly
//     // creating id's properly might involve moving the code to the insertAdjacentHTML part in newchunk function
//     // document.getElementsByClassName('component-body-glow').style
//     $("component-body-glow").children().css( "display", "none" );
// });
