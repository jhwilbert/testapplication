/* bootstrap vars*/
/*! normalize.css v3.0.2 | MIT License | git.io/normalize */
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%; }

body {
  margin: 0; }

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block; }

audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline; }

audio:not([controls]) {
  display: none;
  height: 0; }

[hidden],
template {
  display: none; }

a {
  background-color: transparent; }

a:active,
a:hover {
  outline: 0; }

abbr[title] {
  border-bottom: 1px dotted; }

b,
strong {
  font-weight: bold; }

dfn {
  font-style: italic; }

h1 {
  font-size: 2em;
  margin: 0.67em 0; }

mark {
  background: #ff0;
  color: #000; }

small {
  font-size: 80%; }

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline; }

sup {
  top: -0.5em; }

sub {
  bottom: -0.25em; }

img {
  border: 0; }

svg:not(:root) {
  overflow: hidden; }

figure {
  margin: 1em 40px; }

hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0; }

pre {
  overflow: auto; }

code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em; }

button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0; }

button {
  overflow: visible; }

button,
select {
  text-transform: none; }

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer; }

button[disabled],
html input[disabled] {
  cursor: default; }

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0; }

input {
  line-height: normal; }

input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0; }

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto; }

input[type="search"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box; }

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em; }

legend {
  border: 0;
  padding: 0; }

textarea {
  overflow: auto; }

optgroup {
  font-weight: bold; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

td,
th {
  padding: 0; }

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

html {
  font-size: 10px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.42857;
  color: #333333;
  background-color: white; }

input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

a {
  color: #337ab7;
  text-decoration: none; }
  a:hover, a:focus {
    color: #23527c;
    text-decoration: underline; }
  a:focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px; }

figure {
  margin: 0; }

img {
  vertical-align: middle; }

.img-responsive, .gallery-modal .slides .slidesjs-slide img, .gallery-modal .slides img.slidesjs-slide {
  display: block;
  max-width: 100%;
  height: auto; }

.img-rounded {
  border-radius: 0; }

.img-thumbnail {
  padding: 4px;
  line-height: 1.42857;
  background-color: white;
  border: 1px solid #dddddd;
  border-radius: 0;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto; }

.img-circle {
  border-radius: 50%; }

hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eeeeee; }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto; }

.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px; }
  .container:before, .container:after {
    content: " ";
    display: table; }
  .container:after {
    clear: both; }
  @media (min-width: 768px) {
    .container {
      width: 750px; } }
  @media (min-width: 992px) {
    .container {
      width: 970px; } }
  @media (min-width: 1200px) {
    .container {
      width: 1170px; } }

.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px; }
  .container-fluid:before, .container-fluid:after {
    content: " ";
    display: table; }
  .container-fluid:after {
    clear: both; }

.row {
  margin-left: -15px;
  margin-right: -15px; }
  .row:before, .row:after {
    content: " ";
    display: table; }
  .row:after {
    clear: both; }

.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px; }

.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left; }

.col-xs-1 {
  width: 8.33333%; }

.col-xs-2 {
  width: 16.66667%; }

.col-xs-3 {
  width: 25%; }

.col-xs-4 {
  width: 33.33333%; }

.col-xs-5 {
  width: 41.66667%; }

.col-xs-6 {
  width: 50%; }

.col-xs-7 {
  width: 58.33333%; }

.col-xs-8 {
  width: 66.66667%; }

.col-xs-9 {
  width: 75%; }

.col-xs-10 {
  width: 83.33333%; }

.col-xs-11 {
  width: 91.66667%; }

.col-xs-12 {
  width: 100%; }

.col-xs-pull-0 {
  right: auto; }

.col-xs-pull-1 {
  right: 8.33333%; }

.col-xs-pull-2 {
  right: 16.66667%; }

.col-xs-pull-3 {
  right: 25%; }

.col-xs-pull-4 {
  right: 33.33333%; }

.col-xs-pull-5 {
  right: 41.66667%; }

.col-xs-pull-6 {
  right: 50%; }

.col-xs-pull-7 {
  right: 58.33333%; }

.col-xs-pull-8 {
  right: 66.66667%; }

.col-xs-pull-9 {
  right: 75%; }

.col-xs-pull-10 {
  right: 83.33333%; }

.col-xs-pull-11 {
  right: 91.66667%; }

.col-xs-pull-12 {
  right: 100%; }

.col-xs-push-0 {
  left: auto; }

.col-xs-push-1 {
  left: 8.33333%; }

.col-xs-push-2 {
  left: 16.66667%; }

.col-xs-push-3 {
  left: 25%; }

.col-xs-push-4 {
  left: 33.33333%; }

.col-xs-push-5 {
  left: 41.66667%; }

.col-xs-push-6 {
  left: 50%; }

.col-xs-push-7 {
  left: 58.33333%; }

.col-xs-push-8 {
  left: 66.66667%; }

.col-xs-push-9 {
  left: 75%; }

.col-xs-push-10 {
  left: 83.33333%; }

.col-xs-push-11 {
  left: 91.66667%; }

.col-xs-push-12 {
  left: 100%; }

.col-xs-offset-0 {
  margin-left: 0%; }

.col-xs-offset-1 {
  margin-left: 8.33333%; }

.col-xs-offset-2 {
  margin-left: 16.66667%; }

.col-xs-offset-3 {
  margin-left: 25%; }

.col-xs-offset-4 {
  margin-left: 33.33333%; }

.col-xs-offset-5 {
  margin-left: 41.66667%; }

.col-xs-offset-6 {
  margin-left: 50%; }

.col-xs-offset-7 {
  margin-left: 58.33333%; }

.col-xs-offset-8 {
  margin-left: 66.66667%; }

.col-xs-offset-9 {
  margin-left: 75%; }

.col-xs-offset-10 {
  margin-left: 83.33333%; }

.col-xs-offset-11 {
  margin-left: 91.66667%; }

.col-xs-offset-12 {
  margin-left: 100%; }

