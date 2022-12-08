// var Data = {
//     val: 0,
//   };
  // module.exports = { Data };
var val = 0;
export var Data

export function getData() {
    Data.val = document.getElementById("quantity");
    module.exports = { Data };
  }