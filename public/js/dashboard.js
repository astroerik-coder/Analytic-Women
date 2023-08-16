document.addEventListener("DOMContentLoaded", () => {
    const btnSidebarToggler = document.getElementById("btnSidebarToggler");
    const navClosed = document.getElementById("navClosed");
    const navOpen = document.getElementById("navOpen");
    const dropdownButton = document.getElementById("dropdownButton");
    const dropdownMenu = document.getElementById("dropdownMenu");

    btnSidebarToggler.addEventListener("click", (e) => {
        e.preventDefault();
        sidebar.classList.toggle("show");
        navClosed.classList.toggle("hidden");
        navOpen.classList.toggle("hidden");
    });

    sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";

    function toggleDropdownMenu() {
        dropdownMenu.classList.toggle("hidden");
    }

    dropdownButton.addEventListener("click", toggleDropdownMenu);

    window.addEventListener("click", function (event) {
        if (
            !dropdownButton.contains(event.target) &&
            !dropdownMenu.contains(event.target)
        ) {
            dropdownMenu.classList.add("hidden");
        }
    });
});
