<?php
/**
* Elgg multimedia Plugin
* @package multimedia
*/

$site_url = elgg_get_site_url();
$vendor_path = $site_url . 'mod/multimedia/vendors/video-js/';
?>

/*!
Video.js Default Styles (http://videojs.com)
Version 4.6.3
Create your own skin at http://designer.videojs.com
*/
/* SKIN
================================================================================
The main class name for all skin-specific styles. To make your own skin,
replace all occurances of 'vjs-default-skin' with a new name. Then add your new
skin name to your video tag instead of the default skin.
e.g. <video class="video-js my-skin-name">
*/
.vjs-default-skin {
  color: #cccccc;
}
/* Custom Icon Font
--------------------------------------------------------------------------------
The control icons are from a custom font. Each icon corresponds to a character
(e.g. "\e001"). Font icons allow for easy scaling and coloring of icons.
*/
@font-face {
  font-family: 'VideoJS';
  src: url('<?php echo $vendor_path; ?>font/vjs.eot');
  src: url('<?php echo $vendor_path; ?>font/vjs.eot?#iefix') format('embedded-opentype'), url('<?php echo $vendor_path; ?>font/vjs.woff') format('woff'), url('font/vjs.ttf') format('truetype');
  font-weight: normal;
  font-style: normal;
}
/* Base UI Component Classes
--------------------------------------------------------------------------------
*/
/* Slider - used for Volume bar and Seek bar */
.vjs-default-skin .vjs-slider {
  /* Replace browser focus hightlight with handle highlight */
  outline: 0;
  position: relative;
  cursor: pointer;
  padding: 0;
  /* background-color-with-alpha */
  background-color: #333333;
  background-color: rgba(51, 51, 51, 0.9);
}
.vjs-default-skin .vjs-slider:focus {
  /* box-shadow */
  -webkit-box-shadow: 0 0 2em #ffffff;
  -moz-box-shadow: 0 0 2em #ffffff;
  box-shadow: 0 0 2em #ffffff;
}
.vjs-default-skin .vjs-slider-handle {
  position: absolute;
  /* Needed for IE6 */
  left: 0;
  top: 0;
}
.vjs-default-skin .vjs-slider-handle:before {
  content: "\e009";
  font-family: VideoJS;
  font-size: 1em;
  line-height: 1;
  text-align: center;
  text-shadow: 0em 0em 1em #fff;
  position: absolute;
  top: 0;
  left: 0;
  /* Rotate the square icon to make a diamond */
  /* transform */
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
/* Control Bar
--------------------------------------------------------------------------------
The default control bar that is a container for most of the controls.
*/
.vjs-default-skin .vjs-control-bar {
  /* Start hidden */
  display: none;
  position: absolute;
  /* Place control bar at the bottom of the player box/video.
     If you want more margin below the control bar, add more height. */
  bottom: 0;
  /* Use left/right to stretch to 100% width of player div */
  left: 0;
  right: 0;
  /* Height includes any margin you want above or below control items */
  height: 3.0em;
  /* background-color-with-alpha */
  background-color: #07141e;
  background-color: rgba(30, 15, 7, 0.7);
}
/* Show the control bar only once the video has started playing */
.vjs-default-skin.vjs-has-started .vjs-control-bar {
  display: block;
  /* Visibility needed to make sure things hide in older browsers too. */

  visibility: visible;
  opacity: 1;
  /* transition */
  -webkit-transition: visibility 0.1s, opacity 0.1s;
  -moz-transition: visibility 0.1s, opacity 0.1s;
  -o-transition: visibility 0.1s, opacity 0.1s;
  transition: visibility 0.1s, opacity 0.1s;
}
/* Hide the control bar when the video is playing and the user is inactive  */
.vjs-default-skin.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
  display: block;
  visibility: hidden;
  opacity: 0;
  /* transition */
  -webkit-transition: visibility 1s, opacity 1s;
  -moz-transition: visibility 1s, opacity 1s;
  -o-transition: visibility 1s, opacity 1s;
  transition: visibility 1s, opacity 1s;
}
.vjs-default-skin.vjs-controls-disabled .vjs-control-bar {
  display: none;
}
.vjs-default-skin.vjs-using-native-controls .vjs-control-bar {
  display: none;
}
/* The control bar shouldn't show after an error */
.vjs-default-skin.vjs-error .vjs-control-bar {
  display: none;
}
/* IE8 is flakey with fonts, and you have to change the actual content to force
fonts to show/hide properly.
  - "\9" IE8 hack didn't work for this
  - Found in XP IE8 from http://modern.ie. Does not show up in "IE8 mode" in IE9
*/
@media \0screen {
  .vjs-default-skin.vjs-user-inactive.vjs-playing .vjs-control-bar :before {
    content: "";
  }
}
/* General styles for individual controls. */
.vjs-default-skin .vjs-control {
  outline: none;
  position: relative;
  float: left;
  text-align: center;
  margin: 0;
  padding: 0;
  height: 3.0em;
  width: 4em;
}
/* FontAwsome button icons */
.vjs-default-skin .vjs-control:before {
  font-family: VideoJS;
  font-size: 1.5em;
  line-height: 2;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  text-align: center;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
}
/* Replacement for focus outline */
.vjs-default-skin .vjs-control:focus:before,
.vjs-default-skin .vjs-control:hover:before {
  text-shadow: 0em 0em 1em #ffffff;
}
.vjs-default-skin .vjs-control:focus {
  /*  outline: 0; */
  /* keyboard-only users cannot see the focus on several of the UI elements when
  this is set to 0 */

}
/* Hide control text visually, but have it available for screenreaders */
.vjs-default-skin .vjs-control-text {
  /* hide-visually */
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}
/* Play/Pause
--------------------------------------------------------------------------------
*/
.vjs-default-skin .vjs-play-control {
  width: 5em;
  cursor: pointer;
}
.vjs-default-skin .vjs-play-control:before {
  content: "\e001";
}
.vjs-default-skin.vjs-playing .vjs-play-control:before {
  content: "\e002";
}
/* Playback toggle
--------------------------------------------------------------------------------
*/
.vjs-default-skin .vjs-playback-rate .vjs-playback-rate-value {
  font-size: 1.5em;
  line-height: 2;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  text-align: center;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
}
.vjs-default-skin .vjs-playback-rate.vjs-menu-button .vjs-menu .vjs-menu-content {
  width: 4em;
  left: -2em;
  list-style: none;
}
/* Volume/Mute
-------------------------------------------------------------------------------- */
.vjs-default-skin .vjs-mute-control,
.vjs-default-skin .vjs-volume-menu-button {
  cursor: pointer;
  float: right;
}
.vjs-default-skin .vjs-mute-control:before,
.vjs-default-skin .vjs-volume-menu-button:before {
  content: "\e006";
}
.vjs-default-skin .vjs-mute-control.vjs-vol-0:before,
.vjs-default-skin .vjs-volume-menu-button.vjs-vol-0:before {
  content: "\e003";
}
.vjs-default-skin .vjs-mute-control.vjs-vol-1:before,
.vjs-default-skin .vjs-volume-menu-button.vjs-vol-1:before {
  content: "\e004";
}
.vjs-default-skin .vjs-mute-control.vjs-vol-2:before,
.vjs-default-skin .vjs-volume-menu-button.vjs-vol-2:before {
  content: "\e005";
}
.vjs-default-skin .vjs-volume-control {
  width: 5em;
  float: right;
}
.vjs-default-skin .vjs-volume-bar {
  width: 5em;
  height: 0.6em;
  margin: 1.1em auto 0;
}
.vjs-default-skin .vjs-volume-menu-button .vjs-menu-content {
  height: 2.9em;
}
.vjs-default-skin .vjs-volume-level {
  position: absolute;
  top: 0;
  left: 0;
  height: 0.5em;
  /* assuming volume starts at 1.0 */

  width: 100%;
  background: rgb(204, 134, 102) url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAAP0lEQVQIHWWMAQoAIAgDR/QJ/Ub//04+w7ZICBwcOg5FZi5iBB82AGzixEglJrd4TVK5XUJpskSTEvpdFzX9AB2pGziSQcvAAAAAAElFTkSuQmCC) -50% 0 repeat;
}
.vjs-default-skin .vjs-volume-bar .vjs-volume-handle {
  width: 0.5em;
  height: 0.5em;
  /* Assumes volume starts at 1.0. If you change the size of the
     handle relative to the volume bar, you'll need to update this value
     too. */

  left: 4.5em;
}
.vjs-default-skin .vjs-volume-handle:before {
  font-size: 0.9em;
  top: -0.2em;
  left: -0.2em;
  width: 1em;
  height: 1em;
}
.vjs-default-skin .vjs-volume-menu-button .vjs-menu .vjs-menu-content {
  width: 6em;
  left: -4em;
}
/* Progress
--------------------------------------------------------------------------------
*/
.vjs-default-skin .vjs-progress-control {
  position: absolute;
  left: 0;
  right: 0;
  width: auto;
  font-size: 0.3em;
  height: 1em;
  /* Set above the rest of the controls. */
  top: -1em;
  /* Shrink the bar slower than it grows. */
  /* transition */
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
}
/* On hover, make the progress bar grow to something that's more clickable.
    This simply changes the overall font for the progress bar, and this
    updates both the em-based widths and heights, as wells as the icon font */
