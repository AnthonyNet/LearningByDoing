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

/*
const inputs=document.querySelectorAll('input[data-verb]');
[...inputs].forEach(btn => console.log(btn.getAttribute('data-verb')))*/


const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'light');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'dark');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);

