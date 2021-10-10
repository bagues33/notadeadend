
function rand(max) {
  return Math.floor(Math.random() * max);
}

function shuffle(a) {
  for (let i = a.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [a[i], a[j]] = [a[j], a[i]];
  }
  return a;
}

function changeBrightness(factor, sprite) {
  var virtCanvas = document.createElement("canvas");
  virtCanvas.width = 500;
  virtCanvas.height = 500;
  var context = virtCanvas.getContext("2d");
  context.drawImage(sprite, 0, 0, 500, 500);

  var imgData = context.getImageData(0, 0, 500, 500);

  for (let i = 0; i < imgData.data.length; i += 4) {
    imgData.data[i] = imgData.data[i] * factor;
    imgData.data[i + 1] = imgData.data[i + 1] * factor;
    imgData.data[i + 2] = imgData.data[i + 2] * factor;
  }
  context.putImageData(imgData, 0, 0);

  var spriteOutput = new Image();
  spriteOutput.src = virtCanvas.toDataURL();
  virtCanvas.remove();
  return spriteOutput;
}

function displayVictoryMess(moves) {
  var htmlmenang = "<div id=\"message\">"+
          "<h1>Congratulation !</h1>"+
          "<p>You can go to this country.</p>"+
          "<p id=\"moves\"></p>"+
          "<input id=\"okBtn\" type=\"button\" onclick=\"toggleVisablity('Message-Container')\" value=\"Cool!\" />"+
        "</div>";
  document.getElementById("Message-Container").innerHTML = htmlmenang;
  document.getElementById("moves").innerHTML = "You Moved " + moves + " Steps.";
  toggleVisablity("Message-Container");
  waktuFinish();
  Clock.pause();
  tampil(); 
  cool();
}
function displayrintangan(moves) {
   var htmlrintang1 = 
          "<video controls autoplay loop>" +
           "<source src=\"asset/video/02_Jalan_Kaki.mp4\" type=\"video/mp4\">"+
          "</video>";
         //  "<div id=\"message\">"+
         //  "<h1>Polisi!</h1>"+
         //  "<p>You are have ID Card.</p>"+
         //  "<p id=\"moves\"></p>"+
         //  "<table>" +
         //    "<tr>" +
         //      "<td width=\"80px\">Character </td>" +
         //      "<td width=\"10px\"> : </td>" +
         //      "<td> why did you stop here?</td>" +
         //    "</tr>" +
         //     "<tr>" +
         //      "<td>Refugee </td>" +
         //      "<td> : </td>" +
         //      "<td> I'm waiting for someone else. I've run out of money.</td>" +
         //    "</tr>" +
         //    "<tr>" +
         //      "<td>Character </td>" +
         //      "<td> : </td>" +
         //      "<td> Come with us. Is this still far?</td>" +
         //    "</tr>" +
         //    "<tr>" +
         //      "<td>Refugee </td>" +
         //      "<td> : </td>" +
         //      "<td> we have to walk a long way.</td>" +
         //    "</tr>" +
         //      "<tr>" +
         //      "<td>Character </td>" +
         //      "<td> : </td>" +
         //      "<td> Okay. We have to be strong.</td>" +
         //    "</tr>" +
         //  "</table>" +
         //  "<br><br>" +
         //  "<input id=\"okBtn\" type=\"button\" onclick=\"toggleVisablity('Message-Container')\" value=\"Warning!\" />"+
         // "</div>";
      var htmlrintang2 = 
           "<video controls autoplay loop>" +
              "<source src=\"asset/video/04_Bus.mp4\" type=\"video/mp4\">"+
            "</video>";
          
        var htmlrintang3 = 
           "<video controls autoplay loop>" +
           "<source src=\"asset/video/06_Badai.mp4\" type=\"video/mp4\">"+
          "</video>";
       
        var htmlrintang4 = 
           "<video controls autoplay loop>" +
           "<source src=\"asset/video/05_Kereta.mp4\" type=\"video/mp4\">"+
          "</video>";
         
        var htmlrintang5 = 
           "<video controls autoplay loop>" +
           "<source src=\"asset/video/08_Laut.mp4\" type=\"video/mp4\">"+
          "</video>";
        
        var htmlrintang6 = 
           "<video controls autoplay loop>" +
           "<source src=\"asset/video/07_Militer.mp4\" type=\"video/mp4\">"+
          "</video>";
       
        var htmlrintang7 = 
           "<video controls autoplay loop>" +
           "<source src=\"asset/video/11_Polisi_VS_Pengungsi.mp4\" type=\"video/mp4\">"+
          "</video>";
        
        var htmlrintang8 = 
           "<video controls autoplay loop>" +
           "<source src=\"asset/video/09_KawatBerduri.mp4\" type=\"video/mp4\">"+
          "</video>";
        
           var htmlrintang9 = 
           "<video controls autoplay loop>" +
           "<source src=\"asset/video/10_Menyeberang_hutan.mp4\" type=\"video/mp4\">"+
          "</video>";
        
            var htmlrintang10 = 
           "<video controls autoplay loop>" +
           "<source src=\"asset/video/02_Jalan_Kaki.mp4\" type=\"video/mp4\">"+
          "</video>";


   switch (rand(10)) {
      case 0:
        document.getElementById("Message-Container").innerHTML = htmlrintang1;
        // document.getElementById("moves").innerHTML = "rintangan 1 " + moves + " Steps.";
      toggleVisablity("Message-Container");
  setTimeout(function(){toggleVisablity("Message-Container").click()},35000);
        break;
      case 1:
     document.getElementById("Message-Container").innerHTML = htmlrintang2;
        // document.getElementById("moves").innerHTML = "Rintangan 2 " + moves + " Steps.";
      toggleVisablity("Message-Container");
  setTimeout(function(){toggleVisablity("Message-Container").click()},35000);
   break;
    case 2:
     document.getElementById("Message-Container").innerHTML = htmlrintang3;
        // document.getElementById("moves").innerHTML = "Rintangan 2 " + moves + " Steps.";
      toggleVisablity("Message-Container");
  setTimeout(function(){toggleVisablity("Message-Container").click()},35000);
   break;
   case 3:
     document.getElementById("Message-Container").innerHTML = htmlrintang4;
        // document.getElementById("moves").innerHTML = "Rintangan 2 " + moves + " Steps.";
      toggleVisablity("Message-Container");
  setTimeout(function(){toggleVisablity("Message-Container").click()},35000);
   break;
    case 4:
     document.getElementById("Message-Container").innerHTML = htmlrintang5;
        // document.getElementById("moves").innerHTML = "Rintangan 2 " + moves + " Steps.";
      toggleVisablity("Message-Container");
  setTimeout(function(){toggleVisablity("Message-Container").click()},35000);
   break;
     case 5:
     document.getElementById("Message-Container").innerHTML = htmlrintang6;
        // document.getElementById("moves").innerHTML = "Rintangan 2 " + moves + " Steps.";
      toggleVisablity("Message-Container");
  setTimeout(function(){toggleVisablity("Message-Container").click()},35000);
   break;
      case 6:
     document.getElementById("Message-Container").innerHTML = htmlrintang7;
        // document.getElementById("moves").innerHTML = "Rintangan 2 " + moves + " Steps.";
      toggleVisablity("Message-Container");
  setTimeout(function(){toggleVisablity("Message-Container").click()},35000);
   break;
    case 7:
     document.getElementById("Message-Container").innerHTML = htmlrintang8;
        // document.getElementById("moves").innerHTML = "Rintangan 2 " + moves + " Steps.";
      toggleVisablity("Message-Container");
  setTimeout(function(){toggleVisablity("Message-Container").click()},35000);
   break;
     case 8:
     document.getElementById("Message-Container").innerHTML = htmlrintang9;
        // document.getElementById("moves").innerHTML = "Rintangan 2 " + moves + " Steps.";
      toggleVisablity("Message-Container");
  setTimeout(function(){toggleVisablity("Message-Container").click()},35000);
   break;
      case 9:
     document.getElementById("Message-Container").innerHTML = htmlrintang9;
        // document.getElementById("moves").innerHTML = "Rintangan 2 " + moves + " Steps.";
      toggleVisablity("Message-Container");
  setTimeout(function(){toggleVisablity("Message-Container").click()},35000);
   break;
}
}
function toggleVisablity(id) {
  if (document.getElementById(id).style.visibility == "visible") {
    document.getElementById(id).style.visibility = "hidden";
   player.bindKeyDown();
  } else {
    document.getElementById(id).style.visibility = "visible";
   player.unbindKeyDown();
   
   
  }
   
}


