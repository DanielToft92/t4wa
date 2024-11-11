/*function removeActive(selector){
    document.querySelectorAll(selector).forEach(item => item.classList.remove('active'));
}
function removeActiveTop(selector){
    document.querySelectorAll(selector).forEach(item => item.classList.remove('activetop'));
}
function addActive(element){
    removeActive('a');
    removeActiveTop('a');
    element.classList.add('active');
}
function addActiveTop(element){
    removeActiveTop('a');
    removeActive('a');
    element.classList.add('activetop');
}
*/
// Function to add active class and save the active link in localStorage
function addActive(element) {
    // Remove 'active' class from all elements
    document.querySelectorAll('.nav .category, .navvertical .category').forEach((el) => {
        el.classList.remove('active');
    });

    // Add 'active' class to the clicked element
    element.classList.add('active');

    // Save the text of the active link in localStorage
    localStorage.setItem('activeCategory', element.innerText);
}

// Function to load the active category on page load
function setActiveCategory() {
    const activeCategory = localStorage.getItem('activeCategory');

    if (activeCategory) {
        // Find the link with the saved category text and add the 'active' class
        const activeElement = Array.from(document.querySelectorAll('.nav .category, .navvertical .category'))
            .find(el => el.innerText === activeCategory);

        if (activeElement) {
            activeElement.classList.add('active');
        }
    }
}

// Run the setActiveCategory function when the page loads
window.addEventListener('DOMContentLoaded', setActiveCategory);
