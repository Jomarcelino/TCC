const input = document.querySelector('input')

function copyToClipboard() {
    navigator.clipboard.writeText(input.value).then(() =>{
        alert('copiado para a área de tranferência')
    })
}





// function botao_copia(htmlElement){
// if(!htmlElement){
//     return;
// }
//     let elementText = htmlElement.innerText;
//     let inputElement = document.createElement('input');
//     inputElement.setAttribute('value', elementText);
//     document.body.appendChild(inputElement);
//     inputElement.select();
//     document.execCommand('copy');
//     inputElement.parentNode.removeChild(inputElement);

// }
// document.querySelector('#botao_copia').onclick =
// function (){
//     botao_copia(document.querySelector('#text'));
// }