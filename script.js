//import App from "./pagamento-teste/src/App"



////////// INÍCIO CARROSEL DE IMAGENS /////////
var count = 1
document.getElementById("radio1").checked = true
setInterval( function(){
    nextImage()
}, 3200)

function nextImage(){
    count++
    if(count>3){
        count = 1
    }
    document.getElementById("radio"+count).checked = true
}
////////// FIM CARROSEL DE IMAGENS /////////