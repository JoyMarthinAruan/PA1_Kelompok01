document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".item");
    items.forEach(item => {
        item.addEventListener("mouseenter", () => {
            item.style.transform = "scale(1.05)";
            item.style.transition = "0.3s ease";
        });

        item.addEventListener("mouseleave", () => {
            item.style.transform = "scale(1)";
        });
    });
});
