const hamburgerBtn = document.querySelector('.hamburger');
const sidebar = document.querySelector('.sidebar');
const closeBtn = document.querySelector(".close-sidebar");

hamburgerBtn.addEventListener('click',()=>{
    
    sidebar.classList.add('active');
    sidebar.classList.remove("hidden");
    // overlay.classList.toggle("active");
});



// Close sidebar when clicking overlay
closeBtn.addEventListener("click", () => {
  sidebar.classList.add("hidden");
//   overlay.classList.remove("active");
});




const dropdowns = document.querySelectorAll(".dropdown");
const sidebarLinks = document.querySelectorAll(".sidabar-content-wrap a");

// Accordion dropdown behavior
dropdowns.forEach(dropdown => {
    const toggle = dropdown.querySelector(".dropdown-toggle");

    toggle.addEventListener("click", () => {

        // Close other dropdowns
        dropdowns.forEach(item => {
            if (item !== dropdown) {
                item.classList.remove("active");
            }
        });

        dropdown.classList.toggle("active");
    });
});
const sidebarItems = document.querySelectorAll(".sidabar-content-wrap .dropdown-menu li");

// Handle active state
sidebarItems.forEach(item => {

    item.addEventListener("click", () => {

        // Remove active from all li elements
        sidebarItems.forEach(li => li.classList.remove("active"));

        // Add active to clicked li
        item.classList.add("active");
    });

});


// // dropdown menu
// const dropdowns = document.querySelectorAll(".dropdown");

// dropdowns.forEach(dropdown => {
//     const toggle = dropdown.querySelector(".dropdown-toggle");

//     toggle.addEventListener("click", () => {

//         // Close all other dropdowns
//         dropdowns.forEach(item => {
//             if (item !== dropdown) {
//                 item.classList.remove("active");
//             }
//         });

//         // Toggle current dropdown
//         dropdown.classList.toggle("active");
//     });
// });
