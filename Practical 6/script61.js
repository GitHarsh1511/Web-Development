function onblurHandeler() {
    let msg = document.querySelector(".onblurmsg");
    msg.innerText = "Input field lost focus.";
}
function onchangeHandeler() {
    let select = document.querySelector("#select");
    let msg = document.querySelector(".change");
    msg.innerText = `Subjet Changed. ${select.value}`;
}
function dbclickHandler() {
    let msg = document.querySelector(".dbclick");
    msg.innerText = "Double Click Happened";
}
function onfocusHandeler() {
    let msg = document.querySelector(".onfocusmsg");
    msg.innerText = "Input field focused.";
}
function onkeyeventHandeler() {
    let keyEvent = document.getElementById("keyevent");
    let msg = document.querySelector(".onkeyeventmsg");
    keyEvent.addEventListener("keydown", () => {
        msg.innerText = "Key Pressed";
    });
    keyEvent.addEventListener("keyup", () => {
        msg.innerText = "Key Released";
    });
}
function mouseUp() {
    let msg = document.querySelector(".onmouseeventmsg");
    msg.innerText = "Mouse Button Released";
}
function mouseDown() {
    let msg = document.querySelector(".onmouseeventmsg");
    msg.innerText = "Mouse Button Pressed";
}
function mouseEntered() {
    let msg = document.querySelector(".onmouseeventmsg");
    msg.innerText = "Mouse Entered in textBox";
}
function mouseOut() {
    let msg = document.querySelector(".onmouseeventmsg");
    msg.innerText = "Mouse Leaved in textBox";
}
onkeyeventHandeler();
let pageX = document.querySelector("#x");
let pageY = document.querySelector("#y");
document.addEventListener("mousemove", (event) => {
    pageX.innerText = event.pageX;
    pageY.innerText = event.pageY;
});