function Maze(Width, Height) {
  var mazeMap;
  var width = Width;
  var height = Height;
  var startCoord, endCoord;
  var rintang_x,rintang_y;
  var dirs = ["n", "s", "e", "w"];
  var modDir = {
    n: {
      y: -1,
      x: 0,
      o: "s"
    },
    s: {
      y: 1,
      x: 0,
      o: "n"
    },
    e: {
      y: 0,
      x: 1,
      o: "w"
    },
    w: {
      y: 0,
      x: -1,
      o: "e"
    }
  };

  this.map = function() {
    return mazeMap;
  };
  this.startCoord = function() {
    return startCoord;
  };
  this.endCoord = function() {
    return endCoord;
  };
  this.rintang = function() {
    return rintang;
  };
 

  function genMap() {
    mazeMap = new Array(height);
    for (y = 0; y < height; y++) {
      mazeMap[y] = new Array(width);
      for (x = 0; x < width; ++x) {
        mazeMap[y][x] = {
          n: false,
          s: false,
          e: false,
          w: false,
          visited: false,
          priorPos: null
        };
      }
    }
  }

  function defineMaze() {
    var isComp = false;
    var move = false;
    var cellsVisited = 1;
    var numLoops = 0;
    var maxLoops = 0;
    var pos = {
      x: 0,
      y: 0
    };
    var numCells = width * height;
    while (!isComp) {
      move = false;
      mazeMap[pos.x][pos.y].visited = true;

      if (numLoops >= maxLoops) {
        shuffle(dirs);
        maxLoops = Math.round(rand(height / 8));
        numLoops = 0;
      }
      numLoops++;
      for (index = 0; index < dirs.length; index++) {
        var direction = dirs[index];
        var nx = pos.x + modDir[direction].x;
        var ny = pos.y + modDir[direction].y;

        if (nx >= 0 && nx < width && ny >= 0 && ny < height) {
          //Check if the tile is already visited
          if (!mazeMap[nx][ny].visited) {
            //Carve through walls from this tile to next
            mazeMap[pos.x][pos.y][direction] = true;
            mazeMap[nx][ny][modDir[direction].o] = true;

            //Set Currentcell as next cells Prior visited
            mazeMap[nx][ny].priorPos = pos;
            //Update Cell position to newly visited location
            pos = {
              x: nx,
              y: ny
            };
            cellsVisited++;
            //Recursively call this method on the next tile
            move = true;
            break;
          }
        }
      }

      if (!move) {
        //  If it failed to find a direction,
        //  move the current position back to the prior cell and Recall the method.
        pos = mazeMap[pos.x][pos.y].priorPos;
      }
      if (numCells == cellsVisited) {
        isComp = true;
      }
    }
  }

  function defineStartEnd() {
    switch (rand(4)) {
      case 0:
        startCoord = {
          x: 0,
          y: 0
        };
        endCoord = {
          x: height - 1,
          y: width - 1
        };
        break;
      case 1:
        startCoord = {
          x: 0,
          y: width - 1
        };
        endCoord = {
          x: height - 1,
          y: 0
        };
        break;
      case 2:
        startCoord = {
          x: height - 1,
          y: 0
        };
        endCoord = {
          x: 0,
          y: width - 1
        };
        break;
      case 3:
        startCoord = {
          x: height - 1,
          y: width - 1
        };
        endCoord = {
          x: 0,
          y: 0
        };
        break;
    }
  }

  genMap();
  defineStartEnd();
  defineMaze();
}

