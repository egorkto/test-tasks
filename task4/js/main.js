const secondPartBlock = document.getElementById("second-part");
secondPartBlock.style.display = 'none';

const link = document.getElementById("reveal-link");
link.addEventListener('click', (e) => {
    if(secondPartBlock.style.display != "none") {
        secondPartBlock.style.display = 'none';
    } else {
        secondPartBlock.style.display = 'inline';
    }
});