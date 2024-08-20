console.log('hello fade-in-upwards');
let sections = document.querySelectorAll("section");
let i = 1;
let j = 0;
let x = 0;
let perc = 0;
let rect = sections[i].getBoundingClientRect();
let h = window.innerHeight - 2;
var appeared = false;
var printed = false;
var wind = false;
var switched = false;

let theSwitch = document.querySelector(".menu_button_switch");
console.log("theswitch", theSwitch);
let theHamburger = theSwitch.innerHTML;
console.log("thehamburger", theHamburger);

let theMenuFs = document.getElementById("menu_fs");
console.log("themenufs=", theMenuFs);

let theMenuFsTitles = document.querySelectorAll(".menu_titles");
console.log("themenufstitles=", theMenuFsTitles);

let theSection = sections[0];
theSection.classList.add("appeared_from_above");

let theLogo = document.querySelector(".logo_banner");
theLogo.classList.add("logo_appearance");

let mainTitles = document.querySelectorAll(".main_titles");
let theMainTitle = mainTitles[0];
let rectTheMainTitle = theMainTitle.getBoundingClientRect();

let rectTheLogo = theLogo.getBoundingClientRect();
let visibleLogoBottom = rectTheLogo.bottom + 430;
console.log("visiblelogobottom=", visibleLogoBottom);
let theBanner = document.querySelector(".banner");
console.log("thebanner=", theBanner);
let rectTheBanner = theBanner.getBoundingClientRect();
let divHelper = document.querySelector(".logo_helper");
console.log("divhelper=", divHelper);

let theBigCloud = document.getElementById("big-cloud");
let rectTheBigCloud = theBigCloud.getBoundingClientRect();
console.log("rectTheBigCloudX", rectTheBigCloud.x);
let theLittleCloud = document.getElementById("little-cloud");
let rectTheLittleCloud = theLittleCloud.getBoundingClientRect();
let thePlace = document.getElementById("place");
let rectPlaceSection = thePlace.getBoundingClientRect();

let theBuffer = 0;

theSwitch.addEventListener('click', function() {
  console.log("switch click!");
  theSwitch.innerHTML = "";
  if(switched === false) {
    theSwitch.innerHTML = '<p class="cross_button">&#10005;</p>';
    theMenuFs.style.display = "block";
    theBuffer = theMenuFs.clientHeight;
    theMenuFs.classList.add("appeared_from_above");
    switched = true;
    theMenuFsTitles.forEach((element) => element.classList.add("appeared"));
  } else if(switched === true) {
    theSwitch.innerHTML = theHamburger;
    theMenuFs.style.display = "none";
    theMenuFs.classList.remove("appeared_from_above");
    switched = false;
    theMenuFsTitles.forEach((element) => element.classList.remove("appeared"));
  }
});

theMenuFsTitles.forEach((element) => element.addEventListener('click', function() {
  theSwitch.innerHTML = theHamburger;
  theMenuFs.style.display = "none";
  theMenuFs.classList.remove("appeared_from_above");
  switched = false;
  theMenuFsTitles.forEach((element) => element.classList.remove("appeared")) 
}));

window.onload = function() {
  setTimeout(function (){
    visibleLogoBottom = rectTheLogo.bottom + 430;
    window.addEventListener('scroll', function() {
      rect = sections[i].getBoundingClientRect();
      rectTheMainTitle = mainTitles[j].getBoundingClientRect();
      rectPlaceSection = thePlace.getBoundingClientRect();
      rectTheBanner = theBanner.getBoundingClientRect();
      x = h - rectPlaceSection.y;
      console.log("visiblelogobottom=", visibleLogoBottom);
      console.log("logobottom=", rectTheLogo.bottom);
      console.log("thebannerbottom=", rectTheBanner.bottom);
    
      if(rect.y <= h && i < sections.length - 1) {
        console.log("hello section", i);
        theSection = sections[i];
        theSection.classList.add("appeared");
        i++;
      } else if(rect.y <= h && i == sections.length - 1 && appeared == false) {
        console.log("hello dernière section");
        theSection = sections[i];
        theSection.classList.add("appeared");
        appeared = true;
      }
      if(rectTheMainTitle.y <= h && j < mainTitles.length - 1) {
        console.log("hello titre", j);
        theMainTitle = mainTitles[j];
        theMainTitle.classList.add("appeared");
        j++
      } else if (rectTheMainTitle.y <= h && j == mainTitles.length - 1 && printed == false) {
        console.log("hello dernier titre");
        theMainTitle = mainTitles[j];
        theMainTitle.classList.add("appeared");
        printed = true;
      }
      if(rectPlaceSection.y < h && x < h && wind == false) {
        console.log("hello clouds");
        perc = (h-x)/h;
        console.log("h= ", h);
        console.log("x= ", x);
        console.log("perc= ", perc);
        theBigCloud.style.left = rectTheBigCloud.x + (300*(1-perc)) + "px";
        theLittleCloud.style.left = rectTheLittleCloud.x + (300*(1-perc)) + "px";
      }
      if(visibleLogoBottom > rectTheBanner.bottom) {
        console.log("STOP!");
        divHelper.style.position = "relative";
        divHelper.style.top = 212 + "px";
      } else {
        console.log("STAY!");
        divHelper.style.position = "sticky";
        divHelper.style.top = 100 + "px";
      }
    });         
  }, 1000);
};


