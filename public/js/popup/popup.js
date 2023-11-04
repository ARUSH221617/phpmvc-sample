class Popup {
  constructor() {
    this.init();
  }
  init() {
    var popupstoggle, css;
    css = document.createElement('style');
    css.setAttribute('popup', 'css');
    css.innerHTML = this.css();
    document.head.appendChild(css);
    popupstoggle = document.querySelectorAll("[data-toggle=popup");
    popupstoggle.forEach((popuptoggle) => {
      popuptoggle.addEventListener("click", (event) => this.show(popuptoggle));
      popuptoggle.getAttribute("data-target");
    });
  }
  build() {}
  show(popuptoggle) {
    var popupstoggle, popup, popupcover, popuptogglebutton, popupclosebutton;

    popupstoggle = document.querySelectorAll("[data-toggle=popup");
    popupstoggle.forEach((toggle) => {
      var target = document.querySelector(toggle.getAttribute("data-target"));
      if (target.className.includes("show")) {
        this.close(target);
      }
    });

    popupcover = document.createElement("div");
    popupcover.classList.add("popup-cover");
    document.body.appendChild(popupcover);

    popuptogglebutton = popuptoggle;
    popup = document.querySelector(
      popuptogglebutton.getAttribute("data-target")
    );
    popup.classList.add("show");
    popupclosebutton = popup.querySelector("[data-toggle=close]");
    popupclosebutton.addEventListener("click", (event) => this.close(popup));
    popupcover.addEventListener("click", (event) => this.close(popup));
  }
  close(popup) {
    var popupcover;
    popup.classList.remove("show");
    popupcover = document.querySelector(".popup-cover");
    if (popupcover) {
      popupcover.remove();
    }
  }
  remove() {}
  css() {
    return `
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
.popup {
  position: fixed;
  left: 50%;
  z-index: 9999999999;
}
.popup {
  background: #fff;
  /*padding: 25px;*/
  border-radius: 15px;
  top: -150%;
  max-width: 380px;
  width: 100%;
  opacity: 0;
  pointer-events: none;
  box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
  transform: translate(-50%, -50%) scale(1.2);
  transition: top 0s 0.2s ease-in-out, opacity 0.2s 0s ease-in-out,
    transform 0.2s 0s ease-in-out;
}
.popup-cover {
	background-color: rgba(10, 10, 10, .5);
	height: 100vh;
	width: 100%;
	position: fixed;
	top: 0;
	display: block;
	z-index: 999999999;
}
.popup.show {
  top: 50%;
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) scale(1);
  transition: top 0s 0s ease-in-out, opacity 0.2s 0s ease-in-out,
    transform 0.2s 0s ease-in-out;
  height: 100%;
  overflow: auto;
}
.popup .close {
	padding: 10px;
	color: rgba(10,10,10,.5);
	/* content: "X"; */
	font-size: 30px;
	position: absolute;
	top: 0;
	right: 0;
	font-weight: bold;
	font-family: sans;
  cursor: pointer;
}
.popup .close:hover {
  color: rgba(10,10,10,.4);
}
.popup :is(header, .icons, .field) {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.popup header {
  padding-bottom: 15px;
  border-bottom: 1px solid #ebedf9;
}
.popup header span {
  width: 100%;
  padding: 10px 20px;
  font-size: 21px;
  font-weight: 600;
}
.popup header .close,
.icons a {
  display: flex;
  align-items: center;
  border-radius: 50%;
  justify-content: center;
  transition: all 0.3s ease-in-out;
}
.popup header .close {
  color: #878787;
  font-size: 17px;
  background: #f2f3fb;
  height: 33px;
  width: 33px;
  cursor: pointer;
}
.popup header .close:hover {
  background: #ebedf9;
}
.popup .content {
  margin: 20px 0;
}
.popup .icons {
  margin: 15px 0 20px 0;
}
.popup .content p {
  width: 100%;
  padding: 10px 20px;
  font-size: 16px;
}
.popup .content .icons a {
  height: 50px;
  width: 50px;
  font-size: 20px;
  text-decoration: none;
  border: 1px solid transparent;
}
.popup .icons a i {
  transition: transform 0.3s ease-in-out;
}
.popup .icons a:nth-child(1) {
  color: #1877f2;
  border-color: #b7d4fb;
}
.popup .icons a:nth-child(1):hover {
  background: #1877f2;
}
.popup .icons a:nth-child(2) {
  color: #46c1f6;
  border-color: #b6e7fc;
}
.popup .icons a:nth-child(2):hover {
  background: #46c1f6;
}
.popup .icons a:nth-child(3) {
  color: #e1306c;
  border-color: #f5bccf;
}
.popup .icons a:nth-child(3):hover {
  background: #e1306c;
}
.popup .icons a:nth-child(4) {
  color: #25d366;
  border-color: #bef4d2;
}
.popup .icons a:nth-child(4):hover {
  background: #25d366;
}
.popup .icons a:nth-child(5) {
  color: #0088cc;
  border-color: #b3e6ff;
}
.popup .icons a:nth-child(5):hover {
  background: #0088cc;
}
.popup .icons a:hover {
  color: #fff;
  border-color: transparent;
}
.popup .icons a:hover i {
  transform: scale(1.2);
}
.popup .content .field {
  margin: 12px 0 -5px 0;
  height: 45px;
  border-radius: 4px;
  padding: 0 5px;
  border: 1px solid #e1e1e1;
}
.popup .field.active {
  border-color: #7d2ae8;
}
.popup .field i {
  width: 50px;
  font-size: 18px;
  text-align: center;
}
.popup .field.active i {
  color: #7d2ae8;
}
.popup .field input {
  width: 100%;
  height: 100%;
  border: none;
  outline: none;
  font-size: 15px;
}
.popup .field button {
  color: #fff;
  padding: 5px 18px;
  background: #7d2ae8;
}
.popup .field button:hover {
  background: #8d39fa;
}

    `;
  }
}
