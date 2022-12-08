// const form = document.getElementById("height-form");

// form.addEventListener("submit", callbackFunction);

// function callbackFunction(event) {
//   event.preventDefault();
//   const myFormData = new FormData(event.target);

//   const formDataObj = {};
//   myFormData.forEach((value, key) => (formDataObj[key] = value));
//   console.log(myFormData);
// }

const form = document.getElementById('height-form');

form.addEventListener('submit', callbackFunction);
function callbackFunction(event) {
    // event.preventDefault();
    const myFormData = new FormData(event.target);

    const formDataObj = Object.fromEntries(myFormData.entries());
    console.log(formDataObj.quantity);
};