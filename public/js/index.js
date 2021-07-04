var openMenu = document.getElementById('openMenu');
var clsoeMenu = document.getElementById('closeMenu');
var menuBar = document.getElementById('menuBar');

openMenu.onclick = function () { 
    menuBar.classList.remove('hidden');
}

closeMenu.onclick = function () { 
    menuBar.classList.add('hidden');
}