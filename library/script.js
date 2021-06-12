$(function () {
    $(".sidebarLink").click(function () {
        $(".sidebarLink").removeClass("is-active");
        $(this).addClass("is-active");
    });
});

const mainContainer = document.querySelector(".mainContainer");
const pageTitle = document.querySelector(".pageTitle");
const sidebar = document.querySelector(".sidebar");

window.addEventListener("resize", () => {
    if (window.innerWidth > 1090) {
        sidebar.classList.remove("collapse");
        document.querySelector("#something").style.display = "block";
    } else {
        sidebar.classList.add("collapse");
        document.querySelector("#something").style.display = "none";
    }
});

$(function () {
    $(".logo, .logo-expand, .home, .about, .projects, .contact").on(
        "click",
        function () {
            mainContainer.className = "mainContainer";
            mainContainer.scrollTo(0, 0);
        }
    );
    $(".home").on("click", function (e) {
        pageTitle.textContent = "";
    });
    $(".about").on("click", function (e) {
        mainContainer.classList.add("showAbout");
        mainContainer.scrollTo(0, 0);
        document.querySelector(".sidebarLink").classList.remove("is-active");
        document.querySelector(".about").classList.add("is-active");
        pageTitle.textContent = "About";
    });
    $(".projects").on("click", function (e) {
        mainContainer.classList.add("showProjects");
        mainContainer.scrollTo(0, 0);
        document.querySelector(".sidebarLink").classList.remove("is-active");
        document.querySelector(".projects").classList.add("is-active");
        pageTitle.textContent = "Projects";
    });
    $(".contact").on("click", function (e) {
        mainContainer.classList.add("showContact");
        mainContainer.scrollTo(0, 0);
        document.querySelector(".sidebarLink").classList.remove("is-active");
        document.querySelector(".contact").classList.add("is-active");
        pageTitle.textContent = "Contact";
    });
});
