let radioEmbFalse = document.querySelector('#false');

const changeVisibility = () => {
    if (radioEmbFalse.checked === true) {
        document.querySelector('.embroidery-true').style.display = 'none';
    } else {
        document.querySelector('.embroidery-true').style.display = 'initial';
    }
    
}

addEventListener('DOMContentLoaded', changeVisibility());