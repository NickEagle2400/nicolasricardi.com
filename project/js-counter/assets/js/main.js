//Create Counter
const counter = document.getElementById('counter');

const btnPlus = document.createElement('button');
const btnMinus = document.createElement('button');
const btnReset = document.createElement('button');

const counterValue = document.createElement('p');

const offsetContainer = document.createElement('div');

const offsetLabel = document.createElement('label');
const offsetValue = document.createElement('input');

counter.append(btnPlus);
btnPlus.setAttribute('id','plus');
btnPlus.innerHTML = "+";

counter.append(counterValue);
counterValue.setAttribute('id','counter-value');
counterValue.innerHTML = "0";

counter.append(btnMinus);
btnMinus.setAttribute('id','minus');
btnMinus.innerHTML = "-";

counter.append(btnReset);
btnReset.setAttribute('id','reset');
btnReset.innerHTML = "Reset Counter";

counter.append(offsetContainer);

offsetContainer.append(offsetLabel);
offsetLabel.setAttribute('for','offset-value');
offsetLabel.innerHTML = "Offset Value:"

offsetContainer.append(offsetValue);
offsetValue.setAttribute('id','offset-value');
offsetValue.setAttribute('type', 'text');
offsetValue.setAttribute('name', 'offset-value');
offsetValue.setAttribute('value', '0');

//set default offset undefined
var offset = undefined;

//Set start value to 0
counterValue.innerHTML = 0;

//var counter
var count = 0;

//Add event listener
btnPlus.addEventListener('click', add);
btnMinus.addEventListener('click', sub);
btnReset.addEventListener('click', reset);
offsetValue.addEventListener('focusout', setOffset);

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
    offsetValue.value = 0;

    btnPlus.innerHTML = "+";
    btnMinus.innerHTML = "-";
}

//Set offset and update buttons value
function setOffset(){
    var temp = Number(offsetValue.value)

    if(!isNaN(temp)){
        offset = temp;

        btnPlus.innerHTML = "+" + offset;
        btnMinus.innerHTML = "-" + offset;
    }else{
        offsetValue.value = 0;
        alert("A valid number is required. Please, try again.");
    }
    
}