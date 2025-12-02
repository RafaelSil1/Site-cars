
// Seleciona o botão do menu (ícone de hambúrguer) pelo ID definido no HTML
const menuBtn = document.getElementById('menu-btn');

// Seleciona o elemento de navegação (menu que será aberto/fechado)
const navMenu = document.getElementById('navMenu');

// Dentro do botão, procura o elemento <i> (ícone da fonte Font Awesome)
const menuIcon = menuBtn.querySelector('i');
// querySelector() -> método reservado do JavaScript usado para buscar
// o primeiro elemento que corresponde a um seletor CSS dentro de outro elemento.

// --------------------------------------------------------------------

// Adiciona um "ouvinte de evento" (listener) que detecta o clique no botão do menu.
menuBtn.addEventListener('click', () => {
    // addEventListener() -> método reservado usado para executar uma função
    // toda vez que um evento específico ocorre (nesse caso, um clique).

    // Alterna (liga/desliga) a classe "show" no menu de navegação.
    // Isso faz o menu aparecer ou desaparecer visualmente via CSS.
    navMenu.classList.toggle('show');
    // classList.toggle() -> adiciona a classe se ela não existir; remove se já existir.

    // Troca o ícone (de hambúrguer para "X" e vice-versa), dependendo do estado atual.
    // Verifica se o ícone atual tem a classe "fa-bars" (ícone de hambúrguer)
    if (menuIcon.classList.contains('fa-bars')) {
        // classList.contains() -> verifica se o elemento contém uma classe específica (retorna true ou false).

        // Se sim, remove a classe do ícone de hambúrguer...
        menuIcon.classList.remove('fa-bars');
        // ...e adiciona o ícone de "X" para indicar que o menu pode ser fechado.
        menuIcon.classList.add('fa-xmark');
        // Caso contrário, volta o ícone para o estado original (hambúrguer).

    } else {
        menuIcon.classList.remove('fa-xmark');
        menuIcon.classList.add('fa-bars');
    }

});


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