@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left; }

  .col-sm-1 {
    width: 8.33333%; }

  .col-sm-2 {
    width: 16.66667%; }

  .col-sm-3 {
    width: 25%; }

  .col-sm-4 {
    width: 33.33333%; }

  .col-sm-5 {
    width: 41.66667%; }

  .col-sm-6 {
    width: 50%; }

  .col-sm-7 {
    width: 58.33333%; }

  .col-sm-8 {
    width: 66.66667%; }

  .col-sm-9 {
    width: 75%; }

  .col-sm-10 {
    width: 83.33333%; }

  .col-sm-11 {
    width: 91.66667%; }

  .col-sm-12 {
    width: 100%; }

  .col-sm-pull-0 {
    right: auto; }

  .col-sm-pull-1 {
    right: 8.33333%; }

  .col-sm-pull-2 {
    right: 16.66667%; }

  .col-sm-pull-3 {
    right: 25%; }

  .col-sm-pull-4 {
    right: 33.33333%; }

  .col-sm-pull-5 {
    right: 41.66667%; }

  .col-sm-pull-6 {
    right: 50%; }

  .col-sm-pull-7 {
    right: 58.33333%; }

  .col-sm-pull-8 {
    right: 66.66667%; }

  .col-sm-pull-9 {
    right: 75%; }

  .col-sm-pull-10 {
    right: 83.33333%; }

  .col-sm-pull-11 {
    right: 91.66667%; }

  .col-sm-pull-12 {
    right: 100%; }

  .col-sm-push-0 {
    left: auto; }

  .col-sm-push-1 {
    left: 8.33333%; }

  .col-sm-push-2 {
    left: 16.66667%; }

  .col-sm-push-3 {
    left: 25%; }

  .col-sm-push-4 {
    left: 33.33333%; }

  .col-sm-push-5 {
    left: 41.66667%; }

  .col-sm-push-6 {
    left: 50%; }

  .col-sm-push-7 {
    left: 58.33333%; }

  .col-sm-push-8 {
    left: 66.66667%; }

  .col-sm-push-9 {
    left: 75%; }

  .col-sm-push-10 {
    left: 83.33333%; }

  .col-sm-push-11 {
    left: 91.66667%; }

  .col-sm-push-12 {
    left: 100%; }

  .col-sm-offset-0 {
    margin-left: 0%; }

  .col-sm-offset-1 {
    margin-left: 8.33333%; }

  .col-sm-offset-2 {
    margin-left: 16.66667%; }

  .col-sm-offset-3 {
    margin-left: 25%; }

  .col-sm-offset-4 {
    margin-left: 33.33333%; }

  .col-sm-offset-5 {
    margin-left: 41.66667%; }

  .col-sm-offset-6 {
    margin-left: 50%; }

  .col-sm-offset-7 {
    margin-left: 58.33333%; }

  .col-sm-offset-8 {
    margin-left: 66.66667%; }

  .col-sm-offset-9 {
    margin-left: 75%; }

  .col-sm-offset-10 {
    margin-left: 83.33333%; }

  .col-sm-offset-11 {
    margin-left: 91.66667%; }

  .col-sm-offset-12 {
    margin-left: 100%; } }
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left; }

  .col-md-1 {
    width: 8.33333%; }

  .col-md-2 {
    width: 16.66667%; }

  .col-md-3 {
    width: 25%; }

  .col-md-4 {
    width: 33.33333%; }

  .col-md-5 {
    width: 41.66667%; }

  .col-md-6 {
    width: 50%; }

  .col-md-7 {
    width: 58.33333%; }

  .col-md-8 {
    width: 66.66667%; }

  .col-md-9 {
    width: 75%; }

  .col-md-10 {
    width: 83.33333%; }

  .col-md-11 {
    width: 91.66667%; }

  .col-md-12 {
    width: 100%; }

  .col-md-pull-0 {
    right: auto; }

  .col-md-pull-1 {
    right: 8.33333%; }

  .col-md-pull-2 {
    right: 16.66667%; }

  .col-md-pull-3 {
    right: 25%; }

  .col-md-pull-4 {
    right: 33.33333%; }

  .col-md-pull-5 {
    right: 41.66667%; }

  .col-md-pull-6 {
    right: 50%; }

  .col-md-pull-7 {
    right: 58.33333%; }

  .col-md-pull-8 {
    right: 66.66667%; }

  .col-md-pull-9 {
    right: 75%; }

  .col-md-pull-10 {
    right: 83.33333%; }

  .col-md-pull-11 {
    right: 91.66667%; }

  .col-md-pull-12 {
    right: 100%; }

  .col-md-push-0 {
    left: auto; }

  .col-md-push-1 {
    left: 8.33333%; }

  .col-md-push-2 {
    left: 16.66667%; }

  .col-md-push-3 {
    left: 25%; }

  .col-md-push-4 {
    left: 33.33333%; }

  .col-md-push-5 {
    left: 41.66667%; }

  .col-md-push-6 {
    left: 50%; }

  .col-md-push-7 {
    left: 58.33333%; }

  .col-md-push-8 {
    left: 66.66667%; }

  .col-md-push-9 {
    left: 75%; }

  .col-md-push-10 {
    left: 83.33333%; }

  .col-md-push-11 {
    left: 91.66667%; }

  .col-md-push-12 {
    left: 100%; }

  .col-md-offset-0 {
    margin-left: 0%; }

  .col-md-offset-1 {
    margin-left: 8.33333%; }

  .col-md-offset-2 {
    margin-left: 16.66667%; }

  .col-md-offset-3 {
    margin-left: 25%; }

  .col-md-offset-4 {
    margin-left: 33.33333%; }

  .col-md-offset-5 {
    margin-left: 41.66667%; }

  .col-md-offset-6 {
    margin-left: 50%; }

  .col-md-offset-7 {
    margin-left: 58.33333%; }

  .col-md-offset-8 {
    margin-left: 66.66667%; }

  .col-md-offset-9 {
    margin-left: 75%; }

  .col-md-offset-10 {
    margin-left: 83.33333%; }

  .col-md-offset-11 {
    margin-left: 91.66667%; }

  .col-md-offset-12 {
    margin-left: 100%; } }
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left; }

  .col-lg-1 {
    width: 8.33333%; }

  .col-lg-2 {
    width: 16.66667%; }

  .col-lg-3 {
    width: 25%; }

  .col-lg-4 {
    width: 33.33333%; }

  .col-lg-5 {
    width: 41.66667%; }

  .col-lg-6 {
    width: 50%; }

  .col-lg-7 {
    width: 58.33333%; }

  .col-lg-8 {
    width: 66.66667%; }

  .col-lg-9 {
    width: 75%; }

  .col-lg-10 {
    width: 83.33333%; }

  .col-lg-11 {
    width: 91.66667%; }

  .col-lg-12 {
    width: 100%; }

  .col-lg-pull-0 {
    right: auto; }

  .col-lg-pull-1 {
    right: 8.33333%; }

  .col-lg-pull-2 {
    right: 16.66667%; }

  .col-lg-pull-3 {
    right: 25%; }

  .col-lg-pull-4 {
    right: 33.33333%; }

  .col-lg-pull-5 {
    right: 41.66667%; }

  .col-lg-pull-6 {
    right: 50%; }

  .col-lg-pull-7 {
    right: 58.33333%; }

  .col-lg-pull-8 {
    right: 66.66667%; }

  .col-lg-pull-9 {
    right: 75%; }

  .col-lg-pull-10 {
    right: 83.33333%; }

  .col-lg-pull-11 {
    right: 91.66667%; }

  .col-lg-pull-12 {
    right: 100%; }

  .col-lg-push-0 {
    left: auto; }

  .col-lg-push-1 {
    left: 8.33333%; }

  .col-lg-push-2 {
    left: 16.66667%; }

  .col-lg-push-3 {
    left: 25%; }

  .col-lg-push-4 {
    left: 33.33333%; }

  .col-lg-push-5 {
    left: 41.66667%; }

  .col-lg-push-6 {
    left: 50%; }

  .col-lg-push-7 {
    left: 58.33333%; }

  .col-lg-push-8 {
    left: 66.66667%; }

  .col-lg-push-9 {
    left: 75%; }

  .col-lg-push-10 {
    left: 83.33333%; }

  .col-lg-push-11 {
    left: 91.66667%; }

  .col-lg-push-12 {
    left: 100%; }

  .col-lg-offset-0 {
    margin-left: 0%; }

  .col-lg-offset-1 {
    margin-left: 8.33333%; }

  .col-lg-offset-2 {
    margin-left: 16.66667%; }

  .col-lg-offset-3 {
    margin-left: 25%; }

  .col-lg-offset-4 {
    margin-left: 33.33333%; }

  .col-lg-offset-5 {
    margin-left: 41.66667%; }

  .col-lg-offset-6 {
    margin-left: 50%; }

  .col-lg-offset-7 {
    margin-left: 58.33333%; }

  .col-lg-offset-8 {
    margin-left: 66.66667%; }

  .col-lg-offset-9 {
    margin-left: 75%; }

  .col-lg-offset-10 {
    margin-left: 83.33333%; }

  .col-lg-offset-11 {
    margin-left: 91.66667%; }

  .col-lg-offset-12 {
    margin-left: 100%; } }
