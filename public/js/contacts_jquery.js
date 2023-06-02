$(document).ready( function() {
    let input = $("#date");
    let picker = $(".picker");
    let pickerYear = $(".picker__head__year");
    let pickerMonth = $(".picker__head__month");
    let pickerDays = $(".picker__days");

    let day = "1";

    input.on("click", () => {
        if (picker.hasClass("none")) {
            picker.removeClass("none");
        } else {
            picker.addClass("none");
        }
    });


    function updateDateInput() {
        let days = new Date(+$(".picker__head__year option:selected").text(), + $(".picker__head__month option:selected").attr("value")+1, 0).getDate();

        if ((+day) > days) {
            day = days.toString();
        }

        for (let i = 0; i < days; i++) {
            pickerDays.children()[i].dataset.hidden = false;
            pickerDays.children()[i].dataset.selected = false;
        }

        for (let i = days; i < 31; i++) {
            pickerDays.children()[i].dataset.hidden = true;
            pickerDays.children()[i].dataset.selected = false;
        }

        pickerDays.children()[+day-1].dataset.selected = true;

        let trueMonth = ((+$(".picker__head__month option:selected").attr("value")) + 1).toString();
        let dayFormatted = day.length > 1 ? day : "0" + day;
        let monthFormatted = trueMonth.length > 1 ? trueMonth : "0" + trueMonth;

        input.attr("value", $(".picker__head__year option:selected").text() + "." + monthFormatted + "." + dayFormatted);
    }

    pickerYear.on("input", () => {
        updateDateInput();
    });

    pickerMonth.on("input", () => {
        updateDateInput();
    });

    pickerDays.on("click", function (event) {
        day = event.target.closest(".picker__days__item")?.innerText;
        day ??= "1";
        updateDateInput();
    });


    let formMain = $("#form_main");
    let overlay = $(".overlay");
        

    formMain.on("submit", (e) => {
        e.preventDefault();
        overlay.removeClass("none");
    });

    let denyButton = $("#deny");

    denyButton.on("click", (e) => {
        overlay.addClass("none");
    });

    let submit = $('.form__field input[type="submit"]')
    let reset = $('.form__field input[type="reset"]')

    submit.on("click", (e) => {
        let inputs = $("input");
        for (let i = 0; i < inputs.length; i++) {
            let input = inputs[i];
            input.blur();
            if (input.value == "" && input.id != "date") {
                input.dataset.correct = false;
            } else {
                input.dataset.correct = true;
            }
        }
    });

    
    reset.on("click", (e) => {
        let inputs = $("input");
        for (let i = 0; i < inputs.length; i++) {
            let input = inputs[i];
            input.blur();
            input.dataset.correct = true;
        }
    });
});