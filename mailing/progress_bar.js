function move() 
{
  var elem = document.getElementById("prog_bar");
  var width = 1;
  var id = setInterval(frame, 100);

  function frame() 
  {
    width++;
    elem.style.width = width + "%";
  }
}

move();