fieldset {
  padding: 0;
  margin: 0;
  border: 0;
  min-width: 0; }

legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: inherit;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5; }

label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold; }

input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal; }

input[type="file"] {
  display: block; }

input[type="range"] {
  display: block;
  width: 100%; }

select[multiple],
select[size] {
  height: auto; }

input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px; }

output {
  display: block;
  padding-top: 7px;
  font-size: 14px;
  line-height: 1.42857;
  color: #555555; }

.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857;
  color: #555555;
  background-color: white;
  background-image: none;
  border: 1px solid #cccccc;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s; }
  .form-control:focus {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6); }
  .form-control::-moz-placeholder {
    color: #999999;
    opacity: 1; }
  .form-control:-ms-input-placeholder {
    color: #999999; }
  .form-control::-webkit-input-placeholder {
    color: #999999; }
  .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    cursor: not-allowed;
    background-color: #eeeeee;
    opacity: 1; }

textarea.form-control {
  height: auto; }

input[type="search"] {
  -webkit-appearance: none; }

@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"],
  input[type="time"],
  input[type="datetime-local"],
  input[type="month"] {
    line-height: 34px; }

  input[type="date"].input-sm,
  input[type="time"].input-sm,
  input[type="datetime-local"].input-sm,
  input[type="month"].input-sm {
    line-height: 30px; }

  input[type="date"].input-lg,
  input[type="time"].input-lg,
  input[type="datetime-local"].input-lg,
  input[type="month"].input-lg {
    line-height: 46px; } }
.form-group {
  margin-bottom: 15px; }

.radio,
.checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px; }
  .radio label,
  .checkbox label {
    min-height: 20px;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: normal;
    cursor: pointer; }

.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-left: -20px;
  margin-top: 4px \9; }

.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px; }

.radio-inline,
.checkbox-inline {
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer; }

.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px; }

input[type="radio"][disabled], input[type="radio"].disabled, fieldset[disabled] input[type="radio"],
input[type="checkbox"][disabled],
input[type="checkbox"].disabled, fieldset[disabled]
input[type="checkbox"] {
  cursor: not-allowed; }

.radio-inline.disabled, fieldset[disabled] .radio-inline,
.checkbox-inline.disabled, fieldset[disabled]
.checkbox-inline {
  cursor: not-allowed; }

.radio.disabled label, fieldset[disabled] .radio label,
.checkbox.disabled label, fieldset[disabled]
.checkbox label {
  cursor: not-allowed; }

.form-control-static {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0; }
  .form-control-static.input-lg, .form-control-static.input-sm {
    padding-left: 0;
    padding-right: 0; }

.input-sm, .form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 0; }

select.input-sm, .form-group-sm .form-control {
  height: 30px;
  line-height: 30px; }

textarea.input-sm, .form-group-sm .form-control,
select[multiple].input-sm, .form-group-sm .form-control {
  height: auto; }

.input-lg, .form-group-lg .form-control {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 0; }

select.input-lg, .form-group-lg .form-control {
  height: 46px;
  line-height: 46px; }

textarea.input-lg, .form-group-lg .form-control,
select[multiple].input-lg, .form-group-lg .form-control {
  height: auto; }

.has-feedback {
  position: relative; }
  .has-feedback .form-control {
    padding-right: 42.5px; }

.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  pointer-events: none; }

.input-lg + .form-control-feedback {
  width: 46px;
  height: 46px;
  line-height: 46px; }

.input-sm + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px; }

.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline, .has-success.radio label, .has-success.checkbox label, .has-success.radio-inline label, .has-success.checkbox-inline label {
  color: #3c763d; }
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); }
  .has-success .form-control:focus {
    border-color: #2b542c;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168; }
.has-success .input-group-addon {
  color: #3c763d;
  border-color: #3c763d;
  background-color: #dff0d8; }
.has-success .form-control-feedback {
  color: #3c763d; }

.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline, .has-warning.radio label, .has-warning.checkbox label, .has-warning.radio-inline label, .has-warning.checkbox-inline label {
  color: #8a6d3b; }
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); }
  .has-warning .form-control:focus {
    border-color: #66512c;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b; }
.has-warning .input-group-addon {
  color: #8a6d3b;
  border-color: #8a6d3b;
  background-color: #fcf8e3; }
.has-warning .form-control-feedback {
  color: #8a6d3b; }

.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline, .has-error.radio label, .has-error.checkbox label, .has-error.radio-inline label, .has-error.checkbox-inline label {
  color: #a94442; }
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); }
  .has-error .form-control:focus {
    border-color: #843534;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483; }
.has-error .input-group-addon {
  color: #a94442;
  border-color: #a94442;
  background-color: #f2dede; }
.has-error .form-control-feedback {
  color: #a94442; }

.has-feedback label ~ .form-control-feedback {
  top: 25px; }
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0; }

.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373; }

@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle; }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle; }
  .form-inline .form-control-static {
    display: inline-block; }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle; }
    .form-inline .input-group .input-group-addon,
    .form-inline .input-group .input-group-btn,
    .form-inline .input-group .form-control {
      width: auto; }
  .form-inline .input-group > .form-control {
    width: 100%; }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle; }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle; }
    .form-inline .radio label,
    .form-inline .checkbox label {
      padding-left: 0; }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0; }
  .form-inline .has-feedback .form-control-feedback {
    top: 0; } }

.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px; }
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 27px; }
.form-horizontal .form-group {
  margin-left: -15px;
  margin-right: -15px; }
  .form-horizontal .form-group:before, .form-horizontal .form-group:after {
    content: " ";
    display: table; }
  .form-horizontal .form-group:after {
    clear: both; }
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px; } }
.form-horizontal .has-feedback .form-control-feedback {
  right: 15px; }
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 14.3px; } }
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px; } }

.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear; }
  .fade.in {
    opacity: 1; }

.collapse {
  display: none;
  visibility: hidden; }
  .collapse.in {
    display: block;
    visibility: visible; }

tr.collapse.in {
  display: table-row; }

tbody.collapse.in {
  display: table-row-group; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-property: height, visibility;
  transition-property: height, visibility;
  -webkit-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-timing-function: ease;
  transition-timing-function: ease; }

.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent; }
  .navbar:before, .navbar:after {
    content: " ";
    display: table; }
  .navbar:after {
    clear: both; }
  @media (min-width: 768px) {
    .navbar {
      border-radius: 0; } }

.navbar-header:before, .navbar-header:after {
  content: " ";
  display: table; }
.navbar-header:after {
  clear: both; }
@media (min-width: 768px) {
  .navbar-header {
    float: left; } }

