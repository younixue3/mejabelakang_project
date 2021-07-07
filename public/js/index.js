var openMenu = document.getElementById('openMenu');
var clsoeMenu = document.getElementById('closeMenu');
var menuBar = document.getElementById('menuBar');

openMenu.onclick = function () { 
    menuBar.classList.remove('hidden');
}

closeMenu.onclick = function () { 
    menuBar.classList.add('hidden');
}

function navBar(event) { 
    document.getElementById('nav1').classList.remove('border-b-4');
    document.getElementById('nav1').classList.remove('border-gray-700');
    document.getElementById('nav2').classList.remove('border-b-4');
    document.getElementById('nav2').classList.remove('border-gray-700');
    document.getElementById('nav3').classList.remove('border-b-4');
    document.getElementById('nav3').classList.remove('border-gray-700');
    document.getElementById('nav4').classList.remove('border-b-4');
    document.getElementById('nav4').classList.remove('border-gray-700');
    this.event.srcElement.classList.add('border-b-4');
    this.event.srcElement.classList.add('border-gray-700');
    // this.event.classList.add('bg-black');
    // console.log(this.event.srcElement.classList.add('bg-black'));
}