function DrawMaze(Maze, ctx, cellsize, endSprite = null) {
  var map = Maze.map();
  var cellSize = cellsize;
  var drawEndMethod;
  
  ctx.lineWidth = cellSize / 40;
  ctx.strokeStyle = "#0000FF";

  this.redrawMaze = function(size) {
    cellSize = size;
    ctx.lineWidth = cellSize / 50;
    ctx.strokeStyle = "#0000FF";
    drawMap();
   
    drawEndMethod();
  };

  function drawCell(xCord, yCord, cell) {
    var x = xCord * cellSize;
    var y = yCord * cellSize;

    if (cell.n == false) {
      ctx.beginPath();
      ctx.moveTo(x, y);
      ctx.lineTo(x + cellSize, y);
      ctx.stroke();
    }
    if (cell.s === false) {
      ctx.beginPath();
      ctx.moveTo(x, y + cellSize);
      ctx.lineTo(x + cellSize, y + cellSize);
      ctx.stroke();
    }
    if (cell.e === false) {
      ctx.beginPath();
      ctx.moveTo(x + cellSize, y);
      ctx.lineTo(x + cellSize, y + cellSize);
      ctx.stroke();
    }
    if (cell.w === false) {
      ctx.beginPath();
      ctx.moveTo(x, y);
      ctx.lineTo(x, y + cellSize);
      ctx.stroke();
    }
  }

  function drawMap() {
    rintang = [];
   for (x = 0; x < map.length; x++) {
      for (y = 0; y < map[x].length; y++) {
        drawCell(x, y, map[x][y]);
      
      }
    }
   for (i = 0; i < 20; i++) {
   drawRintangan(i);
   
   }
   
  }
  //tambahan
function drawRintangan(i){
var x = rand(map.length);
var y = rand(map.length);

      drawSpriteRintangan(x,y);
      rintang.push({x:x,y:y});
      
        
//console.log(rintang);
}  
function drawSpriteRintangan(x,y) {
    var halfCellSize = cellSize / 2;
    ctx.beginPath();
    ctx.fillStyle = "rgba(0, 229, 251, 0.8)";
    ctx.arc(
      (x + 1) * cellSize - halfCellSize,
      (y + 1) * cellSize - halfCellSize,
      cellSize - 15,
      0,
      2 * Math.PI
    );
    ctx.fill();
   
  }
  //tambahan
  function drawEndFlag() {
    var coord = Maze.endCoord();
    var gridSize = 4;
    var fraction = cellSize / gridSize - 2;
    var colorSwap = true;
    for (let y = 0; y < gridSize; y++) {
      if (gridSize % 2 == 0) {
        colorSwap = !colorSwap;
      }
      for (let x = 0; x < gridSize; x++) {
        ctx.beginPath();
        ctx.rect(
          coord.x * cellSize + x * fraction + 4.5,
          coord.y * cellSize + y * fraction + 4.5,
          fraction,
          fraction
        );
        if (colorSwap) {
          ctx.fillStyle = "rgba(0, 0, 0, 0.8)";
        } else {
          ctx.fillStyle = "rgba(255, 255, 255, 0.8)";
        }
        ctx.fill();
        colorSwap = !colorSwap;
      }
    }
  }
 
  function drawEndSprite() {
    var offsetLeft = cellSize / 50;
    var offsetRight = cellSize / 25;
    var coord = Maze.endCoord();
    ctx.drawImage(
      endSprite,
      2,
      2,
      endSprite.width,
      endSprite.height,
      coord.x * cellSize + offsetLeft, //posisi end gambar x
      coord.y * cellSize + offsetLeft,
      cellSize - offsetRight,
      cellSize - offsetRight
    );
  }
  
  function clear() {
    var canvasSize = cellSize * map.length;
    ctx.clearRect(0, 0, canvasSize, canvasSize);
  }
console.log(endSprite);
  if (endSprite != null) {
    drawEndMethod = drawEndSprite;
  } else {
    drawEndMethod = drawEndFlag;
  }
  
  clear();
  drawMap();
  drawEndMethod();
}