.navbar-collapse {
  overflow-x: visible;
  padding-right: 15px;
  padding-left: 15px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch; }
  .navbar-collapse:before, .navbar-collapse:after {
    content: " ";
    display: table; }
  .navbar-collapse:after {
    clear: both; }
  .navbar-collapse.in {
    overflow-y: auto; }
  @media (min-width: 768px) {
    .navbar-collapse {
      width: auto;
      border-top: 0;
      box-shadow: none; }
      .navbar-collapse.collapse {
        display: block !important;
        visibility: visible !important;
        height: auto !important;
        padding-bottom: 0;
        overflow: visible !important; }
      .navbar-collapse.in {
        overflow-y: visible; }
      .navbar-fixed-top .navbar-collapse, .navbar-static-top .navbar-collapse, .navbar-fixed-bottom .navbar-collapse {
        padding-left: 0;
        padding-right: 0; } }

.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px; }
  @media (max-device-width: 480px) and (orientation: landscape) {
    .navbar-fixed-top .navbar-collapse,
    .navbar-fixed-bottom .navbar-collapse {
      max-height: 200px; } }

.container > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-header,
.container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px; }
  @media (min-width: 768px) {
    .container > .navbar-header,
    .container > .navbar-collapse,
    .container-fluid > .navbar-header,
    .container-fluid > .navbar-collapse {
      margin-right: 0;
      margin-left: 0; } }

.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px; }
  @media (min-width: 768px) {
    .navbar-static-top {
      border-radius: 0; } }

.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030; }
  @media (min-width: 768px) {
    .navbar-fixed-top,
    .navbar-fixed-bottom {
      border-radius: 0; } }

.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px; }

.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0; }

.navbar-brand {
  float: left;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
  height: 50px; }
  .navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none; }
  .navbar-brand > img {
    display: block; }
  @media (min-width: 768px) {
    .navbar > .container .navbar-brand, .navbar > .container-fluid .navbar-brand {
      margin-left: -15px; } }

.navbar-toggle {
  position: relative;
  float: right;
  margin-right: 15px;
  padding: 9px 10px;
  margin-top: 8px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 0; }
  .navbar-toggle:focus {
    outline: 0; }
  .navbar-toggle .icon-bar {
    display: block;
    width: 22px;
    height: 2px;
    border-radius: 1px; }
  .navbar-toggle .icon-bar + .icon-bar {
    margin-top: 4px; }
  @media (min-width: 768px) {
    .navbar-toggle {
      display: none; } }

.navbar-nav {
  margin: 7.5px -15px; }
  .navbar-nav > li > a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px; }
  @media (max-width: 767px) {
    .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      box-shadow: none; }
      .navbar-nav .open .dropdown-menu > li > a,
      .navbar-nav .open .dropdown-menu .dropdown-header {
        padding: 5px 15px 5px 25px; }
      .navbar-nav .open .dropdown-menu > li > a {
        line-height: 20px; }
        .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-nav .open .dropdown-menu > li > a:focus {
          background-image: none; } }
  @media (min-width: 768px) {
    .navbar-nav {
      float: left;
      margin: 0; }
      .navbar-nav > li {
        float: left; }
        .navbar-nav > li > a {
          padding-top: 15px;
          padding-bottom: 15px; } }

.navbar-form {
  margin-left: -15px;
  margin-right: -15px;
  padding: 10px 15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: 8px;
  margin-bottom: 8px; }
  @media (min-width: 768px) {
    .navbar-form .form-group {
      display: inline-block;
      margin-bottom: 0;
      vertical-align: middle; }
    .navbar-form .form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle; }
    .navbar-form .form-control-static {
      display: inline-block; }
    .navbar-form .input-group {
      display: inline-table;
      vertical-align: middle; }
      .navbar-form .input-group .input-group-addon,
      .navbar-form .input-group .input-group-btn,
      .navbar-form .input-group .form-control {
        width: auto; }
    .navbar-form .input-group > .form-control {
      width: 100%; }
    .navbar-form .control-label {
      margin-bottom: 0;
      vertical-align: middle; }
    .navbar-form .radio,
    .navbar-form .checkbox {
      display: inline-block;
      margin-top: 0;
      margin-bottom: 0;
      vertical-align: middle; }
      .navbar-form .radio label,
      .navbar-form .checkbox label {
        padding-left: 0; }
    .navbar-form .radio input[type="radio"],
    .navbar-form .checkbox input[type="checkbox"] {
      position: relative;
      margin-left: 0; }
    .navbar-form .has-feedback .form-control-feedback {
      top: 0; } }
  @media (max-width: 767px) {
    .navbar-form .form-group {
      margin-bottom: 5px; }
      .navbar-form .form-group:last-child {
        margin-bottom: 0; } }
  @media (min-width: 768px) {
    .navbar-form {
      width: auto;
      border: 0;
      margin-left: 0;
      margin-right: 0;
      padding-top: 0;
      padding-bottom: 0;
      -webkit-box-shadow: none;
      box-shadow: none; } }

.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0; }

.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }

.navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px; }
  .navbar-btn.btn-sm {
    margin-top: 10px;
    margin-bottom: 10px; }
  .navbar-btn.btn-xs {
    margin-top: 14px;
    margin-bottom: 14px; }

.navbar-text {
  margin-top: 15px;
  margin-bottom: 15px; }
  @media (min-width: 768px) {
    .navbar-text {
      float: left;
      margin-left: 15px;
      margin-right: 15px; } }

