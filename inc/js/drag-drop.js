function allowDrop(ev)
{
ev.preventDefault();
}

function drag(ev)
{
ev.dataTransfer.setData("Text",ev.target.id);
}

function drop(ev)
{
ev.preventDefault();
  var lastElement = document.getElementsByClassName('last');
  for (var i=0; i<lastElement.length; i++){
    var elem = lastElement[i];
    elem.className = elem.className.replace('last',"");
  }
  
  var data=ev.dataTransfer.getData("Text");
  ev.target.appendChild(document.getElementById(data));
  document.getElementById(data).className += " last";
}