function Player(maze, c, _cellsize, onComplete,onRintangan, sprite = null) {
  var ctx = c.getContext("2d");
  var drawSprite;
  var moves = 0;
  drawSprite = drawSpriteCircle;
  if (sprite != null) {
    drawSprite = drawSpriteImg;
  }
  var player = this;
  var map = maze.map();
  var cellCoords = {
    x: maze.startCoord().x,
    y: maze.startCoord().y
  };
  var cellSize = _cellsize;
  var halfCellSize = cellSize / 2;

  this.redrawPlayer = function(_cellsize) {
    cellSize = _cellsize;
    drawSpriteImg(cellCoords);
  };

  function drawSpriteCircle(coord) {
    ctx.beginPath();
    ctx.fillStyle = "yellow";
    ctx.arc(
      (coord.x + 1) * cellSize - halfCellSize,
      (coord.y + 1) * cellSize - halfCellSize,
      halfCellSize - 2,
      0,
      2 * Math.PI
    );
    ctx.fill();
    if (coord.x === maze.endCoord().x && coord.y === maze.endCoord().y) {
      onComplete(moves);
      player.unbindKeyDown();
    }
  }

  function drawSpriteImg(coord) {
    var offsetLeft = cellSize / 50;
    var offsetRight = cellSize / 25;
    ctx.drawImage(
      sprite,
      0,
      0,
      sprite.width,
      sprite.height,
      coord.x * cellSize + offsetLeft,
      coord.y * cellSize + offsetLeft,
      cellSize - offsetRight,
      cellSize - offsetRight
    );
    if (coord.x === maze.endCoord().x && coord.y === maze.endCoord().y) {
      onComplete(moves);
      player.unbindKeyDown();
    }
   rintang.find(function(cordinat, index) {
   if(cordinat.x === coord.x && cordinat.y === coord.y)
      return  onRintangan(moves);
});
   
   console.log("rintang_y = "+rintang);
  }

  function removeSprite(coord) {
    var offsetLeft = cellSize / 50;
    var offsetRight = cellSize / 25;
    ctx.clearRect(
      coord.x * cellSize + offsetLeft,
      coord.y * cellSize + offsetLeft,
      cellSize - offsetRight,
      cellSize - offsetRight
    );
  }

  function check(e) {
    var cell = map[cellCoords.x][cellCoords.y];
    moves++;
    switch (e.keyCode) {
      case 65:
      case 37: // west
        if (cell.w == true) {
          removeSprite(cellCoords);
          cellCoords = {
            x: cellCoords.x - 1,
            y: cellCoords.y
          };
          drawSprite(cellCoords);
        }
        break;
      case 87:
      case 38: // north
        if (cell.n == true) {
          removeSprite(cellCoords);
          cellCoords = {
            x: cellCoords.x,
            y: cellCoords.y - 1
          };
          drawSprite(cellCoords);
        }
        break;
      case 68:
      case 39: // east
        if (cell.e == true) {
          removeSprite(cellCoords);
          cellCoords = {
            x: cellCoords.x + 1,
            y: cellCoords.y
          };
          drawSprite(cellCoords);
        }
        break;
      case 83:
      case 40: // south
        if (cell.s == true) {
          removeSprite(cellCoords);
          cellCoords = {
            x: cellCoords.x,
            y: cellCoords.y + 1
          };
          drawSprite(cellCoords);
        }
        break;
    }
   console.log("player coord = "+cellCoords.x)
  }

  this.bindKeyDown = function() {
    window.addEventListener("keydown", check, false);

    $("#view").swipe({
      swipe: function(
        event,
        direction,
        distance,
        duration,
        fingerCount,
        fingerData
      ) {
        console.log(direction);
        switch (direction) {
          case "up":
            check({
              keyCode: 38
            });
            break;
          case "down":
            check({
              keyCode: 40
            });
            break;
          case "left":
            check({
              keyCode: 37
            });
            break;
          case "right":
            check({
              keyCode: 39
            });
            break;
        }
      },
      threshold: 0
    });
  };

  this.unbindKeyDown = function() {
    window.removeEventListener("keydown", check, false);
    $("#view").swipe("destroy");
  };

  drawSprite(maze.startCoord());

  this.bindKeyDown();
}