@media (min-width: 768px) {
  .navbar-left {
    float: left !important; }

  .navbar-right {
    float: right !important;
    margin-right: -15px; }
    .navbar-right ~ .navbar-right {
      margin-right: 0; } }
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7; }
  .navbar-default .navbar-brand {
    color: #777777; }
    .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
      color: #5e5e5e;
      background-color: transparent; }
  .navbar-default .navbar-text {
    color: #777777; }
  .navbar-default .navbar-nav > li > a {
    color: #777777; }
    .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
      color: #333333;
      background-color: transparent; }
  .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: #555555;
    background-color: #e7e7e7; }
  .navbar-default .navbar-nav > .disabled > a, .navbar-default .navbar-nav > .disabled > a:hover, .navbar-default .navbar-nav > .disabled > a:focus {
    color: #cccccc;
    background-color: transparent; }
  .navbar-default .navbar-toggle {
    border-color: #dddddd; }
    .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
      background-color: #dddddd; }
    .navbar-default .navbar-toggle .icon-bar {
      background-color: white; }
  .navbar-default .navbar-collapse,
  .navbar-default .navbar-form {
    border-color: #e7e7e7; }
  .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
    background-color: #e7e7e7;
    color: #555555; }
  @media (max-width: 767px) {
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
      color: #777777; }
      .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
        color: #333333;
        background-color: transparent; }
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
      color: #555555;
      background-color: #e7e7e7; }
    .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
      color: #cccccc;
      background-color: transparent; } }
  .navbar-default .navbar-link {
    color: #777777; }
    .navbar-default .navbar-link:hover {
      color: #333333; }
  .navbar-default .btn-link {
    color: #777777; }
    .navbar-default .btn-link:hover, .navbar-default .btn-link:focus {
      color: #333333; }
    .navbar-default .btn-link[disabled]:hover, .navbar-default .btn-link[disabled]:focus, fieldset[disabled] .navbar-default .btn-link:hover, fieldset[disabled] .navbar-default .btn-link:focus {
      color: #cccccc; }

.navbar-inverse {
  background-color: #222222;
  border-color: #090909; }
  .navbar-inverse .navbar-brand {
    color: #9d9d9d; }
    .navbar-inverse .navbar-brand:hover, .navbar-inverse .navbar-brand:focus {
      color: white;
      background-color: transparent; }
  .navbar-inverse .navbar-text {
    color: #9d9d9d; }
  .navbar-inverse .navbar-nav > li > a {
    color: #9d9d9d; }
    .navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
      color: white;
      background-color: transparent; }
  .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus {
    color: white;
    background-color: #090909; }
  .navbar-inverse .navbar-nav > .disabled > a, .navbar-inverse .navbar-nav > .disabled > a:hover, .navbar-inverse .navbar-nav > .disabled > a:focus {
    color: #444444;
    background-color: transparent; }
  .navbar-inverse .navbar-toggle {
    border-color: #333333; }
    .navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus {
      background-color: #333333; }
    .navbar-inverse .navbar-toggle .icon-bar {
      background-color: white; }
  .navbar-inverse .navbar-collapse,
  .navbar-inverse .navbar-form {
    border-color: #101010; }
  .navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover, .navbar-inverse .navbar-nav > .open > a:focus {
    background-color: #090909;
    color: white; }
  @media (max-width: 767px) {
    .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
      border-color: #090909; }
    .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
      background-color: #090909; }
    .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
      color: #9d9d9d; }
      .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
        color: white;
        background-color: transparent; }
    .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
      color: white;
      background-color: #090909; }
    .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
      color: #444444;
      background-color: transparent; } }
  .navbar-inverse .navbar-link {
    color: #9d9d9d; }
    .navbar-inverse .navbar-link:hover {
      color: white; }
  .navbar-inverse .btn-link {
    color: #9d9d9d; }
    .navbar-inverse .btn-link:hover, .navbar-inverse .btn-link:focus {
      color: white; }
    .navbar-inverse .btn-link[disabled]:hover, .navbar-inverse .btn-link[disabled]:focus, fieldset[disabled] .navbar-inverse .btn-link:hover, fieldset[disabled] .navbar-inverse .btn-link:focus {
      color: #444444; }

.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden; }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    border: 0; }
  .embed-responsive.embed-responsive-16by9 {
    padding-bottom: 56.25%; }
  .embed-responsive.embed-responsive-4by3 {
    padding-bottom: 75%; }

.close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: black;
  text-shadow: 0 1px 0 white;
  opacity: 0.2;
  filter: alpha(opacity=20); }
  .close:hover, .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
    opacity: 0.5;
    filter: alpha(opacity=50); }

button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none; }

.modal-open {
  overflow: hidden; }

.modal {
  display: none;
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  -webkit-overflow-scrolling: touch;
  outline: 0; }
  .modal.fade .modal-dialog {
    -webkit-transform: translate(0, -25%);
    -ms-transform: translate(0, -25%);
    -o-transform: translate(0, -25%);
    transform: translate(0, -25%);
    -webkit-transition: -webkit-transform 0.3s ease-out;
    -moz-transition: -moz-transform 0.3s ease-out;
    -o-transition: -o-transform 0.3s ease-out;
    transition: transform 0.3s ease-out; }
  .modal.in .modal-dialog {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0); }

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px; }

.modal-content {
  position: relative;
  background-color: white;
  border: 1px solid #999999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: 0; }

.modal-backdrop {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  background-color: black; }
  .modal-backdrop.fade {
    opacity: 0;
    filter: alpha(opacity=0); }
  .modal-backdrop.in {
    opacity: 0.5;
    filter: alpha(opacity=50); }

.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
  min-height: 16.42857px; }

.modal-header .close {
  margin-top: -2px; }

.modal-title {
  margin: 0;
  line-height: 1.42857; }

.modal-body {
  position: relative;
  padding: 15px; }

.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5; }
  .modal-footer:before, .modal-footer:after {
    content: " ";
    display: table; }
  .modal-footer:after {
    clear: both; }
  .modal-footer .btn + .btn {
    margin-left: 5px;
    margin-bottom: 0; }
  .modal-footer .btn-group .btn + .btn {
    margin-left: -1px; }
  .modal-footer .btn-block + .btn-block {
    margin-left: 0; }

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 768px) {
  .modal-dialog {
    width: 900px;
    margin: 30px auto; }

  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5); }

  .modal-sm {
    width: 300px; } }
@media (min-width: 992px) {
  .modal-lg {
    width: 1170px; } }
.clearfix:before, .clearfix:after {
  content: " ";
  display: table; }
.clearfix:after {
  clear: both; }

.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto; }

.pull-right {
  float: right !important; }

.pull-left {
  float: left !important; }

.hide {
  display: none !important; }

.show {
  display: block !important; }

.invisible {
  visibility: hidden; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.hidden {
  display: none !important;
  visibility: hidden !important; }

.affix {
  position: fixed; }

@-ms-viewport {
  width: device-width; }

.visible-xs, .visible-sm, .visible-md, .visible-lg {
  display: none !important; }

.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important; }

@media (max-width: 767px) {
  .visible-xs {
    display: block !important; }

  table.visible-xs {
    display: table; }

  tr.visible-xs {
    display: table-row !important; }

  th.visible-xs,
  td.visible-xs {
    display: table-cell !important; } }
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important; } }

@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important; } }

@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important; } }

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important; }

  table.visible-sm {
    display: table; }

  tr.visible-sm {
    display: table-row !important; }

  th.visible-sm,
  td.visible-sm {
    display: table-cell !important; } }
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important; } }

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important; } }

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important; } }

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important; }

  table.visible-md {
    display: table; }

  tr.visible-md {
    display: table-row !important; }

  th.visible-md,
  td.visible-md {
    display: table-cell !important; } }
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important; } }

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important; } }

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important; } }

@media (min-width: 1200px) {
  .visible-lg {
    display: block !important; }

  table.visible-lg {
    display: table; }

  tr.visible-lg {
    display: table-row !important; }

  th.visible-lg,
  td.visible-lg {
    display: table-cell !important; } }
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important; } }

@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important; } }

@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important; } }

@media (max-width: 767px) {
  .hidden-xs {
    display: none !important; } }
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important; } }
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important; } }
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important; } }
.visible-print {
  display: none !important; }

@media print {
  .visible-print {
    display: block !important; }

  table.visible-print {
    display: table; }

  tr.visible-print {
    display: table-row !important; }

  th.visible-print,
  td.visible-print {
    display: table-cell !important; } }
.visible-print-block {
  display: none !important; }
  @media print {
    .visible-print-block {
      display: block !important; } }

.visible-print-inline {
  display: none !important; }
  @media print {
    .visible-print-inline {
      display: inline !important; } }

.visible-print-inline-block {
  display: none !important; }
  @media print {
    .visible-print-inline-block {
      display: inline-block !important; } }

@media print {
  .hidden-print {
    display: none !important; } }
/* CONTACT */
div.contact div.col-md-6 {
  padding: 30px 0 30px 30px;
  margin-top: 30px; }
div.contact p {
  margin-bottom: 35px;
  font-size: 21px;
  margin-top: 10px; }
  div.contact p a {
    text-decoration: none; }
    div.contact p a:hover {
      text-decoration: underline; }

/* FOOTER */
footer {
  width: 50px;
  position: absolute;
  right: 0px;
  background-color: #d95a49;
  height: 50px; }

