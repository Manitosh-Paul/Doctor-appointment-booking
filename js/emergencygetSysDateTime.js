var today = new Date();
var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
const sysDate = document.getElementById('sys_date');
const sysTime = document.getElementById('sys_time');
const btn = document.querySelector(".submit button");
const sec = document.querySelector("section");
const okbtn = document.querySelector(".message button");
okbtn.addEventListener("click", () => {
    if (sec.classList.contains('messageactive')) {
        sec.classList.remove('messageactive');
    }
})
function setAndDisplay() {
    sec.classList.add('messageactive');
    sysDate.value = date;
    sysTime.value = time;
}