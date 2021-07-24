// var openMenu = document.getElementById('openMenu');
// var clsoeMenu = document.getElementById('closeMenu');

function openMenu() { 
    var menuBar = document.getElementById('menuBar');
    menuBar.classList.remove('hidden');
    // console.log('eek')
}

function closeMenu() { 
    var menuBar = document.getElementById('menuBar');
    menuBar.classList.add('hidden');
    // console.log('eek')
}

function navBar(event) { 
    document.getElementById('nav1').classList.remove('border-b-4');
    document.getElementById('nav1').classList.remove('border-gray-200');
    document.getElementById('nav2').classList.remove('border-b-4');
    document.getElementById('nav2').classList.remove('border-gray-200');
    document.getElementById('nav3').classList.remove('border-b-4');
    document.getElementById('nav3').classList.remove('border-gray-200');
    document.getElementById('nav4').classList.remove('border-b-4');
    document.getElementById('nav4').classList.remove('border-gray-200');
    this.event.srcElement.classList.add('border-b-4');
    this.event.srcElement.classList.add('border-gray-200');
    // this.event.classList.add('bg-black');
    // console.log(this.event.srcElement.classList.add('bg-black'));
}

