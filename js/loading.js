document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('contents').style.opacity="0";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('load').style.visibility="hidden";
         document.getElementById('contents').classList.remove('not-loaded');
      },1000);
  }
}
