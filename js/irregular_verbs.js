/*let eng = document.querySelector(".word")
 eng.addEventListener("input", function(event){
    let console = (event.target.value)
    if ( console === 'word'){
     alert('Správně!')
    }
})*/
// Irregular exercise 2

let wrapIrregular = document.querySelector('.wrap');

let wrap_cnt = "";

for (let index = 0; index < foo.length; index++) {
    wrap_cnt = '<table class="table table-dark table-hover text-center" >';
    wrap_cnt += `<tr><td>${foo[index].cz}</td></tr>`;
    wrap_cnt += `<tr><td><input id="slovo_ID" data-verb="${foo[index].base}" type="text" class="${foo[index].base}"></td></tr>`;
    wrap_cnt += `</table>`;
    wrapIrregular.innerHTML += wrap_cnt;
}




let all = document.querySelectorAll('#slovo_ID')
all.forEach(element => element.addEventListener('input',(e)=>{
    if(e.target.value === element.getAttribute('data-verb')){
    element.style.border = "5px solid green"
    //slovo.classList.add('tvoj-class')
    }else{element.style.border = "5px solid red"};
    }));





