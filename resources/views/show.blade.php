@extends('layout')

@section('title', 'Home Page')

@section('content')
   

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title>Product Detail Page</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">


    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/color1.css" media="screen" id="color">

</head>
<style type="text/css">
    :root {
  --theme-deafult: #ff4c3b; }

/*-----------------------------------------------------------------------------------

/* 1. General CSS
   1.1. Button CSS
   1.2. Title CSS
   1.3. Brand logo CSS */
/* 2. Header CSS */


/* 8. Banner Timer CSS  */
/* 9. Category CSS */
/* 10. Product Box CSS */
/* 11. Theme tab CSS */
/* 12. Banner CSS */
/* 13. Collection Banner CSS */
/* 14. Product-box slider CSS */

/* 22. Inner pages CSS */

/* 29. Responsive CSS */
/*=====================
    1.General CSS start
==========================*/
body {
  font-family: Lato, sans-serif;
  position: relative;
  background: #ffffff;
  font-size: 14px; }
  body.christmas {
    font-family: Philosopher, sans-serif; }
    body.christmas .dark-light {
      display: none; }
    body.christmas section {
      overflow: hidden; }

h1 {
  font-size: 60px;
  color: #222222;
  font-weight: 700;
  text-transform: uppercase; }
  h1 span {
    font-size: 107px;
    font-weight: 700;
    color: var(--theme-deafult); }

h2 {
  font-size: 36px;
  color: #222222;
  text-transform: uppercase;
  font-weight: 700;
  line-height: 1;
  letter-spacing: 0.02em; }

h3 {
  font-size: 24px;
  font-weight: 400;
  color: #777777;
  letter-spacing: 0.03em; }

h4 {
  font-size: 18px;
  text-transform: capitalize;
  font-weight: 400;
  letter-spacing: 0.03em;
  line-height: 1; }

h5 {
  font-size: 16px;
  font-weight: 400;
  color: #222222;
  line-height: 24px;
  letter-spacing: 0.05em; }

h6 {
  font-size: 14px;
  font-weight: 400;
  color: #777777;
  line-height: 24px; }

ul {
  padding-left: 0;
  margin-bottom: 0; }

li {
  display: inline-block; }

p {
  font-size: 14px;
  color: #777777;
  line-height: 1; }

a {
  -webkit-transition: 0.5s ease;
  transition: 0.5s ease; }
  a:hover {
    text-decoration: none;
    -webkit-transition: 0.5s ease;
    transition: 0.5s ease; }
  a:focus {
    outline: none; }

button:focus {
  outline: none; }

section,
.section-t-space {
  padding-top: 70px; }

.section-b-space {
  padding-bottom: 70px; }

.large-section {
  padding-top: 120px;
  padding-bottom: 120px; }

.p-t-0 {
  padding-top: 0; }

hr.style1 {
  width: 75px;
  height: 3px;
  margin-top: 13px;
  background-color: var(--theme-deafult);
  text-align: center; }

.no-arrow .slick-next,
.no-arrow .slick-prev {
  display: none !important; }

.form-control {
  border-radius: 0; }

.small-section {
  padding-top: 35px;
  padding-bottom: 35px; }

.banner-padding {
  padding-top: 30px; }

.border-section {
  border-top: 1px solid #dddddd;
  border-bottom: 1px solid #dddddd; }

.border-b {
  border-bottom: 1px solid #38352f; }

.border-bottom-grey {
  border-bottom: 1px solid #efefef; }

.border-top-grey {
  border-top: 1px solid #efefef; }

.darken-layout {
  background-color: #393230; }

.dark-layout {
  background-color: #2d2a25; }

.light-layout {
  background-color: #f9f9f9; }

.white-layout {
  background-color: #ffffff; }

.bg-light0 {
  background-color: #d0edff; }

.bg-light1 {
  background-color: #f1e7e6; }

.bg-light2 {
  background-color: #bfbfbf; }

.bg-blog {
  background-color: #eeeeee; }

.bg-grey {
  background-color: #f7f7f7; }

.bg_cls {
  background-color: #fafafa; }

del {
  font-size: 14px;
  color: #aaaaaa;
  font-weight: 400; }

[data-notify="progressbar"] {
  margin-bottom: 0;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 5px; }

.progress-bar {
  background-color: #19a340; }

.progress-bar-info {
  background-color: #00829a; }

.container-fluid.custom-container {
  padding-left: 90px;
  padding-right: 90px; }

.ratio_40 .bg-size:before {
  padding-top: 40%;
  content: "";
  display: block; }

.ratio_45 .bg-size:before {
  padding-top: 45%;
  content: "";
  display: block; }

.ratio2_1 .bg-size:before {
  padding-top: 50%;
  content: "";
  display: block; }

.ratio2_3 .bg-size:before {
  padding-top: 60%;
  content: "";
  display: block; }

.ratio3_2 .bg-size:before {
  padding-top: 66.66%;
  content: "";
  display: block; }

.ratio_landscape .bg-size:before {
  padding-top: 75%;
  content: "";
  display: block; }

.ratio_square .bg-size:before {
  padding-top: 100%;
  content: "";
  display: block; }

.ratio_asos .bg-size:before {
  padding-top: 127.7777778%;
  content: "";
  display: block; }

.ratio_portrait .bg-size:before {
  padding-top: 150%;
  content: "";
  display: block; }

.ratio1_2 .bg-size:before {
  padding-top: 200%;
  content: "";
  display: block; }

.b-top {
  background-position: top !important; }

.b-bottom {
  background-position: bottom !important; }

.b-center {
  background-position: center !important; }

.b_size_content {
  background-size: contain !important;
  background-repeat: no-repeat; }

/*Lazy load */
.blur-up {
  -webkit-filter: blur(5px);
  filter: blur(5px);
  transition: filter 400ms, -webkit-filter 400ms; }
  .blur-up.lazyloaded {
    -webkit-filter: blur(0);
    filter: blur(0); }

/*=====================
    1.1.Button CSS start
==========================*/
button {
  cursor: pointer; }

.btn {
  line-height: 20px;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 700;
  border-radius: 0;
  -webkit-transition: 0.3s ease-in-out;
  transition: 0.3s ease-in-out; }
  .btn:hover {
    -webkit-transition: 0.3s ease-in-out;
    transition: 0.3s ease-in-out; }
  .btn:focus {
    -webkit-box-shadow: none;
            box-shadow: none; }

.btn-solid {
  padding: 13px 29px;
  color: #ffffff;
  letter-spacing: 0.05em;
  border: 2px solid var(--theme-deafult);
  background-image: linear-gradient(30deg, var(--theme-deafult) 50%, transparent 50%);
  background-size: 850px;
  background-repeat: no-repeat;
  background-position: 0;
  -webkit-transition: background 300ms ease-in-out;
  transition: background 300ms ease-in-out; }
  .btn-solid:hover {
    background-position: 100%;
    color: #000000;
    background-color: #ffffff; }
  .btn-solid.black-btn {
    background-image: linear-gradient(30deg, #222222 50%, transparent 50%);
    border: 2px solid #222222; }
  .btn-solid:focus {
    color: #ffffff; }
  .btn-solid.btn-gradient {
    background: var(--theme-deafult);
    background: -webkit-gradient(linear, left top, left bottom, from(var(--gradient1)), color-stop(99%, var(--gradient2)));
    background: linear-gradient(180deg, var(--gradient1) 0%, var(--gradient2) 99%);
    -webkit-transition: background 300ms ease-in-out;
    transition: background 300ms ease-in-out;
    background-size: 300% 100%;
    border: none; }
    .btn-solid.btn-gradient:hover {
      background: -webkit-gradient(linear, left top, left bottom, from(var(--gradient2)), color-stop(99%, var(--gradient1)));
      background: linear-gradient(-180deg, var(--gradient2) 0%, var(--gradient1) 99%);
      -webkit-transition: background 300ms ease-in-out;
      transition: background 300ms ease-in-out;
      color: white; }
  .btn-solid.btn-green {
    background-image: -webkit-gradient(linear, left top, right top, from(var(--gradient1)), to(var(--gradient2)));
    background-image: linear-gradient(to right, var(--gradient1), var(--gradient2));
    border: none;
    background-color: var(--theme-deafult); }
    .btn-solid.btn-green:hover {
      background-color: var(--theme-deafult);
      background-image: none;
      color: white; }
  .btn-solid.btn-sm {
    padding: 9px 16px; }
  .btn-solid.btn-xs {
    padding: 5px 8px;
    text-transform: capitalize; }

.btn-outline {
  display: inline-block;
  padding: 13px 29px;
  letter-spacing: 0.05em;
  border: 2px solid var(--theme-deafult);
  position: relative;
  color: #000000; }
  .btn-outline:before {
    -webkit-transition: 0.5s all ease;
    transition: 0.5s all ease;
    position: absolute;
    top: 0;
    left: 50%;
    right: 50%;
    bottom: 0;
    opacity: 0;
    content: "";
    background-color: var(--theme-deafult);
    z-index: -2; }
  .btn-outline:hover, .btn-outline:focus {
    color: #ffffff !important; }
    .btn-outline:hover i, .btn-outline:focus i {
      color: #ffffff !important; }
    .btn-outline:hover:before, .btn-outline:focus:before {
      -webkit-transition: 0.5s all ease;
      transition: 0.5s all ease;
      left: 0;
      right: 0;
      opacity: 1; }
  .btn-outline.btn-sm {
    padding: 9px 16px;
    font-size: 12px; }

button.btn.btn-solid:active, button.btn.btn-outline:active {
  background-image: linear-gradient(30deg, var(--theme-deafult) 50%, transparent 50%);
  color: #ffffff;
  background: var(--theme-deafult); }

.btn-classic:hover {
  background-color: var(--theme-deafult); }

.btn-theme {
  background-color: var(--theme-deafult);
  color: #ffffff; }

.btn-white {
  background-color: white;
  color: var(--theme-deafult);
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  padding: 10px 29px; }
  .btn-white:hover {
    color: #000000;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }

.btn-custom {
  padding: 6px 30px !important;
  border: none; }

/*=====================
    1.2.Title CSS start
==========================*/
.title1 {
  text-align: center; }
  .title1 h4 {
    color: var(--theme-deafult);
    padding-bottom: 10px;
    margin-bottom: 0;
    margin-top: -3px; }
  .title1 .title-inner1 {
    padding-bottom: 15px;
    margin-bottom: 30px;
    position: relative; }
    .title1 .title-inner1:after {
      position: absolute;
      height: 5px;
      width: 70px;
      background-color: var(--theme-deafult);
      content: "";
      left: 0;
      right: 0;
      margin: 0 auto;
      bottom: 0; }
  .title1.title-gradient .title-inner1:after {
    background: var(--theme-deafult);
    background: -webkit-gradient(linear, left top, left bottom, from(var(--gradient1)), color-stop(99%, var(--gradient2)));
    background: linear-gradient(180deg, var(--gradient1) 0%, var(--gradient2) 99%);
    background-color: var(--theme-deafult); }
  .title1.title5 .title-inner1 {
    padding-bottom: 0;
    margin-bottom: 0; }
    .title1.title5 .title-inner1:after {
      display: none; }
  .title1.title5 hr[role="tournament6"] {
    border: 0px solid;
    height: 1px;
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0)), color-stop(var(--theme-deafult)), to(rgba(0, 0, 0, 0)));
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), var(--theme-deafult), rgba(0, 0, 0, 0));
    display: block;
    width: 25%;
    margin: 15px auto 30px auto; }
  .title1.title5 hr[role="tournament6"]::before {
    position: absolute;
    background-color: #efefef;
    border: 1px solid;
    border-color: var(--theme-deafult);
    padding: 5px;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    left: 50%;
    margin: -6px 0px 0px 0;
    content: ""; }

.title2 {
  text-align: center; }
  .title2 h4 {
    color: var(--theme-deafult);
    padding-bottom: 10px;
    margin-bottom: 0;
    text-transform: uppercase;
    margin-top: -3px; }
  .title2 .title-inner2 {
    margin-bottom: 50px;
    position: relative;
    display: inline-block;
    padding: 0 25px; }
    .title2 .title-inner2:after {
      position: absolute;
      height: 5px;
      width: 100%;
      background-color: var(--theme-deafult);
      opacity: 0.4;
      content: "";
      left: 0;
      right: 0;
      margin: 0 auto;
      bottom: 3px;
      z-index: -1; }

.title3 {
  text-align: center; }
  .title3 h4 {
    color: var(--theme-deafult);
    padding-bottom: 10px;
    margin-bottom: 5px;
    margin-top: -3px; }
  .title3 .title-inner3 {
    margin-bottom: 20px;
    position: relative;
    margin-top: -5px; }
  .title3 .line {
    position: relative;
    height: 5px;
    width: 45px;
    background-color: var(--theme-deafult);
    content: "";
    left: 0;
    right: 0;
    margin: 0 auto;
    bottom: 0;
    margin-bottom: 50px; }
    .title3 .line:after, .title3 .line:before {
      position: absolute;
      height: 5px;
      width: 10px;
      content: "";
      background-color: var(--theme-deafult); }
    .title3 .line:after {
      right: 50px; }
    .title3 .line:before {
      left: 50px; }

.title4 {
  text-align: center; }
  .title4 .title-inner4 {
    padding-bottom: 25px;
    margin-bottom: 0;
    position: relative;
    margin-top: -5px; }
  .title4 .line {
    position: relative;
    height: 1px;
    width: 180px;
    background-color: var(--theme-deafult);
    margin: 0 auto;
    margin-bottom: 55px;
    bottom: 0;
    top: 0; }
    .title4 .line:after, .title4 .line:before {
      position: absolute;
      height: 10px;
      width: 10px;
      content: "";
      background-color: var(--theme-deafult);
      top: -4px; }
    .title4 .line:after {
      left: 78px; }
    .title4 .line:before {
      left: 64px; }
    .title4 .line span:after, .title4 .line span:before {
      position: absolute;
      height: 10px;
      width: 10px;
      content: "";
      background-color: var(--theme-deafult);
      top: -4px; }
    .title4 .line span:after {
      right: 78px; }
    .title4 .line span:before {
      right: 64px; }

.title6 {
  text-align: center; }
  .title6 h2 {
    margin-top: -5px; }

.title-borderless {
  margin-bottom: 30px;
  text-align: center;
  margin-top: -5px; }


/*=====================
    7.About CSS start
==========================*/
.about-text p {
  line-height: 28px;
  letter-spacing: 0.06em;
  text-align: center;
  margin-bottom: 50px; }

/*=====================
    8.Banner Timer CSS start
==========================*/
.banner-timer {
  background-image: url("../images/offer-banner.jpg");
  background-size: cover;
  margin-left: 20px;
  margin-right: 20px; }
  .banner-timer .banner-text {
    padding-top: 45px;
    padding-bottom: 45px; }
    .banner-timer .banner-text h2 {
      margin-bottom: 0;
      text-align: center; }
      .banner-timer .banner-text h2 span {
        color: var(--theme-deafult); }
  .banner-timer .timer-box {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex; }

.timer {
  padding-top: 15px;
  padding-bottom: 15px;
  padding-left: 40px;
  margin-top: 30px;
  background-color: #2d2a25;
  display: inline-block; }
  .timer p {
    font-size: 18px;
    color: #ffffff;
    margin-bottom: 0; }
  .timer span {
    width: 70px;
    display: inline-block; }
    .timer span .timer-cal {
      font-size: 12px;
      color: #777777; }
    .timer span .padding-l {
      padding-left: 22px;
      display: inline; }

/*=====================
    9.Category CSS start
==========================*/
.category-block .category-image {
  margin: 0 auto;
  text-align: center;
  border: 1px solid #dddddd;
  border-radius: 100%;
  width: 80px;
  height: 80px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-transition: 0.5s ease;
  transition: 0.5s ease; }
  .category-block .category-image.svg-image {
    background-color: #ffffff; }
    .category-block .category-image.svg-image svg {
      width: 50px;
      fill: var(--theme-deafult); }

.category-block .category-details {
  margin-top: 15px;
  text-align: center; }
  .category-block .category-details h5 {
    font-weight: 700;
    margin: 0 auto;
    -webkit-transition: 0.5s ease;
    transition: 0.5s ease;
    text-transform: uppercase; }
  .category-block .category-details h6 {
    margin-bottom: -6px;
    margin-top: -4px; }

.category-block:hover .category-image {
  background-color: var(--theme-deafult);
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease; }
  .category-block:hover .category-image img {
    -webkit-filter: brightness(0) invert(1);
            filter: brightness(0) invert(1);
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
  .category-block:hover .category-image svg {
    fill: white;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }

.category-block:hover .category-details h5 {
  color: var(--theme-deafult);
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease; }

.category-border {
  background-color: #f1f5f4;
  padding: 20px 10px; }
  .category-border .border-padding {
    padding: 0 10px; }
  .category-border div .category-banner {
    padding: 0;
    position: relative;
    overflow: hidden; }
    .category-border div .category-banner img,
    .category-border div .category-banner .bg-size {
      -webkit-transform: scale(1);
              transform: scale(1);
      -webkit-transition: 0.5s ease;
      transition: 0.5s ease; }
    .category-border div .category-banner:hover img,
    .category-border div .category-banner:hover .bg-size {
      -webkit-transform: scale(1.1) translateX(14px);
              transform: scale(1.1) translateX(14px);
      -webkit-transition: 0.5s ease;
      transition: 0.5s ease; }
    .category-border div .category-banner:hover h2 {
      color: var(--theme-deafult);
      -webkit-transition: 0.5s ease;
      transition: 0.5s ease; }
    .category-border div .category-banner .category-box {
      z-index: 1;
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center; }
      .category-border div .category-banner .category-box h2 {
        background-color: #ffffff;
        display: inline-block;
        padding: 20px 35px;
        margin-bottom: 0;
        -webkit-box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.4);
                box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.4);
        -webkit-transition: 0.5s ease;
        transition: 0.5s ease; }

.category-bg {
  padding: 40px 50px;
  position: relative;
  z-index: 1; }
  .category-bg .image-block img {
    width: 100%; }
  .category-bg .image-block.even:after {
    bottom: 94%; }
  .category-bg .image-block:after {
    content: "";
    position: absolute;
    background-color: var(--theme-deafult);
    height: 0;
    width: 40px;
    z-index: 1;
    right: 0;
    left: 0;
    margin: 0 auto;
    opacity: 0;
    -webkit-transition: 0.5s ease;
    transition: 0.5s ease;
    margin-top: -40px; }
  .category-bg .image-block:hover:after {
    opacity: 0.3;
    -webkit-transition: 0.5s ease;
    transition: 0.5s ease;
    height: 80px; }
  .category-bg .contain-block {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    text-align: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    height: 100%;
    background-color: #ffffff; }
    .category-bg .contain-block.even:after {
      top: 94%; }
    .category-bg .contain-block:after {
      content: "";
      position: absolute;
      background-color: var(--theme-deafult);
      height: 0;
      width: 40px;
      z-index: 1;
      right: 0;
      left: 0;
      margin: 0 auto;
      opacity: 0;
      -webkit-transition: 0.5s ease;
      transition: 0.5s ease;
      bottom: 94%; }
    .category-bg .contain-block:hover h2 {
      color: var(--theme-deafult);
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }
    .category-bg .contain-block:hover h6 span {
      color: var(--theme-deafult);
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }
    .category-bg .contain-block:hover .category-btn {
      background-image: linear-gradient(30deg, #222222 50%, transparent 50%);
      border: 2px solid #222222;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }
    .category-bg .contain-block:hover:after {
      opacity: 0.3;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease;
      height: 80px; }
    .category-bg .contain-block h2 {
      margin-bottom: 0;
      margin-top: 15px;
      -webkit-transition: 0.5s ease;
      transition: 0.5s ease;
      color: #222222; }
    .category-bg .contain-block h6 {
      color: var(--theme-deafult);
      text-transform: uppercase;
      letter-spacing: 0.3em;
      line-height: 1;
      margin-bottom: 0; }
      .category-bg .contain-block h6 span {
        color: #7f786d;
        letter-spacing: 0.03em;
        font-weight: 700;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease; }
    .category-bg .contain-block .category-btn {
      letter-spacing: 0.07em;
      margin-bottom: 25px;
      margin-top: 25px;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }
  .category-bg:after {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    background-color: var(--theme-deafult);
    opacity: 0.3;
    width: 100%;
    height: 100%;
    z-index: -1; }

.category-m .slick-slide > div {
  margin: 0 10px; }

.category-m .category-wrapper {
  border: 1px solid #dddada;
  margin: 0 auto;
  text-align: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  position: relative; }
  .category-m .category-wrapper > div:after, .category-m .category-wrapper > div:before {
    content: "";
    width: 1px;
    height: 0;
    position: absolute;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    background: var(--theme-deafult);
    -webkit-transition-delay: 0s;
            transition-delay: 0s; }
  .category-m .category-wrapper > div:before {
    left: 0;
    top: 0; }
  .category-m .category-wrapper > div:after {
    right: 0;
    bottom: 0; }
  .category-m .category-wrapper .bg-size {
    max-width: 100px;
    margin: 0 auto; }
  .category-m .category-wrapper:after, .category-m .category-wrapper:before {
    content: "";
    width: 0;
    height: 1px;
    position: absolute;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    background: var(--theme-deafult); }
  .category-m .category-wrapper:before {
    right: 0;
    top: 0; }
  .category-m .category-wrapper:after {
    left: 0;
    bottom: 0; }
  .category-m .category-wrapper:hover {
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
    .category-m .category-wrapper:hover:after, .category-m .category-wrapper:hover:before {
      -webkit-transition-delay: 0s;
              transition-delay: 0s;
      width: 100%; }
    .category-m .category-wrapper:hover > div:after, .category-m .category-wrapper:hover > div:before {
      -webkit-transition-delay: 0.2s;
              transition-delay: 0.2s;
      height: 100%; }
  .category-m .category-wrapper img {
    display: inline; }
  .category-m .category-wrapper h4 {
    text-transform: uppercase;
    color: #2d2a25;
    font-weight: 700;
    margin-bottom: 0;
    padding-bottom: 25px;
    padding-top: 25px; }
  .category-m .category-wrapper .btn {
    margin-top: 20px; }
  .category-m .category-wrapper .category-link li {
    display: block;
    text-transform: capitalize;
    margin-top: 5px; }
    .category-m .category-wrapper .category-link li:first-child {
      margin-top: 0; }
    .category-m .category-wrapper .category-link li a {
      color: #948e8c; }
      .category-m .category-wrapper .category-link li a:hover {
        color: var(--theme-deafult); }

.background {
  background-color: #f1f5f4;
  padding: 20px 10px;
  margin: 0; }
  .background .contain-bg {
    width: 100%;
    background-color: #ffffff;
    padding-top: 45px;
    padding-bottom: 45px;
    text-align: center;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    position: relative;
    z-index: 1; }
    .background .contain-bg:after {
      position: absolute;
      content: "";
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: var(--theme-deafult);
      opacity: 0;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }
    .background .contain-bg h4 {
      color: #222222;
      text-transform: uppercase;
      font-weight: 700;
      margin-bottom: 0;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }
    .background .contain-bg:hover:after {
      opacity: 0.07;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }
    .background .contain-bg:hover h4 {
      color: var(--theme-deafult);
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }

/*=====================
    10.Product Box CSS start
==========================*/
.absolute-product .theme-tab .tab-title .current a {
  font-weight: 700; }

.absolute-product .product-box {
  width: 100%;
  display: inline-block;
  padding-bottom: 10px;
  -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
  border-radius: 5px; }
  .absolute-product .product-box .img-wrapper {
    border-radius: 5px 5px 0 0; }
  .absolute-product .product-box .product-detail {
    text-align: center;
    margin-top: 0;
    padding: 0 15px; }
    .absolute-product .product-box .product-detail .color-variant {
      padding-top: 5px; }
      .absolute-product .product-box .product-detail .color-variant li {
        height: 16px;
        width: 16px; }
    .absolute-product .product-box .product-detail .cart-bottom {
      border-top: 1px solid #ddd;
      padding-top: 10px;
      margin-top: 10px; }
      .absolute-product .product-box .product-detail .cart-bottom button {
        border: none;
        background-color: transparent;
        padding: 0; }
      .absolute-product .product-box .product-detail .cart-bottom i {
        color: #828282;
        font-size: 18px;
        padding-right: 7px;
        padding-left: 7px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease; }
        .absolute-product .product-box .product-detail .cart-bottom i:hover {
          color: var(--theme-deafult);
          -webkit-transition: all 0.5s ease;
          transition: all 0.5s ease; }
    .absolute-product .product-box .product-detail .rating {
      margin-top: 10px; }

.absolute-product .slick-slider .product-box {
  margin-bottom: 3px; }

.product-m .slick-list {
  margin-left: -15px;
  margin-right: -15px; }

.product-m .slick-slide > div {
  margin: 0 15px; }

.color-variant li {
  display: inline-block;
  height: 20px;
  width: 20px;
  border-radius: 100%;
  margin-right: 5px;
  -webkit-transition: all 0.1s ease;
  transition: all 0.1s ease;
  vertical-align: middle; }

.image-swatch {
  margin-bottom: 10px; }
  .image-swatch li img {
    width: 33px;
    height: 33px;
    padding: 2px;
    border: 1px solid #dddddd;
    margin-right: 5px;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
  .image-swatch li:last-child {
    margin-right: 0; }
  .image-swatch li.active img {
    border: 1px solid var(--theme-deafult); }
  .image-swatch li:hover img {
    border: 1px solid var(--theme-deafult);
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }

.no-slider .product-box {
  width: 100%;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 25%;
          flex: 0 0 25%;
  max-width: calc(25% - 30px);
  margin: 0 15px 30px; }
  .no-slider .product-box:nth-last-child(-n+4) {
    margin: 0 15px 0; }

.no-slider.five-product .product-box {
  width: 100%;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 20%;
          flex: 0 0 20%;
  max-width: calc(20% - 30px);
  margin: 0 15px 30px; }
  .no-slider.five-product .product-box:nth-last-child(-n+5) {
    margin: 0 15px 0; }

.product-para p {
  margin-bottom: 0;
  padding-bottom: 30px;
  line-height: 24px;
  letter-spacing: 0.05em; }

.product-box,
.product-wrap {
  position: relative;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  vertical-align: middle; }
  .product-box .img-block,
  .product-wrap .img-block {
    background-color: #f9f9f9;
    position: relative;
    overflow: hidden; }
    .product-box .img-block .front,
    .product-wrap .img-block .front {
      opacity: 1;
      top: 0;
      left: 0;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }
      .product-box .img-block .front a,
      .product-wrap .img-block .front a {
        display: block;
        width: 100%; }
    .product-box .img-block .back,
    .product-wrap .img-block .back {
      opacity: 0;
      position: absolute;
      -webkit-backface-visibility: hidden;
              backface-visibility: hidden;
      top: 0;
      left: 0;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease;
      -webkit-transform: translateX(-100px);
              transform: translateX(-100px);
      width: 100%; }
      .product-box .img-block .back a,
      .product-wrap .img-block .back a {
        display: block;
        width: 100%; }
    .product-box .img-block .lable-wrapper,
    .product-wrap .img-block .lable-wrapper {
      margin: 0 auto;
      top: 40px;
      position: absolute;
      left: 0;
      right: 0;
      text-align: center;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease;
      z-index: 2; }
      .product-box .img-block .lable-wrapper .lable1,
      .product-box .img-block .lable-wrapper .lable2,
      .product-wrap .img-block .lable-wrapper .lable1,
      .product-wrap .img-block .lable-wrapper .lable2 {
        font-size: 14px;
        padding: 10px 14px 10px 20px;
        display: inline-block;
        text-transform: uppercase;
        text-align: center; }
      .product-box .img-block .lable-wrapper .lable1,
      .product-wrap .img-block .lable-wrapper .lable1 {
        background-color: var(--theme-deafult);
        color: #ffffff;
        border-bottom-left-radius: 25px;
        border-top-left-radius: 25px; }
      .product-box .img-block .lable-wrapper .lable2,
      .product-wrap .img-block .lable-wrapper .lable2 {
        background-color: #ffffff;
        color: #000000;
        border-bottom-right-radius: 25px;
        border-top-right-radius: 25px; }
  .product-box .img-wrapper,
  .product-wrap .img-wrapper {
    position: relative;
    overflow: hidden;
    z-index: 0; }
    .product-box .img-wrapper .front,
    .product-wrap .img-wrapper .front {
      opacity: 1;
      top: 0;
      left: 0;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }
    .product-box .img-wrapper .back,
    .product-wrap .img-wrapper .back {
      opacity: 0;
      position: absolute;
      -webkit-backface-visibility: hidden;
              backface-visibility: hidden;
      top: 0;
      left: 0;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease;
      -webkit-transform: translateX(-100px);
              transform: translateX(-100px);
      width: 100%; }
    .product-box .img-wrapper .cart-box,
    .product-wrap .img-wrapper .cart-box {
      position: absolute;
      margin: 0 auto;
      display: inline-block;
      right: 0;
      left: 0;
      border-radius: 50px;
      width: -webkit-max-content;
      width: -moz-max-content;
      width: max-content;
      padding: 12px 15px;
      -webkit-box-shadow: 0 0 12px 0 #dddddd;
              box-shadow: 0 0 12px 0 #dddddd;
      bottom: 30px;
      background-color: #ffffff;
      opacity: 0;
      -webkit-transition: all 0.2s ease;
      transition: all 0.2s ease; }
      .product-box .img-wrapper .cart-box button,
      .product-wrap .img-wrapper .cart-box button {
        background: none;
        -webkit-box-shadow: none;
                box-shadow: none;
        border: none;
        padding: 0; }
      .product-box .img-wrapper .cart-box i,
      .product-wrap .img-wrapper .cart-box i {
        color: #6f6f6f;
        font-size: 18px;
        padding-left: 8px;
        padding-right: 8px;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
        display: inline-block; }
        .product-box .img-wrapper .cart-box i:hover,
        .product-wrap .img-wrapper .cart-box i:hover {
          color: var(--theme-deafult);
          -webkit-transition: all 0.2s ease;
          transition: all 0.2s ease; }
    .product-box .img-wrapper .lable-block .lable3,
    .product-wrap .img-wrapper .lable-block .lable3 {
      border-radius: 100%;
      background-color: var(--theme-deafult);
      text-align: center;
      font-size: 14px;
      font-weight: 700;
      position: absolute;
      padding: 12px 6px;
      text-transform: uppercase;
      color: #ffffff;
      top: 7px;
      left: 7px;
      z-index: 1; }
    .product-box .img-wrapper .lable-block .lable4,
    .product-wrap .img-wrapper .lable-block .lable4 {
      position: absolute;
      font-size: 14px;
      font-weight: 700;
      text-transform: uppercase;
      -webkit-writing-mode: vertical-rl;
          -ms-writing-mode: tb-rl;
              writing-mode: vertical-rl;
      -webkit-transform: rotate(-180deg);
              transform: rotate(-180deg);
      top: 7px;
      right: 7px;
      letter-spacing: 0.1em;
      z-index: 1; }
  .product-box .cart-info,
  .product-box .cart-wrap,
  .product-wrap .cart-info,
  .product-wrap .cart-wrap {
    position: absolute;
    bottom: 40px;
    text-align: center;
    margin: 0 auto;
    display: inline-block;
    right: 0;
    left: 0;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    opacity: 0;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
    .product-box .cart-info a [class^="ti-"],
    .product-box .cart-info a [class*=" ti-"],
    .product-box .cart-wrap a [class^="ti-"],
    .product-box .cart-wrap a [class*=" ti-"],
    .product-wrap .cart-info a [class^="ti-"],
    .product-wrap .cart-info a [class*=" ti-"],
    .product-wrap .cart-wrap a [class^="ti-"],
    .product-wrap .cart-wrap a [class*=" ti-"] {
      display: inline-block; }
    .product-box .cart-info.cart-wrap,
    .product-box .cart-wrap.cart-wrap,
    .product-wrap .cart-info.cart-wrap,
    .product-wrap .cart-wrap.cart-wrap {
      bottom: 0;
      text-align: right;
      left: unset; }
      .product-box .cart-info.cart-wrap i,
      .product-box .cart-wrap.cart-wrap i,
      .product-wrap .cart-info.cart-wrap i,
      .product-wrap .cart-wrap.cart-wrap i {
        display: block;
        padding-bottom: 10px;
        padding-top: 10px; }
      .product-box .cart-info.cart-wrap.cart-effect-left,
      .product-box .cart-wrap.cart-wrap.cart-effect-left,
      .product-wrap .cart-info.cart-wrap.cart-effect-left,
      .product-wrap .cart-wrap.cart-wrap.cart-effect-left {
        left: 0;
        right: unset; }
    .product-box .cart-info button,
    .product-box .cart-wrap button,
    .product-wrap .cart-info button,
    .product-wrap .cart-wrap button {
      background: none;
      -webkit-box-shadow: none;
              box-shadow: none;
      border: none;
      padding: 0; }
    .product-box .cart-info i,
    .product-box .cart-wrap i,
    .product-wrap .cart-info i,
    .product-wrap .cart-wrap i {
      color: #6f6f6f;
      font-size: 18px;
      padding-right: 10px;
      padding-left: 10px; }
      .product-box .cart-info i:hover,
      .product-box .cart-wrap i:hover,
      .product-wrap .cart-info i:hover,
      .product-wrap .cart-wrap i:hover {
        color: var(--theme-deafult); }
  .product-box .cart-detail,
  .product-wrap .cart-detail {
    position: absolute;
    top: 15px;
    right: 20px;
    opacity: 0; }
    .product-box .cart-detail i,
    .product-wrap .cart-detail i {
      color: #6f6f6f;
      font-size: 18px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      padding-top: 8px;
      padding-bottom: 8px; }
    .product-box .cart-detail button,
    .product-wrap .cart-detail button {
      background: none;
      -webkit-box-shadow: none;
              box-shadow: none;
      border: none;
      padding: 0; }
  .product-box .product-detail,
  .product-box .product-info,
  .product-wrap .product-detail,
  .product-wrap .product-info {
    padding-left: 5px; }
    .product-box .product-detail .rating,
    .product-box .product-info .rating,
    .product-wrap .product-detail .rating,
    .product-wrap .product-info .rating {
      margin-top: 15px; }
      .product-box .product-detail .rating i,
      .product-box .product-info .rating i,
      .product-wrap .product-detail .rating i,
      .product-wrap .product-info .rating i {
        padding-right: 5px; }
        .product-box .product-detail .rating i:nth-child(-n+4),
        .product-box .product-info .rating i:nth-child(-n+4),
        .product-wrap .product-detail .rating i:nth-child(-n+4),
        .product-wrap .product-info .rating i:nth-child(-n+4) {
          color: #ffa200; }
        .product-box .product-detail .rating i:last-child,
        .product-box .product-info .rating i:last-child,
        .product-wrap .product-detail .rating i:last-child,
        .product-wrap .product-info .rating i:last-child {
          color: #dddddd; }
    .product-box .product-detail h6,
    .product-box .product-info h6,
    .product-wrap .product-detail h6,
    .product-wrap .product-info h6 {
      line-height: 1;
      margin-bottom: 0;
      padding-top: 2px;
      padding-bottom: 5px;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease;
      font-size: 16px; }
    .product-box .product-detail h4,
    .product-box .product-info h4,
    .product-wrap .product-detail h4,
    .product-wrap .product-info h4 {
      font-size: 18px;
      color: #222222;
      font-weight: 700;
      margin-bottom: 0;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }
    .product-box .product-detail .color-variant,
    .product-box .product-info .color-variant,
    .product-wrap .product-detail .color-variant,
    .product-wrap .product-info .color-variant {
      padding-top: 15px; }
      .product-box .product-detail .color-variant li,
      .product-box .product-info .color-variant li,
      .product-wrap .product-detail .color-variant li,
      .product-wrap .product-info .color-variant li {
        display: inline-block;
        height: 20px;
        width: 20px;
        border-radius: 100%;
        margin-right: 5px;
        -webkit-transition: all 0.1s ease;
        transition: all 0.1s ease;
        cursor: pointer; }
  .product-box .product-info,
  .product-wrap .product-info {
    padding: 0;
    text-align: center;
    position: relative; }
    .product-box .product-info .add-btn,
    .product-wrap .product-info .add-btn {
      position: absolute;
      bottom: 110px;
      margin: 0 auto;
      left: 0;
      right: 0;
      opacity: 0;
      -webkit-transition: all 0.2s ease;
      transition: all 0.2s ease;
      z-index: 1; }
      .product-box .product-info .add-btn i,
      .product-wrap .product-info .add-btn i {
        color: var(--theme-deafult); }
      .product-box .product-info .add-btn .btn-outline,
      .product-wrap .product-info .add-btn .btn-outline {
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
        color: var(--theme-deafult); }
        .product-box .product-info .add-btn .btn-outline:hover,
        .product-wrap .product-info .add-btn .btn-outline:hover {
          color: #ffffff; }
          .product-box .product-info .add-btn .btn-outline:hover i,
          .product-wrap .product-info .add-btn .btn-outline:hover i {
            color: #ffffff; }
  .product-box.effect-center .front img,
  .product-wrap.effect-center .front img {
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
  .product-box.effect-center .img-wrapper .cart-box,
  .product-wrap.effect-center .img-wrapper .cart-box {
    bottom: 20%;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
  .product-box:hover.effect-center .front img,
  .product-wrap:hover.effect-center .front img {
    opacity: 0.3;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
  .product-box:hover.effect-center .img-wrapper .cart-box,
  .product-wrap:hover.effect-center .img-wrapper .cart-box {
    bottom: 35%;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
  .product-box:hover .img-block .first,
  .product-box:hover .img-wrapper .first,
  .product-wrap:hover .img-block .first,
  .product-wrap:hover .img-wrapper .first {
    opacity: 0;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
  .product-box:hover .img-block .back,
  .product-box:hover .img-wrapper .back,
  .product-wrap:hover .img-block .back,
  .product-wrap:hover .img-wrapper .back {
    opacity: 1;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    -webkit-transform: translateX(0);
            transform: translateX(0); }
  .product-box:hover .cart-info,
  .product-wrap:hover .cart-info {
    opacity: 1;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
    .product-box:hover .cart-info button,
    .product-wrap:hover .cart-info button {
      -webkit-animation: fadeInUp 300ms ease-in-out;
              animation: fadeInUp 300ms ease-in-out; }
    .product-box:hover .cart-info a:nth-child(2) i,
    .product-wrap:hover .cart-info a:nth-child(2) i {
      -webkit-animation: fadeInUp 500ms ease-in-out;
              animation: fadeInUp 500ms ease-in-out; }
    .product-box:hover .cart-info a:nth-child(3) i,
    .product-wrap:hover .cart-info a:nth-child(3) i {
      -webkit-animation: fadeInUp 700ms ease-in-out;
              animation: fadeInUp 700ms ease-in-out; }
    .product-box:hover .cart-info a:nth-child(4) i,
    .product-wrap:hover .cart-info a:nth-child(4) i {
      -webkit-animation: fadeInUp 1000ms ease-in-out;
              animation: fadeInUp 1000ms ease-in-out; }
  .product-box:hover .cart-wrap button,
  .product-wrap:hover .cart-wrap button {
    -webkit-animation: fadeInRight 300ms ease-in-out;
            animation: fadeInRight 300ms ease-in-out; }
  .product-box:hover .cart-wrap a:nth-child(2) i,
  .product-wrap:hover .cart-wrap a:nth-child(2) i {
    -webkit-animation: fadeInRight 500ms ease-in-out;
            animation: fadeInRight 500ms ease-in-out; }
  .product-box:hover .cart-wrap a:nth-child(3) i,
  .product-wrap:hover .cart-wrap a:nth-child(3) i {
    -webkit-animation: fadeInRight 700ms ease-in-out;
            animation: fadeInRight 700ms ease-in-out; }
  .product-box:hover .cart-wrap a:nth-child(4) i,
  .product-wrap:hover .cart-wrap a:nth-child(4) i {
    -webkit-animation: fadeInRight 1000ms ease-in-out;
            animation: fadeInRight 1000ms ease-in-out; }
  .product-box:hover .cart-wrap.cart-effect-left button,
  .product-wrap:hover .cart-wrap.cart-effect-left button {
    -webkit-animation: fadeInLeft 300ms ease-in-out;
            animation: fadeInLeft 300ms ease-in-out; }
  .product-box:hover .cart-wrap.cart-effect-left a:nth-child(2) i,
  .product-wrap:hover .cart-wrap.cart-effect-left a:nth-child(2) i {
    -webkit-animation: fadeInLeft 500ms ease-in-out;
            animation: fadeInLeft 500ms ease-in-out; }
  .product-box:hover .cart-wrap.cart-effect-left a:nth-child(3) i,
  .product-wrap:hover .cart-wrap.cart-effect-left a:nth-child(3) i {
    -webkit-animation: fadeInLeft 700ms ease-in-out;
            animation: fadeInLeft 700ms ease-in-out; }
  .product-box:hover .cart-wrap.cart-effect-left a:nth-child(4) i,
  .product-wrap:hover .cart-wrap.cart-effect-left a:nth-child(4) i {
    -webkit-animation: fadeInLeft 1000ms ease-in-out;
            animation: fadeInLeft 1000ms ease-in-out; }
  .product-box:hover .cart-detail,
  .product-wrap:hover .cart-detail {
    opacity: 1;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
    .product-box:hover .cart-detail button,
    .product-wrap:hover .cart-detail button {
      -webkit-animation: fadeInRight 300ms ease-in-out;
              animation: fadeInRight 300ms ease-in-out; }
    .product-box:hover .cart-detail a:nth-child(2) i,
    .product-wrap:hover .cart-detail a:nth-child(2) i {
      -webkit-animation: fadeInRight 500ms ease-in-out;
              animation: fadeInRight 500ms ease-in-out; }
    .product-box:hover .cart-detail a:nth-child(3) i,
    .product-wrap:hover .cart-detail a:nth-child(3) i {
      -webkit-animation: fadeInRight 700ms ease-in-out;
              animation: fadeInRight 700ms ease-in-out; }
    .product-box:hover .cart-detail a:nth-child(4) i,
    .product-wrap:hover .cart-detail a:nth-child(4) i {
      -webkit-animation: fadeInRight 1000ms ease-in-out;
              animation: fadeInRight 1000ms ease-in-out; }
  .product-box:hover .product-info .add-btn,
  .product-wrap:hover .product-info .add-btn {
    opacity: 1;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
    -webkit-animation: fadeInUp 500ms ease-in-out;
            animation: fadeInUp 500ms ease-in-out; }
  .product-box:hover .img-wrapper .cart-box,
  .product-wrap:hover .img-wrapper .cart-box {
    opacity: 1;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
    -webkit-animation: fadeInUp 400ms ease-in-out;
            animation: fadeInUp 400ms ease-in-out; }

.addtocart_count {
  position: relative; }
  .addtocart_count .product-box .product-detail {
    text-align: center; }
  .addtocart_count .product-box .cart-info {
    bottom: 40px;
    right: 10px; }
    .addtocart_count .product-box .cart-info a i {
      background-color: #e2e2e2;
      border-radius: 100%;
      margin: 10px 0;
      padding: 8px;
      font-size: 16px;
      color: #313131; }
  .addtocart_count .product-box .add-button {
    background-color: #efefef;
    color: black;
    text-align: center;
    font-size: 18px;
    text-transform: capitalize;
    width: 100%;
    padding: 5px 0;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    border: none;
    cursor: pointer; }
  .addtocart_count .product-box:hover .cart-info a:nth-child(1) i {
    -webkit-animation: fadeInRight 300ms ease-in-out;
            animation: fadeInRight 300ms ease-in-out; }
  .addtocart_count .product-box:hover .add-button {
    bottom: 0;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
  .addtocart_count .addtocart_btn {
    position: relative; }
    .addtocart_count .addtocart_btn .cart_qty {
      width: 100%; }
      .addtocart_count .addtocart_btn .cart_qty.qty-box {
        position: absolute;
        bottom: 0;
        display: none; }
        .addtocart_count .addtocart_btn .cart_qty.qty-box .input-group .form-control {
          width: 100%; }
          .addtocart_count .addtocart_btn .cart_qty.qty-box .input-group .form-control:focus {
            border-color: #efefef;
            -webkit-box-shadow: none;
                    box-shadow: none; }
        .addtocart_count .addtocart_btn .cart_qty.qty-box .input-group button {
          background: #efefef !important;
          position: absolute;
          height: 100%;
          z-index: 9; }
          .addtocart_count .addtocart_btn .cart_qty.qty-box .input-group button.quantity-left-minus {
            left: 0; }
          .addtocart_count .addtocart_btn .cart_qty.qty-box .input-group button.quantity-right-plus {
            right: 0; }
        .addtocart_count .addtocart_btn .cart_qty.qty-box .input-group button i {
          color: #000000; }
      .addtocart_count .addtocart_btn .cart_qty.open {
        display: block; }

.grid-products {
  margin-bottom: -30px; }
  .grid-products .product-box {
    margin-bottom: 30px; }

.bg-title .theme-card h5.title-border {
  padding: 10px;
  color: white;
  background-color: var(--theme-deafult);
  border-radius: 5px; }

.bg-title .theme-card .slick-prev {
  right: 30px; }
  .bg-title .theme-card .slick-prev:before {
    color: white;
    opacity: 1;
    font-size: 25px; }

.bg-title .theme-card .slick-next {
  right: 6px; }
  .bg-title .theme-card .slick-next:before {
    color: white;
    opacity: 1;
    font-size: 25px; }

.bg-title .theme-tab .bg-title-part {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 30px;
  margin-top: -6px;
  background-color: var(--theme-deafult);
  padding: 10px;
  border-radius: 5px; }
  .bg-title .theme-tab .bg-title-part .title-border {
    margin-bottom: 0;
    color: white;
    text-transform: capitalize; }
  .bg-title .theme-tab .bg-title-part .tab-title {
    margin-bottom: 0;
    margin-top: 0;
    margin-left: auto;
    text-align: right; }
    .bg-title .theme-tab .bg-title-part .tab-title li {
      font-size: 16px;
      padding-right: 0; }
      .bg-title .theme-tab .bg-title-part .tab-title li:first-child {
        padding-left: 0; }
    .bg-title .theme-tab .bg-title-part .tab-title a {
      color: rgba(255, 255, 255, 0.7); }
    .bg-title .theme-tab .bg-title-part .tab-title .current a {
      color: white; }

/*=====================
    11.Theme tab CSS start
==========================*/
.theme-tab {
  position: relative; }
  .theme-tab .tab-content {
    display: none; }
    .theme-tab .tab-content[style="display: block;"] .product-box,
    .theme-tab .tab-content[style="display: block;"] .tab-box {
      -webkit-animation: zoomIn 300ms ease-in-out;
              animation: zoomIn 300ms ease-in-out; }
    .theme-tab .tab-content .product-tab .tab-box {
      background-color: #ffffff;
      width: 100%;
      -webkit-box-flex: 0;
          -ms-flex: 0 0 25%;
              flex: 0 0 25%;
      max-width: calc(25% - 10px);
      margin: 0 5px 10px; }
      .theme-tab .tab-content .product-tab .tab-box:nth-last-child(-n+4) {
        margin: 0 5px 0; }
      .theme-tab .tab-content .product-tab .tab-box .product-box2 img {
        height: 250px;
        padding: 15px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease; }
      .theme-tab .tab-content .product-tab .tab-box .product-box2 .media .media-body .rating {
        margin-top: 0; }
        .theme-tab .tab-content .product-tab .tab-box .product-box2 .media .media-body .rating i {
          padding-right: 0; }
          .theme-tab .tab-content .product-tab .tab-box .product-box2 .media .media-body .rating i:nth-child(-n+4) {
            color: #ffa200; }
          .theme-tab .tab-content .product-tab .tab-box .product-box2 .media .media-body .rating i:last-child {
            color: #dddddd; }
      .theme-tab .tab-content .product-tab .tab-box .product-box2 .media .media-body a h6 {
        margin-right: 35px;
        line-height: 17px;
        margin-top: 5px;
        margin-bottom: 0; }
      .theme-tab .tab-content .product-tab .tab-box .product-box2 .media .media-body h4 {
        font-size: 20px;
        margin-top: 5px;
        font-weight: 700;
        color: #222222;
        margin-bottom: 0; }
      .theme-tab .tab-content .product-tab .tab-box .product-box2 .media .media-body .color-variant li {
        display: inline-block;
        height: 20px;
        width: 20px;
        border-radius: 100%;
        margin-right: 2px;
        margin-top: 20px;
        -webkit-transition: all 0.1s ease;
        transition: all 0.1s ease;
        margin-bottom: 0;
        cursor: pointer; }
      .theme-tab .tab-content .product-tab .tab-box:hover .product-box2 img {
        -webkit-transform: scale(1.03);
                transform: scale(1.03);
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease; }
  .theme-tab .tab-title,
  .theme-tab .tab-title2 {
    text-align: center;
    font-size: 18px;
    margin-bottom: 30px;
    margin-top: -6px; }
    .theme-tab .tab-title .current a,
    .theme-tab .tab-title2 .current a {
      color: var(--theme-deafult); }
    .theme-tab .tab-title li,
    .theme-tab .tab-title2 li {
      padding-left: 25px;
      padding-right: 25px; }
    .theme-tab .tab-title a,
    .theme-tab .tab-title2 a {
      color: #2d2a25;
      text-transform: uppercase; }
  .theme-tab .tab-title2 {
    font-size: 24px;
    font-weight: 700;
    text-transform: uppercase;
    margin-top: -8px; }
    .theme-tab .tab-title2:after {
      content: "";
      position: absolute;
      border: 1px solid #f1f5f4;
      width: 100%;
      left: 0;
      top: 17px;
      z-index: -1; }
    .theme-tab .tab-title2 .current {
      background-color: #ffffff; }
      .theme-tab .tab-title2 .current a {
        background-color: #ffffff; }

.tab-bg {
  position: relative;
  z-index: 1;
  padding: 70px 50px 60px 50px; }
  .tab-bg.tab-grey-bg {
    background-color: #f9f9f9; }
  .tab-bg:after {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: var(--theme-deafult);
    opacity: 0.09;
    z-index: -1; }
  .tab-bg .theme-tab .tab-title {
    margin-bottom: 30px; }

/*=====================
    12.Banner CSS start
==========================*/
.full-banner {
  position: relative;
  background-size: cover;
  background-repeat: no-repeat;
  padding-top: 190px;
  padding-bottom: 190px;
  background-position: center; }
  .full-banner.advertise-banner {
    background-image: url("../images/fashion/banner.jpg"); }
  .full-banner.parallax-layout {
    padding-top: 350px;
    padding-bottom: 350px; }
    .full-banner.parallax-layout .banner-contain h4 {
      color: #7f786d; }
  .full-banner.banner-layout-3 .banner-contain h4 {
    color: #ffffff; }
  .full-banner.banner-layout-3 .banner-contain h3 {
    color: #ffffff;
    margin-top: 10px; }
  .full-banner.banner-layout-3 .banner-contain .color {
    color: var(--theme-deafult);
    line-height: 1; }
  .full-banner.parallax {
    background-attachment: fixed; }
  .full-banner.p-left .banner-contain {
    float: left; }
  .full-banner.p-right .banner-contain {
    float: right; }
  .full-banner.p-center .banner-contain {
    left: 0;
    right: 0;
    margin: 0 auto; }
  .full-banner.feature-banner {
    padding: 50px 0; }
    .full-banner.feature-banner h2 {
      text-align: center;
      color: #ffffff;
      margin-bottom: 180px;
      margin-top: -7px; }
    .full-banner.feature-banner .feature-object,
    .full-banner.feature-banner .feature-object-right {
      text-align: right;
      margin-bottom: -5px; }
      .full-banner.feature-banner .feature-object li,
      .full-banner.feature-banner .feature-object-right li {
        margin-bottom: 55px;
        margin-right: 50px; }
        .full-banner.feature-banner .feature-object li .media img,
        .full-banner.feature-banner .feature-object-right li .media img {
          border-radius: 100%;
          border: 1px solid white;
          margin-left: 15px;
          -webkit-transition: all 0.5s ease;
          transition: all 0.5s ease; }
        .full-banner.feature-banner .feature-object li .media .media-body,
        .full-banner.feature-banner .feature-object-right li .media .media-body {
          text-align: right;
          margin-top: 18px; }
          .full-banner.feature-banner .feature-object li .media .media-body h4,
          .full-banner.feature-banner .feature-object li .media .media-body p,
          .full-banner.feature-banner .feature-object-right li .media .media-body h4,
          .full-banner.feature-banner .feature-object-right li .media .media-body p {
            color: white; }
          .full-banner.feature-banner .feature-object li .media .media-body h4,
          .full-banner.feature-banner .feature-object-right li .media .media-body h4 {
            font-size: 20px; }
          .full-banner.feature-banner .feature-object li .media .media-body p,
          .full-banner.feature-banner .feature-object-right li .media .media-body p {
            margin-bottom: 0; }
        .full-banner.feature-banner .feature-object li:hover .media img,
        .full-banner.feature-banner .feature-object-right li:hover .media img {
          background-color: white;
          -webkit-transition: all 0.5s ease;
          transition: all 0.5s ease;
          -webkit-transform: scale(1.05);
                  transform: scale(1.05); }
        .full-banner.feature-banner .feature-object li:nth-child(2),
        .full-banner.feature-banner .feature-object-right li:nth-child(2) {
          padding-right: 30px; }
        .full-banner.feature-banner .feature-object li:nth-child(3),
        .full-banner.feature-banner .feature-object-right li:nth-child(3) {
          padding-right: 60px;
          margin-bottom: 0; }
    .full-banner.feature-banner .feature-object-right {
      text-align: left;
      margin-left: 50px; }
      .full-banner.feature-banner .feature-object-right li .media img {
        margin-left: 0;
        margin-right: 15px; }
      .full-banner.feature-banner .feature-object-right li .media .media-body {
        text-align: left; }
      .full-banner.feature-banner .feature-object-right li:nth-child(2) {
        padding-right: 0;
        padding-left: 30px; }
      .full-banner.feature-banner .feature-object-right li:nth-child(3) {
        padding-right: 0;
        padding-left: 60px; }
    .full-banner.feature-banner .center-img {
      position: absolute;
      bottom: -112px;
      left: 50%;
      margin: 0 auto;
      -webkit-transform: translateX(-50%);
              transform: translateX(-50%); }
    .full-banner.feature-banner .banner-decor .left-img {
      left: 50px;
      position: absolute;
      top: 0;
      -webkit-animation: movebounce 4.9s linear infinite;
              animation: movebounce 4.9s linear infinite; }
    .full-banner.feature-banner .banner-decor .right-img {
      right: 50px;
      position: absolute;
      top: 0;
      -webkit-animation: movebounce 4.9s linear infinite;
              animation: movebounce 4.9s linear infinite; }

@-webkit-keyframes movebounce {
  0% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px); }
  50% {
    -webkit-transform: translateY(20px);
            transform: translateY(20px); }
  100% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px); } }

@keyframes movebounce {
  0% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px); }
  50% {
    -webkit-transform: translateY(20px);
            transform: translateY(20px); }
  100% {
    -webkit-transform: translateY(0px);
            transform: translateY(0px); } }
  .full-banner .banner-contain .btn-solid,
  .full-banner .banner-contain .btn-outline {
    margin-top: 20px; }
  .full-banner .banner-contain h2 {
    font-size: 100px;
    font-weight: 700;
    color: var(--theme-deafult);
    text-transform: uppercase;
    margin-top: -15px; }
  .full-banner .banner-contain h3 {
    font-size: 60px;
    color: #333333;
    text-transform: uppercase;
    font-weight: 700; }
  .full-banner .banner-contain h4 {
    font-size: 24px;
    color: #777777;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5em;
    padding-top: 10px;
    margin-bottom: -5px;
    line-height: 1.3; }
  .full-banner .banner-contain.christmas-contain .btn-solid,
  .full-banner .banner-contain.christmas-contain .btn-outline {
    margin-top: calc(20px + (65 - 20) * ((100vw - 320px) / (1920 - 320))); }
  .full-banner .banner-contain.christmas-contain h2 {
    font-size: calc(24px + (70 - 24) * ((100vw - 320px) / (1920 - 320)));
    font-weight: 700;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 0;
    margin-top: 0; }
  .full-banner .banner-contain.christmas-contain h3 {
    font-size: calc(20px + (30 - 20) * ((100vw - 320px) / (1920 - 320)));
    color: #ffffff;
    text-transform: capitalize;
    font-weight: 700;
    margin-bottom: 15px;
    margin-top: -6px; }
  .full-banner .banner-contain.christmas-contain h4 {
    font-size: calc(18px + (24 - 18) * ((100vw - 320px) / (1920 - 320)));
    color: #ffffff;
    font-weight: 600;
    text-transform: capitalize;
    letter-spacing: 0.07em;
    padding-top: 10px;
    margin-bottom: -5px;
    line-height: 1.3; }
    .full-banner .banner-contain.christmas-contain h4 span {
      color: var(--theme-deafult); }
  .full-banner .santa-img {
    position: absolute;
    bottom: -62px;
    left: 28px; }
    .full-banner .santa-img img {
      display: inline-block;
      -webkit-animation-name: dance;
              animation-name: dance;
      -webkit-animation-duration: 2s;
              animation-duration: 2s;
      -webkit-animation-iteration-count: infinite;
              animation-iteration-count: infinite;
      -webkit-transition-timing-function: cubic-bezier(0.6, 0, 0.735, 0.045);
      -webkit-transition-timing-function: cubic-bezier(0.6, -0.28, 0.735, 0.045);
      transition-timing-function: cubic-bezier(0.6, -0.28, 0.735, 0.045); }
  .full-banner .decor {
    position: absolute;
    top: -150px;
    left: 0; }

@-webkit-keyframes dance {
  0% {
    -webkit-transform: rotate(10deg);
    transform: rotate(10deg); }
  16.66%,
  49.98% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg); }
  32.32% {
    -webkit-transform: rotate(-5deg);
    transform: rotate(-5deg); }
  66.64%,
  100% {
    -webkit-transform: rotate(10deg);
    transform: rotate(10deg); }
  83.8% {
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg); } }

@keyframes dance {
  0% {
    -webkit-transform: rotate(10deg);
    transform: rotate(10deg); }
  16.66%,
  49.98% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg); }
  32.32% {
    -webkit-transform: rotate(-5deg);
    transform: rotate(-5deg); }
  66.64%,
  100% {
    -webkit-transform: rotate(10deg);
    transform: rotate(10deg); }
  83.8% {
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg); } }

.parallax-cls section:nth-child(odd) .full-banner {
  background-position: right; }

.parallax-cls section:nth-child(even) .full-banner {
  background-position: left; }

.parallax-cls section .banner-contain {
  margin-top: -12px; }

.pet-parallax {
  position: relative; }
  .pet-parallax .pet-decor {
    position: absolute;
    left: 110px;
    bottom: -164px; }
  .pet-parallax .banner-contain h4,
  .pet-parallax .banner-contain h3,
  .pet-parallax .banner-contain p {
    color: #212121; }
  .pet-parallax .banner-contain p {
    max-width: 75%;
    margin: 0 auto;
    line-height: 22px;
    font-size: 16px;
    letter-spacing: 0.04em; }
  .pet-parallax .banner-contain h4 {
    letter-spacing: 0.05em;
    padding-top: 0 !important;
    margin-bottom: 0;
    line-height: 1.3;
    margin-top: -7px; }
  .pet-parallax .banner-contain h3 {
    margin: 15px 0;
    font-size: 48px; }
  .pet-parallax .full-banner {
    padding-top: 130px;
    padding-bottom: 130px;
    background-blend-mode: overlay; }

.advertise-section .full-banner {
  padding-bottom: 105px;
  padding-top: 105px;
  background-position: top; }
  .advertise-section .full-banner .banner-contain {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 40px 0;
    width: 90%;
    border: 3px solid var(--theme-deafult); }
    .advertise-section .full-banner .banner-contain h2 {
      font-size: 75px; }

/*=====================
    13.Collection Banner CSS start
==========================*/
.banner-text-white .collection-banner .contain-banner h2 {
  color: #ffffff; }

.collection-banner {
  position: relative;
  overflow: hidden; }
  .collection-banner .img-part {
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    width: 100%; }
  .collection-banner.p-left .contain-banner {
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start; }
  .collection-banner.p-right .contain-banner {
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end; }
  .collection-banner.p-center .contain-banner {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center; }
  .collection-banner .contain-banner {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    padding-left: 70px;
    padding-right: 70px; }
    .collection-banner .contain-banner.banner-3 {
      padding-left: 50px;
      padding-right: 50px; }
      .collection-banner .contain-banner.banner-3 h2 {
        font-size: 36px;
        letter-spacing: 0.05em;
        color: white;
        margin-top: 5px;
        margin-bottom: -6px; }
      .collection-banner .contain-banner.banner-3 h4 {
        color: #ffffff; }
    .collection-banner .contain-banner.banner-4 {
      padding-left: 50px;
      padding-right: 50px; }
      .collection-banner .contain-banner.banner-4 h2 {
        font-size: 28px;
        letter-spacing: 0.03em;
        color: white;
        margin-bottom: -6px; }
    .collection-banner .contain-banner h4 {
      color: var(--theme-deafult);
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 0; }
    .collection-banner .contain-banner h2 {
      font-size: 60px;
      font-weight: 700;
      color: #222222;
      letter-spacing: 0.1em;
      margin-bottom: -6px; }
  .collection-banner.christmas-banner .contain-banner {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    padding-left: calc(30px + (60 - 30) * ((100vw - 320px) / (1920 - 320)));
    padding-right: calc(30px + (60 - 30) * ((100vw - 320px) / (1920 - 320))); }
    .collection-banner.christmas-banner .contain-banner h4 {
      font-size: calc(16px + (18 - 16) * ((100vw - 320px) / (1920 - 320)));
      color: #ffffff;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 0; }
    .collection-banner.christmas-banner .contain-banner h2 {
      font-size: calc(24px + (40 - 24) * ((100vw - 320px) / (1920 - 320)));
      font-weight: 700;
      color: #ffffff;
      letter-spacing: 0.1em;
      margin-bottom: -6px; }
  .collection-banner:hover .img-part {
    -webkit-transform: scale(1.05);
            transform: scale(1.05);
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }

.banner-furniture {
  padding-left: 15px;
  padding-right: 15px; }
  .banner-furniture .collection-banner .contain-banner.banner-3 h2 {
    color: #222222;
    margin-bottom: 0; }
  .banner-furniture .collection-banner .contain-banner.banner-3 h4 {
    color: var(--theme-deafult); }

.banner-goggles .collection-banner .contain-banner.banner-3 h2 {
  color: #222222; }

.banner-goggles .collection-banner .contain-banner.banner-3 h4 {
  color: var(--theme-deafult); }

.banner-top-cls {
  margin-top: 30px; }

.banner-6 .collection-banner .contain-banner.banner-3 h2 {
  color: #222222; }

.absolute_banner {
  margin-bottom: 22px; }
  .absolute_banner .collection-banner {
    overflow: unset; }
    .absolute_banner .collection-banner .absolute-contain {
      position: absolute;
      background-color: #ffffff;
      bottom: -22px;
      left: 50%;
      -webkit-transform: translateX(-50%);
              transform: translateX(-50%);
      padding: 20px;
      -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.35);
              box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.35);
      min-width: 85%;
      text-align: center;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }
      .absolute_banner .collection-banner .absolute-contain h3 {
        color: var(--theme-deafult);
        text-transform: capitalize;
        margin-top: -5px;
        font-weight: 700; }
      .absolute_banner .collection-banner .absolute-contain h4 {
        color: #000000;
        margin-bottom: 0; }
    .absolute_banner .collection-banner:hover img {
      -webkit-transform: none;
              transform: none; }




/*=====================
  22.Inner pages CSS start
==========================*/
.breadcrumb-section {
  background-color: #f8f8f8;
  padding: 30px 0; }
  .breadcrumb-section .page-title {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center; }
    .breadcrumb-section .page-title h2 {
      font-size: 16px;
      margin-bottom: 0; }
  .breadcrumb-section .breadcrumb {
    background-color: transparent;
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
    text-transform: uppercase;
    font-size: 14px;
    color: #555555;
    font-weight: 600;
    margin: 0;
    padding-right: 0; }
    .breadcrumb-section .breadcrumb a {
      color: #555555;
      font-weight: 600; }




.product-wrapper-grid.list-view .product-wrap .product-info {
  text-align: left;
  -ms-flex-item-align: center;
      align-self: center;
  padding-left: 15px; }

.product-wrapper-grid.list-view .product-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-bottom: 0; }
  .product-wrapper-grid.list-view .product-box .img-wrapper,
  .product-wrapper-grid.list-view .product-box .img-block {
    width: 25%; }
  .product-wrapper-grid.list-view .product-box .product-detail {
    padding-left: 15px;
    -ms-flex-item-align: center;
        align-self: center;
    text-align: left !important; }
    .product-wrapper-grid.list-view .product-box .product-detail .rating {
      margin-top: 0; }
    .product-wrapper-grid.list-view .product-box .product-detail p {
      display: block !important;
      margin-bottom: 5px;
      line-height: 18px; }
    .product-wrapper-grid.list-view .product-box .product-detail .color-variant {
      padding-top: 10px; }
    .product-wrapper-grid.list-view .product-box .product-detail h6 {
      font-weight: 700; }






.qty-box .input-group {
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center; }
  .qty-box .input-group span button {
    background: #ffffff !important;
    border: 1px solid #ced4da; }
  .qty-box .input-group .form-control {
    text-align: center;
    width: 80px;
    -webkit-box-flex: unset;
        -ms-flex: unset;
            flex: unset; }
  .qty-box .input-group button {
    background-color: transparent;
    border: 0;
    color: #777777;
    cursor: pointer;
    padding-left: 12px;
    font-size: 12px;
    font-weight: 900;
    line-height: 1; }
    .qty-box .input-group button i {
      font-weight: 900;
      color: #222222; }
  .qty-box .input-group .icon {
    padding-right: 0; }


.product-right p {
  margin-bottom: 0;
  line-height: 1.5em; }

.product-right .product-title {
  color: #222222;
  text-transform: capitalize;
  font-weight: 700;
  margin-bottom: 0; }

.product-right .border-product {
  padding-top: 15px;
  padding-bottom: 20px;
  border-top: 1px dashed #dddddd; }

.product-right h2 {
  text-transform: uppercase;
  margin-bottom: 15px;
  font-size: 25px;
  line-height: 1.2em; }

.product-right h3 {
  font-size: 26px;
  color: #222222;
  margin-bottom: 15px; }

.product-right h4 {
  font-size: 16px;
  margin-bottom: 7px; }
  .product-right h4 del {
    color: #777777; }
  .product-right h4 span {
    padding-left: 5px;
    color: var(--theme-deafult); }

.product-right .color-variant {
  margin-bottom: 10px; }
  .product-right .color-variant li {
    height: 30px;
    width: 30px;
    cursor: pointer; }

.product-right .product-buttons {
  margin-bottom: 20px; }
  .product-right .product-buttons .btn-solid,
  .product-right .product-buttons .btn-outline {
    padding: 7px 25px; }
  .product-right .product-buttons a:last-child {
    margin-left: 10px; }

.product-right .product-description h6 span {
  float: right; }

.product-right .product-description .qty-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: 10px; }
  .product-right .product-description .qty-box .input-group {
    -webkit-box-pack: unset;
        -ms-flex-pack: unset;
            justify-content: unset;
    width: unset; }
    .product-right .product-description .qty-box .input-group .form-control {
      border-right: none; }

.product-right .size-box {
  margin-top: 10px;
  margin-bottom: 10px; }
  .product-right .size-box ul li {
    height: 35px;
    width: 35px;
    border-radius: 50%;
    margin-right: 10px;
    cursor: pointer;
    border: 1px solid #f7f7f7;
    text-align: center; }
    .product-right .size-box ul li a {
      color: #222222;
      font-size: 18px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      height: 100%; }
    .product-right .size-box ul li.active {
      background-color: #f7f7f7; }

.product-right .product-icon {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }
  .product-right .product-icon .product-social {
    margin-top: 5px; }
    .product-right .product-icon .product-social li {
      padding-right: 30px; }
      .product-right .product-icon .product-social li a {
        color: #333333;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease; }
        .product-right .product-icon .product-social li a i {
          font-size: 18px; }
        .product-right .product-icon .product-social li a:hover {
          color: var(--theme-deafult); }
      .product-right .product-icon .product-social li:last-child {
        padding-right: 0; }
  .product-right .product-icon .wishlist-btn {
    background-color: transparent;
    border: none; }
    .product-right .product-icon .wishlist-btn i {
      border-left: 1px solid #dddddd;
      font-size: 18px;
      padding-left: 10px;
      margin-left: 5px;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }
    .product-right .product-icon .wishlist-btn span {
      padding-left: 10px;
      font-size: 18px; }
    .product-right .product-icon .wishlist-btn:hover i {
      color: var(--theme-deafult);
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }

.product-right .payment-card-bottom {
  margin-top: 10px; }
  .product-right .payment-card-bottom ul li {
    padding-right: 10px; }

.product-right .timer {
  margin-top: 10px;
  background-color: #f7f7f7; }
  .product-right .timer p {
    color: #222222; }

.product-right.product-form-box {
  text-align: center;
  border: 1px solid #dddddd;
  padding: 20px; }
  .product-right.product-form-box .product-description .qty-box {
    margin-bottom: 5px; }
    .product-right.product-form-box .product-description .qty-box .input-group {
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      width: 100%; }
  .product-right.product-form-box .product-buttons {
    margin-bottom: 0; }
  .product-right.product-form-box .timer {
    margin-bottom: 10px;
    text-align: left; }

.single-product-tables {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-top: 20px; }
  .single-product-tables table {
    width: 20%; }
    .single-product-tables table tr {
      height: 35px; }
      .single-product-tables table tr td:first-child {
        font-weight: 600; }
  .single-product-tables.detail-section {
    margin-top: 0; }
    .single-product-tables.detail-section table {
      width: 55%; }



.product-related h2 {
  color: #222222;
  padding-bottom: 20px;
  border-bottom: 1px solid #dddada;
  margin-bottom: 20px; }

.rating {
  margin-top: 0; }
  .rating i {
    padding-right: 5px; }
    .rating i:nth-child(-n+4) {
      color: #ffa200; }
    .rating i:last-child {
      color: #dddddd; }
  .rating .three-star {
    padding-bottom: 5px; }
    .rating .three-star i {
      color: #acacac; }
      .rating .three-star i:nth-child(-n+3) {
        color: #ffd200; }

.tab-product,
.product-full-tab {
  padding-top: 30px; }
  .tab-product .nav-material.nav-tabs,
  .product-full-tab .nav-material.nav-tabs {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap; }
    .tab-product .nav-material.nav-tabs .nav-item .nav-link,
    .product-full-tab .nav-material.nav-tabs .nav-item .nav-link {
      color: #212121;
      text-align: center;
      padding: 0 15px 20px 15px;
      text-transform: uppercase;
      border: 0; }
    .tab-product .nav-material.nav-tabs .nav-item .material-border,
    .product-full-tab .nav-material.nav-tabs .nav-item .material-border {
      border-bottom: 2px solid var(--theme-deafult);
      opacity: 0; }
    .tab-product .nav-material.nav-tabs .nav-link.active,
    .product-full-tab .nav-material.nav-tabs .nav-link.active {
      color: var(--theme-deafult); }
      .tab-product .nav-material.nav-tabs .nav-link.active ~ .material-border,
      .product-full-tab .nav-material.nav-tabs .nav-link.active ~ .material-border {
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        opacity: 1; }
  .tab-product .theme-form input,
  .product-full-tab .theme-form input {
    border-color: #dddddd;
    font-size: 15px;
    padding: 15px 25px;
    margin-bottom: 15px;
    height: inherit;
    text-align: left; }
  .tab-product .theme-form .btn-solid,
  .tab-product .theme-form .btn-outline,
  .product-full-tab .theme-form .btn-solid,
  .product-full-tab .theme-form .btn-outline {
    margin: 0 auto; }
  .tab-product .theme-form textarea,
  .product-full-tab .theme-form textarea {
    border-color: #dddddd;
    font-size: 15px;
    padding: 17px 25px;
    margin-bottom: 15px;
    height: inherit; }
  .tab-product .tab-content.nav-material p,
  .product-full-tab .tab-content.nav-material p {
    padding: 20px;
    margin-bottom: -8px;
    line-height: 2;
    letter-spacing: 0.05em; }
  .tab-product .tab-content.nav-material .media,
  .product-full-tab .tab-content.nav-material .media {
    margin-top: 20px; }
  .tab-product .title,
  .product-full-tab .title {
    padding-right: 45px;
    color: var(--theme-deafult);
    padding-bottom: 20px; }
  .tab-product .theme-slider .slick-arrow,
  .product-full-tab .theme-slider .slick-arrow {
    top: -45px;
    height: auto; }
    .tab-product .theme-slider .slick-arrow :before,
    .product-full-tab .theme-slider .slick-arrow :before {
      color: #000000;
      font-size: 18px; }
  .tab-product .product-box,
  .product-full-tab .product-box {
    position: relative;
    margin: 5px; }
    .tab-product .product-box:hover,
    .product-full-tab .product-box:hover {
      -webkit-box-shadow: 0 0 12px 0 #dddddd;
              box-shadow: 0 0 12px 0 #dddddd; }
      .tab-product .product-box:hover .lbl-1,
      .product-full-tab .product-box:hover .lbl-1 {
        opacity: 1;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease; }
      .tab-product .product-box:hover .lbl-2,
      .product-full-tab .product-box:hover .lbl-2 {
        opacity: 1;
        -webkit-animation: flipInY 1000ms ease-in-out;
                animation: flipInY 1000ms ease-in-out; }
      .tab-product .product-box:hover .color-variant li,
      .product-full-tab .product-box:hover .color-variant li {
        opacity: 1 !important;
        -webkit-animation: fadeInUp 500ms ease-in-out;
                animation: fadeInUp 500ms ease-in-out; }
    .tab-product .product-box .img-block,
    .product-full-tab .product-box .img-block {
      min-height: unset; }
    .tab-product .product-box .cart-info,
    .product-full-tab .product-box .cart-info {
      position: absolute;
      padding: 10px 0;
      top: 25%;
      right: 15px;
      width: 40px;
      margin-right: 0; }
      .tab-product .product-box .cart-info i,
      .product-full-tab .product-box .cart-info i {
        padding-right: 0; }
      .tab-product .product-box .cart-info a,
      .tab-product .product-box .cart-info button,
      .product-full-tab .product-box .cart-info a,
      .product-full-tab .product-box .cart-info button {
        color: #333333;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        background-color: #ffffff;
        height: 35px;
        width: 35px;
        margin: 7px 0;
        border-radius: 100%;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
        border: 0;
        -webkit-box-shadow: 0 0 12px 0 #dddddd;
                box-shadow: 0 0 12px 0 #dddddd; }
        .tab-product .product-box .cart-info a :hover,
        .tab-product .product-box .cart-info button :hover,
        .product-full-tab .product-box .cart-info a :hover,
        .product-full-tab .product-box .cart-info button :hover {
          -webkit-transition: all 0.3s ease;
          transition: all 0.3s ease;
          color: var(--theme-deafult); }
    .tab-product .product-box .lbl-1,
    .product-full-tab .product-box .lbl-1 {
      background-color: var(--theme-deafult);
      padding: 2px 20px 2px 10px;
      display: inline-block;
      text-align: center;
      color: #ffffff;
      position: absolute;
      left: 0;
      top: 15px;
      font-size: 14px;
      line-height: 1.5;
      opacity: 0; }
      .tab-product .product-box .lbl-1:before,
      .product-full-tab .product-box .lbl-1:before {
        content: "";
        position: absolute;
        right: 0;
        top: 0;
        width: 0;
        height: 0;
        border-top: 12px solid var(--theme-deafult);
        border-bottom: 13px solid var(--theme-deafult);
        border-right: 7px solid #ffffff; }
    .tab-product .product-box .lbl-2,
    .product-full-tab .product-box .lbl-2 {
      font-size: 14px;
      top: 15px;
      position: absolute;
      right: 10px;
      color: #333333;
      font-weight: 600;
      text-transform: capitalize;
      opacity: 0; }
    .tab-product .product-box a,
    .product-full-tab .product-box a {
      color: #0072bb;
      font-size: 15px;
      font-weight: 700;
      letter-spacing: 1px; }
    .tab-product .product-box .color-variant,
    .product-full-tab .product-box .color-variant {
      position: absolute;
      top: -35px;
      width: 100%; }
    .tab-product .product-box .slick-slide img,
    .product-full-tab .product-box .slick-slide img {
      display: block; }
    .tab-product .product-box .product-details,
    .product-full-tab .product-box .product-details {
      position: relative; }
      .tab-product .product-box .product-details .color-variant,
      .product-full-tab .product-box .product-details .color-variant {
        position: absolute;
        top: -35px;
        width: 100%; }
        .tab-product .product-box .product-details .color-variant li,
        .product-full-tab .product-box .product-details .color-variant li {
          opacity: 0;
          display: inline-block;
          height: 15px;
          width: 15px;
          border-radius: 100%;
          margin: 0 3px;
          -webkit-transition: all 0.3s ease;
          transition: all 0.3s ease;
          cursor: pointer; }
      .tab-product .product-box .product-details h6,
      .product-full-tab .product-box .product-details h6 {
        color: #333333;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: capitalize; }
      .tab-product .product-box .product-details .price,
      .product-full-tab .product-box .product-details .price {
        padding-bottom: 10px;
        font-size: 16px;
        color: var(--theme-deafult); }

.product-full-tab {
  padding-top: 70px; }


.product_image_4 > div:nth-last-child(-n+2) {
  margin-top: 25px; }

.quick-view {
  width: 100%;
  max-width: 1080px;
  max-height: 600px;
  position: relative; }


/*=====================
    29.Responsive CSS start
==========================*/
@media (min-width: 1630px) {
  body.christmas .container {
    max-width: 1600px; } }

@media (max-width: 1630px) {
  body.christmas .home-slider .slider-details {
    width: 400px;
    height: 400px; } }

@media (min-width: 1430px) {
  .container {
    max-width: 1400px; } }

@media (max-width: 1430px) {
  header.left-header .top-header {
    padding-left: 0; }
    header.left-header .top-header .header-contact {
      display: none; }
  header.left-header .sidenav {
    left: -300px; }
    header.left-header .sidenav.open-side {
      left: 0; }
    header.left-header .sidenav .sidebar-back {
      display: block;
      color: black;
      border-bottom: 1px dashed #dddddd; }
    header.left-header .sidenav .brand-logo {
      display: none; }
    header.left-header .sidenav .left-sidebar_center {
      padding: 0 0 25px 25px; }
  header.left-header .main-menu .menu-left .navbar {
    display: block; }
  header.left-header .main-menu .menu-left .mobile-logo {
    display: block;
    border: none; }
  header.left-header .search-overlay {
    padding-left: 0; }
  .blog-section .review-box .review-content p {
    margin-bottom: 35px; }
  .left-sidebar_space {
    padding-left: 0; }
  .banner-slider .height-banner {
    height: unset; }
  .box-product .theme-card .offer-slider .media .media-body .rating i {
    padding-right: 0; }
  .box-product .full-box .theme-card .offer-slider .product-box2 .media .media-body h4 {
    font-size: 16px; }
  .pet-parallax .pet-decor {
    left: 60px;
    bottom: -125px; }
    .pet-parallax .pet-decor img {
      width: 240px; }
  .tools_slider .home-slider .slider-contain {
    margin-left: 80px; }
  .tools_slider .home-slider .home .tools-parts img,
  .tools_slider .home-slider .home .tools-parts1 img {
    width: 250px; }
  .tools_slider .home-slider .home .tools-parts {
    right: 0; }
  .tools_slider .home-slider .home .tools-parts1 {
    right: 10%; }
  .tools_slider .home-slider .home #tools-move2 {
    right: 7%; }
  .collection-product-wrapper .product-top-filter .product-filter-content .search-count {
    width: 100%;
    border-left: 1px solid #dddddd;
    border-bottom: 1px solid #dddddd;
    text-align: center; }
  .collection-product-wrapper .product-top-filter .product-filter-content .collection-view {
    width: 20%;
    padding-right: 0 !important;
    border-left: 1px solid #dddddd; }
  .collection-product-wrapper .product-top-filter .product-filter-content .collection-grid-view {
    padding: 20px !important;
    padding-left: 0 !important;
    width: 20%; }
    .collection-product-wrapper .product-top-filter .product-filter-content .collection-grid-view ul li:last-child {
      display: none; }
  .collection-product-wrapper .product-top-filter .product-filter-content .product-page-filter {
    border-right: 1px solid #dddddd;
    width: 30%; }
  .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view {
    width: 30%; }
  .collection-product-wrapper .product-top-filter .popup-filter .collection-view {
    width: 10%; }
  .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view {
    width: 25%; }
  .cart-section .cart-buttons > div:last-child {
    padding-right: 38px; }
  .cart-section tbody tr td {
    min-width: 175px; }
    .cart-section tbody tr td .qty-box .input-group .form-control {
      width: 75px; }
  .cart-section tfoot tr td {
    padding-right: 41px; }
  .product-right .product-icon .product-social li {
    padding-right: 10px; }
  .product-form-box .timer {
    padding-left: 17px; }
    .product-form-box .timer span {
      width: 55px; }
  .rtl .cart-section .cart-buttons > div:last-child,
  .rtl .wishlist-section .cart-buttons > div:last-child {
    padding-left: 41px; }
  .rtl .collection-product-wrapper .product-filter-content .collection-view {
    border-left: none;
    border-right: 1px solid #dddddd; }
  .rtl .collection-product-wrapper .product-filter-content .product-page-filter {
    border-left: 1px solid #dddddd;
    border-right: none; }
  .rtl .collection-product-wrapper .product-top-filter .product-filter-content .search-count {
    border-right: 1px solid #dddddd;
    padding-right: 20px; }
    .rtl .collection-product-wrapper .product-top-filter .product-filter-content .search-count h5 {
      text-align: center; }
  .rtl .product-right .product-icon .product-social li {
    padding-left: 10px; }
  .rtl header.left-header .sidenav {
    right: -300px;
    left: unset; }
    .rtl header.left-header .sidenav.open-side {
      right: 0;
      left: unset; }
  .rtl header.left-header .top-header {
    padding-right: 0; }
  .rtl .left-sidebar_space {
    padding-right: 0;
    padding-left: 0; }
  .rtl .loader_skeleton .left-sidebar_space {
    padding-right: 0; }
  .dark .collection-product-wrapper .product-top-filter .product-filter-content .collection-view {
    border-color: #404040; }
  .dark .collection-product-wrapper .product-top-filter .product-filter-content .product-page-filter {
    border-color: #404040; } }

@media (max-width: 1430px) and (min-width: 1368px) {
  .banner-timer .timer {
    margin-top: 45px; } }

@media (max-width: 1430px) and (min-width: 1200px) {
  .layout3-menu {
    max-width: 100%; }
    .layout3-menu .main-menu .menu-left .navbar {
      padding: 40px 10px 40px 0; }
    .layout3-menu .pixelstrap > a {
      padding-right: 38px; }
  .portfolio-section.metro-section .product-box .cart-wrap a i {
    padding: 5px; }
  .portfolio-section.metro-section .product-box .cart-wrap i {
    font-size: 14px; }
  .portfolio-section.metro-section .product-box .cart-wrap button i {
    padding: 5px; }
  .rtl .layout3-menu .main-menu .menu-left .navbar {
    padding: 40px 0 40px 35px; } }

@media (max-width: 1367px) {
  h2 {
    font-size: 32px; }
  .title1 .title-inner1 {
    padding-bottom: 10px; }
    .title1 .title-inner1:after {
      height: 2px; }
  .title3 .line {
    height: 3px; }
    .title3 .line:after, .title3 .line:before {
      height: 3px; }
  .title3 .title-inner3 {
    margin-bottom: 10px; }
  .title4 .title-inner4 {
    padding-bottom: 15px; }
  .title1.title5 hr[role="tournament6"] {
    margin: 10px auto 30px auto; }
  hr.style1 {
    height: 1px;
    margin-top: 7px;
    margin-bottom: 7px; }
  .home-slider .slider-details {
    right: 14%; }
  .home-slider:hover .slick-prev,
  .home-slider:hover .slick-next {
    -webkit-transform: scale(1.8);
            transform: scale(1.8); }
  .product-box .product-detail .rating i,
  .product-box .product-info .rating i,
  .product-wrap .product-detail .rating i,
  .product-wrap .product-info .rating i {
    padding-right: 0; }
  .blog-details h4 {
    margin-top: 20px; }
  .blog-details p {
    font-size: 16px; }
  .service-block h4 {
    font-size: 16px;
    margin-bottom: 5px; }
  .banner-timer {
    background-position: right; }
    .banner-timer .banner-text h2 {
      font-size: 28px; }
  .collection-product-wrapper .product-wrapper-grid .product-five {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33%;
            flex: 0 0 33.33%;
    max-width: 33.33%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px; }
  .subscribe-form .form-control {
    width: 215px; }
  .category-bg .image-block.even:after {
    bottom: 91%; }
  .category-bg .contain-block h2 {
    font-size: 30px; }
  .category-bg .contain-block.even:after {
    top: 91%; }
  .category-bg .contain-block .category-btn {
    margin-bottom: 20px;
    margin-top: 20px; }
  .category-bg .contain-block:after {
    bottom: 91%; }
  .full-banner .banner-contain h2 {
    font-size: 90px; }
  .full-banner .banner-contain h3 {
    font-size: 55px; }
  .full-banner .banner-contain h4 {
    font-size: 24px;
    padding-top: 8px; }
  .full-banner .banner-contain .color {
    padding-top: 0; }
  .collection-banner .contain-banner.banner-3 {
    padding-left: 45px;
    padding-right: 45px; }
    .collection-banner .contain-banner.banner-3 h2 {
      font-size: 30px; }
  .collection-banner .contain-banner.banner-4 {
    padding-left: 45px;
    padding-right: 45px; }
    .collection-banner .contain-banner.banner-4 h2 {
      font-size: 28px; }
  .collection-banner .contain-banner h2 {
    font-size: 55px;
    letter-spacing: 0.01em; }
  .collection-banner .contain-banner h4 {
    letter-spacing: 0.01em; }
  .collection-banner.christmas-banner .contain-banner > div {
    background-color: rgba(0, 0, 0, 0.2);
    padding: 25px 40px; }
  .footer-theme2 .contact-details li {
    padding: 0 40px; }
  .footer-theme2 .footer-mobile-title {
    display: none !important; }
  .footer-theme .sub-title h4 {
    font-size: 16px; }
  .footer-theme .sub-title .contact-list li {
    line-height: 20px; }
  .footer-theme .sub-title .contact-list i {
    top: 17px; }
  .theme-card .offer-slider .media .media-body h4 {
    margin-top: 10px; }
  .theme-card .offer-slider .media .media-body a h6 {
    margin-right: 50px; }
  .full-box .theme-card .offer-slider .product-box2 .media .media-body a h6 {
    margin-right: 0; }
  .theme-tab .tab-content .product-tab .tab-box .product-box2 img {
    height: 160px; }
  .theme-tab .tab-content .product-tab .tab-box .product-box2 .media .media-body .color-variant li {
    margin-top: 15px; }
  .blog-page .blog-media .blog-right h4 {
    line-height: 1.2;
    margin-bottom: 10px; }
  .blog-page .blog-media .blog-right h6 {
    margin-bottom: 5px; }
  .blog-page .blog-media .blog-right ul {
    margin-bottom: 10px; }
  .blog-page .blog-media .blog-right p {
    line-height: 1.4; }
  .pro_sticky_info {
    padding: 10px; }
  .is_stuck {
    margin-top: 30px; } }

@media (max-width: 1199px) {
  header.header-gym .pixelstrap > li > a {
    color: black !important;
    padding: 10px 15px; }
  section,
  .section-t-space {
    padding-top: 60px; }
  .section-b-space {
    padding-bottom: 60px; }
  .portfolio-padding {
    padding-bottom: 30px; }
  .partition1 {
    margin-bottom: -25px; }
    .partition1 > div {
      margin-bottom: 25px; }
  .title1 h4 {
    padding-bottom: 8px; }
  .title1 .title-inner1 {
    padding-bottom: 12px;
    margin-bottom: 25px; }
  .title1.title5 hr[role="tournament6"] {
    margin: 12px auto 25px auto; }
  .title2 h4 {
    padding-bottom: 8px; }
  .title2 .title-inner2 {
    margin-bottom: 25px; }
  .title3 h4 {
    padding-bottom: 8px; }
  .title3 .title-inner3 {
    margin-bottom: 10px; }
  .title3 .line {
    margin-bottom: 25px; }
  .title4 .title-inner4 {
    padding-bottom: 15px; }
  .title4 .line {
    margin-bottom: 25px; }
  .title-borderless {
    margin-bottom: 25px; }
  footer.footer-black .below-section {
    padding-top: 105px; }
  header.header-6 .mobile-search {
    display: inline-block; }
  header.header-7 .main-nav-center .toggle-nav {
    top: -94px; }
  header.header-7 .pixelstrap.sm-horizontal > li > a {
    color: black; }
    header.header-7 .pixelstrap.sm-horizontal > li > a:hover, header.header-7 .pixelstrap.sm-horizontal > li > a:active {
      color: var(--theme-deafult); }
  header.header-tools .toggle-nav {
    padding-top: 25px;
    padding-bottom: 25px; }
  header.header-tools .pixelstrap > li > a {
    padding: 10px 15px !important; }
    header.header-tools .pixelstrap > li > a:hover, header.header-tools .pixelstrap > li > a:active, header.header-tools .pixelstrap > li > a:focus, header.header-tools .pixelstrap > li > a.highlighted {
      padding: 10px 15px; }
  header.header-tools .pixelstrap li .lable-nav {
    top: 5px; }
  header.video-header #main-nav {
    position: absolute;
    right: 0;
    top: 3px; }
  header.video-header .main-menu .menu-right .icon-nav {
    padding-right: 40px; }
  header.header-christmas .pixelstrap > li > a {
    color: black !important;
    padding: 10px 15px; }
  .tools-parallax-product.full-banner {
    padding-top: 90px;
    padding-bottom: 90px; }
  .tools-parallax-product .tools-description h3 {
    font-size: 17px; }
  .form_search {
    display: none; }
  .tab-left .theme-tab {
    display: block; }
    .tab-left .theme-tab .left-side {
      width: 100%; }
      .tab-left .theme-tab .left-side li {
        width: unset;
        border-bottom: none;
        padding: 0 5px; }
        .tab-left .theme-tab .left-side li:first-child {
          border-top: none; }
      .tab-left .theme-tab .left-side .tab-title {
        margin-right: 0;
        text-align: center; }
    .tab-left .theme-tab .tab-content-cls {
      width: 100%; }
  .absolute_banner .collection-banner .absolute-contain h3 {
    font-size: 22px;
    margin-bottom: 0; }
  .absolute_banner .collection-banner .absolute-contain h4 {
    font-size: 16px; }
  .box-product .full-box .row > div:nth-last-child(-n + 2) {
    margin-top: 30px; }
  .header-gym .toggle-nav {
    padding-top: 20px;
    padding-bottom: 20px; }
  .gym-product .part-cls > div:nth-last-child(-n + 2) .product-box {
    margin-top: 30px; }
  .gym-product .partition-cls > div:nth-child(-n + 4) {
    margin-bottom: 0; }
  .gym-product .partition-cls > div .product-box {
    margin-top: 30px; }
  .gym-product .partition-cls > div:nth-child(-n + 2) .product-box {
    margin-top: 0; }
  .pet-parallax .pet-decor {
    left: 45px;
    bottom: -105px; }
    .pet-parallax .pet-decor img {
      width: 200px; }
  .about-text p {
    margin-bottom: 25px; }
  .banner-timer .timer {
    padding-top: 12px;
    padding-bottom: 12px;
    padding-left: 30px;
    bottom: 8px;
    margin-top: 38px; }
  .footer-social li {
    padding-right: 38px; }
  .footer-theme2 p {
    line-height: 25px; }
  .footer-theme2 .subscribe-block {
    padding: 10px 70px; }
  .footer-theme2 .footer-mobile-title {
    display: none !important; }
  .footer-theme2 .contact-details li {
    line-height: 25px;
    padding: 0 10px; }
  .footer-theme2 .footer-link li {
    padding-right: 25px; }
  .footer-theme2.section-light .footer-block .subscribe-white {
    padding: 50px; }
  .social-white li {
    padding-left: 12px;
    padding-right: 12px; }
  .service-block svg,
  .service-block1 svg {
    width: 50px;
    height: 50px; }
  .service-block1 svg {
    margin-bottom: 15px; }
  .category-border div .category-banner .category-box h2 {
    padding: 13px 27px; }
  .category-bg .image-block.even:after {
    bottom: 87%; }
  .category-bg .contain-block.even:after {
    top: 87%; }
  .category-bg .contain-block:after {
    bottom: 87%; }
  .no-slider .product-box {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33%;
            flex: 0 0 33.33%;
    max-width: calc(33.33% - 30px);
    margin: 0 15px 30px; }
  .no-slider.five-product .product-box {
    width: 100%;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33%;
            flex: 0 0 33.33%;
    max-width: calc(33.33% - 30px);
    margin: 0 15px 30px; }
    .no-slider.five-product .product-box:nth-last-child(-n + 5) {
      margin: 0 15px 30px; }
    .no-slider.five-product .product-box:nth-last-child(-n + 3) {
      margin: 0 15px 0; }
  .absolute-product .no-slider .product-box:nth-last-child(-n + 4) {
    margin: 0 15px 30px; }
  .absolute-product .no-slider .product-box:nth-last-child(-n + 2) {
    margin: 0 15px 0; }
  .theme-tab .tab-title2 {
    font-size: 22px; }
    .theme-tab .tab-title2:after {
      top: 17px; }
  .theme-tab .tab-content .product-tab .tab-box {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: calc(50% - 10px); }
    .theme-tab .tab-content .product-tab .tab-box:nth-last-child(-n + 2) {
      margin: 0 5px 0; }
    .theme-tab .tab-content .product-tab .tab-box:nth-last-child(-n + 4) {
      margin: 0 5px 10px; }
    .theme-tab .tab-content .product-tab .tab-box .product-box2 img {
      height: 280px; }
  .blog-section .review-box {
    padding: 15px; }
    .blog-section .review-box .review-content p {
      margin-top: 0; }
  .full-banner .banner-contain h2 {
    font-size: 85px; }
  .full-banner .banner-contain h3 {
    font-size: 50px; }
  .full-banner .banner-contain h4 {
    font-size: 22px;
    padding-top: 5px; }
  .full-banner .santa-img img {
    width: 200px; }
  .full-banner.feature-banner .feature-object li,
  .full-banner.feature-banner .feature-object-right li {
    margin-right: 0; }
  .instagram .insta-decor {
    display: none; }
  .logo-section .logo-decor {
    display: none; }
  .blog-section .review-box .santa-img {
    display: none; }
  .collection-banner .contain-banner.banner-3 {
    padding-left: 35px;
    padding-right: 35px; }
    .collection-banner .contain-banner.banner-3 h2 {
      font-size: 25px; }
    .collection-banner .contain-banner.banner-3 h4 {
      font-size: 12px; }
  .collection-banner .contain-banner.banner-4 {
    padding-left: 35px;
    padding-right: 35px; }
    .collection-banner .contain-banner.banner-4 h2 {
      font-size: 24px; }
    .collection-banner .contain-banner.banner-4 h4 {
      font-size: 16px; }
  .collection-banner .contain-banner h2 {
    font-size: 40px; }
  .home-slider .home {
    height: 70vh; }
  .home-slider .slider-contain {
    height: 70vh; }
    .home-slider .slider-contain h1 {
      font-size: 50px; }
  .height-85 .home-slider .home {
    height: 80vh; }
  .height-85 .home-slider .slider-contain {
    height: 80vh; }
  .background .contain-bg {
    padding-top: 30px;
    padding-bottom: 30px; }
  .theme-card .offer-slider .media .media-body a h6 {
    margin-right: 20px; }
  .theme-card .offer-slider .media .media-body .rating i {
    padding-right: 3px; }
  .theme-card.card-border .offer-slider {
    padding-top: 0; }
  .full-box .theme-card .offer-slider img {
    padding: 15px 0 15px 0; }
  .full-box .theme-card .offer-slider .product-box2 .media img {
    height: 250px; }
  .full-box .theme-card .offer-slider .product-box2 .media .media-body .color-variant {
    margin-top: 5px; }
    .full-box .theme-card .offer-slider .product-box2 .media .media-body .color-variant li {
      margin-top: 5px; }
  .home-slider .slider-details {
    width: 335px !important;
    height: 335px !important; }
    .home-slider .slider-details h1 {
      font-size: 50px; }
    .home-slider .slider-details h2 {
      font-size: 36px; }
    .home-slider .slider-details .btn-white {
      margin-top: 0; }
  .home-slider.fullpage .home .slider-contain h1 {
    font-size: 35px; }
  .home-slider.fullpage .home .slider-contain p {
    max-width: 450px;
    font-size: 14px; }
  .home-slider.fullpage .home .slider-contain .btn-solid {
    padding: 10px 15px; }
  .about-section h2 {
    font-size: 22px; }
  .about-section .about-text p {
    line-height: 24px; }
  .about-section .service .service-block1 svg {
    margin-bottom: 5px; }
  .about-section .service .service-block1 h5 {
    line-height: 18px; }
  .about-section .small-section {
    padding-top: 20px; }
  .layout7-product .product-box .details-product {
    background-color: rgba(255, 255, 255, 0.5);
    padding: 5px; }
  .padding-bottom-cls {
    padding-bottom: 30px; }
  .layout-8 {
    padding: 0 40px; }
  .add_to_cart.top, .add_to_cart.bottom {
    left: -300px;
    top: 0;
    height: 100vh;
    width: 300px; }
    .add_to_cart.top .cart-inner, .add_to_cart.bottom .cart-inner {
      height: 100vh;
      overflow: auto; }
      .add_to_cart.top .cart-inner .cart_top, .add_to_cart.bottom .cart-inner .cart_top {
        padding: 20px !important;
        margin-bottom: 20px; }
      .add_to_cart.top .cart-inner .cart_media, .add_to_cart.bottom .cart-inner .cart_media {
        padding: 0 20px !important;
        display: block; }
        .add_to_cart.top .cart-inner .cart_media .cart_product, .add_to_cart.bottom .cart-inner .cart_media .cart_product {
          padding: 0;
          width: 100%;
          display: block;
          overflow-y: hidden; }
          .add_to_cart.top .cart-inner .cart_media .cart_product li, .add_to_cart.bottom .cart-inner .cart_media .cart_product li {
            min-width: 100%;
            max-width: 100%;
            margin-right: 0;
            padding-bottom: 10px; }
        .add_to_cart.top .cart-inner .cart_media .cart_total, .add_to_cart.bottom .cart-inner .cart_media .cart_total {
          padding: 0;
          width: 100%; }
    .add_to_cart.top.open-side, .add_to_cart.bottom.open-side {
      left: 0; }
  .cart-section tbody tr td,
  .wishlist-section tbody tr td {
    min-width: 186px; }
  .blog-detail-page .comment-section li {
    padding-top: 45px;
    padding-bottom: 45px; }
  .product-wrapper-grid.list-view .product-box .img-wrapper,
  .product-wrapper-grid.list-view .product-box .img-block {
    width: 50%; }
  .collection-product-wrapper .product-top-filter .product-filter-content .search-count {
    width: 100%;
    border-left: 1px solid #dddddd;
    border-bottom: 1px solid #dddddd; }
  .collection-product-wrapper .product-top-filter .product-filter-content .collection-view {
    width: 20%;
    padding-right: 0 !important;
    border-left: 1px solid #dddddd; }
  .collection-product-wrapper .product-top-filter .product-filter-content .collection-grid-view {
    padding: 20px !important;
    padding-left: 0 !important;
    width: 20%; }
    .collection-product-wrapper .product-top-filter .product-filter-content .collection-grid-view ul li:last-child {
      display: none; }
  .collection-product-wrapper .product-top-filter .product-filter-content .product-page-filter {
    width: 30%; }
  .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view {
    width: 30%; }
  .cart-section tbody tr td {
    min-width: 140px; }
    .cart-section tbody tr td .qty-box .input-group .form-control {
      width: 52px; }
  .cart-section tfoot tr td {
    padding-right: 25px; }
  .collection-collapse-block .collection-collapse-block-content .collection-brand-filter .category-list li:first-child {
    margin-top: 15px; }
  .collection-filter-block .product-service .media .media-body h4 {
    font-size: 16px; }
  .product-right h2 {
    font-size: 20px; }
  .testimonial .testimonial-slider .media .media-body {
    padding: 30px; }
    .testimonial .testimonial-slider .media .media-body p {
      line-height: 1.5; }
  .search-product > div:nth-last-child(1), .search-product > div:nth-last-child(2), .search-product > div:nth-last-child(3) {
    margin-top: 30px; }
  .blog-page .blog-media {
    margin-bottom: 20px; }
    .blog-page .blog-media .blog-right {
      display: block;
      margin-top: 15px; }
      .blog-page .blog-media .blog-right p {
        line-height: 1.3; }
  .tab-product .tab-content.nav-material .single-product-tables table {
    width: 50%; }
  .product-description-box .border-product {
    padding-top: 10px;
    padding-bottom: 15px; }
  .product-description-box .product-icon .product-social li {
    padding-right: 4px; }
  .product-description-box .product-icon .wishlist-btn span {
    padding-left: 4px; }
  .product-form-box .border-product {
    padding-top: 10px;
    padding-bottom: 15px; }
  .product-form-box .timer {
    padding-left: 17px; }
    .product-form-box .timer span {
      width: 55px; }
  .product-form-box .product-buttons .btn-solid,
  .product-form-box .product-buttons .btn-outline {
    padding: 7px 13px; }
  .product-accordion .single-product-tables table {
    width: 70%; }
  .tab-product .flex-column {
    -webkit-box-orient: unset !important;
    -webkit-box-direction: unset !important;
        -ms-flex-direction: unset !important;
            flex-direction: unset !important;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center; }
  .tab-product .nav-material.nav-tabs {
    border-bottom: 1px solid #dddddd;
    border-right: 0; }
    .tab-product .nav-material.nav-tabs .nav-item .nav-link.active {
      background-color: unset; }
  .tab-border {
    padding-top: 0; }
  .dashboard-section .counter-section .counter-box {
    padding: 20px; }
    .dashboard-section .counter-section .counter-box img {
      height: 40px;
      margin-right: 10px; }
  .theme-card .offer-slider img {
    height: 120px; }
  .container-fluid.custom-container {
    padding-left: 50px;
    padding-right: 50px; }
  .layout-8 .loader_skeleton {
    padding: 0 40px; }
  .loader_skeleton .category-ldr .row .category-block {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%; }
  .loader_skeleton .product-top-filter .row > div:first-child {
    border-left: 1px solid #f3f3f3;
    border-right: 1px solid #f3f3f3;
    border-bottom: 1px solid #f3f3f3; }
  .loader_skeleton .product-top-filter .row > div:last-child {
    border-right: 1px solid #f3f3f3; }
  .loader_skeleton .tab-product.vertical-tab ul li {
    display: inline-block;
    width: 16%;
    height: 30px;
    margin-top: 0;
    margin-right: 10px; }
  .rtl header.video-header #main-nav {
    right: unset;
    left: 0; }
  .rtl header.video-header .main-menu .menu-right .icon-nav {
    padding-left: 40px;
    padding-right: 0; }
  .rtl .cart-section .cart-buttons > div:last-child,
  .rtl .wishlist-section .cart-buttons > div:last-child {
    padding-left: 17px; }
  .rtl .tab-border .nav-border {
    border-left: none; }
  .rtl .collection-product-wrapper .product-filter-content .collection-view {
    padding-right: 20px !important; }
  .rtl .footer-social li {
    padding-right: 0;
    padding-left: 38px; }
  .rtl .footer-theme2 .social-white li {
    padding-left: 12px;
    padding-right: 12px; }
  .rtl .tab-left .theme-tab .left-side .tab-title {
    text-align: center;
    margin-left: 0; }
  .dark .sm-horizontal {
    background-color: #2b2b2b;
    border-color: #404040; }
    .dark .sm-horizontal .mobile-back {
      border-color: #404040;
      color: #e7eaec; }
    .dark .sm-horizontal.pixelstrap ul {
      background-color: #2b2b2b; }
  .dark .tab-product .nav-material.nav-tabs {
    background-color: #2b2b2b; }
  .dark header.left-header .pixelstrap ul {
    background-color: #232323; } }

@media (min-width: 992px) {
  .demo-modal .modal-lg {
    max-width: 1400px; }
  .exit-modal .modal-lg {
    max-width: 600px; }
  .rtl .service_slide .service-home .offset-lg-2 {
    margin-right: 16.6666666667%;
    margin-left: 0; } }

@media (max-width: 991px) and (min-width: 767px) {
  .partition-f > div + div + div {
    margin-top: 30px; }
  .lookbook .lookbook-block .lookbook-dot .dot-showbox {
    width: 80px; }
    .lookbook .lookbook-block .lookbook-dot .dot-showbox .dot-info h5 {
      line-height: 15px; } }

@media (max-width: 991px) {
  h2 {
    font-size: 28px; }
  section,
  .section-t-space {
    padding-top: 50px; }
  .section-b-space {
    padding-bottom: 50px; }
  .portfolio-padding {
    padding-bottom: 20px; }
  .small-section {
    padding: 30px 0; }
  header.header-tools {
    position: relative;
    top: 0; }
    header.header-tools .top-header {
      background-color: var(--theme-deafult); }
      header.header-tools .top-header .container {
        background-color: transparent; }
    header.header-tools .logo-menu-part {
      background-color: white; }
      header.header-tools .logo-menu-part > .container {
        border-bottom: none; }
  header.header-christmas {
    position: relative;
    background-color: #e34041;
    margin-bottom: -50px; }
  .tools_slider .home-slider .slider-contain {
    margin-top: 0; }
  footer.footer-5 .footer-theme2 .subscribe-block {
    border-left: none;
    border-right: none; }
  footer.footer-black .below-section {
    padding-top: 95px; }
  footer.footer-black.footer-light .subscribe {
    border-right: none; }
  footer.footer-classic .upper-footer .small-section {
    padding: 30px 0; }
  .absolute_banner .collection-banner .absolute-contain h3 {
    font-size: 16px; }
  .absolute_banner .collection-banner .absolute-contain h4 {
    font-size: 14px; }
  .tools_product .multiple-slider > div:nth-child(-n + 2) {
    margin-bottom: 0; }
  .tools_product .tools-grey {
    margin-top: 30px; }
  .tools_product .banner-tools {
    margin-left: 10px;
    margin-right: 10px; }
  .tools-service .service-block + .service-block {
    border-left: none; }
  .tools-service .service-block svg,
  .tools-service .service-block1 svg {
    margin-bottom: 0; }
  .tools-brand .row {
    margin: 0 10px;
    padding: 10px 0; }
  .tools_slider .home-slider .slider-contain {
    margin-left: 40px; }
  .tools_slider .home-slider .home .tools-parts,
  .tools_slider .home-slider .home .tools-parts1 {
    margin-top: 20px; }
    .tools_slider .home-slider .home .tools-parts img,
    .tools_slider .home-slider .home .tools-parts1 img {
      width: 180px; }
  .tools_slider .home-slider .home .tools-parts {
    right: 0; }
  .tools_slider .home-slider .home .tools-parts1 {
    right: 10%; }
  .tools_slider .home-slider .home #tools-move2 {
    right: 7%; }
  .tools-parallax-product .tools-description h3 {
    text-align: center; }
  .tools-parallax-product .tools-description .tools-form {
    text-align: center; }
    .tools-parallax-product .tools-description .tools-form .search-box {
      margin: 20px auto 20px; }
    .tools-parallax-product .tools-description .tools-form .btn-find {
      background-size: 1100px; }
  .tools-parallax-product .tools-grey {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
    margin-bottom: 30px; }
  .tools-parallax-product.full-banner {
    padding-top: 75px;
    padding-bottom: 75px; }
  .pet-parallax .pet-decor {
    left: 34px;
    bottom: -86px; }
    .pet-parallax .pet-decor img {
      width: 165px; }
  .pet-parallax .banner-contain p {
    max-width: 100%; }
  .service_slide .service-home {
    position: relative; }
    .service_slide .service-home .service-block1 {
      padding: 0; }
  .service_slide .partition4 > div + div {
    margin-top: 0; }
    .service_slide .partition4 > div + div + div {
      margin-top: 30px; }
  .product-full-tab {
    padding-top: 50px !important; }
  .blog-section .review-box {
    margin-top: 30px; }
    .blog-section .review-box .review-content p {
      margin-bottom: 45px; }
  hr.style1 {
    margin-top: 12px;
    margin-bottom: 12px; }
  h4 {
    font-size: 16px; }
  .gym-banner .collection-banner .contain-banner {
    padding-left: 30px;
    padding-right: 30px; }
  .blog-details h4 {
    margin-top: 17px;
    font-size: 13px; }
  .blog-details p {
    font-size: 15px;
    line-height: 1.3;
    margin-top: 10px; }
  .service-block svg,
  .service-block1 svg {
    margin-bottom: 20px;
    height: auto;
    width: 46px; }
  .partition_3 > div + div {
    margin-top: 30px; }
  .partition4 > div + div + div {
    margin-top: 30px; }
  .banner-timer .banner-text h2 {
    font-size: 20px; }
  .banner-timer .timer span {
    width: 65px; }
  .banner-timer .timer p {
    font-size: 14px; }
  .about-text p {
    line-height: 24px; }
  .footer-light .subscribe {
    text-align: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    border: none;
    margin-bottom: 5px; }
    .footer-light .subscribe p {
      display: none; }
  .footer-light .subscribe-form {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin-bottom: 0; }
  .footer-theme .col {
    max-width: 50%;
    -ms-flex-preferred-size: unset;
        flex-basis: unset; }
  .footer-theme .footer-logo {
    margin-bottom: 30px; }
  .footer-theme .sub-title h4 {
    margin-bottom: 10px; }
  .footer-social {
    margin-top: 15px; }
  .subscribe-wrapper {
    -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
            order: 0;
    padding-top: 20px;
    padding-bottom: 20px; }
  .footer-theme2 .footer-mobile-title {
    display: none !important; }
  .footer-theme2 h4 {
    padding-bottom: 10px; }
  .footer-theme2 .col {
    -ms-flex-preferred-size: unset;
        flex-basis: unset;
    padding: 20px 0; }
  .footer-theme2.section-light .footer-block h4 {
    padding-bottom: 15px; }
  .footer-theme2.section-light .footer-block .subscribe-white {
    border: none; }
  .footer-theme2 .footer-logo {
    margin-bottom: 20px; }
  .footer-theme2 .subscribe-block {
    border: none; }
  .social-white li {
    padding-left: 10px;
    padding-right: 10px; }
  .category-border div .category-banner .category-box h2 {
    padding: 5px 15px;
    font-size: 30px; }
  .category-bg .image-block.even:after {
    bottom: 85%; }
  .category-bg .image-block:after {
    width: 35px; }
  .category-bg .image-block:hover:after {
    height: 70px; }
  .category-bg .contain-block h2 {
    font-size: 20px;
    margin-top: 8px; }
  .category-bg .contain-block:after {
    width: 35px; }
  .category-bg .contain-block.even:after {
    top: 85%; }
  .category-bg .contain-block .category-btn {
    margin-bottom: 15px;
    margin-top: 15px;
    letter-spacing: 0.2em;
    padding: 10px 15px; }
  .category-bg .contain-block:after {
    bottom: 85%; }
  .category-bg .contain-block:hover:after {
    height: 70px; }
  .no-slider .product-box {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: calc(50% - 30px);
    margin: 0 15px 30px !important; }
    .no-slider .product-box:nth-last-child(-n + 2) {
      margin: 0 15px 0 !important; }
  .no-slider.five-product .product-box {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: calc(50% - 30px);
    margin: 0 15px 30px !important; }
    .no-slider.five-product .product-box:nth-last-child(-n + 2) {
      margin: 0 15px 0 !important; }
  .full-banner {
    padding-top: 180px;
    padding-bottom: 180px; }
    .full-banner.parallax-layout {
      padding-top: 180px;
      padding-bottom: 180px; }
    .full-banner.feature-banner .feature-object li:nth-child(2),
    .full-banner.feature-banner .feature-object-right li:nth-child(2) {
      padding-right: 0;
      padding-left: 0; }
    .full-banner.feature-banner .feature-object li:nth-child(3),
    .full-banner.feature-banner .feature-object-right li:nth-child(3) {
      padding-right: 0;
      padding-left: 0; }
    .full-banner.feature-banner .center-img {
      display: none; }
    .full-banner.feature-banner .feature-object-right {
      margin-left: 0; }
    .full-banner.feature-banner .banner-decor .left-img img,
    .full-banner.feature-banner .banner-decor .right-img img {
      width: 100px; }
    .full-banner.feature-banner h2 {
      margin-bottom: 30px; }
    .full-banner .banner-contain h2 {
      font-size: 60px; }
    .full-banner .banner-contain h3 {
      font-size: 35px; }
    .full-banner .banner-contain h4 {
      font-size: 20px;
      padding-top: 5px; }
    .full-banner .decor {
      display: none; }
  .collection-banner .contain-banner {
    padding-left: 60px;
    padding-right: 60px; }
    .collection-banner .contain-banner.banner-3 {
      padding-left: 30px;
      padding-right: 30px; }
      .collection-banner .contain-banner.banner-3 h2 {
        font-size: 20px; }
    .collection-banner .contain-banner.banner-4 {
      padding-left: 40px;
      padding-right: 40px; }
      .collection-banner .contain-banner.banner-4 h2 {
        font-size: 18px; }
      .collection-banner .contain-banner.banner-4 h4 {
        font-size: 18px; }
    .collection-banner .contain-banner h2 {
      font-size: 25px; }
  .collection-collapse-block {
    border-bottom: 1px solid #dddddd !important; }
  .service_slide .home-slider .slider-contain {
    height: 65vh; }
  .home-slider .home {
    height: 65vh; }
  .home-slider .slider-contain {
    height: 65vh; }
    .home-slider .slider-contain h1 {
      font-size: 36px; }
    .home-slider .slider-contain .btn-solid,
    .home-slider .slider-contain .btn-outline {
      margin-top: 17px; }
  .home-slider .slider-details {
    top: 20%;
    padding: 0;
    width: 260px !important;
    height: 260px !important; }
    .home-slider .slider-details h1 {
      line-height: 1;
      font-size: 30px;
      margin: 5px 0; }
    .home-slider .slider-details h2 {
      font-size: 24px; }
    .home-slider .slider-details h3 {
      font-size: 20px; }
    .home-slider .slider-details h4 {
      font-size: 18px;
      line-height: 1;
      margin-bottom: 2px; }
    .home-slider .slider-details .btn-white {
      padding: 7px 14px;
      margin-top: 5px; }
  .home-slider:hover .slick-next {
    right: 90px; }
  .home-slider:hover .slick-prev {
    left: 90px; }
  .height-85 .home-slider .home {
    height: 70vh; }
  .height-85 .home-slider .slider-contain {
    height: 70vh; }
  .background .contain-bg {
    padding-top: 25px;
    padding-bottom: 25px; }
    .background .contain-bg h4 {
      font-size: 16px; }
  .theme-tab .tab-content .product-tab .tab-box .product-box2 img {
    height: 210px; }
  .beauty-about .about-text p {
    text-align: center; }
  .theme-card .offer-slider img {
    padding: 10px 10px 10px 0; }
  .theme-card.card-border .offer-slider img {
    padding: 10px 10px 10px 30px; }
  .multiple-slider > div:nth-child(-n + 2) {
    margin-bottom: 30px; }
  .full-box .center-slider .offer-slider .product-box .product-info h4 {
    padding-bottom: 5px; }
  .full-box .center-slider .offer-slider .product-box .product-info .btn-outline {
    padding: 7px 20px; }
  .full-box .theme-card .offer-slider .product-box2 .media img {
    height: 150px; }
  .full-box .theme-card .offer-slider .product-box2 .media .media-body .color-variant li {
    margin-top: 0; }
  .layout-8 .layout-8-bg {
    padding: 0; }
  .alert {
    max-width: 45% !important; }
  .theme-modal .modal-dialog .modal-content .modal-body .modal-bg .offer-content img {
    margin-bottom: 20px; }
  .theme-modal .modal-dialog .modal-content .modal-body .modal-bg .offer-content h2 {
    margin-bottom: 18px; }
  .theme-modal.cart-modal .modal-dialog .modal-content .modal-body .modal-bg {
    padding: 15px; }
    .theme-modal.cart-modal .modal-dialog .modal-content .modal-body .modal-bg.addtocart .media .media-body .buttons a {
      font-size: 13px;
      padding: 4px 10px;
      margin: 3px 6px; }
  .theme-modal.exit-modal .modal-dialog .modal-content .modal-body .modal-bg {
    padding: 20px; }
  .parallax-cls .banner-contain {
    background-color: rgba(255, 255, 255, 0.5);
    padding: 35px; }
  .parallax-cls section .banner-contain {
    margin-top: 0; }
  .about-section {
    padding-top: 30px; }
    .about-section h2 {
      text-align: center; }
  .product-box .cart-info {
    bottom: 20px; }
  .absolute-banner {
    margin-top: -60px; }
  .login-page .authentication-right {
    height: auto; }
  .testimonial .testimonial-slider .media .media-body {
    padding: 0 30px;
    height: 100%;
    -ms-flex-item-align: center;
        align-self: center; }
    .testimonial .testimonial-slider .media .media-body p {
      margin-bottom: 0; }
  .testimonial .testimonial-slider .slick-track .slick-slide:nth-child(even) .media {
    border-left: none;
    padding-left: 0; }
  .blog-detail-page .blog-advance ul {
    margin-bottom: 20px; }
  .blog-detail-page .blog-advance p:last-child {
    margin-bottom: 0; }
  .top-banner-content h4 {
    font-size: 20px; }
  .collection-product-wrapper .product-top-filter {
    border-top: none; }
    .collection-product-wrapper .product-top-filter .product-filter-content .search-count {
      border-top: 1px solid #dddddd; }
    .collection-product-wrapper .product-top-filter .product-filter-content .collection-view {
      display: none; }
    .collection-product-wrapper .product-top-filter .product-filter-content .collection-grid-view {
      display: none; }
    .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view,
    .collection-product-wrapper .product-top-filter .product-filter-content .product-page-filter {
      width: 50%; }
      .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view:before,
      .collection-product-wrapper .product-top-filter .product-filter-content .product-page-filter:before {
        right: 15px !important; }
      .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view select,
      .collection-product-wrapper .product-top-filter .product-filter-content .product-page-filter select {
        border-left: 1px solid #dddddd;
        padding: 21px 34px 21px 34px;
        border-top: none;
        border-bottom: none; }
    .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view select {
      border-right: none !important; }
    .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view,
    .collection-product-wrapper .product-top-filter .popup-filter .product-page-filter {
      border-top: 1px solid #dddddd; }
  .filter-main-btn {
    display: block; }
  .collection-filter {
    position: fixed;
    height: 100vh;
    top: 0;
    left: -350px;
    background-color: white;
    z-index: 99;
    overflow-y: scroll;
    padding: 15px 0 15px 15px;
    max-width: 350px;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    -webkit-box-shadow: 1px 0 5px #ddd;
            box-shadow: 1px 0 5px #ddd; }
    .collection-filter .collection-sidebar-banner {
      text-align: center; }
    .collection-filter .theme-card {
      padding-left: 30px;
      padding-right: 30px; }
    .collection-filter .collection-sidebar-banner {
      padding: 0 30px; }
  .collection-filter-block {
    border: none; }
  .collection-mobile-back {
    display: block; }
  .collection .section-t-space {
    padding-top: 30px; }
  .collection .partition-collection > div:nth-last-child(1) {
    margin-top: 30px; }
  .collection .partition-collection > div:nth-last-child(2) {
    margin-top: 30px; }
  .right-login {
    margin-top: 30px; }
  .contact-page .map iframe {
    height: 350px; }
  .contact-page .contact-right {
    padding-bottom: 0; }
    .contact-page .contact-right ul li {
      padding-left: 0;
      border-bottom: 1px solid #dddddd;
      text-align: center;
      padding-bottom: 10px;
      margin-top: 15px; }
      .contact-page .contact-right ul li .contact-icon {
        position: relative;
        margin: 0 auto;
        border-right: 0; }
      .contact-page .contact-right ul li p {
        margin-bottom: 10px; }
  .cart-section .cart-table thead th:last-child {
    display: none; }
  .cart-section tbody tr td {
    min-width: 135px; }
    .cart-section tbody tr td:last-child {
      display: none; }
  .cart-section .cart-buttons > div:last-child {
    padding-right: 15px; }
  .cart-section tfoot tr td {
    padding-right: 0; }
  .wishlist-section tbody tr td {
    min-width: 138px; }
  .product-right h2 {
    margin-top: 15px; }
  .product-right {
    text-align: center;
    margin: 20px 0 10px 0; }
    .product-right .detail-section,
    .product-right .product-icon {
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center; }
    .product-right .product-description .qty-box {
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center; }
    .product-right .size-text {
      text-align: left; }
    .product-right .timer {
      text-align: left; }
    .product-right .product-icon .product-social li {
      padding-right: 20px; }
  .collection-product-wrapper .product-top-filter .popup-filter .sidebar-popup {
    width: 55%;
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: center;
    margin-bottom: 20px;
    background: none var(--theme-deafult); }
    .collection-product-wrapper .product-top-filter .popup-filter .sidebar-popup .open-popup {
      text-align: left; }
    .collection-product-wrapper .product-top-filter .popup-filter .sidebar-popup > a {
      color: #ffffff; }
    .collection-product-wrapper .product-top-filter .popup-filter .sidebar-popup .collection-filter {
      height: 100vh;
      left: -350px;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease; }
  .collection-product-wrapper .product-top-filter .popup-filter .search-count {
    width: 100%;
    padding: 10px 0;
    text-align: center; }
  .collection-product-wrapper .product-top-filter .popup-filter .collection-view,
  .collection-product-wrapper .product-top-filter .popup-filter .collection-grid-view {
    display: none; }
  .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view,
  .collection-product-wrapper .product-top-filter .popup-filter .product-page-filter {
    width: 50%; }
    .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view select,
    .collection-product-wrapper .product-top-filter .popup-filter .product-page-filter select {
      padding-top: 10px;
      padding-bottom: 10px; }
    .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view:before,
    .collection-product-wrapper .product-top-filter .popup-filter .product-page-filter:before {
      top: 13px; }
  .collection-product-wrapper .product-top-filter .popup-filter .product-page-filter:before {
    left: unset;
    right: 35px; }
  .tab-product {
    padding-top: 0; }
  .tab-product .nav-material.nav-tabs {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center; }
  .pro_sticky_info {
    border: none;
    padding: 10px 0; }
  .product-form-box {
    margin-bottom: 10px; }
  .dashboard-left {
    position: fixed;
    height: 100vh;
    top: 0;
    left: -350px;
    background-color: white;
    z-index: 99;
    padding: 0 35px 35px;
    max-width: 350px;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    -webkit-box-shadow: 0 0 8px 0 #dddddd;
            box-shadow: 0 0 8px 0 #dddddd; }
    .dashboard-left .block-title h2 {
      display: none; }
    .dashboard-left .block-content {
      border: none;
      padding: 0;
      margin-top: 20px; }
      .dashboard-left .block-content ul li:hover {
        padding-left: 0; }
  .account-sidebar {
    display: block; }
  .typography_section .row > div:first-child .typography-box:last-child {
    margin-bottom: 30px; }
  .product-slick .slick-prev,
  .product-slick .slick-next,
  .rtl-product-slick .slick-prev,
  .rtl-product-slick .slick-next,
  .product-right-slick .slick-prev,
  .product-right-slick .slick-next,
  .rtl-product-right-slick .slick-prev,
  .rtl-product-right-slick .slick-next {
    opacity: 1; }
  .product-slick .slick-prev,
  .rtl-product-slick .slick-prev,
  .product-right-slick .slick-prev,
  .rtl-product-right-slick .slick-prev {
    left: 20px; }
  .product-slick .slick-next,
  .rtl-product-slick .slick-next,
  .product-right-slick .slick-next,
  .rtl-product-right-slick .slick-next {
    right: 20px; }
  .order-up {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1; }
  .bundle .bundle_img {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center; }
  .bundle .bundle_detail .theme_checkbox {
    padding: 0 20%; }
  .checkout-page .checkout-form .checkout-details {
    margin-top: 30px; }
  .vendor-cover .bg-size {
    height: 270px; }
  .vendor-profile .profile-left {
    display: block; }
    .vendor-profile .profile-left .profile-image {
      margin: 0 auto;
      width: 100%; }
    .vendor-profile .profile-left .profile-detail {
      margin: 0 auto;
      text-align: center;
      margin-left: 0;
      padding-left: 0;
      border-left: none;
      border-top: 1px solid #efefef;
      padding-top: 15px;
      width: 100%;
      margin-top: 15px; }
    .vendor-profile .profile-left .vendor-contact {
      width: 100%;
      text-align: center;
      margin-left: 0;
      padding-left: 0;
      border-left: none;
      border-top: 1px solid #efefef;
      padding-top: 15px;
      margin-top: 15px; }
      .vendor-profile .profile-left .vendor-contact .footer-social {
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center; }
        .vendor-profile .profile-left .vendor-contact .footer-social li {
          padding: 0 5px; }
  .become-vendor h4 {
    margin-bottom: 20px; }
  .become-vendor .step-bg .row {
    margin-left: -15px;
    margin-right: -15px; }
    .become-vendor .step-bg .row > div {
      padding-left: 15px;
      padding-right: 15px; }
      .become-vendor .step-bg .row > div:nth-child(2) {
        margin-top: 0;
        margin-bottom: 30px; }
      .become-vendor .step-bg .row > div:nth-child(1) {
        margin-bottom: 30px; }
      .become-vendor .step-bg .row > div:nth-child(3) {
        margin-bottom: 0; }
  .become-vendor .step-bg:before {
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg); }
  .dashboard-section .dashboard-sidebar .faq-tab .nav-tabs {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    width: 100%;
    background-color: #f8f8f8; }
  .dashboard-section .counter-section {
    margin-top: 20px; }
  .faq-tab .nav-tabs .nav-item .nav-link.active {
    border-bottom: 2px solid var(--theme-deafult);
    border-right: none; }
  .bg-title .theme-tab .bg-title-part {
    margin-top: 30px; }
  .loader_skeleton .collection-banner .contain-banner {
    padding-left: 40px;
    padding-right: 40px; }
  .loader_skeleton .category-ldr .row .category-block {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%; }
  .loader_skeleton .product-top-filter {
    border-top: 1px solid #f3f3f3; }
    .loader_skeleton .product-top-filter .row > div:nth-child(3) {
      border-right: 1px solid #f3f3f3; }
  .loader_skeleton .product-page .product-right h2,
  .loader_skeleton .product-page .product-right h3,
  .loader_skeleton .product-page .product-right h4 {
    margin-left: auto;
    margin-right: auto; }
  .loader_skeleton .product-page .product-right .btn-group {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center; }
  .loader_skeleton .tab-product {
    margin-top: 25px !important; }
  .loader_skeleton .blog-page .order-sec .product-box .media {
    display: block; }
  .loader_skeleton .blog-page .order-sec .product-box .img-wrapper {
    width: 100%; }
  .rtl .tools-parallax-product .tools-description .tools-form .search-button {
    text-align: center; }
  .rtl .tools-service .service-block + .service-block {
    border-right: none; }
  .rtl .testimonial .testimonial-slider .slick-track .slick-slide:nth-child(even) .media {
    border-right: none;
    padding-right: 0; }
  .rtl .contact-page .contact-right ul li {
    padding-right: 0; }
    .rtl .contact-page .contact-right ul li .contact-icon {
      border-left: none; }
    .rtl .contact-page .contact-right ul li p {
      text-align: center; }
  .rtl .rtl-text .product-right .color-variant {
    text-align: center; }
  .rtl .rtl-text .product-right .size-box {
    text-align: center; }
  .rtl .rtl-text .product-right .product-buttons {
    text-align: center; }
  .rtl .rtl-text .product-right .border-product {
    text-align: center; }
  .rtl .product-accordion .card-header h5 {
    text-align: center; }
  .rtl .image-swatch {
    text-align: center; }
  .rtl .product-right h4,
  .rtl .product-right h2,
  .rtl .product-right h3,
  .rtl .product-right p,
  .rtl .product-right .product-title {
    text-align: center; }
  .rtl .product-right .detail-section,
  .rtl .product-right .product-icon {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center; }
  .rtl .product-right .size-text {
    text-align: right; }
  .rtl .product-right .product-description .qty-box {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center; }
  .rtl .product-right .payment-card-bottom {
    text-align: center; }
  .rtl .product-right .rating {
    text-align: center; }
  .rtl .single-product-tables table tr td {
    text-align: center; }
  .rtl .tab-product {
    padding-top: 30px; }
  .rtl .collection-product-wrapper .product-filter-content .product-page-filter {
    border-left: none; }
  .rtl .collection-product-wrapper .product-filter-content .collection-view {
    padding-right: 20px !important; }
  .rtl .collection-product-wrapper .product-top-filter .product-filter-content .product-page-filter select,
  .rtl .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view select,
  .rtl .collection-product-wrapper .product-top-filter .popup-filter .product-page-filter select,
  .rtl .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view select {
    padding: 21px 34px 21px 34px; }
  .rtl .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view,
  .rtl .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view {
    border-right: 1px solid #dddddd; }
  .rtl .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view {
    border-right: none; }
  .rtl .collection-product-wrapper .product-top-filter .popup-filter .search-count h5 {
    text-align: center; }
  .rtl .collection-product-wrapper .product-top-filter .popup-filter .product-page-filter select,
  .rtl .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view select {
    padding: 10px 34px 10px 34px; }
  .rtl .collection-product-wrapper .product-top-filter .popup-filter .sidebar-popup {
    background: none var(--theme-deafult); }
  .rtl .banner-timer .timer {
    padding-left: 10px; }
    .rtl .banner-timer .timer span {
      width: 55px; }
  .rtl .full-box .theme-card .offer-slider .product-box2 .media .media-body .color-variant li {
    margin-left: 5px;
    margin-right: unset; }
  .rtl .full-box .theme-card .offer-slider .product-box2 .media .media-body .rating i {
    padding: 0; }
  .rtl .beauty-about .text-center {
    text-align: center !important; }
  .rtl .beauty-about .about-text p {
    text-align: center; }
  .rtl .footer-light .subscribe {
    border-left: none; }
  .rtl .loader_skeleton .product-page .product-right ul {
    text-align: center; }
  .dark .collection-filter {
    background-color: #2b2b2b; }
  .dark .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view select,
  .dark .collection-product-wrapper .product-top-filter .product-filter-content .product-page-filter select {
    border-color: #404040; }
  .dark .collection-mobile-back {
    border-color: #404040; }
    .dark .collection-mobile-back span {
      color: #929292; }
  .dark .collection-collapse-block {
    border-color: #404040 !important; }
  .dark .collection-filter {
    -webkit-box-shadow: none;
            box-shadow: none; }
  .dark .contact-page .contact-right ul li {
    border-color: #404040; }
  .dark .dashboard-left {
    background-color: #232323;
    -webkit-box-shadow: none;
            box-shadow: none; }
  .dark header.header-tools .logo-menu-part {
    background-color: #2b2b2b; } }

@media (max-width: 767px) {
  .container-fluid.custom-container {
    padding-left: 30px;
    padding-right: 30px; }
  .theme-modal.cart-modal .product-section {
    display: none; }
  .addtocart_count .product-box:hover .cart-info a:nth-child(1) i, .addtocart_count .product-box:hover .cart-info a:nth-child(2) i, .addtocart_count .product-box:hover .cart-info a:nth-child(3) i {
    -webkit-animation: none;
            animation: none; }
  .addtocart_count .center-slider .offer-slider .add-button,
  .addtocart_count .center-slider .offer-slider .cart-info {
    display: none; }
  .addtocart_count .center-slider .offer-slider .product-box .product-detail .rating {
    margin-top: 25px; }
  .absolute_banner {
    margin-bottom: 0; }
    .absolute_banner .collection-banner .absolute-contain {
      bottom: 25px; }
      .absolute_banner .collection-banner .absolute-contain h3 {
        font-size: 20px; }
      .absolute_banner .collection-banner .absolute-contain h4 {
        font-size: 16px; }
  .box-product .full-box .row > div:nth-last-child(-n + 3) {
    margin-top: 30px; }
  .advertise-section .full-banner .banner-contain h2 {
    font-size: 60px;
    margin-top: -10px; }
  footer.footer-classic .upper-footer .small-section {
    padding: 20px 0; }
  footer.footer-classic .subscribe-form .form-control {
    padding: 8px; }
  .insta-title {
    width: 170px;
    height: 30px; }
    .insta-title h4 {
      font-size: 14px; }
  .tools_slider .home-slider .home .tools-parts,
  .tools_slider .home-slider .home .tools-parts1 {
    display: none; }
  .tools_slider .home-slider .slider-contain {
    margin-left: 0;
    -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important; }
  .tools-service .service-block + .service-block {
    margin-top: 0; }
    .tools-service .service-block + .service-block + .service-block {
      margin-top: 20px; }
  .tools-grey .product-box .img-wrapper {
    padding-bottom: 35px; }
  .tools-grey .product-box .cart-info {
    bottom: 10px; }
    .tools-grey .product-box .cart-info button {
      font-size: 0;
      width: unset;
      background-color: #eef0f1; }
      .tools-grey .product-box .cart-info button i {
        display: block; }
      .tools-grey .product-box .cart-info button:hover i {
        color: #ffffff; }
    .tools-grey .product-box .cart-info .mobile-quick-view {
      display: block;
      margin-left: 5px; }
  .tools-grey .product-box .quick-view-part {
    display: none; }
  .tools-grey .product-box:hover .img-wrapper .front img {
    opacity: 1; }
  .tools-grey .product-box:hover .ribbon {
    display: block; }
  .tools-parallax-product .tools-grey .slick-prev,
  .tools-parallax-product .tools-grey .slick-next {
    display: none !important; }
  .tools-parallax-product.full-banner {
    padding-top: 60px;
    padding-bottom: 60px; }
  .pet-parallax .pet-decor {
    display: none; }
  .j-box .product-box .cart-info {
    bottom: 0;
    position: relative;
    opacity: 1; }
    .j-box .product-box .cart-info a i {
      padding: 10px; }
  .pets-box .product-box .img-wrapper .cart-info {
    -webkit-transform: none;
            transform: none; }
    .pets-box .product-box .img-wrapper .cart-info i {
      font-size: 16px; }
  .layout3-menu {
    max-width: 100%; }
    .layout3-menu .main-menu .brand-logo img {
      height: 25px; }
  .game-product .product-box .cart-info {
    right: 5px; }
    .game-product .product-box .cart-info a i {
      margin: 7px 0;
      padding: 7px;
      font-size: 14px; }
  .game-product .product-box .add-button {
    bottom: 0; }
  .game-product .product-box .img-wrapper {
    padding-bottom: 37px; }
  .game-product .product-box:hover .cart-info a:nth-child(1) i {
    -webkit-animation: none;
            animation: none; }
  .game-product .theme-tab .tab-title .current a,
  .game-product .theme-tab .tab-title2 .current a {
    border-bottom: none;
    padding-bottom: 0; }
  .gym-product .product-box .img-wrapper .cart-info {
    display: block;
    height: unset;
    top: unset;
    left: unset;
    right: 0; }
    .gym-product .product-box .img-wrapper .cart-info i {
      background: none;
      color: #6f6f6f; }
    .gym-product .product-box .img-wrapper .cart-info button:hover i,
    .gym-product .product-box .img-wrapper .cart-info a:hover i {
      color: var(--theme-deafult); }
  .gym-product .product-box:hover .img-wrapper .cart-info button {
    -webkit-animation: none;
            animation: none; }
  .gym-product .product-box:hover .img-wrapper .cart-info a:nth-child(2) i {
    -webkit-animation: none;
            animation: none; }
  .gym-product .product-box:hover .img-wrapper .cart-info a:nth-child(3) i {
    -webkit-animation: none;
            animation: none; }
  .gym-product .product-box:hover .img-wrapper .cart-info a:nth-child(4) i {
    -webkit-animation: none;
            animation: none; }
  .game-banner .banner-timer .banner-text {
    background-color: transparent; }
  .detail-cannabis .detail_section {
    margin-top: 30px;
    text-align: center; }
  .detail-cannabis .row > div:first-child .detail_section {
    margin-top: 0; }
  .border-box.tools-grey .product-box .img-wrapper {
    padding-bottom: 0; }
  .border-box.tools-grey .product-box .cart-info a,
  .border-box.tools-grey .product-box .cart-info button {
    background-color: #ffffff; }
  .service_slide .home-slider .slider-contain {
    height: 60vh; }
  .portfolio-section.metro-section .product-box .cart-wrap a i {
    opacity: 1;
    font-size: 16px;
    padding: 5px; }
  .portfolio-section.metro-section .product-box .cart-wrap button i {
    font-size: 16px;
    padding: 5px; }
  .portfolio-section.metro-section .product-box .product-detail {
    opacity: 1;
    bottom: 15px;
    background-color: rgba(255, 255, 255, 0.5); }
    .portfolio-section.metro-section .product-box .product-detail h6 {
      color: #000000; }
  .portfolio-section.metro-section .product-box:hover .product-detail {
    opacity: 1; }
  .portfolio-section.metro-section .product-box:hover .cart-wrap a:nth-child(2) i, .portfolio-section.metro-section .product-box:hover .cart-wrap a:nth-child(3) i, .portfolio-section.metro-section .product-box:hover .cart-wrap a:nth-child(4) i {
    -webkit-animation: none;
            animation: none; }
  header.header-metro .metro .layout3-menu {
    max-width: 540px; }
  header.left-header .top-header .header-dropdown li {
    padding: 15px; }
  header.left-header .main-menu .menu-right .icon-nav li {
    padding-left: 15px; }
  footer.footer-5 .sub-footer > .container {
    border-top: none; }
  footer.footer-5 .dark-layout .footer-title {
    border-bottom: 1px solid #ffffff; }
  footer.footer-black .upside .small-section .center-thing {
    display: inline-block;
    width: 100%; }
  footer.footer-black .footer-title h4 {
    color: #ffffff; }
  footer.footer-black.footer-light .subscribe {
    height: auto;
    margin-bottom: 10px; }
  footer.footer-black.footer-light .subscribe-form {
    height: auto; }
  footer.footer-black .below-section {
    padding-top: 85px; }
  section,
  .section-t-space {
    padding-top: 40px; }
  .section-b-space {
    padding-bottom: 40px; }
  .portfolio-padding {
    padding-bottom: 10px; }
  .product-full-tab {
    padding-top: 30px !important; }
  .small-section {
    padding: 20px 0; }
  .theme-tab .tab-title a,
  .theme-tab .tab-title2 a {
    text-transform: capitalize; }
  .about-cls .service.border-section {
    border-bottom: none; }
  .about-cls .service.small-section {
    padding-bottom: 0; }
  .service-block .media {
    display: block;
    text-align: center;
    padding-top: 0;
    padding-bottom: 0; }
  .service-block svg {
    margin-right: 0; }
  .service-block + .service-block {
    border-left: 0;
    margin-top: 20px; }
  .service-block:last-child .media .media-body p {
    margin-bottom: 5px; }
  .partition2 {
    margin-bottom: -25px; }
    .partition2 > div {
      margin-bottom: 25px; }
  .partition3 > div + div {
    margin-top: 30px; }
  .partition4 > div + div {
    margin-top: 30px; }
  .center-slider {
    border-left: none;
    border-right: none; }
  .about-text p {
    line-height: 25px; }
  .banner-timer {
    padding-top: 5px;
    padding-bottom: 5px; }
    .banner-timer .banner-text {
      padding-top: 15px;
      padding-bottom: 15px;
      background-color: rgba(255, 255, 255, 0.65); }
      .banner-timer .banner-text h2 {
        font-size: 15px; }
    .banner-timer .timer-box {
      text-align: center; }
    .banner-timer .timer {
      margin-top: 5px;
      padding-top: 6px;
      padding-bottom: 6px;
      padding-left: 20px; }
      .banner-timer .timer p {
        font-size: 14px; }
      .banner-timer .timer span {
        width: 40px; }
        .banner-timer .timer span .padding-l {
          padding-left: 10px; }
  .darken-layout .footer-title,
  .dark-layout .footer-title {
    border-bottom: 1px solid #525252; }
  .darken-layout .subscribe-wrapper,
  .dark-layout .subscribe-wrapper {
    padding-bottom: 10px; }
  .footer-title {
    margin-top: 10px;
    text-align: left;
    border-bottom: 1px solid #dddddd;
    position: relative; }
    .footer-title.footer-mobile-title {
      margin-top: 0; }
    .footer-title h4 {
      text-transform: uppercase;
      font-weight: 700;
      cursor: pointer; }
    .footer-title.active .according-menu {
      font: normal normal normal 14px/1 FontAwesome; }
      .footer-title.active .according-menu:before {
        content: "\f106";
        position: absolute;
        right: 2px;
        top: 2px; }
    .footer-title .according-menu {
      font: normal normal normal 14px/1 FontAwesome; }
      .footer-title .according-menu:before {
        content: "\f107";
        position: absolute;
        right: 2px;
        top: 2px; }
  .banner-slider .home-banner > div img {
    margin-top: 30px; }
  .banner-slider .home-banner > div:last-child img {
    margin-top: 30px; }
  .lookbook .row > div:last-child .lookbook-block {
    margin-top: 30px; }
  .lookbook-section .row > div:first-child .lookbook-img > div:last-child {
    margin-bottom: 25px; }
  .lookbook-section .lookbook-img > div:last-child img {
    margin-top: 0; }
  .full-scroll-footer .sub-footer p {
    padding: 0;
    line-height: 25px; }
  .box-layout-body .box-layout {
    margin-top: -40px; }
  .layout-20 {
    padding: 15px; }
  .home-slider .slider-details {
    top: 15%;
    right: 8%;
    padding: 0px;
    width: 225px !important;
    height: 225px !important; }
    .home-slider .slider-details h1 {
      font-size: 25px;
      margin: 5px 0; }
    .home-slider .slider-details h2 {
      font-size: 20px; }
    .home-slider .slider-details h3 {
      font-size: 18px; }
      .home-slider .slider-details h3:before, .home-slider .slider-details h3:after {
        width: 8px;
        height: 8px;
        top: 5px; }
    .home-slider .slider-details h4 {
      font-size: 16px; }
    .home-slider .slider-details .btn-white {
      padding: 5px 10px;
      font-size: 14px; }
  .home-slider.fullpage .slick-dots {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    bottom: 70px;
    top: unset;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
    .home-slider.fullpage .slick-dots li button:before {
      color: #0a0100; }
  .footer-contant {
    text-align: left; }
    .footer-contant .footer-logo {
      margin-top: 20px;
      margin-bottom: 20px; }
    .footer-contant li {
      text-align: left; }
    .footer-contant .footer-social ul {
      margin: unset; }
      .footer-contant .footer-social ul li {
        padding-right: 25px;
        padding-left: 0; }
  .social-white li:first-child {
    padding-left: 0; }
  .footer-theme {
    text-align: center; }
    .footer-theme .footer-mobile-title {
      display: block !important; }
    .footer-theme .col {
      max-width: 100%;
      -ms-flex-preferred-size: unset;
          flex-basis: unset; }
    .footer-theme .footer-social {
      margin-bottom: 15px; }
    .footer-theme .sub-title li {
      padding-top: 7px; }
    .footer-theme .sub-title .contact-list i {
      position: relative;
      top: 0;
      margin-right: 10px; }
    .footer-theme .sub-title .contact-list li {
      padding-left: 0; }
  .footer-social ul {
    margin: 0 auto; }
  .footer-social li {
    padding: 0 15px; }
  .footer-end {
    text-align: center; }
  .sub-footer .payment-card-bottom {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    padding-bottom: 25px; }
  .subscribe-wrapper {
    margin: 10px 0 0 0;
    -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
            order: 0; }
  .footer-theme2 p {
    margin-bottom: 10px; }
  .footer-theme2 .footer-mobile-title {
    display: block !important; }
  .footer-theme2 .p-set {
    padding: 0 15px !important; }
  .footer-theme2 .col {
    padding: 0; }
  .footer-theme2 .footer-link li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding-top: 10px; }
  .footer-theme2 .footer-link h4 {
    padding-bottom: 10px; }
  .footer-theme2 .contact-details li {
    padding-left: 0;
    padding-top: 10px; }
  .footer-theme2 .footer-link-b li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding-top: 10px; }
  .footer-theme2 .footer-link-b h4 {
    margin-top: 0;
    padding-bottom: 10px; }
  .footer-theme2.section-light .footer-block h4 {
    padding-bottom: 10px; }
  .footer-theme2.section-light .footer-block .subscribe-white {
    padding: 40px 65px; }
    .footer-theme2.section-light .footer-block .subscribe-white h2 {
      margin-bottom: 20px; }
    .footer-theme2.section-light .footer-block .subscribe-white .form-group {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex; }
      .footer-theme2.section-light .footer-block .subscribe-white .form-group .btn-solid,
      .footer-theme2.section-light .footer-block .subscribe-white .form-group .btn-outline {
        margin-top: 0; }
  .footer-theme2 .subscribe-block h2 {
    margin-bottom: 20px; }
  .footer-theme2 h4 {
    padding-bottom: 10px; }
  .darken-layout .footer-theme .footer-mobile-title h4 {
    color: #ffffff; }
  .dark-layout .small-section {
    padding-bottom: 40px; }
  .dark-layout section {
    padding-top: 0; }
  .dark-layout .section-b-space {
    border: none;
    padding-bottom: 0; }
  .dark-layout .subscribe-wrapper {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1; }
  .dark-layout .footer-theme2 .subscribe-wrapper .subscribe-block {
    padding: 10px 60px; }
    .dark-layout .footer-theme2 .subscribe-wrapper .subscribe-block h2 {
      display: none; }
    .dark-layout .footer-theme2 .subscribe-wrapper .subscribe-block .form-group {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex; }
      .dark-layout .footer-theme2 .subscribe-wrapper .subscribe-block .form-group .btn-solid,
      .dark-layout .footer-theme2 .subscribe-wrapper .subscribe-block .form-group .btn-outline {
        margin-top: 0; }
  .social-white {
    margin-bottom: 10px; }
  .category-border div .category-banner .category-box h2 {
    font-size: 25px; }
  .pet-layout-footer .footer-theme2 .footer-link .social-white {
    margin-top: 30px;
    margin-bottom: 20px; }
    .pet-layout-footer .footer-theme2 .footer-link .social-white li {
      display: unset; }
  .box-layout .small-section {
    padding-top: 0; }
  .white-layout .footer-theme2 > div:nth-child(2) {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1; }
  .white-layout .footer-theme2.footer-border {
    padding: 0;
    border: none; }
  .white-layout .footer-theme2 .footer-block .footer-container {
    max-width: 540px;
    width: 100%; }
    .white-layout .footer-theme2 .footer-block .footer-container .footer-mobile-title {
      margin-top: 20px; }
  .white-layout .footer-theme2 .footer-block .subscribe-white h2 {
    display: none; }
  .category-bg {
    padding: 30px 40px; }
    .category-bg .image-block.even:after {
      bottom: 85%; }
    .category-bg .image-block:after {
      width: 25px;
      margin-top: -25px; }
    .category-bg .image-block:hover:after {
      height: 50px; }
    .category-bg .contain-block h2 {
      font-size: 18px;
      margin-top: 8px; }
    .category-bg .contain-block h6 {
      letter-spacing: 0.1em;
      font-size: 12px; }
    .category-bg .contain-block:after {
      width: 25px; }
    .category-bg .contain-block.even:after {
      top: 87%; }
    .category-bg .contain-block .category-btn {
      margin-bottom: 10px;
      margin-top: 10px;
      letter-spacing: 0.1em;
      padding: 5px 15px; }
    .category-bg .contain-block:after {
      bottom: 87%; }
    .category-bg .contain-block:hover:after {
      height: 50px; }
  .layout9-box .product-box .img-block {
    min-height: unset; }
  .product-box .cart-detail,
  .product-wrap .cart-detail {
    top: 5px;
    right: 10px; }
  .product-box:hover .product-info .add-btn,
  .product-wrap:hover .product-info .add-btn {
    -webkit-animation: none;
            animation: none; }
  .product-box .img-block {
    min-height: 350px; }
  .product-box .cart-info,
  .product-box .cart-detail {
    opacity: 1; }
  .product-box .img-wrapper .cart-box {
    opacity: 1; }
  .product-box:hover .img-wrapper .cart-box {
    -webkit-animation: none;
            animation: none; }
  .product-box:hover .cart-info button,
  .product-box:hover .cart-detail button {
    -webkit-animation: none;
            animation: none; }
  .product-box:hover .cart-info a i,
  .product-box:hover .cart-detail a i {
    -webkit-animation: none;
            animation: none; }
  .product-box:hover .cart-info a:nth-child(2) i,
  .product-box:hover .cart-detail a:nth-child(2) i {
    -webkit-animation: none;
            animation: none; }
  .product-box:hover .cart-info a:nth-child(3) i,
  .product-box:hover .cart-detail a:nth-child(3) i {
    -webkit-animation: none;
            animation: none; }
  .product-box:hover .cart-info a:nth-child(4) i,
  .product-box:hover .cart-detail a:nth-child(4) i {
    -webkit-animation: none;
            animation: none; }
  .product-box .product-info .add-btn,
  .product-wrap .product-info .add-btn {
    opacity: 1; }
  .theme-tab .tab-title2 {
    font-size: 20px; }
    .theme-tab .tab-title2 li {
      padding-left: 15px;
      padding-right: 15px; }
    .theme-tab .tab-title2:after {
      top: 15px; }
  .multiple-slider > div:nth-child(-n + 3) {
    margin-bottom: 30px; }
  .full-banner {
    padding-top: 120px;
    padding-bottom: 120px; }
    .full-banner.parallax-layout {
      padding-top: 120px;
      padding-bottom: 120px; }
    .full-banner.feature-banner .banner-decor .left-img,
    .full-banner.feature-banner .banner-decor .right-img {
      display: none; }
    .full-banner.feature-banner h2 {
      margin-bottom: 35px; }
    .full-banner .banner-contain h2 {
      font-size: 75px; }
    .full-banner .santa-img img {
      width: 125px; }
  .pet-parallax .full-banner {
    padding-top: 120px;
    padding-bottom: 120px; }
  .collection-banner .contain-banner {
    padding-left: 60px;
    padding-right: 60px; }
    .collection-banner .contain-banner.banner-3 {
      padding-left: 40px;
      padding-right: 40px; }
      .collection-banner .contain-banner.banner-3 h2 {
        font-size: 20px; }
      .collection-banner .contain-banner.banner-3 h4 {
        font-size: 18px; }
    .collection-banner .contain-banner.banner-4 {
      padding-left: 45px;
      padding-right: 45px; }
      .collection-banner .contain-banner.banner-4 h2 {
        font-size: 18px; }
    .collection-banner .contain-banner h2 {
      font-size: 35px; }
  .home-slider .home {
    height: 60vh; }
  .home-slider .slider-contain {
    height: 60vh; }
    .home-slider .slider-contain h1 {
      font-size: 35px;
      margin-top: 5px; }
    .home-slider .slider-contain .btn-solid,
    .home-slider .slider-contain .btn-outline {
      margin-top: 10px;
      padding: 10px 25px; }
  .home-slider:hover .slick-next {
    right: 80px; }
  .home-slider:hover .slick-prev {
    left: 80px; }
  .height-85 .home-slider .home {
    height: 65vh; }
  .height-85 .home-slider .slider-contain {
    height: 65vh; }
  .background .col {
    -ms-flex-preferred-size: unset;
        flex-basis: unset; }
  .background .contain-bg {
    margin: 10px 0; }
  .full-box .center-slider .offer-slider {
    text-align: center; }
    .full-box .center-slider .offer-slider .product-box {
      border: none;
      display: inline-block; }
      .full-box .center-slider .offer-slider .product-box .img-wrapper {
        text-align: center; }
        .full-box .center-slider .offer-slider .product-box .img-wrapper img {
          height: 200px; }
      .full-box .center-slider .offer-slider .product-box:hover {
        -webkit-box-shadow: none;
                box-shadow: none; }
  .full-box .theme-card .offer-slider .sec-1 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex; }
    .full-box .theme-card .offer-slider .sec-1 .product-box2 .media .media-body .color-variant li {
      height: 18px;
      width: 18px;
      padding-right: 3px; }
    .full-box .theme-card .offer-slider .sec-1 .product-box2 + .product-box2 {
      border-top: none; }
  .theme-tab .tab-title li,
  .theme-tab .tab-title2 li {
    padding-left: 5px;
    padding-right: 5px; }
  .theme-tab .tab-content .product-tab .tab-box .product-box2 img {
    height: 150px;
    padding: 5px; }
  .theme-modal .modal-dialog .modal-content .modal-body .modal-bg .age-content h2 {
    margin-bottom: 20px;
    padding-bottom: 20px; }
  .theme-modal .modal-dialog .modal-content .modal-body .modal-bg .age-content h4 {
    margin-bottom: 20px;
    font-size: 15px; }
  .filter-main-btn span {
    font-size: 16px; }
  .tap-top {
    bottom: 70px;
    right: 20px; }
  .footer-theme2 .footer-link li,
  .footer-theme2 .footer-link-b li {
    padding-left: 0; }
  .product-christmas .product-box .cart-wrap {
    background-color: var(--theme-deafult);
    bottom: 0;
    opacity: 1; }
  .blog-detail-page .comment-section li {
    padding-top: 40px;
    padding-bottom: 40px; }
  .product-pagination .pagination {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    border-left: 1px solid #dddddd; }
  .testimonial {
    background-color: #f7f7f7; }
    .testimonial .testimonial-slider .media .media-body {
      padding: 30px 30px 30px 30px; }
  .about-page {
    text-align: center; }
    .about-page p {
      line-height: 1.5; }
  .team h2 {
    font-size: 25px; }
  .layout2-logo {
    padding-right: 70px; }
  .faq-section .theme-accordion .card .card-body p {
    line-height: 1.5 !important; }
  .faq-section .theme-accordion .card .card-header button {
    font-size: 14px !important;
    white-space: normal;
    width: 100%;
    padding: 16px 30px 16px 18px !important; }
  .product-wrapper-grid.list-view .product-box {
    display: block;
    border: 1px solid #eee;
    padding: 15px; }
    .product-wrapper-grid.list-view .product-box .img-wrapper,
    .product-wrapper-grid.list-view .product-box .img-block {
      margin: 0 auto 15px; }
    .product-wrapper-grid.list-view .product-box .product-detail {
      padding-left: 0; }
  .register-page .theme-card {
    padding: 25px; }
    .register-page .theme-card .theme-form input {
      margin-bottom: 25px;
      padding: 13px 18px; }
  .collection .partition-collection > div:nth-last-child(1), .collection .partition-collection > div:nth-last-child(2), .collection .partition-collection > div:nth-last-child(3) {
    margin-top: 30px; }
  .collection-product-wrapper .product-pagination .pagination .page-item a {
    padding: 15px 18px; }
  .collection-product-wrapper .product-pagination .product-search-count-bottom {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    padding-right: 0; }
    .collection-product-wrapper .product-pagination .product-search-count-bottom h5 {
      padding: 10px 0; }
  .collection-product-wrapper .product-pagination .theme-paggination-block nav {
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd; }
  .cart-section tbody tr td a,
  .wishlist-section tbody tr td a {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center; }
  .cart-section .cart-table thead th:nth-last-child(-n + 4) {
    display: none; }
  .cart-section tbody tr td:nth-last-child(-n + 4) {
    display: none; }
  .cart-section tbody tr td .mobile-cart-content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex; }
  .wishlist-section .cart-table thead th:nth-last-child(-n + 3) {
    display: none; }
  .wishlist-section tbody tr td:nth-last-child(-n + 3) {
    display: none; }
  .wishlist-section tbody tr td .mobile-cart-content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex; }
  .search-product > div:nth-last-child(4) {
    margin-top: 30px; }
  .blog-page .order-sec {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1; }
  .blog-page .blog-media:last-child {
    margin-bottom: 30px; }
  .blog-page .blog-sidebar ul li {
    display: block; }
  .tab-pane iframe {
    width: 100%; }
  .product-order .product-order-detail img {
    height: auto; }
  .typography_section .typography-box .typo-content.product-pagination .pagination {
    border-left: none; }
  .typography_section .typography-box .typo-content.typo-buttons a:last-child {
    margin-top: 5px; }
  .loader_skeleton .collection-banner .row > div {
    margin-top: 30px; }
    .loader_skeleton .collection-banner .row > div:first-child {
      margin-top: 0; }
  .loader_skeleton .banner-slider .home-banner > div:first-child .home-slider {
    margin-top: 25px; }
  .loader_skeleton .category-ldr .row .category-block {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33%;
            flex: 0 0 33.33%;
    max-width: 33.33%; }
  .loader_skeleton .box-layout .small-section {
    padding-top: 20px; }
  .loader_skeleton .center-slider .product-box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    margin-top: 25px;
    margin-bottom: 25px; }
    .loader_skeleton .center-slider .product-box .img-wrapper {
      height: calc(50px + (250 - 50) * ((100vw - 320px) / (1920 - 320)));
      width: calc(120px + (230 - 150) * ((100vw - 320px) / (1920 - 320)));
      margin-right: 15px; }
    .loader_skeleton .center-slider .product-box .product-detail {
      -ms-flex-item-align: center !important;
          align-self: center !important; }
      .loader_skeleton .center-slider .product-box .product-detail h4,
      .loader_skeleton .center-slider .product-box .product-detail h6 {
        margin-left: unset;
        margin-right: unset; }
  .loader_skeleton .service-block h4,
  .loader_skeleton .service-block p {
    margin-left: auto;
    margin-right: auto; }
  .dashboard-section .counter-section .row > div {
    margin-bottom: 20px; }
    .dashboard-section .counter-section .row > div:last-child {
      margin-bottom: 0; }
  .dashboard-section .apexcharts-canvas {
    margin: 0 auto; }
  .rtl .service-block svg {
    margin-right: 0; }
  .rtl .service-block + .service-block {
    border-right: 0; }
  .rtl .service-block .media .media-body h4,
  .rtl .service-block .media .media-body p {
    text-align: center; }
  .rtl .collection-product-wrapper .product-pagination .theme-paggination-block nav {
    border-right: none;
    border-left: 1px solid #dddddd; }
  .rtl .collection-product-wrapper .product-pagination .product-search-count-bottom {
    padding-left: 5px;
    padding-right: 5px; }
  .rtl .footer-title.active .according-menu:before {
    right: unset;
    left: 2px; }
  .rtl .footer-title .according-menu:before {
    right: unset;
    left: 2px; }
  .rtl .footer-end p {
    text-align: center; }
  .rtl .sub-footer .payment-card-bottom li {
    padding-left: 7px;
    padding-right: 7px; }
  .rtl .footer-theme2.section-light .footer-block h4 {
    text-align: right; }
  .rtl .footer-theme2.section-light .footer-block .footer-logo {
    text-align: right; }
  .rtl .footer-theme2 .footer-title h4 {
    text-align: right; }
  .rtl .footer-contant li {
    text-align: right; }
  .rtl .footer-contant .footer-social ul li {
    padding-right: 0;
    padding-left: 25px; }
  .rtl .dark-layout .footer-contant .footer-logo {
    text-align: right; }
  .rtl .dark-layout .footer-contant p {
    text-align: right; }
  .rtl .footer-theme .sub-title .contact-list i {
    margin-right: 0;
    margin-left: 10px; }
  .rtl .footer-theme .sub-title .contact-list li {
    padding-right: 0; }
  .rtl .layout2-logo {
    padding-left: 70px;
    padding-right: 0; }
  .rtl .full-box .theme-card .offer-slider .sec-1 .product-box2 + .product-box2 {
    border-left: none;
    border-right: none; }
  .rtl header.left-header .main-menu .menu-right .icon-nav li {
    padding-right: 15px;
    padding-left: 0; }
  .rtl .tools-grey .product-box .cart-info .mobile-quick-view {
    margin-left: 0;
    margin-right: 5px; }
  .dark .collection-product-wrapper .product-pagination .theme-paggination-block nav {
    border-color: #404040; }
  .dark .product-pagination .pagination {
    border-color: #404040; } }

@media (max-width: 577px) {
  .container-fluid.custom-container {
    padding-left: 15px;
    padding-right: 15px; }
  .detail-cannabis .detail_section > div {
    padding: 30px 25px; }
  #fb-root {
    display: none; }
  .section-b-space {
    padding-bottom: 30px; }
  section,
  .section-t-space {
    padding-top: 30px; }
  header.left-header .top-header {
    height: 70px; }
    header.left-header .top-header .header-dropdown li {
      padding: 0; }
    header.left-header .top-header .header-dropdown .mobile-wishlist img,
    header.left-header .top-header .header-dropdown .mobile-account img {
      display: none; }
    header.left-header .top-header .header-dropdown .mobile-wishlist i,
    header.left-header .top-header .header-dropdown .mobile-account i {
      display: block; }
  header.left-header .main-menu .menu-left .mobile-logo {
    position: absolute;
    padding: 0 !important;
    -webkit-transform: unset;
            transform: unset;
    right: unset;
    left: 15px;
    margin-right: 0;
    top: 16px; }
  header.left-header .main-menu .menu-left .navbar {
    position: absolute;
    right: 15px;
    padding: 0 !important;
    top: 22px; }
  header.video-header .top-header .header-dropdown li {
    padding: 0; }
  header.header-tools .top-header .header-dropdown li {
    padding: 0; }
  .demo-right a {
    right: 14px;
    width: 30px;
    height: 44px;
    line-height: 15px;
    letter-spacing: 2px;
    font-size: 12px;
    padding: 8px 4px 10px; }
  .offer-box {
    display: none; }
  .advertise-section .full-banner {
    padding-top: 50px;
    padding-bottom: 50px; }
    .advertise-section .full-banner .banner-contain {
      padding: 30px 10px; }
      .advertise-section .full-banner .banner-contain h2 {
        font-size: 40px;
        margin-bottom: 0;
        margin-top: -7px; }
      .advertise-section .full-banner .banner-contain h3 {
        font-size: 20px;
        margin-bottom: 3px; }
      .advertise-section .full-banner .banner-contain h4 {
        font-size: 16px;
        letter-spacing: 0.03em; }
  .setting-sidebar {
    width: 35px;
    height: 35px; }
    .setting-sidebar i {
      font-size: 19px; }
  .dark-light {
    width: 35px;
    height: 35px; }
  .portfolio-padding {
    padding-bottom: 15px; }
  .portfolio-section .isotopeSelector {
    margin-bottom: 15px; }
  .portfolio-section .filter-button {
    padding: 0 15px;
    font-size: 16px;
    line-height: 30px; }
  .service_slide .home-slider .slider-contain {
    height: 58vh; }
  .portfolio-section.metro-section .product-box .cart-wrap a i {
    font-size: 18px;
    padding: 7px; }
  .portfolio-section.metro-section .product-box .cart-wrap button i {
    font-size: 18px;
    padding: 7px; }
  .filter-section .filter-container ul.filter > li {
    padding: 0 10px; }
    .filter-section .filter-container ul.filter > li > a {
      font-size: 16px;
      line-height: 30px; }
  .tab-left .theme-tab .left-side .left-tab-title {
    margin-bottom: 15px; }
  h2 {
    font-size: 24px; }
  .tools-service.absolute-banner .absolute-bg {
    padding-bottom: 20px;
    -webkit-box-shadow: 0 0 8px 0 #ddd;
            box-shadow: 0 0 8px 0 #ddd; }
  .tools-service .service-block + .service-block {
    margin-top: 20px; }
  .tools-service .service-block svg,
  .tools-service .service-block1 svg {
    margin-bottom: 7px; }
  .top-header .header-dropdown li i {
    padding-right: 0;
    font-size: 18px; }
  .tools-parallax-product.full-banner {
    padding-top: 45px;
    padding-bottom: 45px; }
  header.header-gym {
    position: relative;
    background-color: #000000; }
    header.header-gym .main-menu {
      padding: 0;
      z-index: 9; }
      header.header-gym .main-menu .brand-logo {
        left: 0;
        -webkit-transform: unset;
                transform: unset; }
    header.header-gym .top-header .header-dropdown li a i {
      padding-right: 0; }
  header.header-6 .main-menu .brand-logo {
    position: relative;
    left: 0;
    -webkit-transform: none;
            transform: none; }
  header.header-7 {
    position: relative;
    z-index: unset;
    background-color: #333333; }
    header.header-7 .main-menu .menu-left .navbar {
      padding: 15px 45px 15px 0 !important; }
    header.header-7 .main-nav-center .toggle-nav {
      top: -70px; }
    header.header-7 .game-layout {
      background-color: #333333; }
  header.green-gradient .top-header .header-dropdown li {
    padding: 0; }
  header.header-christmas .main-menu .brand-logo {
    position: relative; }
  .gym-banner .collection-banner .contain-banner {
    padding-left: 15px;
    padding-right: 15px; }
    .gym-banner .collection-banner .contain-banner h2 {
      font-size: 25px;
      margin-bottom: -3px; }
  .banner-furniture.gym-banner {
    padding-left: 0;
    padding-right: 0; }
  .gym-product .part-cls {
    margin-top: -20px; }
    .gym-product .part-cls > div:nth-last-child(-n + 3) .product-box {
      margin-top: 20px; }
  .gym-product .partition-cls,
  .gym-product .part-cls {
    margin-left: -10px;
    margin-right: -10px; }
    .gym-product .partition-cls > div,
    .gym-product .part-cls > div {
      padding-left: 10px;
      padding-right: 10px; }
      .gym-product .partition-cls > div .product-box,
      .gym-product .part-cls > div .product-box {
        margin-top: 20px; }
  .gym-product .product-box:hover {
    -webkit-transform: unset;
            transform: unset; }
  .layout3-menu .main-menu .menu-left {
    width: calc(100vw - 32px); }
    .layout3-menu .main-menu .menu-left .main-menu-right .toggle-nav {
      right: 15px; }
      .layout3-menu .main-menu .menu-left .main-menu-right .toggle-nav .sidebar-name {
        display: none; }
  .layout3-menu .main-menu > div:nth-child(2) {
    position: absolute;
    left: 54%;
    right: 50%;
    -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    top: 0; }
  .layout3-menu .main-menu > div:nth-child(3) {
    height: 0; }
  .layout3-menu .brand-logo {
    left: 35%; }
  .search-overlay > div .closebtn {
    top: 15px;
    right: 30px; }
  .btn-solid,
  .btn-outline {
    padding: 7px 15px; }
  .product-box .product-detail .color-variant,
  .product-box .product-info .color-variant,
  .product-wrap .product-detail .color-variant,
  .product-wrap .product-info .color-variant {
    padding-top: 10px; }
  footer {
    margin-bottom: 60px; }
    footer .btn-solid {
      padding: 13px 29px; }
    footer p {
      line-height: 20px; }
    footer.footer-black .below-section {
      padding-top: 75px; }
    footer.footer-black.footer-light .subscribe h4 {
      margin-bottom: 0; }
  .partition1 {
    margin-bottom: -15px; }
    .partition1 > div {
      margin-bottom: 15px; }
  .theme-modal .modal-dialog .quick-view-modal .product-right {
    margin: 15px 0 10px 0; }
    .theme-modal .modal-dialog .quick-view-modal .product-right h2 {
      font-size: 18px;
      margin-bottom: 10px; }
    .theme-modal .modal-dialog .quick-view-modal .product-right h3 {
      font-size: 22px;
      margin-bottom: 10px; }
    .theme-modal .modal-dialog .quick-view-modal .product-right .color-variant li {
      height: 25px;
      width: 25px; }
    .theme-modal .modal-dialog .quick-view-modal .product-right .border-product {
      padding-top: 10px;
      padding-bottom: 15px; }
    .theme-modal .modal-dialog .quick-view-modal .product-right .size-box {
      margin-top: 5px;
      margin-bottom: 5px; }
    .theme-modal .modal-dialog .quick-view-modal .product-right .product-description .qty-box {
      margin-top: 5px; }
  .theme-modal.cart-modal .modal-dialog .modal-content .modal-body .modal-bg.addtocart .media a img {
    max-width: 105px;
    margin-bottom: 10px; }
  .theme-modal.cart-modal .modal-dialog .modal-content .modal-body .modal-bg.addtocart .media .media-body .buttons a {
    padding: 4px 5px; }
  .theme-modal.exit-modal .media {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center; }
    .theme-modal.exit-modal .media img {
      width: 25%; }
    .theme-modal.exit-modal .media .media-body h4 {
      font-size: 16px;
      margin-bottom: 0; }
    .theme-modal.exit-modal .media .media-body h2 {
      margin-bottom: 2px; }
    .theme-modal.exit-modal .media .media-body h5 {
      font-size: 16px;
      line-height: 18px; }
  .theme-modal.exit-modal .modal-dialog .modal-content .modal-body .modal-bg {
    padding: 12px; }
  .dark-layout .footer-theme2 .col {
    padding: 0 15px; }
  .dark-layout .footer-theme2 .subscribe-wrapper .subscribe-block {
    padding: 10px 20px 20px 10px; }
  .white-layout .small-section .footer-theme2 .col {
    padding: 0 15px; }
  .footer-theme2 .col {
    padding: 0 15px; }
  .footer-theme2 .form-p {
    padding: 0; }
  .footer-theme2.footer-border {
    padding: 15px 0; }
  .footer-theme2 .subscribe-block {
    padding: 0 75px; }
  .footer-theme2 .footer-link h4 {
    padding-bottom: 10px; }
  .footer-theme2 .footer-link li {
    padding-right: 20px; }
  .footer-theme2 .footer-link-b h4 {
    padding-bottom: 15px; }
  .footer-theme2 .footer-link-b li {
    padding-right: 20px; }
  .social-white {
    margin-top: 25px; }
  .category-border div .category-banner .category-box h2 {
    font-size: 30px;
    padding: 10px 20px; }
  .filter-main-btn span {
    font-size: 14px; }
  .category-bg .image-block:after {
    display: none; }
  .category-bg .contain-block:after {
    display: none; }
  .category-bg .order-section div {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1; }
    .category-bg .order-section div:nth-child(2) {
      -webkit-box-ordinal-group: 5;
          -ms-flex-order: 4;
              order: 4;
      margin-bottom: 30px; }
    .category-bg .order-section div:nth-child(3) {
      -webkit-box-ordinal-group: 4;
          -ms-flex-order: 3;
              order: 3; }
    .category-bg .order-section div:nth-child(4) {
      -webkit-box-ordinal-group: 3;
          -ms-flex-order: 2;
              order: 2;
      margin-bottom: 30px; }
    .category-bg .order-section div:nth-child(5) {
      -webkit-box-ordinal-group: 6;
          -ms-flex-order: 5;
              order: 5; }
    .category-bg .order-section div:nth-child(6) {
      -webkit-box-ordinal-group: 7;
          -ms-flex-order: 6;
              order: 6; }
  .category-bg .contain-block {
    padding-top: 30px;
    padding-bottom: 30px; }
  .theme-tab .tab-title {
    margin-bottom: 25px; }
  .full-banner {
    padding-top: 50px;
    padding-bottom: 50px; }
    .full-banner.parallax-layout {
      padding-top: 50px;
      padding-bottom: 50px; }
    .full-banner .banner-contain {
      background-color: rgba(255, 255, 255, 0.2);
      padding: 25px; }
      .full-banner .banner-contain .btn-solid,
      .full-banner .banner-contain .btn-outline {
        padding: 10px 20px; }
    .full-banner.p-left .banner-contain, .full-banner.p-right .banner-contain {
      float: none; }
    .full-banner .banner-contain h2 {
      font-size: 65px; }
    .full-banner .banner-contain h3 {
      font-size: 40px; }
    .full-banner .banner-contain h4 {
      font-size: 18px;
      padding-top: 0;
      letter-spacing: 0.3em; }
    .full-banner.feature-banner .feature-object {
      text-align: left;
      margin-left: 0;
      margin-bottom: 30px; }
      .full-banner.feature-banner .feature-object li .media .media-body {
        text-align: left; }
      .full-banner.feature-banner .feature-object li .media img {
        -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
                order: -1;
        margin-right: 15px;
        margin-left: 0; }
  .pet-parallax .full-banner {
    padding-top: 50px;
    padding-bottom: 50px; }
  .home-slider .home {
    height: 58vh; }
  .home-slider .slider-contain {
    height: 58vh; }
    .home-slider .slider-contain h1 {
      font-size: 30px; }
  .home-slider .slider-details {
    top: 18%;
    right: 8%;
    width: 180px !important;
    height: 180px !important; }
    .home-slider .slider-details h1 {
      font-size: 22px;
      margin: 5px 0; }
    .home-slider .slider-details h2 {
      font-size: 18px; }
    .home-slider .slider-details h3 {
      font-size: 16px; }
    .home-slider .slider-details h4 {
      display: none; }
    .home-slider .slider-details .btn-white {
      padding: 4px 8px; }
  .home-slider:hover .slick-next {
    right: 70px; }
  .home-slider:hover .slick-prev {
    left: 70px; }
  .home-slider:hover .slick-prev,
  .home-slider:hover .slick-next {
    -webkit-transform: scale(1.5);
            transform: scale(1.5); }
  .home-slider.fullpage .slick-dots {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    bottom: 60px;
    top: unset;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
  .home-slider.fullpage .home .slider-contain {
    text-align: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    padding-left: 0; }
    .home-slider.fullpage .home .slider-contain > div {
      background-color: rgba(0, 0, 0, 0.15);
      padding: 30px 50px; }
    .home-slider.fullpage .home .slider-contain h1,
    .home-slider.fullpage .home .slider-contain p {
      color: #ffffff; }
    .home-slider.fullpage .home .slider-contain h1 {
      font-size: 22px; }
    .home-slider.fullpage .home .slider-contain p {
      max-width: 330px;
      font-size: 12px; }
    .home-slider.fullpage .home .slider-contain .btn-solid {
      padding: 10px 15px; }
  .height-85 .home-slider .home {
    height: 60vh; }
  .height-85 .home-slider .slider-contain {
    height: 60vh; }
  .background .contain-bg {
    background-color: unset;
    padding-top: 0;
    padding-bottom: 0;
    margin: 10px 0; }
    .background .contain-bg:hover {
      background-color: unset; }
  .theme-tab .tab-content .product-tab .tab-box {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: calc(100% - 10px); }
    .theme-tab .tab-content .product-tab .tab-box:nth-last-child(-n + 2) {
      margin: 0 5px 10px; }
    .theme-tab .tab-content .product-tab .tab-box:nth-last-child(-n + 1) {
      margin: 0 5px 0; }
    .theme-tab .tab-content .product-tab .tab-box .product-box2 img {
      height: 150px; }
    .theme-tab .tab-content .product-tab .tab-box .product-box2 .media .media-body a h6 {
      margin-right: 10px; }
    .theme-tab .tab-content .product-tab .tab-box .product-box2 .media .media-body .color-variant li {
      margin-top: 7px;
      height: 18px;
      width: 18px; }
  .alert {
    right: 0 !important;
    left: 0;
    max-width: 90% !important; }
  .tap-top {
    width: 35px;
    height: 35px;
    padding: 2px;
    font-size: 19px; }
  .layout2-logo {
    padding-right: 0; }
  .absolute-banner {
    margin-top: 0; }
    .absolute-banner .absolute-bg {
      -webkit-box-shadow: none;
              box-shadow: none;
      padding-bottom: 0; }
    .absolute-banner.banner-padding {
      padding-top: 0; }
  .box-layout-body .box-layout {
    margin-top: 0; }
  .full-scroll-menu .container-fluid {
    padding-left: 15px;
    padding-right: 15px; }
  .layout-8 {
    padding: 0 15px; }
  .layout-20 {
    padding: 0; }
  .addcart_btm_popup {
    display: none !important; }
  .color-picker a.handle {
    width: 30px;
    height: 35px; }
    .color-picker a.handle i {
      margin-left: 7px;
      font-size: 17px; }
  .full-scroll-footer {
    display: none; }
  .template-password #container #login {
    margin-bottom: 0; }
  .error-section {
    padding: 100px 0; }
    .error-section h1 {
      font-size: 100px; }
    .error-section h2 {
      margin: 20px 0;
      font-size: 18px; }
  .about-page .about-head {
    display: inline-block;
    width: 100%;
    text-align: center; }
    .about-page .about-head .theme-breadcrumb .breadcrumb {
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      padding-top: 10px;
      padding-bottom: 0; }
  .blog-detail-page .blog-detail .post-social li {
    display: block; }
    .blog-detail-page .blog-detail .post-social li + li {
      padding-left: 0;
      margin-left: 0;
      border-left: none; }
  .collection .collection-block .collection-content p {
    margin-bottom: 10px; }
  .collection .collection-block .collection-content h4,
  .collection .collection-block .collection-content h3 {
    margin-bottom: 5px; }
  .collection-product-wrapper .product-wrapper-grid .product-box {
    margin-top: 30px; }
  .collection-product-wrapper .product-top-filter .product-filter-content .search-count {
    padding: 10px 20px 10px 20px; }
    .collection-product-wrapper .product-top-filter .product-filter-content .search-count h5 {
      font-size: 14px;
      line-height: 20px; }
  .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view,
  .collection-product-wrapper .product-top-filter .product-filter-content .product-page-filter {
    width: 100%; }
    .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view select,
    .collection-product-wrapper .product-top-filter .product-filter-content .product-page-filter select {
      padding: 10px 20px 10px 20px; }
    .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view:before,
    .collection-product-wrapper .product-top-filter .product-filter-content .product-page-filter:before {
      top: 11px; }
  .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view {
    border-right: 1px solid #dddddd !important;
    border-bottom: 1px solid #dddddd; }
  .collection-product-wrapper .product-top-filter .popup-filter .search-count {
    padding-top: 10px;
    padding-bottom: 10px; }
  .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view {
    border-bottom: 1px solid #dddddd;
    width: 100%; }
    .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view select {
      border-right: none;
      padding-top: 10px;
      padding-bottom: 10px; }
    .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view:before {
      top: 14px; }
  .collection-product-wrapper .product-top-filter .popup-filter .product-page-filter {
    width: 100%;
    border-top: none; }
    .collection-product-wrapper .product-top-filter .popup-filter .product-page-filter select {
      padding-top: 10px;
      padding-bottom: 10px; }
    .collection-product-wrapper .product-top-filter .popup-filter .product-page-filter:before {
      left: unset;
      right: 35px !important;
      top: 14px; }
  .cart-section .cart-buttons > div:last-child {
    padding-right: 15px; }
  .cart-section .cart-buttons .btn-solid {
    padding: 7px 8px; }
  .wishlist-section .btn-solid {
    padding: 7px 8px; }
  .collection-wrapper .order-up {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1; }
  .checkout-page .checkout-form .checkout-details {
    padding: 15px; }
  .search-product > div:nth-last-child(5) {
    margin-top: 30px; }
  .product-box .img-wrapper .lable-block .lable3 {
    font-size: 12px;
    padding: 13px 8px; }
  .product-box .img-block .lable-wrapper .lable1,
  .product-box .img-block .lable-wrapper .lable2 {
    padding: 6px 9px 8px 15px;
    font-size: 12px; }
  .tab-product .tab-content.nav-material p,
  .product-full-tab .tab-content.nav-material p {
    padding: 15px 0; }
  .tab-product .tab-content.nav-material p {
    line-height: 1.3; }
  .slider-right-nav .slick-slide:first-child > div {
    margin-top: 15px; }
  .lookbook .lookbook-block .lookbook-dot .dot-showbox {
    width: 90px;
    top: -70px; }
    .lookbook .lookbook-block .lookbook-dot .dot-showbox .dot-info h5 {
      line-height: 16px; }
  .layout7-product .product-box .details-product {
    padding: 5px; }
  .layout7-product .product-box:hover .details-product {
    -webkit-animation: none;
            animation: none; }
  .padding-cls {
    padding-left: 15px;
    padding-right: 15px; }
  .success-text i {
    font-size: 40px; }
  .success-text p {
    font-size: 16px;
    margin-bottom: 10px;
    line-height: 1.2; }
  .success-text h2 {
    margin-bottom: 10px; }
  .order-success-sec > div {
    margin-top: 15px; }
  .delivery-sec {
    padding: 15px;
    margin-top: 15px; }
    .delivery-sec h3,
    .delivery-sec h2 {
      font-size: 20px; }
  .product-order h3 {
    font-size: 20px; }
  .product-order .product-order-detail .order_detail h4,
  .product-order .product-order-detail .order_detail h5 {
    font-size: 14px;
    line-height: 1.2; }
  .product-order .total-sec ul li {
    font-size: 16px; }
  .product-order .final-total h3 {
    font-size: 16px; }
  .beauty-about .service .service-block1 {
    margin-bottom: 20px; }
    .beauty-about .service .service-block1:last-child {
      margin-bottom: 0; }
  .main-menu .menu-left .navbar i {
    font-size: 24px; }
  .typography_section .typography-box .typo-content.typo-buttons a:last-child {
    margin-top: 0; }
  .typography_section .typography-box .typo-content.typo-buttons .btn-solid.btn-sm {
    padding: 3px 12px; }
  .bundle .bundle_img .img-box img {
    max-width: 70px; }
  .bundle .bundle_detail .theme_checkbox {
    padding: 0; }
  .vendor-cover .bg-size {
    height: 250px; }
  .vendor-profile {
    margin-top: -50px; }
  .start-selling form .row > div:nth-child(2) {
    margin-top: 15px; }
  .become-vendor .step-bg .step-box .steps {
    margin: 0 auto 15px auto; }
  .bg-title .theme-tab .bg-title-part {
    display: block;
    text-align: center; }
    .bg-title .theme-tab .bg-title-part .tab-title {
      margin-left: unset;
      text-align: center; }
      .bg-title .theme-tab .bg-title-part .tab-title li {
        padding-left: 5px;
        padding-right: 5px; }
  .loader_skeleton header.header-gym {
    top: 0;
    background-color: black; }
  .loader_skeleton .header-dropdown {
    display: none; }
  .layout-8 .loader_skeleton {
    padding: 0 0; }
  .rtl .breadcrumb-section .page-title h2 {
    text-align: center; }
  .rtl .blog-detail-page .blog-detail .post-social li + li {
    padding-right: 0;
    margin-right: 0;
    border-right: none; }
  .rtl .collection-product-wrapper .product-top-filter .product-filter-content .product-page-filter {
    border-right: 1px solid #dddddd; }
  .rtl .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view select,
  .rtl .collection-product-wrapper .product-top-filter .product-filter-content .product-page-filter select {
    padding: 10px 34px 10px 34px; }
  .rtl .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view {
    border-left: none; }
    .rtl .collection-product-wrapper .product-top-filter .popup-filter .product-page-per-view:before {
      left: 25px; }
  .rtl .home-slider .slick-next,
  .rtl .center-slider .slick-next {
    right: unset;
    left: 1px; }
  .rtl .home-slider .slick-prev,
  .rtl .center-slider .slick-prev {
    left: unset;
    right: 1px; }
  .rtl .home-slider:hover .slick-next,
  .rtl .center-slider:hover .slick-next {
    right: unset;
    left: 30px; }
  .rtl .home-slider:hover .slick-prev,
  .rtl .center-slider:hover .slick-prev {
    left: unset;
    right: 30px; }
  .rtl .layout2-logo {
    padding-left: 0; }
  .rtl .main-menu .menu-right .icon-nav .mobile-cart .show-div.shopping-cart {
    left: unset !important;
    right: -118px !important; }
  .rtl .main-menu .menu-right .icon-nav .onhover-div .show-div.setting {
    right: unset;
    left: 0 !important; }
  .rtl .layout3-menu .main-menu .menu-left .main-menu-right .toggle-nav {
    right: unset;
    left: 15px; }
  .rtl .layout3-menu .brand-logo {
    -webkit-transform: translateX(-15%);
            transform: translateX(-15%); }
  .rtl .top-header .header-dropdown li i {
    padding-left: 0; }
  .rtl .top-header .header-dropdown .mobile-account .onhover-show-div {
    right: unset;
    left: 0; }
  .rtl .bg-title .theme-tab .bg-title-part .title-border {
    text-align: center; }
  .rtl .bg-title .theme-tab .bg-title-part .tab-title {
    margin-right: auto;
    text-align: center;
    margin-left: auto; }
    .rtl .bg-title .theme-tab .bg-title-part .tab-title li {
      padding-left: 5px;
      padding-right: 5px; }
  .dark .collection-product-wrapper .product-top-filter .product-filter-content .product-page-per-view {
    border-color: #404040 !important; }
  .dark .tools-service.absolute-banner .absolute-bg {
    -webkit-box-shadow: none;
            box-shadow: none; }
  .dark .full-banner .banner-contain {
    background-color: rgba(0, 0, 0, 0.2); } }

@media (min-width: 577px) {
  .rtl .onhover-dropdown:before {
    right: unset;
    left: 3px; }
  .rtl .onhover-dropdown .onhover-show-div {
    right: unset;
    left: 0; }
  .rtl .main-menu .menu-left .navbar {
    padding: 40px 0 40px 45px; }
  .rtl .main-menu .category-nav-right .navbar {
    padding: 40px 45px 40px 0; }
  .rtl .main-menu .menu-right .icon-nav li {
    padding-left: 0;
    padding-right: 20px; }
  .rtl .main-menu .menu-right .onhover-div .show-div.shopping-cart, .rtl .main-menu .menu-right .onhover-div .show-div.setting {
    left: 0;
    right: unset; }
  .rtl .main-menu .menu-right .onhover-div .show-div.shopping-cart li .close-circle {
    right: unset;
    left: 0; }
  .rtl .main-menu .menu-right .onhover-div .show-div.shopping-cart li .total h5 span {
    float: left; } }

@media (max-width: 575px) {
  .breadcrumb-section .page-title {
    text-align: center;
    margin: 0 auto;
    vertical-align: middle;
    display: unset; }
    .breadcrumb-section .page-title h2 {
      margin-top: -2px; }
  .breadcrumb-section .breadcrumb {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    padding: 0;
    line-height: 1;
    margin-top: 10px; } }

@media (max-width: 480px) {
  .title1 .title-inner1 {
    margin-bottom: 20px; }
  .title1.title5 hr[role="tournament6"] {
    margin: 12px auto 20px auto; }
  .title2 .title-inner2 {
    margin-bottom: 20px; }
  .title3 .line {
    margin-bottom: 20px; }
  .title4 .line {
    margin-bottom: 20px; }
  .title-borderless {
    margin-bottom: 20px; }
  .service_slide .home-slider .slider-contain {
    height: 55vh; }
  .advertise-section .full-banner {
    padding-top: 40px;
    padding-bottom: 40px; }
  header.left-header .main-menu .menu-left .mobile-logo {
    top: 22px; }
  .gym-banner .collection-banner .contain-banner > div {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 10px; }
  .gym-banner .collection-banner .contain-banner h2 {
    font-size: 20px;
    margin-top: 4px; }
  .gym-banner .collection-banner .contain-banner h4 {
    font-size: 14px; }
  .subscribe-form.classic-form .form-control {
    margin-left: 0; }
  .product-box .img-block {
    min-height: 190px; }
  .theme-tab .tab-title li {
    padding-left: 5px;
    padding-right: 5px; }
  .theme-tab .tab-title2 {
    margin-bottom: 30px;
    font-size: 18px;
    font-weight: 400; }
    .theme-tab .tab-title2 li {
      padding-left: 15px;
      padding-right: 15px; }
    .theme-tab .tab-title2:after {
      display: none; }
  .blog-details {
    padding-left: 0;
    padding-right: 0; }
  .full-banner {
    padding-top: 40px;
    padding-bottom: 40px; }
    .full-banner.parallax-layout {
      padding-top: 4px;
      padding-bottom: 40px; }
    .full-banner .banner-contain h2 {
      font-size: 60px; }
    .full-banner .banner-contain h4 {
      font-size: 18px; }
    .full-banner .santa-img {
      bottom: -20px;
      left: 10px; }
      .full-banner .santa-img img {
        width: 76px; }
  .pet-parallax .full-banner {
    padding-top: 40px;
    padding-bottom: 40px; }
  .collection-banner .contain-banner {
    padding-left: 30px;
    padding-right: 30px; }
    .collection-banner .contain-banner h2 {
      font-size: 24px; }
  .home-slider .home {
    height: 55vh; }
  .home-slider .slider-details {
    width: 150px !important;
    height: 150px !important; }
    .home-slider .slider-details h1 {
      font-size: 20px; }
    .home-slider .slider-details h2 {
      font-size: 16px; }
    .home-slider .slider-details h3 {
      font-size: 14px; }
  .home-slider .slider-contain {
    height: 55vh; }
    .home-slider .slider-contain h1 {
      font-size: 28px; }
    .home-slider .slider-contain h4 {
      letter-spacing: 0.1em; }
    .home-slider .slider-contain .btn-solid,
    .home-slider .slider-contain .btn-outline {
      margin-top: 5px; }
  .home-slider:hover .slick-prev,
  .home-slider:hover .slick-next {
    -webkit-transform: scale(1.2);
            transform: scale(1.2); }
  .home-slider:hover .slick-next {
    right: 60px; }
  .home-slider:hover .slick-prev {
    left: 60px; }
  .height-85 .home-slider .home {
    height: 55vh; }
  .height-85 .home-slider .slider-contain {
    height: 55vh; }
  .white-layout .footer-theme2 .footer-block .footer-container {
    max-width: 448px; }
  .footer-theme2.section-light .footer-block .subscribe-white {
    padding: 30px 30px; }
    .footer-theme2.section-light .footer-block .subscribe-white .form-control {
      letter-spacing: 3px; }
  .theme-modal .modal-dialog .modal-content .modal-body .modal-bg {
    padding: 35px; }
    .theme-modal .modal-dialog .modal-content .modal-body .modal-bg .offer-content img {
      margin-bottom: 10px; }
    .theme-modal .modal-dialog .modal-content .modal-body .modal-bg .offer-content h2 {
      margin-bottom: 15px; }
    .theme-modal .modal-dialog .modal-content .modal-body .modal-bg .age-content form .form-control {
      height: 40px;
      padding: 0; }
    .theme-modal .modal-dialog .modal-content .modal-body .modal-bg .age-content form .btn-solid,
    .theme-modal .modal-dialog .modal-content .modal-body .modal-bg .age-content form .btn-outline {
      padding: 8px 15px; }
  .theme-modal.cart-modal .modal-dialog .modal-content .modal-body .modal-bg.addtocart .media {
    display: block;
    text-align: center; }
  .theme-tab .tab-content .product-tab .tab-box .product-box2 .media .media-body h4 {
    font-size: 15px; }
  .tab-bg,
  .bg-block {
    padding: 35px 25px 30px 25px; }
  .setting-box {
    width: 280px; }
  .setting-sidebar.open-icon {
    right: 278px; }
  .setting-box .setting-contant .setting_buttons {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex; }
    .setting-box .setting-contant .setting_buttons li {
      width: 40% !important; }
  .select_input select {
    padding: 12px 15px;
    margin-bottom: 18px; }
  .about-page p {
    line-height: 1.5;
    margin-bottom: 0; }
  .testimonial .testimonial-slider .media {
    display: inline-block; }
    .testimonial .testimonial-slider .media img {
      margin: 0 auto;
      height: 100px;
      width: 100px; }
    .testimonial .testimonial-slider .media .media-body {
      padding: 0;
      text-align: center; }
  .blog-detail-page .blog-contact h2 {
    font-size: 30px;
    margin-bottom: 25px; }
  .blog-detail-page .blog-contact .theme-form input,
  .blog-detail-page .blog-contact .theme-form textarea {
    padding: 12px 20px;
    margin-bottom: 20px; }
  .blog-detail-page .blog-detail h3 {
    font-size: 20px;
    margin-bottom: 15px; }
  .blog-detail-page .blog-detail img {
    margin-bottom: 25px; }
  .blog-detail-page .blog-advance ul {
    line-height: 1.5; }
  .blog-detail-page .blog-advance img {
    margin-bottom: 20px;
    margin-top: 10px; }
  .blog-detail-page .blog-advance p {
    line-height: 1.5; }
  .blog-detail-page .comment-section li {
    padding-top: 30px;
    padding-bottom: 30px; }
    .blog-detail-page .comment-section li p {
      line-height: 1.5; }
    .blog-detail-page .comment-section li h6 {
      margin-top: 10px;
      margin-bottom: 10px; }
      .blog-detail-page .comment-section li h6 span {
        display: inherit;
        margin-left: 0; }
  .blog-detail-page .comment-section .media {
    display: inline-block;
    text-align: center; }
  .faq-section .theme-accordion .card .card-body p {
    line-height: 1.5 !important; }
  .faq-section .theme-accordion .card .card-header button {
    line-height: 1.3;
    padding: 12px 35px 12px 12px !important; }
  .faq-section .accordion.theme-accordion .card .card-header button:before {
    top: 20px; }
  .pwd-page {
    padding: 70px 0; }
    .pwd-page h2 {
      font-size: 25px;
      margin-bottom: 15px; }
  .login-page .authentication-right h6 {
    margin-bottom: 10px; }
  .login-page .theme-card {
    padding: 25px; }
  .register-page .theme-card {
    padding: 18px; }
    .register-page .theme-card .theme-form input {
      margin-bottom: 20px;
      padding: 12px 15px; }
  .search-block .btn-solid {
    padding: 10px 15px; }
  .contact-page .map iframe {
    height: 275px; }
  .contact-page .theme-form input {
    padding: 12px 15px;
    margin-bottom: 18px; }
  .blog-page .blog-media .blog-right h6 {
    margin-bottom: 0; }
  .blog-page .blog-media .blog-right p {
    line-height: 1.3; }
  .blog-page .blog-media .blog-right h4 {
    margin-bottom: 5px; }
  .blog-page .blog-media .blog-right ul {
    margin-bottom: 5px; }
    .blog-page .blog-media .blog-right ul li {
      display: block; }
      .blog-page .blog-media .blog-right ul li + li {
        padding-left: 0;
        margin-left: 0;
        border-left: none; }
  .account-sidebar {
    width: 45%; }
  .success-text h2 {
    font-size: 20px; }
  .success-text p {
    font-size: 14px; }
  .delivery-sec h3,
  .delivery-sec h2 {
    font-size: 18px; }
  .typography_section .typography-box .typo-content.typo-buttons a {
    margin: 5px 0; }
  .dashboard-section .dashboard-box .dashboard-detail ul li .details {
    display: block; }
    .dashboard-section .dashboard-box .dashboard-detail ul li .details .left {
      width: auto; }
      .dashboard-section .dashboard-box .dashboard-detail ul li .details .left h6 {
        font-weight: 600; }
  .theme-card .offer-slider img {
    max-width: 130px;
    height: auto; }
  .rtl .theme-tab .tab-title2 {
    -webkit-padding-start: 0; }
  .rtl .blog-page .blog-media .blog-right ul li + li {
    padding-right: 0;
    margin-right: 0;
    border-right: 0; }
  .rtl .blog-detail-page .comment-section li p,
  .rtl .blog-detail-page .comment-section li h6 {
    text-align: center; }
  .rtl .product-right .product-icon .product-social li {
    padding-left: 16px; }
  .rtl .tab-product .nav-material.nav-tabs .nav-item .nav-link {
    text-align: right; }
  .rtl .tab-product .nav-material.nav-tabs .nav-item .nav-link,
  .rtl .product-full-tab .nav-material.nav-tabs .nav-item .nav-link {
    padding: 15px; }
  .rtl .testimonial .testimonial-slider .media .media-body p {
    text-align: center; }
  .rtl .full-banner .santa-img {
    right: 10px; } }

@media (max-width: 420px) {
  h2 {
    font-size: 22px; }
  .product-pagination {
    margin: 30px 0; }
  .margin-res {
    margin-left: -10px;
    margin-right: -10px; }
    .margin-res > div {
      padding-left: 10px;
      padding-right: 10px; }

 
  .product-box .cart-detail i,
  .product-wrap .cart-detail i {
    padding-top: 5px;
    padding-bottom: 5px;
    font-size: 14px; }
  .product-box .cart-info i,
  .product-box .cart-wrap i,
  .product-wrap .cart-info i,
  .product-wrap .cart-wrap i {
    padding: 5px;
    font-size: 13px; }
  .product-box .img-wrapper .lable-block .lable4,
  .product-wrap .img-wrapper .lable-block .lable4 {
    font-size: 10px; }
  .product-box .img-wrapper .cart-box i,
  .product-wrap .img-wrapper .cart-box i {
    font-size: 16px;
    padding-left: 4px;
    padding-right: 4px; }
  .product-box .product-detail .rating,
  .product-box .product-info .rating,
  .product-wrap .product-detail .rating,
  .product-wrap .product-info .rating {
    margin-top: 5px; }
  .product-box .product-detail h6,
  .product-box .product-info h6,
  .product-wrap .product-detail h6,
  .product-wrap .product-info h6 {
    font-size: 14px; }
  .product-box .product-detail h4,
  .product-box .product-info h4,
  .product-wrap .product-detail h4,
  .product-wrap .product-info h4 {
    font-size: 15px; }
  .product-box .product-detail .color-variant,
  .product-box .product-info .color-variant,
  .product-wrap .product-detail .color-variant,
  .product-wrap .product-info .color-variant {
    padding-top: 3px; }
    .product-box .product-detail .color-variant li,
    .product-box .product-info .color-variant li,
    .product-wrap .product-detail .color-variant li,
    .product-wrap .product-info .color-variant li {
      height: 14px;
      width: 14px;
      margin-right: 3px; }
  .product-box .cart-info.cart-wrap i,
  .product-box .cart-wrap.cart-wrap i,
  .product-wrap .cart-info.cart-wrap i,
  .product-wrap .cart-wrap.cart-wrap i {
    padding: 5px;
    font-size: 13px; }

  .layout7-product .no-slider .product-box {
    max-width: calc(100% - 20px);
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%; }
  

  
  
  .product-box .img-wrapper .lable-block .lable3 {
    font-size: 10px;
    padding: 10px 5px; }
  .product-box .img-wrapper .cart-box {
    padding: 8px 8px;
    bottom: 10px; }
  .product-box .img-block .lable-wrapper {
    top: 20px; }
    .product-box .img-block .lable-wrapper .lable1,
    .product-box .img-block .lable-wrapper .lable2 {
      padding: 5px 5px 5px 8px;
      font-size: 12px; }
  .product-box .cart-info {
    bottom: 10px; }
  .team h6 {
    line-height: 15px; }
  .theme-modal .modal-dialog .modal-content .modal-body .modal-bg {
    padding: 30px; }
    .theme-modal .modal-dialog .modal-content .modal-body .modal-bg .offer-content h2 {
      font-size: 30px; }
  .login-page .authentication-right p {
    line-height: 1.5; }
  .login-page .theme-card .theme-form input {
    padding: 15px 20px;
    margin-bottom: 25px; }
  .tab-product .nav-material.nav-tabs {
    display: block; }
    .tab-product .nav-material.nav-tabs .nav-item {
      width: 100%; }
      .tab-product .nav-material.nav-tabs .nav-item .nav-link {
        padding: 10px 20px; }
  .vertical-tab.tab-product .nav-material.nav-tabs .nav-item .nav-link,
  .vertical-tab .product-full-tab .nav-material.nav-tabs .nav-item .nav-link {
    padding: 10px 20px; }
  .product-right .product-buttons .btn-solid,
  .product-right .product-buttons .btn-outline {
    padding: 7px 13px; }
  .product-right.product-form-box .timer {
    padding-left: 29px; }
    .product-right.product-form-box .timer span {
      width: 45px; }
  .product-right .timer {
    padding-left: 35px; }
    .product-right .timer span {
      width: 45px; }
  .product-right .product-icon .product-social {
    margin-top: 0; }
    .product-right .product-icon .product-social li {
      padding-right: 5px; }
      .product-right .product-icon .product-social li a i {
        font-size: 14px; }
  .product-right .product-icon .wishlist-btn i {
    font-size: 14px;
    padding-left: 10px;
    margin-left: 5px; }
  .product-right .product-icon .wishlist-btn span {
    font-size: 14px; }
  .tab-product .theme-form input,
  .tab-product .theme-form textarea {
    font-size: 12px;
    padding: 8px 15px; }
  .order-box .sub-total .shipping {
    width: unset;
    float: unset;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex; }
    .order-box .sub-total .shipping .shopping-option:last-child {
      padding-left: 20px; }
  .checkout-page .checkout-form .form-group {
    margin-bottom: 15px; }
  .checkout-page .checkout-form input[type="text"], .checkout-page .checkout-form input[type="email"], .checkout-page .checkout-form input[type="password"], .checkout-page .checkout-form input[type="tel"], .checkout-page .checkout-form input[type="number"], .checkout-page .checkout-form input[type="url"] {
    height: 40px; }
  .checkout-page .checkout-form select,
  .checkout-page .checkout-form textarea {
    height: 40px; }
  .grid-products {
    margin-left: -10px;
    margin-right: -10px; }
    .grid-products .product-box {
      padding-left: 10px;
      padding-right: 10px; }

@media (max-width: 360px) {
  .btn-solid,
  .btn-outline {
    padding: 10px 15px; }
  h2 {
    font-size: 25px; }
 
  .full-banner {
    padding-top: 30px;
    padding-bottom: 30px; }
    .full-banner.parallax-layout {
      padding-top: 30px;
      padding-bottom: 30px; }
    .full-banner .banner-contain h2 {
      font-size: 55px; }
    .full-banner .banner-contain h3 {
      font-size: 30px; }
  .pet-parallax .full-banner {
    padding-top: 30px;
    padding-bottom: 30px; }
  .home-slider .home {
    height: 50vh; }
  .home-slider .slider-contain {
    height: 50vh; }
    .home-slider .slider-contain h1 {
      font-size: 25px; }
    .home-slider .slider-contain .btn-solid,
    .home-slider .slider-contain .btn-outline {
      margin-top: 8px;
      padding: 5px 15px; }
  .home-slider .slider-details {
    top: 20%; }
    .home-slider .slider-details h1 {
      font-size: 16px; }
    .home-slider .slider-details h2 {
      font-size: 13px; }
  .home-slider:hover .slick-prev,
  .home-slider:hover .slick-next {
    -webkit-transform: scale(1.1);
            transform: scale(1.1); }
  .home-slider:hover .slick-next {
    right: 40px; }
  .home-slider:hover .slick-prev {
    left: 40px; }
  .height-85 .home-slider .home {
    height: 50vh; }
  .height-85 .home-slider .slider-contain {
    height: 50vh; }
  .layout-7 .home .slider-contain {
    height: 50vh; }
  .theme-tab .tab-content .product-tab .tab-box .product-box2 .media .media-body a h6 {
    font-size: 13px; }
  .theme-tab .tab-content .product-tab .tab-box .product-box2 .media .media-body .color-variant li {
    height: 12px;
    width: 12px; }
  .theme-tab .tab-content .product-tab .tab-box .product-box2 img {
    height: 115px; }
  .blog-detail-page .blog-detail p {
    line-height: 1.5; }
  .blog-detail-page .blog-contact h2 {
    font-size: 20px;
    margin-bottom: 20px; }
  .about-page p {
    line-height: 1.2; }
  .theme-modal .modal-dialog .modal-content .modal-body {
    padding: 10px; }
    .theme-modal .modal-dialog .modal-content .modal-body .modal-bg {
      padding: 20px; }
      .theme-modal .modal-dialog .modal-content .modal-body .modal-bg .close {
        right: 10px; }
      .theme-modal .modal-dialog .modal-content .modal-body .modal-bg .offer-content form .form-group .form-control {
        padding-top: 10px;
        padding-bottom: 10px; }
      .theme-modal .modal-dialog .modal-content .modal-body .modal-bg .offer-content h2 {
        font-size: 20px;
        margin-bottom: 10px; }
  .login-page .theme-card {
    padding: 18px; }
  .search-block .btn-solid {
    padding: 10px 5px; }
  .search-block .form-header .input-group input {
    padding: 10px 12px; }
  .contact-page .map iframe {
    height: 200px; }
  .collection-product-wrapper .product-pagination .pagination .page-item a {
    padding: 15px 13px; }
  .collection-product-wrapper .product-pagination .product-search-count-bottom {
    padding-left: 10px; }
    .collection-product-wrapper .product-pagination .product-search-count-bottom h5 {
      line-height: 15px; }
  .collection-product-wrapper .product-top-filter .popup-filter .sidebar-popup {
    width: 80%; }
  .cart-section tbody tr td,
  .wishlist-section tbody tr td {
    min-width: 115px; }
    .cart-section tbody tr td .mobile-cart-content .col-xs-3,
    .wishlist-section tbody tr td .mobile-cart-content .col-xs-3 {
      margin-left: 5px;
      margin-right: 5px; }
    .cart-section tbody tr td a img,
    .wishlist-section tbody tr td a img {
      height: 80px; }
  .cart-section tfoot tr td,
  .wishlist-section tfoot tr td {
    padding-right: 27px; }
    .cart-section tfoot tr td h2,
    .wishlist-section tfoot tr td h2 {
      font-size: 21px; }
  .wishlist-section .wishlist-buttons:last-child a {
    margin-left: 0; }
  .product-buttons .btn-solid,
  .product-buttons .btn-outline {
    padding: 7px 16px; }
  .product-description .qty-box .input-group {
    width: 100%; }
  .single-product-tables.detail-section table {
    width: 70%; }
  .product-right .timer {
    padding-left: 25px; }
    .product-right .timer span .padding-l {
      padding-left: 10px; }
  .product-form-box .timer span {
    width: 47px; }
    .product-form-box .timer span .padding-l {
      padding-left: 9px; }
  .product-form-box .product-buttons .btn-solid,
  .product-form-box .product-buttons .btn-outline {
    padding: 5px 5px; }
  .product-form-box .timer span,
  .border-product .timer span {
    width: 45px; }
    .product-form-box .timer span .padding-l,
    .border-product .timer span .padding-l {
      padding-right: 5px; }
  .rtl .product-right .product-icon .product-social li {
    padding-left: 7px; }
  .rtl .banner-timer .timer {
    padding-left: 0;
    padding-right: 20px; }
    .rtl .banner-timer .timer span {
      width: 50px; } }

@media (max-width: 320px) {
  .home-slider .slider-details {
    top: 16%; }
  .footer-theme .footer-logo {
    margin-bottom: 20px; }
  .footer-theme2 .col {
    padding: 10px 5px; }
  .white-layout .footer-theme2 .col {
    padding: 0 15px; }
  .white-layout .footer-theme2 .footer-block .footer-container {
    max-width: 290px; }
  .dark-layout .footer-theme2 .subscribe-wrapper .subscribe-block .form-group .form-control {
    letter-spacing: 1px; }
  .footer-theme2.section-light .footer-block .subscribe-white .form-control {
    letter-spacing: 1px; }
  .collection-banner .contain-banner.banner-3 {
    padding-left: 25px;
    padding-right: 25px; }
    .collection-banner .contain-banner.banner-3 h2 {
      font-size: 15px; }
  .collection-banner .contain-banner.banner-4 {
    padding-left: 35px;
    padding-right: 35px; }
    .collection-banner .contain-banner.banner-4 h2 {
      font-size: 15px; } }

</style>
<body>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>product</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-10 col-xs-12">
                        <div class="product-right-slick">
                            <div><img src="https://images-na.ssl-images-amazon.com/images/I/61paqOv2LuL._AC_UX569_.jpg" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                        </div>
                    </div>
                   <!--  <div class="col-lg-1 col-sm-2 col-xs-12">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-right-nav">
                                    <div><img src="https://images-na.ssl-images-amazon.com/images/I/61paqOv2LuL._AC_UX569_.jpg" alt=""
                                            class="img-fluid blur-up lazyload"></div>
                                    <div><img src="https://images-na.ssl-images-amazon.com/images/I/61paqOv2LuL._AC_UX569_.jpg" alt=""
                                            class="img-fluid blur-up lazyload"></div>
                                    <div><img src="https://images-na.ssl-images-amazon.com/images/I/61paqOv2LuL._AC_UX569_.jpg" alt=""
                                            class="img-fluid blur-up lazyload"></div>
                                    <div><img src="https://images-na.ssl-images-amazon.com/images/I/61paqOv2LuL._AC_UX569_.jpg" alt=""
                                            class="img-fluid blur-up lazyload"></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>{{ $product->name }}</h2>
                            <h3>${{ $product->price }}</h3>
                            @foreach($product['attributes'] as $attribute)
                                <h6 class="product-title">{{ $attribute['name'] }}</h6>
                                <div class="size-box">
                                        <ul>
                                            @foreach($attribute['all-attribute'] as $values)
                                                <li onclick="selectAttributes({{$attribute['id']}}, '{{$values->value}}')" ><a href="#">{{ $values->value }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                            @endforeach

                            <div class="product-description border-product">
                               <!--  <div class="size-box">
                                    <ul>
                                        <li class="active"><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </div> -->
                                <h6 class="product-title">Stock</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                    class="ti-angle-left"></i></button> </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1">
                                        <span class="input-group-prepend"><button type="button"
                                                class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                    class="ti-angle-right"></i></button></span></div>
                                </div>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>{{ $product->description }}</p>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->
     <script>
        const jsonData = JSON.parse(@json($jsonData));
        const allAttributesId = jsonData.attributes.map( data =>{
            return data.id
        })
        function selectAttributes(id, value){
            console.log(id, value)
        }
        console.log(allAttributesId); 
    </script>
</body>


@endsection
