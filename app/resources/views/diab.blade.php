<!DOCTYPE html>
<html>
  <head>
    <title>DOCTIFY</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.5.5/jquery.smooth-scroll.min.js">
    </script>
      <style>
      body {
  background-color: #ECECEC;
  color: #444444;
  padding: 0;
  margin: 0;
  perspective: 1px;
  transform-style: preserve-3d;
  height: 100%;
  overflow-x: hidden;
  font-family: 'Roboto';
}
.left-underline {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  overflow: hidden;
}
.left-underline:before {
  content: "";
  position: absolute;
  z-index: -1;
  left: 0;
  right: 100%;
  bottom: 0;
  background: #ECECEC;
  height: 4px;
  -webkit-transition-property: right;
  transition-property: right;
  -webkit-transition-duration: 0.15s;
  transition-duration: 0.15s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.left-underline:hover:before, .left-underline:focus:before, .left-underline:active:before {
  right: 0;
}
div.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background: ;
  -webkit-box-shadow: 0px 2px 6px 0px rgba(50, 50, 50, 0.75);
  -moz-box-shadow:    0px 2px 6px 0px rgba(50, 50, 50, 0.75);
  box-shadow:         0px 2px 6px 0px rgba(50, 50, 50, 0.75);
  z-index: 9999999;
}
div.navbar > ul.navbar-container {
  list-style-type: none;
  margin: 0;
  padding-left: 1em;
  padding-right: 1em;
  overflow: hidden;
}
div.navbar > ul > li.nav-item {
  float: right;
  background-color: rgba(0, 0, 0, 0.1);
  transition: all 0.5s ease;
}
div.navbar > ul > li.active {
  background-color: rgba(0, 0, 0, 0.18);
}
div.navbar > ul > li:hover {
  background-color: rgba(0, 0, 0, 0.2);
}
a.nav-button {
  font-family: 'Roboto';
  text-decoration: none;
  line-height: 60px;
  padding-left: 20px;
  padding-right: 20px;
  color: rgba(228, 241, 254, 1);
  transition: all 0.5s ease;
}
a.nav-button:hover {
  text-decoration: none;
}
li.active > a.nav-button {
  cursor: default;
}
.brand-logo {
  float: left;
  cursor: default;
}
.parallax {
  height: 70vh;
  overflow: hidden;
  margin: 0;
  padding: 0;
}
.parallax.p1 {
  background: url(piron-guillaume-492632-unsplash.jpg)no-repeat fixed 50% 0;
  background-size: cover;
  color: #fff;
}
.parallax.p2 {
  background-color:#444444; 
  background-size: cover;
  color: #fff;
}
.parallax.p3 {
  background: url(http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-95766.jpg) no-repeat fixed 70% 0;
  background-size: cover;
  color: #fff;
}
.parallax-text {
  width: 24em;
  position: fixed;
  top: 20%;
  left: 50%;
  border: .5em solid #fff;
  margin-left: -10%;
  padding: 2em 0;
  text-align: center;
  z-index: 999;
}
.parallax > div.blur-image {
  position: relative;
  width: 100%;
  height: 100%;
} 
hgroup{
  display: inline-block;
  text-align: center;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  color: #fff;
  border: 5px solid #fff;
  padding: .5em 3em;
  background-color: rgba(0,0,0,.2);
  z-index: 2;
}
.row {
  width: 80%;
  padding-left: 10%;
  padding-right: 10%;
  padding-top: 15px;
  padding-bottom: 15px;
  min-height: 150px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.row > .col-3 {
  width: 30%;
  height: 100%;
  box-sizing: border-box;
  float: left;
  padding-left: 5px;
  padding-right: 5px;
}
footer {
  width: 100%;

  padding-top: 20px;
  display: block;
  background-color: #ee6e73;
}
.footer-copyright {
  font-weight: 300;
  overflow: hidden;
  height: 20px;
  line-height: 50px;
  color: rgba(255, 255, 255, 0.8);
  background-color: rgba(51, 51, 51, 0.08);
}
.container {
  width: 85%;
  padding: 0 1.5rem;
  margin: 0 auto;
  max-width: 1280px;
}
footer p {
  border-left: 3px solid #ffcdd2;
  padding-left: 15px;
  text-indent: 20px;
  color: #ececec;
}
ul{
    text-align: left;
}
      </style>
      
  </head>
  <body>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    
    <div class="parallax p1" id="section-1">
        <img src="images/piron-guillaume-361682-unsplash.jpg">
      <hgroup>
        <h1>CAUSE LIONS DONT RECOVER LIKE HUMANS</h1>
        
      </hgroup>
    </div>
    <div class="row">
      <div class="col-3">
        <h1>ABOUT DIABIES</h1>
        <p>Diabetes is a condition that impairs the body's ability to process blood glucose, otherwise known as blood sugar.Without ongoing, careful management, diabetes can lead to a buildup of sugars in the blood, which can increase the risk of dangerous complications, including stroke and heart disease.Different kinds of diabetes can occur, and managing the condition depends on the type. Not all forms of diabetes stem from a person being overweight or leading an inactive lifestyle. In fact, some are present from childhood.
        Three major diabetes types can develop: Type 1, type 2, and gestational diabetes.</p>
      </div>
        <div class="col-3">
      <img src="images/diabetes-870x484.png" width="350px" height="350px">
        </div>
        
        <div class="col-3">
            <h1>How insulin problems develop</h1>
        <p>Insulin allows the glucose from a person's food to access the cells in their body to supply energy. Insulin resistance is usually a result of the following cycle:

A person has genes or an environment that make it more likely that they are unable to make enough insulin to cover how much glucose they eat.
The body tries to make extra insulin to process the excess blood glucose.
The pancreas cannot keep up with the increased demands, and the excess blood sugar starts to circulate in the blood, causing damage.
Over time, insulin becomes less effective at introducing glucose to cells, and blood sugar levels continue to rise.</p>
      </div>
            
        </div>
   
    <div class="parallax p2" id="section-2">
      <hgroup>
        <h1>Treatment:</h1>
          <p>The major goal in treating type 1 and type 2 diabetes is to control blood sugar (glucose) levels within the normal range, with minimal excursions to low or high levels.
          <br>

              <b>Type 1 </b>diabetes is treated with :</p>
          <ul class="list">
              <li>insulin</li>
              <li>exercise</li>
              <li><a style="color: aliceblue" href="https://www.medicinenet.com/type_1_diabetes_diet/article.htm">type 1 diabetes diet</a></li>
          </ul>
          
          <p><b>Type 2</b> diabetes is treated :</p>
          <ul class="list">
              <li><a style="color: aliceblue"   hrf="https://www.medicinenet.com/diabetic_diet_for_type_2_diabetes/article.htm">type 2 diabetes diet </a>, and exercise</li>
              <li>Diabetes medications (oral or injected) are prescribed when these measures fail to control the elevated blood sugars of type 2 diabetes.</li>
              <li>If other medications become ineffective treatment with insulin may be initiated.</li>
              
          </ul>
    
      </hgroup>
    </div>

    <div class="row">
      <div class="col-3">
        <h1>TYPE 1</h1>
        <p><b>Type I </b>diabetes: Also known as juvenile diabetes, this type occurs when the body fails to produce insulin. People with type I diabetes are insulin-dependent, which means they must take artificial insulin daily to stay alive.</p>
      </div>
      <div class="col-3">
        <h1>TYPE 2</h1>
        <p><b>Type 2 </b>diabetes: Type 2 diabetes affects the way the body uses insulin. While the body still makes insulin, unlike in type I, the cells in the body do not respond to it as effectively as they once did. This is the most common type of diabetes, according to the National Institute of Diabetes and Digestive and Kidney Diseases, and it has strong links with obesity.</p>
      </div>
      <div class="col-3">
        <h1>Gestational</h1>
        <p><b>Gestational </b>diabetes: This type occurs in women during pregnancy when the body can become less sensitive to insulin. Gestational diabetes does not occur in all women and usually resolves after giving birth.</p>
      </div>
    </div>
    
     <footer>
      <!--<div class="row" id="section-3">
        <div class="col-3">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum tortor ac dui malesuada, id molestie elit aliquam. Fusce laoreet nisl id tellus molestie mattis. Fusce vitae ante quis augue imperdiet rutrum a vitae purus. Etiam tincidunt enim id turpis varius, in condimentum elit.</p>
        </div>
      </div>
      --><div class="footer-copyright">
        <div class="container">
         All rights reserved.
        </div>
      </div>
    </footer>
      
    <script src="med.js"></script>
  </body>
</html>