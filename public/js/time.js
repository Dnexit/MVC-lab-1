let time = document.querySelector(".time");
function getCurrentDate() {
    let date = new Date();
    let dd = date.getDate();

    return (dd > 9 ? '' : '0') + dd + " " + date.toLocaleString('default', { month: 'long' }) + " " + date.getFullYear();
}
function updateTimer() {
    time.textContent = getCurrentDate();
    setTimeout(updateTimer, 1000);
}
updateTimer();

