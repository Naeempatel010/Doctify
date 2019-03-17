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
}</style>
      
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
        <h1>ABOUT PNEUMONIUM</h1>
        <p>Pneumonia is an infection that inflames the air sacs in one or both lungs. The air sacs may fill with fluid or pus (purulent material), causing cough with phlegm or pus, fever, chills, and difficulty breathing. A variety of organisms, including bacteria, viruses and fungi, can cause pneumonia.
        Pneumonia can range in seriousness from mild to life-threatening. It is most serious for infants and young children, people older than age 65, and people with health problems or weakened immune systems.

</p>
      </div>
        <div class="col-3">
      <img src="images/pn.jpg" width="350px" height="350px">
        </div>
        
        <div class="col-3">
            <h1>CAUSES</h1>
        <p>
Many germs can cause pneumonia. The most common are bacteria and viruses in the air we breathe. Your body usually prevents these germs from infecting your lungs. But sometimes these germs can overpower your immune system, even if your health is generally good.

Pneumonia is classified according to the types of germs that cause it and where you got the infection.</p>
      </div>
            
        </div>
   
    <div class="parallax p2" id="section-2">
      <hgroup>
        <h1>Treatment</h1>
          <p>Treatment for pneumonia involves curing the infection and preventing complications. People who have community-acquired pneumonia usually can be treated at home with medication. Although most symptoms ease in a few days or weeks, the feeling of tiredness can persist for a month or more.
          </p>
          <ul>
              <li><b>Antibiotics.</b> These medicines are used to treat bacterial pneumonia. It may take time to identify the type of bacteria causing your pneumonia and to choose the best antibiotic to treat it. If your symptoms don't improve, your doctor may recommend a different antibiotic.</li>
              <li><b>Cough medicine.</b> This medicine may be used to calm your cough so that you can rest. Because coughing helps loosen and move fluid from your lungs, it's a good idea not to eliminate your cough completely. In addition, you should know that very few studies have looked at whether over-the-counter cough medicines lessen coughing caused by pneumonia. If you want to try a cough suppressant, use the lowest dose that helps you rest.</li>
              <li><b>Cough medicine.</b> This medicine may be used to calm your cough so that you can rest. Because coughing helps loosen and move fluid from your lungs, it's a good idea not to eliminate your cough completely. In addition, you should know that very few studies have looked at whether over-the-counter cough medicines lessen coughing caused by pneumonia. If you want to try a cough suppressant, use the lowest dose that helps you rest.</li>
              <li><b>Hospitalization.</b> If a fungus is causing your pneumonia, your doctor may prescribe an antifungal medicine. If your case of pneumonia is severe, you may need to be hospitalized. </li>
          </ul>
          
       
      </hgroup>
    </div>
    <div class="row">
        <div class="col-3">
        <h1>Hospital-acquired pneumonia</h1>
        <p>Some people catch pneumonia during a hospital stay for another illness. Hospital-acquired pneumonia can be serious because the bacteria causing it may be more resistant to antibiotics and because the people who get it are already sick. People who are on breathing machines (ventilators), often used in intensive care units, are at higher risk of this type of pneumonia.</p>
      </div>
        <div class="col-3">
        <h1>Aspiration pneumonia</h1>
        <p>Aspiration pneumonia occurs when you inhale food, drink, vomit or saliva into your lungs. Aspiration is more likely if something disturbs your normal gag reflex, such as a brain injury or swallowing problem, or excessive use of alcohol or drugs.</p>
      </div>
      <div class="col-3">
        <h1>Health care-acquired pneumonia</h1>
        <p>Health care-acquired pneumonia is a bacterial infection that occurs in people who live in long-term care facilities or who receive care in outpatient clinics, including kidney dialysis centers. Like hospital-acquired pneumonia, health care-acquired pneumonia can be caused by bacteria that are more resistant to antibiotics.</p>
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