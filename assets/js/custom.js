// // INPUTMASK INIT
//
// $('input[name="form-phone"]').inputmask({"mask": "+7 (999) 99-99-99", "showMaskOnHover": false});
//
// // COPY CORDS ON CLICK
// function copyCords() {
//     spans = document.querySelectorAll("#copy-coords");
//     for (const span of spans) {
//         span.onclick = function() {
//             document.execCommand("copy");
//             alert('Координаты скопированы');
//         }
//
//         span.addEventListener("copy", function(event) {
//             event.preventDefault();
//             if (event.clipboardData) {
//                 event.clipboardData.setData("text/plain", span.textContent);
//                 console.log(event.clipboardData.getData("text"))
//             }
//         });
//
//     }
// }
//
// copyCords();
