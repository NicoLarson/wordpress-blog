document.addEventListener('DOMContentLoaded', () => {
    console.log("loaded")
    // Select the button
    const btn = document.querySelector('.toggle--checkbox');

    // Listen for a click on the button
    btn.addEventListener('click', () => {
        // Then toggle (add/remove) the .dark-theme class to the body
        document.body.classList.toggle('dark-theme');
    })
})
