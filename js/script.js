const changeVisibility = (n, bool) => {
    let showDivElemArr = document.querySelectorAll('.showDiv')
    for (let i = 0; i < showDivElemArr.length; i++) {
        let showDivElem = document.querySelector(`.showDiv${i}`);
        if (i === n) {
            if (bool == false) {
                if (n === 0) {
                    document.querySelector("#embClothQty").required = false;
                    document.querySelector("#embXCloth").required = false;
                }
                showDivElem.style.display = 'none';
            } else {
                if (n === 0) {
                    document.querySelector("#embClothQty").required = true;
                    document.querySelector("#embXCloth").required = true;

                }
                showDivElem.style.display = 'initial';

            }

        }
    }

}

addEventListener('DOMContentLoaded', () => {
    for (let i = 0; i < document.querySelectorAll('.showDiv').length; i++) {
        document.querySelectorAll('.showDiv')[i].style.display = 'none';
    }
});