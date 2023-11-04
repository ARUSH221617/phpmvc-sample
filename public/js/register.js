$(document).ready(function () {
  $("form#formRegister").submit(function (e) {
    e.preventDefault();
    $.post(
      $("form#formRegister").attr("action"),
      { email: $("form#formRegister").find("#inputEmail").val() },
      function (data, textStatus, jqXHR) {
        console.log(data, textStatus, jqXHR);
      },
      "json"
    );
  });
});
// $(document).ready(function () {
//   const formRegister = $("form#formRegister");
//   formRegister.on("submit", function (event) {
//     event.preventDefault();
//     $.post(
//       formRegister.attr("action"),
//       { email: formRegister.find("#inputEmail").val() },
//       function (data) {
//         console.log(data);
//       }
//     );
//   });
// });
// setTimeout(() => {
//   document.querySelector("#app-video-js_html5_api").removeEventListener("click", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("controlsvisible", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("dispose", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("durationchange", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("ended", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("error", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("keyup", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("fullscreenchange", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("keydown", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("languagechange", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("loadedmetadata", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("loadstart", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("pause", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("play", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("play", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("playing", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("wating", () => {}, false);
// document.querySelector("#app-video-js_html5_api").removeEventListener("timeupdate", () => {}, false);

// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("click", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("controlsvisible", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("dispose", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("durationchange", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("ended", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("error", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("keyup", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("fullscreenchange", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("keydown", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("languagechange", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("loadedmetadata", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("loadstart", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("pause", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("play", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("play", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("playing", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("wating", () => {}, false);
// document.querySelector("#app-video-js_html5_api").parentElement.removeEventListener("timeupdate", () => {}, false);
// }, 1500)