footer.img {
  padding: 0px;
  margin: 0px; }

/* 5 columns */
.col-xs-5ths,
.col-sm-5ths,
.col-md-5ths,
.col-lg-5ths {
  position: relative;
  min-height: 1px;
  padding-right: 10px;
  padding-left: 10px;
  width: 20%;
  float: left; }

@media (min-width: 768px) {
  .col-sm-5ths {
    width: 20%;
    float: left; } }
@media (min-width: 992px) {
  .col-md-5ths {
    width: 20%;
    float: left; } }
@media (min-width: 1200px) {
  .col-lg-5ths {
    width: 20%;
    float: left; } }
html * {
  font-family: "Montserrat", sans-serif;
  color: #878787;
  font-size: 16px; }

.center-align {
  margin: auto; }

body {
  overflow: hidden; }
  body.mobile {
    height: auto; }

ul.nav {
  list-style: none;
  padding: 0; }
  ul.nav li {
    float: left; }

.project-button {
  font-size: 12px;
  float: left;
  padding: 10px;
  background: #676767;
  color: white;
  margin: 5px; }

#project-nav {
  float: right; }

/* Preloader */
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  z-index: 1041; }
  #preloader #status {
    width: 200px;
    height: 200px;
    position: absolute;
    left: 50%;
    /* centers the loading animation horizontally one the screen */
    top: 50%;
    /* centers the loading animation vertically one the screen */
    background-image: url(../img/status.gif);
    /* path to your loading animation */
    background-repeat: no-repeat;
    background-position: center;
    margin: -100px 0 0 -100px;
    /* is width and height divided by two */ }

.intro-container {
  padding-top: 30px;
  padding-bottom: 30px;
  width: 80%;
  margin: auto; }

#supercontainer {
  float: left; }

#project-title-open {
  font-size: 22px;
  color: #878787;
  float: left; }

#project-location-open {
  color: #bdbdbd !important;
  float: left; }

#project-description-open {
  color: #bdbdbd !important;
  float: left;
  padding-top: 10px;
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-style: normal;
  font-variant: normal;
  font-weight: 400; }

#project-technology-open {
  color: #bdbdbd !important;
  float: left;
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-style: normal;
  font-variant: normal;
  font-weight: 400; }

.close-project {
  width: 100%;
  float: left;
  cursor: pointer; }

.close-project img {
  float: right;
  margin-right: 10px;
  margin-top: 10px; }

.fix {
  float: right; }

#project-slides-container {
  float: left; }

.project-slides {
  float: left;
  background: #ebebeb; }

.project-modal {
  display: none;
  width: 100%;
  position: fixed;
  background: white;
  z-index: 10000; }

.project-modal-open {
  display: block;
  border: 1px solid red; }

.project-modal-close {
  display: none; }

.project-content {
  float: left;
  color: white !important;
  border: 1px solid blue; }

.arrow-project {
  width: 40px;
  position: relative;
  margin-top: -22px; }

.project-title {
  text-align: center;
  padding-top: 5px; }

.project-location {
  color: #bdbdbd !important;
  text-align: center;
  padding-bottom: 15px;
  font-size: 12px; }

#main-menu {
  position: fixed;
  width: 100%;
  background-color: #f4f4f4;
  z-index: 1039;
  border: none; }
  #main-menu .logo {
    display: block;
    margin: 20px;
    width: 300px;
    float: left; }
    @media (max-height: 700px) {
      #main-menu .logo {
        /*margin: 10px 20px;*/ } }
    @media (max-width: 768px) {
      #main-menu .logo {
        width: 145px;
        /* margin: 20px 8px 10px; */ }
        #main-menu .logo img {
          width: 145px; } }
  #main-menu .language-btn {
    position: absolute;
    top: 30px;
    right: 30px;
    /*margin: 35px 30px 0 0;*/
    border: 2px solid #d95a49;
    padding: 8px;
    font-size: 10px;
    text-transform: uppercase;
    color: #d95a49; }
    #main-menu .language-btn:hover {
      background-color: #d95a49;
      color: #FFFFFF;
      text-decoration: none; }
    @media (max-height: 700px) {
      #main-menu .language-btn {
        /*margin: 20px 10px;*/
        right: 300px;
        top: 19px; } }
    @media (max-width: 768px) {
      #main-menu .language-btn {
        margin: 0 !important;
        position: absolute;
        right: 81px;
        top: 19px; } }
  #main-menu .menu-container {
    width: 100%;
    background-color: #d95a49;
    border-bottom: 2px solid #b24538; }
  #main-menu .navbar-toggle {
    margin: 0 !important;
    position: absolute;
    right: 25px;
    top: 19px;
    background: #d95a49;
    /*margin-top: 25px;*/ }
  #main-menu ul.nav {
    border-left: 2px solid #b24538;
    width: 642px;
    margin: 0 auto;
    height: 40px;
    position: relative;
    z-index: 2;
    float: none; }
    #main-menu ul.nav li {
      text-transform: uppercase;
      border-right: 2px solid #b24538; }
      #main-menu ul.nav li a {
        color: white;
        font-size: 12px;
        text-decoration: none;
        display: block;
        height: 40px;
        padding: 13px 16px 0;
        position: static; }
  #main-menu li.newsfeed img {
    vertical-align: text-top; }
  #main-menu .in, #main-menu .collapsing {
    width: 100%;
    height: auto; }
    #main-menu .in ul, #main-menu .collapsing ul {
      width: 100%;
      height: auto;
      border: none !important; }
    #main-menu .in li, #main-menu .collapsing li {
      width: 100%;
      border: none !important; }
      #main-menu .in li a:hover, #main-menu .in li a.active, #main-menu .collapsing li a:hover, #main-menu .collapsing li a.active {
        background-color: #b24538; }
    #main-menu .in #menu_marker, #main-menu .collapsing #menu_marker {
      display: none !important; }

#menu_marker {
  background-color: #b24538;
  height: 40px;
  left: 428px;
  position: absolute;
  top: 100px;
  width: 105px;
  display: none; }
  @media (max-height: 700px) {
    #menu_marker {
      top: 80px; } }

h2 {
  min-width: 215px;
  display: table;
  padding: 15px;
  text-align: center;
  margin: 20px auto;
  font-size: 30px;
  color: #d95a49;
  border: 4px solid #d95a49; }

.errors {
  list-style: none;
  padding-left: 0; }

.errors li {
  list-style: none;
  padding-left: 0;
  font-size: 12px;
  color: #d95a49; }

h3 {
  font-weight: normal;
  font-size: 22px;
  text-align: center;
  margin-top: 0px;
  padding: 0px; }

#main_container {
  position: absolute;
  margin-top: 140px;
  width: 100%;
  padding: 0; }
  @media (max-height: 700px) {
    #main_container {
      margin-top: 55px; } }
  @media (max-width: 768px) {
    #main_container {
      margin-top: 55px; } }

#main_container section.section {
  width: 100%;
  padding-bottom: 20px;
  padding-top: 20px; }
  #main_container section.section .inner-content {
    margin: 0 auto; }
    #main_container section.section .inner-content p.text {
      line-height: 28px; }
  @media (max-height: 700px) {
    #main_container section.section {
      padding-top: 122px; } }
  @media (max-width: 768px) {
    #main_container section.section {
      padding-top: 30px; } }

