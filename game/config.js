let config = {
  world: {
    gravity: 2.25,
    maxYVel: 25,
    blockSize: 50,
    camera: true,
    cameraFriction: 5
  },
  player: {
    width: 40,
    height: 80,
    jumpForce: 0.15,
    speed: 4,
    acceleration: 0.5,
    decceleration: 5,
    dashTime: 5,
    actions: ["wall jump", "dash"],
  },
}