var mazeCanvas = document.getElementById("mazeCanvas");
var ctx = mazeCanvas.getContext("2d");
var sprite;
var finishSprite;
var maze, draw, player;
var cellSize;
var difficulty;
// sprite.src = 'media/sprite.png';

  

window.onload = function() {
  let viewWidth = $("#view").width();
  let viewHeight = $("#view").height();
  
  if (viewHeight < viewWidth) {
    ctx.canvas.width = viewHeight - viewHeight / 100;
    ctx.canvas.height = viewHeight - viewHeight / 100;
  } else {
    ctx.canvas.width = viewWidth - viewWidth / 100;
    ctx.canvas.height = viewWidth - viewWidth / 100;
  }
//tambahan walking
/*var leftButton = $("#left"); 
  var rightButton = $("#right"); 
  var goButton = $("#go"); 
  var walking = false; 
  var stepNum = 1; 
  var stepTimeout; 
  var divWindow = $("div"); 
  var divPosition = 0; 
  var direction = 1; 
  var speed = 5; */
  //Load and edit sprites


//finis 1
 
  /*walking 
 function step(){
    sprite.css("background-position", (-75 * stepNum) + "px"); 
    divPosition = divPosition + (direction * speed);
    sprite.css("left", divPosition + "px"); 
    stepNum = (stepNum + 1) % 8; 
    stepTimeout = setTimeout(step, 750/speed); 
  }; 
  // end walking */
  // console.log(Imgsrc);
  // document.getElementById("gambar1").focus();

  let modal = document.getElementById("myModal");
  modal.style.display = "block";
};

