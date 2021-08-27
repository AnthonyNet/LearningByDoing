/*let eng = document.querySelector(".word")
 eng.addEventListener("input", function(event){
    let console = (event.target.value)
    if ( console === 'word'){
     alert('Správně!')
    }
})*/


let all = document.querySelectorAll('#slovo_ID')
all.forEach(element => element.addEventListener('input',(e)=>{
    if(e.target.value === element.getAttribute('data-verb')){
    element.style.border = "5px solid green"
    //slovo.classList.add('tvoj-class')
    }else{element.style.border = "5px solid red"};
    }));

 
    function getRandomInt(max) {
        return Math.floor(Math.random() * max);
      }
 