.vjs-default-skin:hover .vjs-progress-control {
  font-size: .9em;
  /* Even though we're not changing the top/height, we need to include them in
      the transition so they're handled correctly. */

  /* transition */
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}
/* Box containing play and load progresses. Also acts as seek scrubber. */
.vjs-default-skin .vjs-progress-holder {
  height: 100%;
}
/* Progress Bars */
.vjs-default-skin .vjs-progress-holder .vjs-play-progress,
.vjs-default-skin .vjs-progress-holder .vjs-load-progress {
  position: absolute;
  display: block;
  height: 100%;
  margin: 0;
  padding: 0;
  /* updated by javascript during playback */

  width: 0;
  /* Needed for IE6 */
  left: 0;
  top: 0;
}
.vjs-default-skin .vjs-play-progress {
  /*
    Using a data URI to create the white diagonal lines with a transparent
      background. Surprisingly works in IE8.
      Created using http://www.patternify.com
    Changing the first color value will change the bar color.
    Also using a paralax effect to make the lines move backwards.
      The -50% left position makes that happen.
  */

  background: rgb(204, 127, 102) url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAAP0lEQVQIHWWMAQoAIAgDR/QJ/Ub//04+w7ZICBwcOg5FZi5iBB82AGzixEglJrd4TVK5XUJpskSTEvpdFzX9AB2pGziSQcvAAAAAAElFTkSuQmCC) -50% 0 repeat;
}
.vjs-default-skin .vjs-load-progress {
  background: #646464 /* IE8- Fallback */;
  background: rgba(255, 255, 255, 0.4);
}
.vjs-default-skin .vjs-seek-handle {
  width: 1.5em;
  height: 100%;
}
.vjs-default-skin .vjs-seek-handle:before {
  padding-top: 0.1em /* Minor adjustment */;
}
/* Live Mode
--------------------------------------------------------------------------------
*/
.vjs-default-skin.vjs-live .vjs-time-controls,
.vjs-default-skin.vjs-live .vjs-time-divider,
.vjs-default-skin.vjs-live .vjs-progress-control {
  display: none;
}
.vjs-default-skin.vjs-live .vjs-live-display {
  display: block;
}
/* Live Display
--------------------------------------------------------------------------------
*/
.vjs-default-skin .vjs-live-display {
  display: none;
  font-size: 1em;
  line-height: 3em;
}
/* Time Display
--------------------------------------------------------------------------------
*/
.vjs-default-skin .vjs-time-controls {
  font-size: 1em;
  /* Align vertically by making the line height the same as the control bar */
  line-height: 3em;
}
.vjs-default-skin .vjs-current-time {
  float: left;
}
.vjs-default-skin .vjs-duration {
  float: left;
}
/* Remaining time is in the HTML, but not included in default design */
.vjs-default-skin .vjs-remaining-time {
  display: none;
  float: left;
}
.vjs-time-divider {
  float: left;
  line-height: 3em;
}
/* Fullscreen
--------------------------------------------------------------------------------
*/
.vjs-default-skin .vjs-fullscreen-control {
  width: 3.8em;
  cursor: pointer;
  float: right;
}
.vjs-default-skin .vjs-fullscreen-control:before {
  content: "\e000";
}
/* Switch to the exit icon when the player is in fullscreen */
.vjs-default-skin.vjs-fullscreen .vjs-fullscreen-control:before {
  content: "\e00b";
}
/* Big Play Button (play button at start)
--------------------------------------------------------------------------------
Positioning of the play button in the center or other corners can be done more
easily in the skin designer. http://designer.videojs.com/
*/
.vjs-default-skin .vjs-big-play-button {
  left: 0.5em;
  top: 0.5em;
  font-size: 3em;
  display: block;
  z-index: 2;
  position: absolute;
  width: 4em;
  height: 2.6em;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  opacity: 1;
  /* Need a slightly gray bg so it can be seen on black backgrounds */
  /* background-color-with-alpha */
  background-color: rgba(30, 13, 7, 0.7);
  border: 0.1em solid rgb(73, 63, 59);
  /* border-radius */
  -webkit-border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  border-radius: 0.8em;
  /* box-shadow */
  -webkit-box-shadow: 0px 0px 1em rgba(255, 255, 255, 0.25);
  -moz-box-shadow: 0px 0px 1em rgba(255, 255, 255, 0.25);
  box-shadow: 0px 0px 1em rgba(255, 255, 255, 0.25);
  /* transition */
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
}
/* Optionally center */
.vjs-default-skin.vjs-big-play-centered .vjs-big-play-button {
  /* Center it horizontally */
  left: 50%;
  margin-left: -2.1em;
  /* Center it vertically */
  top: 50%;
  margin-top: -1.4000000000000001em;
}
/* Hide if controls are disabled */
.vjs-default-skin.vjs-controls-disabled .vjs-big-play-button {
  display: none;
}
/* Hide when video starts playing */
.vjs-default-skin.vjs-has-started .vjs-big-play-button {
  display: none;
}
/* Hide on mobile devices. Remove when we stop using native controls
    by default on mobile  */
