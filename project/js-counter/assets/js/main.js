//Get Buttons
const btnPlus = document.getElementById('plus');
const btnMinus = document.getElementById('minus');
const btnReset = document.getElementById('reset');

//get offset input
const inputOffset = document.getElementById('offset-value');

//set default offset undefined
var offset = undefined;

//Get counter paragraph
const counterValue = document.getElementById('counter-value');

//Set start value to 0
counterValue.innerHTML = 0;

//var counter
var count = 0;

//Add event listener
btnPlus.addEventListener('click', add);
btnMinus.addEventListener('click', sub);
btnReset.addEventListener('click', reset);
inputOffset.addEventListener('focusout', setOffset)



//Add offset to counter
function add(){
    if(!isNaN(offset)){
        count += offset
        counterValue.innerHTML = count;
    }
}

//Sub offset to counter
function sub(){
    if(!isNaN(offset)){
        count -= offset;
        counterValue.innerHTML = count;
    }
}

//Reset counter
function reset(){

    counterValue.innerHTML = 0;
    count = 0;

    offset = undefined;
    inputOffset.value = 0;

    btnPlus.innerHTML = "+";
    btnMinus.innerHTML = "-";
}

//Set offset and update buttons value
function setOffset(){
    var temp = Number(inputOffset.value)

    if(!isNaN(temp)){
        offset = temp;

        btnPlus.innerHTML = "+" + offset;
        btnMinus.innerHTML = "-" + offset;
    }else{
        inputOffset.value = 0;
    }
    
}


