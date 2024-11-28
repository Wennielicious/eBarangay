var asideBtn = document.querySelectorAll('.menu');
var exitBtns = document.querySelectorAll('.exit');


var openEdit = document.querySelectorAll('.edit-open');
var openAdd = document.querySelectorAll('.add-open');
var hideBtns = document.querySelectorAll('.hide');
var vanish = document.querySelectorAll('.vanish');



var view = document.querySelectorAll('.view-open');
view.forEach(function(btn){
    btn.onclick = function(){
    var viewInfo = btn.getAttribute('data-view');
    document.getElementById(viewInfo).style.display = "block";
    };
})


function toggleSubMenu(button){
    button.nextElementSibling.classList.toggle('show')
    button.classList.toggle('rotate')
}

var modalBtns = document.querySelectorAll('.modal-open');
modalBtns.forEach(function(btn){
    btn.onclick = function(){
        var modal = btn.getAttribute('data-modal');
        document.getElementById(modal).style.display = "block";
    };

});
var openBula = document.querySelectorAll('.bula');
openBula.forEach(function(btn){
    btn.onclick = function(){
        var bula = btn.getAttribute('data-bula');
        document.getElementById(bula).style.display = "block";
    }
})

var openCanEdit = document.querySelectorAll('.can-edit');
openCanEdit.forEach(function(btn){
    btn.onclick = function(){
        var canedit = btn.getAttribute('data-edit');
        document.getElementById(canedit).style.display = "block";
        var close = this.closest('.bulacontains').style.display = "none";
    }
})

var closeBtns = document.querySelectorAll('.back');
closeBtns.forEach(function(btn){
    btn.onclick = function(){
        var close = btn.closest('.modal').style.display = "none";
    }
})

var mewalaBtn = document.querySelectorAll('.cancel');
mewalaBtn.forEach(function(btn){
    btn.onclick = function(){
        var close = this.closest('.hey', '.bulacontains').style.display = "none";
    }
})

vanish.forEach(function(btn){
    btn.onclick = function(){
        var close = btn.closest('.aside').style.display = "none";
    }
})




openEdit.forEach(function(btn){
    btn.onclick = function(){
        var edit = btn.getAttribute('data-modal');
        document.getElementById(edit).style.display = "block";
    };

});

var captainOpen = document.querySelectorAll('.add-captain-open');
captainOpen.forEach(function(btn){
    btn.onclick = function(){
        var cap = btn.getAttribute('data-cap');
        document.getElementById(cap).style.display = "block";
    }
})

openAdd.forEach(function(btn){
    btn.onclick = function(){
        var add = btn.getAttribute('data-add');
        document.getElementById(add).style.display = "block";
    };

});



hideBtns.forEach(function(btn){
    btn.onclick = function(){
        var close = btn.closest('.add-resident').style.display = "none";
    }
})


var removeBtn = document.querySelectorAll('.remove');
removeBtn.forEach(function(btn){
    btn.onclick = function(){
        var colse = btn.closest('.view-resident').style.display = "none";
    }
})

exitBtns.forEach(function(btn){
    btn.onclick = function(){
        var close = btn.closest('.editable').style.display = "none";
      
    }
})

var heBtn = document.querySelectorAll('.he');
heBtn.forEach(function(btn){
    btn.onclick = function(){
        var close = btn.closest('.add-official').style.display = "none";
    }
})

asideBtn.forEach(function(btn){
    btn.onclick = function(){
        var aside = btn.getAttribute('data-aside');
        document.getElementById(aside).style.display = "block";
    }
})



function increaseWidth(x){
    var numberOfCharacters = x.value.length;
    if(numberOfCharacters >= 10){
        var length = numberOfCharacters + "ch";
        x.style.width = length;
    }
}


let profilePic = document.getElementById("add-per");
let inputFile = document.getElementById("add-per-pic");
inputFile.onchange = function(){
    profilePic.src = URL.createObjectURL(inputFile.files[0]);
    
}



let profile = document.getElementById("pic");
let file = document.getElementById("two-by-two");
file.onchange = function(){
    profile.src = URL.createObjectURL(file.files[0]);
    
}


let official = document.getElementById("official");
let officialPic = document.getElementById("official-pic");
officialPic.onchange = function(){
    official.src = URL.createObjectURL(officialPic.files[0]);
}
function setSize(){
    var pic = document.getElementById('pic');
    var img = document.getElementById('add-per');
    pic.style.height = '180px';
    pic.style.width = '180px';
    img.style.height = '189px';
    img.style.width = '189px';
}