.vjs-default-skin.vjs-using-native-controls .vjs-big-play-button {
  display: none;
}
.vjs-default-skin:hover .vjs-big-play-button,
.vjs-default-skin .vjs-big-play-button:focus {
  outline: 0;
  border-color: rgb(255, 166, 131);;
  /* IE8 needs a non-glow hover state */
  background-color: #505050;
  background-color: rgba(50, 50, 50, 0.75);
  /* box-shadow */
  -webkit-box-shadow: 0px 0px 1.3em rgba(251, 167, 74, 0.65);
  -moz-box-shadow: 0px 0px 1.3em rgba(251, 167, 74, 0.65);
  box-shadow: 0px 0px 1.3em rgba(251, 167, 74, 0.65);
  /* transition */
  -webkit-transition: all 0s;
  -moz-transition: all 0s;
  -o-transition: all 0s;
  transition: all 0s;
}
.vjs-default-skin .vjs-big-play-button:before {
  content: "\e001";
  font-family: VideoJS;
  /* In order to center the play icon vertically we need to set the line height
     to the same as the button height */

  line-height: 2.6em;
  text-shadow: 0.05em 0.05em 0.1em #000;
  text-align: center /* Needed for IE8 */;
  position: absolute;
  left: 0;
  width: 100%;
  height: 100%;
}
.vjs-error .vjs-big-play-button {
  display: none;
}
/* Error Display
--------------------------------------------------------------------------------
*/
.vjs-error-display {
  display: none;
}
.vjs-error .vjs-error-display {
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}
.vjs-error .vjs-error-display:before {
  content: 'X';
  font-family: Arial;
  font-size: 4em;
  color: #666666;
  /* In order to center the play icon vertically we need to set the line height
     to the same as the button height */

  line-height: 1;
  text-shadow: 0.05em 0.05em 0.1em #000;
  text-align: center /* Needed for IE8 */;
  vertical-align: middle;
  position: absolute;
  top: 50%;
  margin-top: -0.5em;
  width: 100%;
}
.vjs-error-display div {
  position: absolute;
  font-size: 1.4em;
  text-align: center;
  bottom: 1em;
  right: 1em;
  left: 1em;
}
.vjs-error-display a,
.vjs-error-display a:visited {
  color: #F4A460;
}
/* Loading Spinner
--------------------------------------------------------------------------------
*/
.vjs-loading-spinner {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 4em;
  line-height: 1;
  width: 1em;
  height: 1em;
  margin-left: -0.5em;
  margin-top: -0.5em;
  opacity: 0.75;
  /* animation */
  -webkit-animation: spin 1.5s infinite linear;
  -moz-animation: spin 1.5s infinite linear;
  -o-animation: spin 1.5s infinite linear;
  animation: spin 1.5s infinite linear;
}
/* Errors are unrecoverable without user interaction,
   so hide the spinner in the case of an error */
