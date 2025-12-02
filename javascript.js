let meubutton = document.getElementById("btnTema");

let meuIcon = meubutton.querySelector("i");

meubutton.addEventListener("click", () => {

    document.body.classList.toggle("dark");

    if (document.body.classList.contains("dark")) {

        meuIcon.classList.remove("fa-moon");

        meuIcon.classList.add("fa-sun");

    } else {

        meuIcon.classList.remove("fa-sun");

        meuIcon.classList.add("fa-moon");
    }
});
