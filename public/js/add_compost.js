const form = document.getElementById('Add_compost_form');
const id = document.getElementById('donor_id');
const date = document.getElementById('date');
const title = document.getElementById('title');
const description = document.getElementById('description');
const file = document.getElementById('file');


var valid = true;

console.log("message");


form.addEventListener("submit", (e) => {
    valid = true;

    e.preventDefault();
    inputChecker();
    if (valid === true) {
        form.submit();
    }
})


async function inputChecker() {
    //values from the inputs
    // console.log("inputChecker");
    const idVal = id.value.trim();

    const dateVal = date.value.trim();

    const titleVal = title.value.trim();
    const descriptionVal = description.value.trim();
    const fileVal = file.value.trim();


    if (idVal === "") {
        //error message
        displayError(id, "ID can't be empty");

    } else {
        //display success tick
        displaySuccess(id);
    }
    if (dateVal === "") {
        //error message
        displayError(date, "Date can't be empty");

    } else {
        //display success tick
        displaySuccess(date);
    }
    if (titleVal === "") {
        //error message
        displayError(title, "Title can't be empty");

    } else {
        //display success tick
        displaySuccess(title);
    }
    if (descriptionVal === "") {
        //error message
        displayError(description, "Description can't be empty");

    } else {
        //display success tick
        displaySuccess(description);
    }
    if (fileVal === "") {
        //error message
        displayError(file, "Image can't be empty");

    } else {
        //display success tick
        displaySuccess(file);
    }

}

function displayError(input, message) {
    const f = input.parentElement;
    // console.log("message");
    const small = f.querySelector('small');

    f.classname = "f error";


    //add error message
    small.innerText = message;
    //add error class
    valid = false;
}
function displaySuccess(input) {
    const f = input.parentElement;

    f.classname = "f success";



}