window.onresize = function() {
  let viewWidth = $("#view").width();
  let viewHeight = $("#view").height();
  if (viewHeight < viewWidth) {
    ctx.canvas.width = viewHeight - viewHeight / 100;
    ctx.canvas.height = viewHeight - viewHeight / 100;
  } else {
    ctx.canvas.width = viewWidth - viewWidth / 100;
    ctx.canvas.height = viewWidth - viewWidth / 100;
  }
  cellSize = mazeCanvas.width / difficulty;
  console.log("cell size "+cellSize);
  if (player != null) {
    draw.redrawMaze(cellSize);
    player.redrawPlayer(cellSize);
  }
};

function makeMaze() {
  //document.getElementById("mazeCanvas").classList.add("border");
  if (player != undefined) {
    player.unbindKeyDown();
    player = null;
  }
  var e = document.getElementById("diffSelect");
  difficulty = e.options[e.selectedIndex].value;
  cellSize = mazeCanvas.width / difficulty;
  console.log("cell size maze "+cellSize);
  maze = new Maze(difficulty, difficulty);
  draw = new DrawMaze(maze, ctx, cellSize, finishSprite);
  player = new Player(maze, mazeCanvas, cellSize, displayVictoryMess,displayrintangan, sprite);
  if (document.getElementById("mazeContainer").style.opacity < "100") {
    document.getElementById("mazeContainer").style.opacity = "100";
  }
}

// Get the modal
let modal = document.getElementById("myModal");

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");

let image1 =  document.getElementById("gambar1");
let image2 =  document.getElementById("gambar2");
let image3 =  document.getElementById("gambar3");
let image4 =  document.getElementById("gambar4");
let image5 =  document.getElementById("gambar5");
let image6 =  document.getElementById("gambar6");

// var opening = document.getElementById("new");
// var about = document.getElementById("about");
// window.setTimeout(function () { 
//     about.focus(); 
// }, 2000);

   
           

window.setTimeout(function () { 
    image1.focus(); 
    // opening.focus();
}, 1000); 



$(document).keydown(
    function(e)
    {    
        if (e.keyCode == 39) {      
            $(".fokus:focus").next().focus();
   
        }
        if (e.keyCode == 37) {      
            $(".fokus:focus").prev().focus();
   
        }
    }
);

function tombol(){
    /* tombol F11 */
    if(event.keyCode == 27) {
      event.preventDefault()
      document.getElementById('logout').click();
    } else if (event.keyCode == 32) {
      event.preventDefault()
      document.getElementById('startMazeBtn').click();
    } 
  }

// Get the <span> element that closes the modal
// let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
// btn.onclick = function() {
//   modal.style.display = "block";
// }

function runGame() {
   let Imgsrc = document.getElementById('playerimg').getAttribute('src');
    var completeOne = false;
  var completeTwo = false;
  var isComplete = () => {
    if((completeOne === true && completeTwo === true))
       {
         console.log("Runs");
         setTimeout(function(){
           makeMaze();
         }, 500);         
       }
  }; 
   sprite = new Image();
  sprite.src =
    Imgsrc +
    "?" +
    new Date().getTime();
    sprite.setAttribute("crossOrigin", " ");
      sprite.onload = function() {
    sprite = changeBrightness(1.2, sprite);
    completeOne = true;
    console.log("start 1 "+completeOne);
    isComplete();
  };
   finishSprite = new Image();
  finishSprite.src = "https://image.ibb.co/b9wqnJ/i_Q7m_U25_Imgur.png"+
  "?" +
  new Date().getTime();
  finishSprite.setAttribute("crossOrigin", " ");
  finishSprite.onload = function() {
    finishSprite = changeBrightness(1.1, finishSprite);
    completeTwo = true;
    console.log("finish 1 "+completeTwo);
    isComplete();
  };
  modal.style.display = "none";
  console.log(Imgsrc);
  
}


 // var canvas=document.getElementById("mazeCanvas");
 //  var context=canvas.getContext('2d');
 //  var image=new Image();
 //  image.onload=function(){
 //  context.drawImage(image,0,0,canvas.width,canvas.height);
 //  };
 //  image.src="http://www.lunapic.com/editor/premade/transparent.gif";

