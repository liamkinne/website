# Computer Vision and Picking a Camera

This year, the open division of RoboCupJunior soccer is going to be very interesting with the biggest difference being the new ball. Instead of the pulsing IR ball that all of the other divisions use, open-soccer will be using an orange ball that is completely passive. This means that teams will have to completely re-design how they locate the ball.

To be honest, I wasn't to interested on competing this year, but with this change to the game I really want to see what I can come up with.

Something I've been itching to do for a while now is computer vision, and this is the perfect opportunity. I have used such devices as the Pixy cam before whith a lot of success, but this year I want to try a custom and more cost effective solution. This year I want to spin my own solution using a raspberry pi co-processor and OpenCV. To do this, I need to first pick a camera, so let's compare some options that are available to me.

## Cameras

### Microsoft LifeCam Cinema
This camera is on the list simply because I have a bunch of them available to me thanks to being involved with the UTAS FRC team. This camera has it's draw backs, with a horizontal FOV of only 64 degrees, it doesn't capture much and so multiple would need to be used to get a good view of surroundings.

### Modified Pixy CAM
Although I said I want to spin my own solution, using a pixy cam with a fisheye lense may be a solution that fits. The kind of lense I can get has a 115 degree FOV, which is about twice as much as the LifeCam.


## Visualising FOV
To help me visualise the erea that a certain FOV encompasses, I built a simple function that takes an FOV angle and outputs a graph showing the two angular limits of that FOV. [Here's](https://www.desmos.com/calculator/zxs8vjmds7) the desmos graph that you can play with.
