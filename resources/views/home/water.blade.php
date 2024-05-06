<style>
    @import url("https://fonts.googleapis.com/css2?family=Asap&display=swap");
:root {
  --ratioW: 1;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
*::before,
*::after {
  box-sizing: border-box;
}
html,
body {
  overscroll-behavior-x: none;
  overscroll-behavior-y: none;
  scroll-behavior: smooth;
  min-height: 100%;
}
body {
  font-family: "Asap", sans-serif;
  position: relative;
  width: 100vw;
  min-height: 100vh;
  text-align: center;
  overflow-x: hidden;
  background: linear-gradient(
    to bottom,
    oklch(60% 0.2 230),
    oklch(60% 0.2 180)
  );
  color: white;
  font-size: clamp(12px, 5.5vw, 28px);
}

#surface {
  mix-blend-mode: overlay;
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
}
#surface::before,
#surface::after {
  content: "";
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-image: url(https://raw.githubusercontent.com/happy358/misc/main/image/cloud_X.png);
  background-repeat: repeat-x;

  --duration: 6s;
  --lowHeight: 20vh;
  --highHeight: 40vh;
  --layerNum: 2;
  --index: 0;
  --opacity: 0.4;

  animation: surface var(--duration) linear infinite;
  animation-delay: calc(
    (var(--duration) / var(--layerNum)) * var(--index) * -1
  );
  opacity: 0;
}
#surface::before {
  --index: 0;
  transform: scale3d(1, -1, 1);
}
#surface::after {
  --index: 1;
  transform: scale3d(-1, -1, 1);
}
#caustics {
  position: fixed;
  bottom: 0;
  top: 0;
  width: 100vw;
  height: 100vh;
  transform-origin: bottom center;
  transform: scale3d(2, 1, 1);
}
#caustics::before,
#caustics::after {
  content: "";
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-image: url(https://raw.githubusercontent.com/happy358/misc/main/image/caustics.png);
  background-repeat: repeat;

  --duration: 10s;
  --height: 30vh;
  --gapY: 0px;

  background-size: calc(100vw / (var(--ratioW))) 40vh;
  animation: caustics calc(var(--duration) * (var(--ratioW))) linear infinite;
  opacity: 0.3;
  mask-image: linear-gradient(
    to top,
    white,
    transparent var(--height),
    transparent
  );
}
#caustics::after {
  --duration: 11s;
  --gapY: 10vh;
  animation-delay: -2s;
  transform: scale3d(-1, 1, 1);
}


@keyframes surface {
  0% {
    opacity: 0;
    background-position: center bottom;
    background-size: calc(3 * var(--highHeight)) var(--highHeight);
  }
  20% {
    opacity: var(--opacity);
  }
  100% {
    opacity: 0;
    background-position: center bottom calc(-1 * var(--lowHeight));
    background-size: calc(1 * var(--lowHeight)) var(--lowHeight);
  }
}
@keyframes caustics {
  0% {
    background-position: bottom var(--gapY) left;
  }
  100% {
    background-position: bottom var(--gapY) left -100vw;
  }
}

@media (orientation: portrait) {
  :root {
    --ratioW: 1;
  }
}
@media (min-aspect-ratio: 1/1) {
  :root {
    --ratioW: 2;
  }
}
@media (min-aspect-ratio: 2/1) {
  :root {
    --ratioW: 3;
  }
}
@media (min-aspect-ratio: 3/1) {
  :root {
    --ratioW: 4;
  }
}
@media (min-aspect-ratio: 4/1) {
  :root {
    --ratioW: 5;
  }
}
@media (min-aspect-ratio: 5/1) {
  :root {
    --ratioW: 6;
  }
}


</style>

<div id='surface'></div>
<div id='caustics'></div>