var Clock = {
  totalSeconds: 0,
  start: function () {
    if (!this.interval) {
        var self = this;
        function pad(val) { return val > 9 ? val : "0" + val; }
        this.interval = setInterval(function () {
          self.totalSeconds += 1;

           document.getElementById("min").innerHTML = pad(Math.floor(self.totalSeconds / 60 % 60));
           document.getElementById("sec").innerHTML = pad(parseInt(self.totalSeconds % 60));
        }, 1000);
    }
  },

  reset: function () {
    Clock.totalSeconds = null; 
    clearInterval(this.interval);
    document.getElementById("min").innerHTML = "00";
    document.getElementById("sec").innerHTML = "00";
    delete this.interval;
  },
  pause: function () {
    clearInterval(this.interval);
    delete this.interval;
  },

  resume: function () {
    this.start();
  },

  restart: function () {
     this.reset();
     Clock.start();
  }
};

function waktuMulai() {  
 var tanggal = new Date();    
  document.getElementById("jam1").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}

function waktuFinish() {  
 var tanggal = new Date();    
  document.getElementById("jam2").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}

var audio1 = document.getElementById("audio1");
var audio2 = document.getElementById("audio2");

var cetak1 = image1.attributes.nama.value;
var cetak2 = image2.attributes.nama.value;
var cetak3 = image3.attributes.nama.value;
var cetak4 = image4.attributes.nama.value;
var cetak5 = image5.attributes.nama.value;
var cetak6 = image6.attributes.nama.value;

image1.onclick = function() {
  waktuMulai();
  audio1.pause();
  audio2.play();
  document.getElementById("cetak").innerHTML = cetak1;
  document.getElementById("playerimg").src="asset/1.gif";
  runGame();
  Clock.start();
  // tampil();
};

image2.onclick = function() {
  waktuMulai();
  audio1.pause();
  audio2.play();
  document.getElementById("cetak").innerHTML = cetak2;
  document.getElementById("playerimg").src="asset/2.gif";
  runGame();
  Clock.start();
};

image3.onclick = function() {
  waktuMulai();
  audio1.pause();
  audio2.play();
  document.getElementById("cetak").innerHTML = cetak3;
  document.getElementById("playerimg").src="asset/3.gif";
  runGame();
  Clock.start();
};

image4.onclick = function() {
  waktuMulai();
  audio1.pause();
  audio2.play();
  document.getElementById("cetak").innerHTML = cetak4;
  document.getElementById("playerimg").src="asset/4.gif";
  runGame();
  Clock.start();
};

image5.onclick = function() {
  waktuMulai();
  audio1.pause();
  audio2.play();
  document.getElementById("cetak").innerHTML = cetak5;
  document.getElementById("playerimg").src="asset/5.gif";
  runGame();
  Clock.start();
};

image6.onclick = function() {
  waktuMulai();
  audio1.pause();
  audio2.play();
  document.getElementById("cetak").innerHTML = cetak6;
  document.getElementById("playerimg").src="asset/6.gif";
  runGame();
  Clock.start();
};



function about() {
    let modal = document.getElementById("modalAbout");
    if(modal.style.display === "none") {
      modal.style.display = "block";
    } else {
      modal.style.display = "none";
    }
}

// When the user clicks on <span> (x), close the modal
function close_button() {
  let modal = document.getElementById("modalAbout");
  modal.style.display = "none";
}

// close.onclick = function() {
//   modal_about.style.display = "none";
// }
var modal_about = document.getElementById("modalAbout");

// When the user clicks anywhere outside of the modal, close it

window.onclick = function(event) {
  if (event.target == modal_about) {
    modal_about.style.display = "none";
  }
}

// function tampil() {
//     let karakter = "Hello World!";
//     var karakter = document.getElementById("cetak").attributes.data.value;
//     let min = document.getElementById("min").innerHTML;
//     let sec = document.getElementById("sec").innerHTML;

// $.ajax({
//   url: "../game-labirin/ajax.php",
//   method: "POST",
//   data: {
//     karakter:karakter,
  
//   },
//   success:function(data) {
//     alert("success!");
//   }
// });

// }



