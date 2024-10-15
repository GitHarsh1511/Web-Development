const submitBtn = document.getElementById("submit"); const fullName = document.getElementById("name"); const userName = document.getElementById("userName"); const email = document.getElementById("email");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("cnfPassword"); const mobileNumber = document.getElementById("mobile");
const gender = document.querySelectorAll("#gender"); let genderValue;
let genderBool = false; let genderObj;

let passCheckContainer = document.querySelector(".card");
let passwordChecker = document.querySelectorAll(".pass-check"); let passChecked = false;
console.log(passCheckContainer);


let containsError = {
    fullName: null, userName: null, email: null, password: null,
    confirmPassword: null, mobileNumber: null, gender: null,
};
EventHandeler(/^[A-Z][ A-Za-z]*$/, fullName); EventHandeler(/^[A-Za-z_][\w\d]*$/, userName); EventHandeler(/^[a-z]*[0-9]*\@[a-z]*\.[a-z]{2,3}$/, email);
EventHandeler(/^[!@#$%^&*()_+{}\[\]:;<>,.?~\-=/\\|a-zA-Z0-9]{6,12}$/, password); EventHandeler(/NULL/, confirmPassword);
EventHandeler(/^[789][0-9]{9}$/, mobileNumber);


function getGender() {
    gender.forEach((gen) => {
        if (gen.checked) {
            genderBool = true; genderValue = gen.value; genderObj = gen;
        }
    });
    if (genderBool) {
        containsError[genderObj.name] = true;
    } else {
        containsError[genderObj.name] = false;
    }
}
function EventHandeler(regex, element) {
    element.addEventListener("change", () => {
        if (element == confirmPassword) {
            if (element.value == password.value) {
                element.style.borderColor = "green"; containsError[element.name] = true;
            } else {
                containsError[element.name] = false; element.style.borderColor = "red";
            }
        } else if (element == mobileNumber) {
            if (isNaN(element.value)) {
                alert("Please Enter Number"); element.value = "";
            } else {
                RegexHandeler(regex, element);
            }
        } else {
            RegexHandeler(regex, element);
        }
    });
}
function RegexHandeler(regex, element) {
    if (regex.test(element.value)) {
        element.style.borderColor = "green"; containsError[element.name] = true; console.log(containsError);
    } else {
        containsError[element.name] = false; element.style.borderColor = "red";
    }
}


submitBtn.addEventListener("click", (event) => {
    event.preventDefault();
    getGender(); if (
        Object.values(containsError).includes(false) || Object.values(containsError).includes(null)
    ) {
        alert("There is an Error! Validation Failed");
    } else {
        alert("Validation Complete! You May Proceede");
    }
});
