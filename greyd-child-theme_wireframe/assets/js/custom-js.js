document.addEventListener('DOMContentLoaded', function() {
    const parentItem = document.querySelector('.current-menu-item.has-child');
    const link = parentItem.querySelector('a');

    console.log(parentItem);

    link.addEventListener('click', function(event) {
        event.preventDefault(); // Verhindert das Standardverhalten des Links
    });

    parentItem.addEventListener('click', function() {
        this.classList.toggle('open');
    });
});
