let input = document.querySelector("#date");
let picker = document.querySelector(".picker");
let pickerYear = document.querySelector(".picker__head__year");
let pickerMonth = document.querySelector(".picker__head__month");
let pickerDays = document.querySelector(".picker__days");

let day = "1";

input.addEventListener("click", () => {
    if (picker.classList.contains("none")) {
        picker.classList.remove("none");
    } else {
        picker.classList.add("none");
    }
});


function updateDateInput() {
    let days = new Date(+pickerYear.value, +pickerMonth.value+1, 0).getDate();

    if ((+day) > days) {
        day = days.toString();
    }

    for (let i = 0; i < days; i++) {
        pickerDays.children[i].dataset.hidden = false;
        pickerDays.children[i].dataset.selected = false;
    }

    for (let i = days; i < 31; i++) {
        pickerDays.children[i].dataset.hidden = true;
        pickerDays.children[i].dataset.selected = false;
    }

    pickerDays.children[+day-1].dataset.selected = true;

    let trueMonth = ((+pickerMonth.value) + 1).toString();
    let dayFormatted = day.length > 1 ? day : "0" + day;
    let monthFormatted = trueMonth.length > 1 ? trueMonth : "0" + trueMonth;

    input.value = pickerYear.value + "." + monthFormatted + "." + dayFormatted;
}

pickerYear.addEventListener("input", () => {
    updateDateInput();
});

pickerMonth.addEventListener("input", () => {
    updateDateInput();
});

pickerDays.addEventListener("click", function (event) {
    day = event.target.closest(".picker__days__item")?.innerText;
    day ??= "1";
    updateDateInput();
});
let submit = document.querySelector('.form__field input[type="submit"]')
let reset = document.querySelector('.form__field input[type="reset"]')

submit.addEventListener("click", (e) => {
    let inputs = document.querySelectorAll("input");
    for (let input of inputs) {
        input.blur();
        if (input.value == "" && input.id != "date") {
            input.dataset.correct = false;
        } else {
            input.dataset.correct = true;
        }
    }
});

reset.addEventListener("click", (e) => {
    let inputs = document.querySelectorAll("input");
    for (let input of inputs) {
        input.blur();
        input.dataset.correct = true;
    }
});
