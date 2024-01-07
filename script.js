const button = document.querySelector("button");
const first_name = document.querySelector("#first_name")
const parent_email = document.querySelector("#email")

button.addEventListener ("click", submit);

function submit() {
    alert(`Thanks for submitting, ${first_name.value}! We will send an email to \n${parent_email.value} soon with more details about the class.`);

}

