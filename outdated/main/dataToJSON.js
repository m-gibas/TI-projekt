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




/////////////

// async function saveFile(blob) {
//     // create a new handle
//     const newHandle = await window.showSaveFilePicker();
//     // create a FileSystemWritableFileStream to write to
//     const writableStream = await newHandle.createWritable();
//     // write our file
//     await writableStream.write(blob);
//     // close the file and write the contents to disk.
//     await writableStream.close();
//   }
  
//   function save () {
//       let push_data = {
//           "item": "test",
//           "deadline": "test2"
//       }
//       saveFile(JSON.stringify(push_data)).then(console.log).catch(console.error); 
//   }
  
