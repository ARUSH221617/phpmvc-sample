class Preloader {
  constructor() {
    this.build();
    this.show();
  }
  build() {
    var css, preloader, container, wrapper, loader, dot, text;
    css = document.createElement("style");
    css.setAttribute("preloader", "css");
    css.innerHTML = this.css();

    preloader = document.createElement("div");
    preloader.setAttribute("id", "preloader");
    preloader.classList.add("hide");

    container = document.createElement("div");
    container.classList.add("container");

    wrapper = document.createElement("div");
    wrapper.classList.add("wrapper");

    loader = [];
    for (let index = 0; index < 6; index++) {
      loader.push(document.createElement("div"));
    }
    loader.forEach((element) => {
      element.classList.add("loader");
      dot = document.createElement("div");
      dot.classList.add("dot");
      element.appendChild(dot);
      wrapper.appendChild(element);
    });

    text = document.createElement("div");
    text.classList.add("text");
    text.innerHTML = "لطفا چند لحظه منتظر بمانیید";

    preloader.appendChild(container);
    container.appendChild(wrapper);
    container.appendChild(text);
    document.head.appendChild(css);
    document.body.appendChild(preloader);
  }
  show() {
    var preloader;
    preloader = document.getElementById("preloader");
    preloader.classList.remove("hide");
    preloader.classList.add("show");
  }
  hide() {
    var preloader;
    preloader = document.getElementById("preloader");
    preloader.classList.remove("show");
    preloader.classList.add("hide");
  }
  remove() {
    var css, preloader;
    this.hide();
    preloader = document.getElementById("preloader");
    preloader.remove();
    css = document.head.querySelector('style[preloader="css"]');
    css.remove();
  }
  css() {
    return `
#preloader {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
	text-align: center;
	background: crimson;
	position: fixed;
	top: 0;
	width: 100%;
	z-index: 99999999;
}
#preloader .container{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: center;
}
#preloader.hide {
  display: none !important;
}
#preloader.show {
  display: flex !important;
}
#preloader .wrapper{
  position: absolute;
  top: -35px;
  transform: scale(1.5);
}
#preloader .loader{
  height: 25px;
 width: 1px;
 position: absolute;
 animation: rotate 3.5s linear infinite;
}
#preloader .loader .dot{
  top: 30px;
 height: 7px;
 width: 7px;
 background: #fff;
 border-radius: 50%;
 position: relative;
}
#preloader .text{
  position: absolute;
  bottom: -85px;
  font-size: 25px;
  font-weight: 400;
  font-family: 'IRANSansWeb',sans-serif;
  color: #fff;
}
@keyframes rotate {
  30%{
    transform: rotate(220deg);
  }
  40%{
  transform: rotate(450deg);
    opacity: 1;
 }
 75%{
  transform: rotate(720deg);
  opacity: 1;
 }
 76%{
  opacity: 0;
 }
 100%{
  opacity: 0;
  transform: rotate(0deg);
 }
}
#preloader .loader:nth-child(1){
  animation-delay: 0.15s;
}
#preloader .loader:nth-child(2){
  animation-delay: 0.3s;
}
#preloader .loader:nth-child(3){
  animation-delay: 0.45s;
}
#preloader .loader:nth-child(4){
  animation-delay: 0.6s;
}
#preloader .loader:nth-child(5){
  animation-delay: 0.75s;
}
#preloader .loader:nth-child(6){
  animation-delay: 0.9s;
}
        `;
  }
}
