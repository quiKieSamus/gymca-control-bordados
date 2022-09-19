const changeVisibility = (n, bool) => {
    let showDivElemArr = document.querySelectorAll('.showDiv')
    for(let i = 0; i < showDivElemArr.length; i++) {
        let showDivElem = document.querySelector(`.showDiv${i}`);
        if (i === n) {
            if (bool == false){
                showDivElem.style.display = 'none';
                console.log("me desaparezco en: ", showDivElem);
            } else {
                showDivElem.style.display = 'initial';
            }
            
        }
    }
    
}

const onSubmitEvent = (n /*embroidery number*/) => {

}

addEventListener('DOMContentLoaded', () => {
    for(let i = 0; i < document.querySelectorAll('.showDiv').length; i++) {
        document.querySelectorAll('.showDiv')[i].style.display = 'none';
    }
});