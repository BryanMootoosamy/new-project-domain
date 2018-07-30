let burgerButton = document.getElementById('burger-button');
let navigation = document.getElementById('navigation');
burgerButton.addEventListener('click', () => {
    burgerButton.classList.toggle('burger-button-moved');
    navigation.classList.toggle('navigation-moved');
});