// setTimeout(function() {
//   var waktusec = document.getElementById("sec").innerHTML;
//   alert(waktusec);
// }, 10000);

function timer() {
  var waktu = document.getElementById("min").innerHTML;
  // var time = 10;

  if (waktu > 15) {
    tampil();
    console.log(waktu);
  };

    if (waktu > 15 ) {
    clearInterval(interval);
  }

}
 
var interval = setInterval(function() {
  timer();
}, 60000);


function tampil() {
    var karakter = document.getElementById("cetak").innerHTML;
    var waktuMulai = document.getElementById("jam1").innerHTML;
    var waktuFinish = document.getElementById("jam2").innerHTML;
    var waktu = document.getElementById("min").innerHTML;
    var tgl = new Date().toDateString();
    var status = " ";

    if (waktu <= 15) {
      status = "Menang!";
      // alert(status);
    } else {
      status = "Kalah!";
      // alert(status);
    }
    
    // alert(karakter);
  $.ajax({
    url: "../game-labirin/ajax.php",
    method: "POST",
    data: "datakarakter=" + karakter + "&waktuMulai=" + waktuMulai + "&waktuFinish=" + waktuFinish + "&status=" + status + "&tgl=" + tgl,
  
  success:function(data) {
    console.log(data);
  }
});
}


// var tgl = new Date();
// console.log(tgl.getDate() + " " + tgl.getMonth() + " " + tgl.getFullYear());
// console.log(tgl);

// var date = new Date();
// console.log(date.toDateString());


function fokus() {
    $('#links_container').on("keydown", ".fokus",
    function(e)
    {    

        //start - list of <a>
        var flag = false;
        var smallMeni = document.getElementById('links_container');
        var allElements2 = smallMeni.getElementsByClassName('fokus'); //.link
        //end

        //start - key down
        if (e.keyCode == 39) 
        {           
            for (var i=0;i<allElements2.length;i++)
            {

                if(flag == true){

                    flag = false

                    allElements2[i].focus();

                    //alert(i)
                }
                else
                {
                    if ( document.activeElement === allElements2[i] )
                    {
                        //alert(i);
                        flag = true;
                    }           
                }

            }
        }
        //end

        //start - key up
        if (e.keyCode == 37) 
        {           
            for (var i=0;i<allElements2.length;i++)
            {

                if ( document.activeElement === allElements2[i] )
                {
                    if (i>0)
                    {
                        allElements2[i-1].focus();                  
                    }
                }           

            }
        }           

        //alert(i);

    }
);

}

function cool() {
  // document.getElementById('okBtn').focus();
  setTimeout(function(){ 
    location.reload(); }, 5000);
}

  function startWebCam() {
      if (navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                srcObject = stream;
                console.log('iki jalann');
            })
            .catch(function (err0r) {
                console.log("Something went wrong!");
            });
      }
    }

  function modalFoto() {
    let modal = document.getElementById("modalFoto");
    if(modal.style.display === "none") {
      modal.style.display = "block";
    } else {
      modal.style.display = "none";
    }

  }

 function capture() {
  // Grab elements, create settings, etc.
    var video = document.getElementById('video');

    // Get access to the camera!
    if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        // Not adding `{ audio: true }` since we only want video now
        navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
            // video.src = window.URL.createObjectURL(stream);
            video.srcObject = stream;
            video.play();
        });
    }

    // Elements for taking the snapshot
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');
    var video = document.getElementById('video');

    // Trigger photo take
    document.getElementById("snap").addEventListener("click", function() {
        context.drawImage(video, 0, 0, 425, 300);
    });

    document.getElementById("save").addEventListener("click", function() {
            var canvas = document.getElementById('canvas');
            var dataURL = canvas.toDataURL();
            $.ajax({
              type: "POST",
              url: "../game-labirin/simpan.php", // ini adalah fungsi file php simpan gambar
              data: {
                 imgBase64: dataURL
              }
            }).done(function(o) {
                // window.location.replace("simpan.php");
              console.log('saved');
            });

             var modal = document.getElementById("modalFoto");
              modal.style.display = "none";

    });

     
}

function saveFoto() {
     if(event.keyCode == 113) {
      event.preventDefault()
      document.getElementById('snap').click();
    } else if (event.keyCode == 121) {
      event.preventDefault()
      document.getElementById('save').click();
    } 
}