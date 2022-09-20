const changeVisibility = (n, bool) => {
    let showDivElemArr = document.querySelectorAll('.showDiv')
    const embClothQty =document.querySelector("#embClothQty");
    const embXCloth = document.querySelector("#embXCloth");
    const backEmbQty = document.querySelector("#backEmbQty");
    for (let i = 0; i < showDivElemArr.length; i++) {
        let showDivElem = document.querySelector(`.showDiv${i}`);
        if (i === n) {
            if (bool == false) {
                if (n === 0) {
                    embClothQty.required = false;
                    embXCloth.required = false;
                } else if (n === 1) {
                    backEmbQty.required = false;
                }
                showDivElem.style.display = 'none';
            } else {
                if (n === 0) {
                    embClothQty.required = true;
                    embXCloth.required = true;

                } else if (n === 1) {
                    backEmbQty.required = true;
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