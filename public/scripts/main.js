// Import bootstrap JS and the form validator file.
import 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js'
import './BootstrapFormValidator.js'

// For each inactive button (button without a href tag),
// add an event listener that prompts the user the page is inactive on click.
const inactiveButtons = document.querySelectorAll('a:not([href])')
inactiveButtons.forEach(button => {
    button.addEventListener('click', () => {
        window.alert("This page is currently not implemented.")
    })
});