section.section-gray {
  background-color: #ebebeb;
  border-bottom: 5px solid #cecece; }

/* Slide Navigation */
.slidesjs-navigation {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  display: block;
  width: 32px;
  height: 32px;
  position: absolute; }

.slidesjs-previous {
  background-image: url(../img/modal_prev_btn.png);
  background-repeat: no-repeat;
  background-position: left top; }

.slidesjs-next {
  background-image: url(../img/modal_next_btn.png);
  background-repeat: no-repeat;
  background-position: left top; }

.slidesjs-pagination {
  margin: 20px auto 0;
  list-style: none;
  padding: 0;
  position: relative; }
  .slidesjs-pagination li {
    float: left;
    margin: 0 1px; }
    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(../img/pagination.png);
      background-repeat: no-repeat;
      background-position: 0 0;
      float: left;
      overflow: hidden; }
      .slidesjs-pagination li a.active, .slidesjs-pagination li a:hover.active {
        background-position: 0 -13px; }
      .slidesjs-pagination li a:hover {
        background-position: 0 -26px; }

/* Where We Are */
#map-canvas {
  width: 100%;
  height: 400px;
  border: 6px solid white;
  margin-bottom: 40px; }

/* Contact Form */
.contact {
  padding: 0px; }

.form-field {
  border: none;
  background-color: #e8e8e8;
  margin-top: 10px;
  margin-bottom: 10px; }

.name {
  height: 50px;
  width: 90%; }

.text {
  resize: none;
  width: 90%; }

.form-button {
  color: white;
  padding: 10px;
  background: #d6d6d6;
  border: 0px;
  margin: 0px; }

.contact {
  padding: 0px; }

.contact-item {
  margin-top: 10px;
  margin-bottom: 10px;
  width: 400px;
  float: left; }

.contact-image {
  margin-right: 10px;
  float: left;
  width: 64px;
  height: 100px; }

.contact-text {
  position: relative; }

#email {
  margin-top: 20px; }

#phone {
  margin-top: 20px; }

/* CLIENTS */
section#section-clients div.clients {
  width: 80%;
  margin: 20px auto 0; }
  section#section-clients div.clients div.client {
    margin: 25px 0;
    height: 100px;
    text-align: center; }
    @media (max-width: 768px) {
      section#section-clients div.clients div.client {
        width: auto;
        margin: 15px 0; } }

.inner-content .company {
  margin-top: 35px; }
.inner-content .structure {
  margin-top: 35px; }
  .inner-content .structure h3 {
    text-align: left; }
  .inner-content .structure .slidesjs-navigation {
    margin-top: 0;
    top: 380px; }
  .inner-content .structure .slidesjs-previous {
    left: 10px; }
  .inner-content .structure .slidesjs-next {
    right: 10px; }

#structure_slides {
  height: 300px;
  overflow: hidden; }

.company-img {
  padding: 0px;
  margin: 0px;
  background-color: #dbdbdb;
  margin-top: 10px;
  margin-bottom: 25px; }

/* TIMELINE */
#section-timeline h2 {
  width: 280px; }

#timeline-container {
  /*max-height: 450px;*/
  overflow: hidden; }
  body.mobile #timeline-container {
    max-height: inherit; }

ul.timeline {
  list-style: none;
  background-image: url(../img/timeline/timeline_line.gif);
  background-repeat: repeat-y;
  background-position: center;
  width: 890px;
  margin: 0 auto;
  padding: 0 0 120px;
  position: relative !important; }
  @media (max-width: 768px) {
    ul.timeline {
      background-position: 0px center;
      position: inherit !important;
      width: 100%;
      padding-bottom: 20px; } }
  ul.timeline li {
    background-image: url(../img/timeline/bullet_selected.png);
    background-repeat: no-repeat;
    background-position: center 35px;
    height: 75px; }
    @media (max-width: 768px) {
      ul.timeline li {
        height: auto;
        background-position: -6px 80px; } }
    ul.timeline li div.year {
      width: 445px; }
      @media (max-width: 768px) {
        ul.timeline li div.year {
          float: none !important;
          width: auto;
          text-align: left !important; } }
      ul.timeline li div.year span {
        display: block;
        padding: 31px 30px 0;
        font-size: 18px; }
    ul.timeline li div.description {
      position: absolute !important;
      overflow: hidden;
      height: 100px; }
      @media (max-width: 768px) {
        ul.timeline li div.description {
          position: inherit !important;
          margin-top: 10px !important;
          margin-left: 16px !important;
          margin-right: 5px !important; } }
      ul.timeline li div.description div.description-text-left {
        float: right;
        width: 300px;
        padding-right: 10px;
        padding-left: 10px; }
      ul.timeline li div.description div.description-text-right {
        float: left;
        width: 300px;
        padding-right: 10px;
        padding-left: 10px; }
      ul.timeline li div.description div.description-image-right {
        float: left;
        margin-left: 3px;
        margin-top: 3px;
        border: 1px solid #e0e0e0; }
      ul.timeline li div.description div.description-image-left {
        float: right;
        margin-right: 3px;
        margin-top: 3px;
        border: 1px solid #e0e0e0; }
      ul.timeline li div.description div.description-container {
        background-color: #fafafa;
        width: 400px;
        height: 100px;
        padding: 0px;
        border-bottom: 3px solid #e0e0e0;
        text-align: left;
        font-size: 12px;
        color: #aeaeae; }
        @media (max-width: 768px) {
          ul.timeline li div.description div.description-container {
            float: none !important;
            margin-left: 15px;
            padding: 10px 15px;
            width: 100%;
            min-height: auto !important; }
            ul.timeline li div.description div.description-container img {
              max-width: 100%; } }
        ul.timeline li div.description div.description-container p {
          float: left;
          font-size: 12px;
          line-height: 18px;
          margin-top: 8px; }
        ul.timeline li div.description div.description-container img {
          width: 90px;
          height: 90px; }
      ul.timeline li div.description div.d-arrow {
        height: 29px;
        margin-top: 30px;
        width: 16px;
        position: absolute; }
        @media (max-width: 768px) {
          ul.timeline li div.description div.d-arrow {
            margin-top: 15px !important;
            background-image: url(../img/timeline/arrow_left_gray.png);
            background-repeat: no-repeat;
            background-position: left top;
            right: auto; } }
      ul.timeline li div.description.y-1 {
        margin-top: -36px; }
        ul.timeline li div.description.y-1 div.d-arrow {
          margin-top: 66px; }
        ul.timeline li div.description.y-1 div.description-container {
          min-height: 106px; }
      ul.timeline li div.description.y-2 {
        margin-top: -72px; }
        ul.timeline li div.description.y-2 div.d-arrow {
          margin-top: 102px; }
        ul.timeline li div.description.y-2 div.description-container {
          min-height: 142px; }
      ul.timeline li div.description.y-3 {
        margin-top: -108px; }
        ul.timeline li div.description.y-3 div.d-arrow {
          margin-top: 138px; }
        ul.timeline li div.description.y-3 div.description-container {
          min-height: 178px; }
      ul.timeline li div.description.y-4 {
        margin-top: -144px; }
        ul.timeline li div.description.y-4 div.d-arrow {
          margin-top: 174px; }
        ul.timeline li div.description.y-4 div.description-container {
          min-height: 214px; }
    ul.timeline li.year-left div.year {
      text-align: right;
      float: left; }
    ul.timeline li.year-left div.description {
      left: 50%;
      margin-left: 20px; }
    ul.timeline li.year-left div.description-container {
      float: left;
      margin-left: 15px; }
    ul.timeline li.year-left div.d-arrow {
      background-image: url(../img/timeline/arrow_left_gray.png);
      background-repeat: no-repeat;
      background-position: left top; }
    ul.timeline li.year-right div.year {
      text-align: left;
      float: right; }
    ul.timeline li.year-right div.description {
      right: 50%;
      margin-right: 20px; }
    ul.timeline li.year-right div.description-container {
      float: right;
      margin-right: 15px; }
    ul.timeline li.year-right div.d-arrow {
      background-image: url(../img/timeline/arrow_right_gray.png);
      background-repeat: no-repeat;
      background-position: left top;
      right: 0; }

/* MEGABANNER */
#section-megabanner {
  padding: 0 0 0 0 !important;
  margin-top: -18px !important; }
  #section-megabanner .megabanner-container {
    /*margin-top: $menu-height;*/
    width: auto; }
    @media (max-height: 700px) {
      #section-megabanner .megabanner-container {
        margin-top: 0px; } }
    @media (max-width: 768px) {
      #section-megabanner .megabanner-container {
        margin-top: 0px; } }
    body.mobile #section-megabanner .megabanner-container {
      margin-top: 0; }
  #section-megabanner .slidesjs-container {
    margin-bottom: 20px;
    overflow: visible !important; }
  #section-megabanner #megabanners {
    display: none; }
  #section-megabanner .megabanner-image {
    height: 100%;
    overflow: hidden; }
    #section-megabanner .megabanner-image img {
      width: 100%; }
  #section-megabanner .megabanner-nav {
    z-index: 99;
    padding: 0px 0 0px;
    width: 100% !important; }
    #section-megabanner .megabanner-nav a#home-arrow-dn {
      display: block;
      width: 34px;
      margin: 0 auto; }

