let toggle = document.querySelector('.contenido-main-topbar-toggle');
let contenido = document.querySelector('.contenido-main__topbar');
let nav = document.querySelector('.contenido-nav');
let main = document.querySelector('.contenido-main');


toggle.onclick = function(){
    toggle.classList.toggle('active');
    contenido.classList.toggle('active');
    nav.classList.toggle('active');
    main.classList.toggle('active');
}

//////// arreglo de nav resposive /////////
/*function toggleMenu(){
    let toggle = document.querySelector('.contenido-main-topbar-toggle');
    let nav = document.querySelector('.contenido-nav');
    let main = document.querySelector('.contenido-main');
    toggle.classList.toggle('active');
    nav.classList.remove('active');
    main.classList.remove('active');

}*/