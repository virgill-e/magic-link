function setDisplay(className, displayValue) {
    const elements = document.querySelectorAll('.' + className);
    elements.forEach(element => {
        element.style.display = displayValue;
    });
}