#section-megabanner .slidesjs-pagination {
  z-index: 100; }

#fixed-headline {
  width: 60%;
  font-size: 26px !important;
  left: 50%;
  margin-left: auto;
  margin-right: auto;
  text-align: center; }

.megabanners h3 {
  display: block;
  position: absolute;
  bottom: 0;
  margin: 0;
  width: 100%;
  background-color: #fff;
  padding: 0px 0; }

.modal-dialog {
  border: 1px solid blue;
  width: 100%;
  padding: 0px; }

.gallery-modal h3 {
  color: #d95a49;
  margin-top: 0; }
.gallery-modal .slidesjs-container {
  max-height: 570px;
  background: #ebebeb; }
.gallery-modal .slides .slidesjs-slide {
  max-width: 500; }
  .gallery-modal .slides .slidesjs-slide img {
    margin: 0 auto; }
  .gallery-modal .slides .slidesjs-slide span.subtitle {
    display: block;
    text-align: center;
    margin: 10px 0; }
.gallery-modal .slides img.slidesjs-slide {
  margin: 0 auto; }
.gallery-modal .slidesjs-navigation {
  z-index: 10; }
  @media (max-width: 992px) {
    .gallery-modal .slidesjs-navigation {
      margin-top: -200px; } }
  @media (min-width: 992px) {
    .gallery-modal .slidesjs-navigation {
      margin-top: -260px; } }
  @media (min-width: 1200px) {
    .gallery-modal .slidesjs-navigation {
      margin-top: -300px; } }
.gallery-modal .slidesjs-previous {
  left: 220px; }
  @media (max-width: 992px) {
    .gallery-modal .slidesjs-previous {
      left: 30px; } }
  @media (min-width: 992px) {
    .gallery-modal .slidesjs-previous {
      left: 30px; } }
.gallery-modal .slidesjs-next {
  right: 220px; }
  @media (max-width: 992px) {
    .gallery-modal .slidesjs-next {
      right: 30px; } }
  @media (min-width: 992px) {
    .gallery-modal .slidesjs-next {
      right: 30px; } }

.modal-backdrop {
  background-color: #FFFFFF; }
  .modal-backdrop.in {
    opacity: 1; }

.modal-header {
  border-bottom: none; }
  .modal-header .close {
    background-image: url(../img/close_btn.png);
    background-repeat: no-repeat;
    background-position: 0 0;
    text-indent: 100%;
    white-space: nowrap;
    overflow: hidden;
    display: block;
    width: 32px;
    height: 32px;
    opacity: 1;
    z-index: 10;
    position: relative; }

.modal-content {
  width: 100%;
  border: 1px solid red;
  box-shadow: none; }

div.feed {
  border-bottom: 1px solid #d95a49;
  margin: 0 20px;
  padding-bottom: 20px; }
  div.feed.last {
    border-bottom: none; }
  div.feed h4 {
    text-align: left;
    font-size: 18px;
    text-transform: uppercase;
    background-image: url(../img/newsfeed/newsfeed_title_bg.png);
    background-repeat: no-repeat;
    background-position: 0 5px;
    padding-left: 22px; }
    div.feed h4 a {
      color: #d95a49; }
  div.feed ul {
    margin-left: 0;
    padding-left: 0;
    list-style: none; }
    div.feed ul li {
      margin-bottom: 4px; }
      div.feed ul li a {
        font-size: 14px; }

.project {
  width: 276px; }
  .project a {
    text-decoration: none; }
  .project .plus-icon {
    position: absolute;
    width: 260px;
    height: 160px;
    margin: 8px;
    background-image: url(../img/projects/plus_icon.png);
    background-repeat: no-repeat;
    background-position: center;
    z-index: 213; }
  .project .hover {
    position: absolute;
    width: 260px;
    height: 160px;
    margin: 8px; }
  .project a:hover .hover {
    background-color: #FF0000;
    opacity: .5; }

.projects {
  margin-top: 30px; }

#modal-container {
  float: left; }

.modal-body {
  padding: 0px !important; }

.project-image {
  background-color: #FFFFFF;
  padding: 8px; }

.project h4 {
  text-align: center;
  margin-top: 5px;
  font-weight: normal;
  font-size: 15px; }

a#home-arrow-dn {
  display: block;
  width: 34px;
  margin: 0 auto; }

/* modal projects */
#show-project h3 {
  color: #878787;
  text-align: left;
  margin: 25px 0 0; }

/* SOLUTIONS */
.solutions-row .solution-image img {
  display: block;
  margin: 0 auto; }
.solutions-row h4 {
  color: #d95a49;
  text-align: center;
  font-weight: 400;
  font-size: 17px;
  width: 200px;
  margin: 15px auto 0;
  min-height: 60px; }
.solutions-row p {
  color: rgba(135, 135, 135, 0.6);
  text-align: center;
  font-size: 14px;
  line-height: 20px;
  padding: 0 30px;
  margin: 0 0 15px; }
.solutions-row a.solution-plus {
  background-image: url(../img/solutions/plus-btn.gif);
  background-repeat: no-repeat;
  background-position: center left;
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  display: block;
  width: 33px;
  height: 35px;
  margin: 0 auto; }
  .solutions-row a.solution-plus:hover {
    background-position: center right; }

#show-solution .modal-content {
  background-color: #d4d4d4; }
#show-solution #solution-description {
  text-align: center;
  margin-top: 15px; }
