const deleteForms = document.querySelectorAll(".delete-form");
deleteForms.forEach(form => {
    // const title = form.getAttribute('data-title');
    const title = form.dataset.title;
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        const confirm = window.confirm(`Do you want to delete ${title}?`);
        if (confirm) {
            this.submit();
        }
    });
});
