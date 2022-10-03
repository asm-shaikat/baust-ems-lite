function dropdownHandler(element) {
    let single = element.getElementsByTagName("ul")[0];
    single.classList.toggle("hidden");
}
function MenuHandler(el, val) {
    let MainList = el.parentElement.getElementsByTagName("ul")[0];
    let closeIcon = el.parentElement.getElementsByClassName("close-m-menu")[0];
    let showIcon = el.parentElement.getElementsByClassName("show-m-menu")[0];
    if (val) {
        MainList.classList.remove("hidden");
        el.classList.add("hidden");
        closeIcon.classList.remove("hidden");
    } else {
        showIcon.classList.remove("hidden");
        MainList.classList.add("hidden");
        el.classList.add("hidden");
    }
}
let sideBar = document.getElementById("mobile-nav");
let menu = document.getElementById("menu");
let cross = document.getElementById("cross");
sideBar.style.transform = "translateX(-100%)";
const sidebarHandler = (check) => {
    if (check) {
        sideBar.style.transform = "translateX(0px)";
        menu.classList.add("hidden");
        cross.classList.remove("hidden");
    } else {
        sideBar.style.transform = "translateX(-100%)";
        menu.classList.remove("hidden");
        cross.classList.add("hidden");
    }
};
let list = document.getElementById("list");
let chevrondown = document.getElementById("chevrondown");
let chevronup = document.getElementById("chevronup");
const listHandler = (check) => {
    if (check) {
        list.classList.remove("hidden");
        chevrondown.classList.remove("hidden");
        chevronup.classList.add("hidden");
    } else {
        list.classList.add("hidden");
        chevrondown.classList.add("hidden");
        chevronup.classList.remove("hidden");
    }
};
let list2 = document.getElementById("list2");
let chevrondown2 = document.getElementById("chevrondown2");
let chevronup2 = document.getElementById("chevronup2");
const listHandler2 = (check) => {
    if (check) {
        list2.classList.remove("hidden");
        chevrondown2.classList.remove("hidden");
        chevronup2.classList.add("hidden");
    } else {
        list2.classList.add("hidden");
        chevrondown2.classList.add("hidden");
        chevronup2.classList.remove("hidden");
    }
};