.video-js.vjs-error .vjs-loading-spinner {
  /* using !important flag because currently the loading spinner
     uses hide()/show() instead of classes. The !important can be
     removed when that's updated */

  display: none !important;
  /* ensure animation doesn't continue while hidden */

  /* animation */
  -webkit-animation: none;
  -moz-animation: none;
  -o-animation: none;
  animation: none;
}
.vjs-default-skin .vjs-loading-spinner:before {
  content: "\e01e";
  font-family: VideoJS;
  position: absolute;
  top: 0;
  left: 0;
  width: 1em;
  height: 1em;
  text-align: center;
  text-shadow: 0em 0em 0.1em #000;
}
@-moz-keyframes spin {
  0% {
    -moz-transform: rotate(0deg);
  }
  100% {
    -moz-transform: rotate(359deg);
  }
}
@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
  }
}
@-o-keyframes spin {
  0% {
    -o-transform: rotate(0deg);
  }
  100% {
    -o-transform: rotate(359deg);
  }
}
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(359deg);
  }
}
/* Menu Buttons (Captions/Subtitles/etc.)
--------------------------------------------------------------------------------
*/
.vjs-default-skin .vjs-menu-button {
  float: right;
  cursor: pointer;
}
.vjs-default-skin .vjs-menu {
  display: none;
  position: absolute;
  bottom: 0;
  left: 0em;
  /* (Width of vjs-menu - width of button) / 2 */

  width: 0em;
  height: 0em;
  margin-bottom: 3em;
  border-left: 2em solid transparent;
  border-right: 2em solid transparent;
  border-top: 1.55em solid #000000;
  /* Same width top as ul bottom */

  border-top-color: rgba(7, 40, 50, 0.5);
  /* Same as ul background */

}
/* Button Pop-up Menu */
.vjs-default-skin .vjs-menu-button .vjs-menu .vjs-menu-content {
  display: block;
  padding: 0;
  margin: 0;
  position: absolute;
  width: 10em;
  bottom: 1.5em;
  /* Same bottom as vjs-menu border-top */

  max-height: 15em;
  overflow: auto;
  left: -5em;
  /* Width of menu - width of button / 2 */

  /* background-color-with-alpha */
  background-color: #07141e;
  background-color: rgba(7, 20, 30, 0.7);
  /* box-shadow */
  -webkit-box-shadow: -0.2em -0.2em 0.3em rgba(255, 255, 255, 0.2);
  -moz-box-shadow: -0.2em -0.2em 0.3em rgba(255, 255, 255, 0.2);
  box-shadow: -0.2em -0.2em 0.3em rgba(255, 255, 255, 0.2);
}
.vjs-default-skin .vjs-menu-button:hover .vjs-menu {
  display: block;
}
.vjs-default-skin .vjs-menu-button ul li {
  list-style: none;
  margin: 0;
  padding: 0.3em 0 0.3em 0;
  line-height: 1.4em;
  font-size: 1.2em;
  text-align: center;
  text-transform: lowercase;
}
.vjs-default-skin .vjs-menu-button ul li.vjs-selected {
  background-color: #000;
}
.vjs-default-skin .vjs-menu-button ul li:focus,
.vjs-default-skin .vjs-menu-button ul li:hover,
.vjs-default-skin .vjs-menu-button ul li.vjs-selected:focus,
.vjs-default-skin .vjs-menu-button ul li.vjs-selected:hover {
  outline: 0;
  color: #111;
  /* background-color-with-alpha */
  background-color: #ffffff;
  background-color: rgba(255, 255, 255, 0.75);
  /* box-shadow */
  -webkit-box-shadow: 0 0 1em #ffffff;
  -moz-box-shadow: 0 0 1em #ffffff;
  box-shadow: 0 0 1em #ffffff;
}
.vjs-default-skin .vjs-menu-button ul li.vjs-menu-title {
  text-align: center;
  text-transform: uppercase;
  font-size: 1em;
  line-height: 2em;
  padding: 0;
  margin: 0 0 0.3em 0;
  font-weight: bold;
  cursor: default;
}
/* Subtitles Button */
.vjs-default-skin .vjs-subtitles-button:before {
  content: "\e00c";
}
/* Captions Button */
.vjs-default-skin .vjs-captions-button:before {
  content: "\e008";
}
/* Replacement for focus outline */
.vjs-default-skin .vjs-captions-button:focus .vjs-control-content:before,
.vjs-default-skin .vjs-captions-button:hover .vjs-control-content:before {
  /* box-shadow */
  -webkit-box-shadow: 0 0 1em #ffffff;
  -moz-box-shadow: 0 0 1em #ffffff;
  box-shadow: 0 0 1em #ffffff;
}
/*
REQUIRED STYLES (be careful overriding)
================================================================================
When loading the player, the video tag is replaced with a DIV,
that will hold the video tag or object tag for other playback methods.
The div contains the video playback element (Flash or HTML5) and controls,
and sets the width and height of the video.

** If you want to add some kind of border/padding (e.g. a frame), or special
positioning, use another containing element. Otherwise you risk messing up
control positioning and full window mode. **
*/
.video-js {
  background-color: #000;
  position: relative;
  padding: 0;
  /* Start with 10px for base font size so other dimensions can be em based and
     easily calculable. */

  font-size: 10px;
  /* Allow poster to be vertially aligned. */

  vertical-align: middle;
  /*  display: table-cell; */
  /*This works in Safari but not Firefox.*/

  /* Provide some basic defaults for fonts */

  font-weight: normal;
  font-style: normal;
  /* Avoiding helvetica: issue #376 */

  font-family: Arial, sans-serif;
  /* Turn off user selection (text highlighting) by default.
     The majority of player components will not be text blocks.
     Text areas will need to turn user selection back on. */

  /* user-select */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
/* Playback technology elements expand to the width/height of the containing div
    <video> or <object> */
.video-js .vjs-tech {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
/* Fix for Firefox 9 fullscreen (only if it is enabled). Not needed when
   checking fullScreenEnabled. */
.video-js:-moz-full-screen {
  position: absolute;
}
/* Fullscreen Styles */
body.vjs-full-window {
  padding: 0;
  margin: 0;
  height: 100%;
  /* Fix for IE6 full-window. http://www.cssplay.co.uk/layouts/fixed.html */
  overflow-y: auto;
}
.video-js.vjs-fullscreen {
  position: fixed;
  overflow: hidden;
  z-index: 1000;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  width: 100% !important;
  height: 100% !important;
  /* IE6 full-window (underscore hack) */
  _position: absolute;
}
.video-js:-webkit-full-screen {
  width: 100% !important;
  height: 100% !important;
}
.video-js.vjs-fullscreen.vjs-user-inactive {
  cursor: none;
}
/* Poster Styles */
.vjs-poster {
  background-repeat: no-repeat;
  background-position: 50% 50%;
  background-size: contain;
  cursor: pointer;
  height: 100%;
  margin: 0;
  padding: 0;
  position: relative;
  width: 100%;
}
.vjs-poster img {
  display: block;
  margin: 0 auto;
  max-height: 100%;
  padding: 0;
  width: 100%;
}
/* Hide the poster when native controls are used otherwise it covers them */
.video-js.vjs-using-native-controls .vjs-poster {
  display: none;
}
/* Text Track Styles */
/* Overall track holder for both captions and subtitles */
.video-js .vjs-text-track-display {
  text-align: center;
  position: absolute;
  bottom: 4em;
  /* Leave padding on left and right */
  left: 1em;
  right: 1em;
}
/* Move captions down when controls aren't being shown */
.video-js.vjs-user-inactive.vjs-playing .vjs-text-track-display {
  bottom: 1em;
}
/* Individual tracks */
.video-js .vjs-text-track {
  display: none;
  font-size: 1.4em;
  text-align: center;
  margin-bottom: 0.1em;
  /* Transparent black background, or fallback to all black (oldIE) */
  /* background-color-with-alpha */
  background-color: #000000;
  background-color: rgba(0, 0, 0, 0.5);
}
.video-js .vjs-subtitles {
  color: #ffffff /* Subtitles are white */;
}
.video-js .vjs-captions {
  color: #ffcc66 /* Captions are yellow */;
}
.vjs-tt-cue {
  display: block;
}
/* Hide disabled or unsupported controls */
.vjs-default-skin .vjs-hidden {
  display: none;
}
.vjs-lock-showing {
  display: block !important;
  opacity: 1;
  visibility: visible;
}
/*  In IE8 w/ no JavaScript (no HTML5 shim), the video tag doesn't register.
    The .video-js classname on the video tag also isn't considered.
    This optional paragraph inside the video tag can provide a message to users
    about what's required to play video. */
.vjs-no-js {
  padding: 20px;
  color: #ccc;
  background-color: #333;
  font-size: 18px;
  font-family: Arial, sans-serif;
  text-align: center;
  width: 300px;
  height: 150px;
  margin: 0px auto;
}
.vjs-no-js a,
.vjs-no-js a:visited {
  color: #F4A460;
}
/* -----------------------------------------------------------------------------
The original source of this file lives at
https://github.com/videojs/video.js/blob/master/src/css/video-js.less */

/* Hide the poster after the video has started playing */
.video-js.vjs-has-started .vjs-poster {
  display: none;
}

img#vjs-logobrand-image {
    position: absolute;
    bottom: 4px!important;
    transition: visibility 0.1s ease 0s, opacity 0.1s ease 0s;
    visibility: visible;
    width: 9.5em;
    left: 50%;
    margin-left: -4.25em;
}
.vjs-user-inactive img#vjs-logobrand-image, .vjs-user-inactive .vjs-watermark img, .vjs-user-inactive .vjs-title  {
	visibility: hidden;
}
.vjs-user-inactive.vjs-paused img#vjs-logobrand-image, .vjs-user-inactive .vjs-watermark img, .vjs-user-inactive .vjs-title {
	visibility: visible;
}
.vjs-ad-playing a#vjs-logobrand-image-destination, .vjs-user-inactive .vjs-watermark img,.vjs-user-inactive .vjs-title {
	display: none;
}

.vjs-watermark {top: 0.4em;right: 0.5em;position: absolute; display: inline;}
.vjs-watermark img {width: 5em; height:5em;transition: visibility 0.1s ease 0s, opacity 0.1s ease 0s; visibility: visible;}
.vjs-title{left: 0.4em;top: 0.4em;max-width: 90%; position: absolute; display: inline;background: rgba(0, 0, 0, 0.5);padding: 2px 7px;border-radius: 4px;font-size:1.3em;}

/* embed */

.elgg-media-embed {position:absolute; top:0; left:0; margin:0; padding:0;width: 100%;height: 100%;}
.elgg-media-embed-box {margin:1em auto; padding:10px;text-align:center;}
.elgg-media-embed-box > input {max-width:58%;}
#embed-copy-btn {background: rgb(47, 47, 47);border: 1px solid rgb(110, 110, 110);padding: 2px 5px;top: -2px;}
#embed-copy-btn:hover {border: 1px solid rgb(212, 88, 9);}
#embed-copy-btn img{width: 20px;height: 20px;}
.embed-width-select{margin-left:7px;}

/* river */

.elgg-river-thumb {float:left;margin-right:13px; margin-bottom:10px;}
