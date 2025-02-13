const configLevel = () => {
  textFade = 255;
  World.clear(engine.world);
  Engine.clear(engine);
  bodies = [];
  for (let y in levels[level].bitmap) {
    let row = levels[level].bitmap[y];
    for (let x in row) {
      let char = row[x];
      if (char !== " ") {
        if (char === "@") {
          player = new Player(Bodies.rectangle(x * config.world.blockSize, y * config.world.blockSize, config.player.width, config.player.height));
          configPlayerEvents();
          bodies.push(player);
        } else {
          bodies.push(new Block(char, x * config.world.blockSize, y * config.world.blockSize));
        }
      }
    }
  }
}

function setup() {
  createCanvas(720, 360);
  angleMode(RADIANS);
  rectMode(CENTER);
  noStroke();

  engine = Engine.create({
    gravity: {
      y: config.world.gravity
    }
  });
  world = engine.world;
  Matter.Runner.run(engine);

  configLevel();
}

// Camera Coordinates
let cameraX = 0, cameraY = 0;
function draw() {
  if(scene === "menu") {
    background(200);
    textFont("Impact", 25);
    textAlign(CENTER, CENTER);
    text("Paltform version 0.1.9.5a\nThe game is still in devloppement. Some levels can be in debug mode\n resolution: 720 x 360\n\nWASD/Arrow - Move\nSpace/W/Up arrow - Jump/Walljump\nSHIFT + Mouvement - make a dash\n\nClick here to begin.", width/2, height/2);
    if(mouseIsPressed){
      scene = "game";
    }
  }
  else if (scene === "game") {
    background(200);
    push();
    if (config.world.camera) {
      cameraX += ((width / 2 - player.body.position.x) - cameraX) / config.world.cameraFriction;
      cameraY += ((height / 2 - player.body.position.y) - cameraY) / config.world.cameraFriction
    }
    translate(cameraX, cameraY);

    bodies.forEach(body => {
      body.run();
      body.draw();
    });

    pop();

    if(levels[level].message){
      textFont("Impact", 25);
      fill(0, textFade);
      textAlign(CENTER, CENTER);
      text(levels[level].message, width/2 - 2, height/2 - 2);
      text(levels[level].message, width/2 - 2, height/2 + 2);
      text(levels[level].message, width/2 + 2, height/2 - 2);
      text(levels[level].message, width/2 + 2, height/2 + 2);
      fill(255, textFade);
      text(levels[level].message, width/2, height/2);
      if(textFade > 0){
        textFade -= 1;
      }
    }

    if (player.died) {
textFont("Impact", 25);
      fill(0, textFade);
      textAlign(CENTER, CENTER);
      text("you ded", width/2 - 2, height/2 - 2);
      text("you ded", width/2 - 2, height/2 + 2);
      text("you ded", width/2 + 2, height/2 - 2);
      text("you ded", width/2 + 2, height/2 + 2);
      fill(255, textFade);
      text("you ded", width/2, height/2);
      if(textFade > 0){
        textFade -= 1;
      }
      configLevel();
      player.died = false;
    }

    if (nextLevel) {
      if (levels[level + 1]) {
        level++;
        configLevel();
        nextLevel = false;
      } else {
        scene = "win"
      }
    }
  } 
  else if(scene === "win") {
    background(200, 250, 200);
    textFont("Impact", 25);
    textAlign(CENTER, CENTER);
    fill(0);
    text("You win!", width/2, height/2);
  }
}

function keyPressed() {
  keys[key] = true;
}
function keyReleased() {
  keys[key] = false;
}

window.requestAnimFrame = (function() {
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.ieRequestAnimationFrame ||
        function(callback) {
            window.setTimeout(callback, 1000 / 60);
        };
})();

let fpsElement = document.getElementById("fps");

let then = Date.now() / 1000;  // get time in seconds

let render = function() {
    let now = Date.now() / 1000;  // get time in seconds

    // compute time since last frame
    let elapsedTime = now - then;
    then = now;

    // compute fps
    let fps = 1 / elapsedTime;
    fpsElement.innerText = fps.toFixed(2);

    requestAnimFrame(render);
};
render();


const joystickContainer = document.getElementById("joystick-container");
const joystickHandle = document.getElementById("joystick-handle");

let isDragging = false;
let currentX;
let currentY;
let initialX;
let initialY;
let xOffset = 0;
let yOffset = 0;

joystickContainer.addEventListener("mousedown", dragStart);
joystickContainer.addEventListener("mouseup", dragEnd);
joystickContainer.addEventListener("mousemove", drag);

function dragStart(e) {
  initialX = e.clientX - xOffset;
  initialY = e.clientY - yOffset;

  if (e.target === joystickHandle) {
    isDragging = true;
  }
}

function dragEnd(e) {
  initialX = currentX;
  initialY = currentY;

  isDragging = false;
}

function drag(e) {
  if (isDragging) {
    e.preventDefault();
    currentX = e.clientX - initialX;
    currentY = e.clientY - initialY;

    xOffset = currentX;
    yOffset = currentY;

    setTranslate(currentX, currentY, joystickHandle);
  }
}

//function setTranslate