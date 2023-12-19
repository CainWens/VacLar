import './bootstrap';

document.getElementById('btn-home').addEventListener('click', function () {
    window.location.href = '/';
});

// let menu_pc = document.getElementById('pc');
// let menu_mob= document.getElementById('mob');
// let clientWith = window.innerWidth;
//
// function resize(){
//     if (clientWith > 1290){
//         menu_mob.classList.add('hidden');
//         menu_pc.classList.remove('hidden');
//     } else {
//         menu_mob.classList.remove('hidden');
//         menu_pc.classList.add('hidden');
//     }
// }
//
//
// window.addEventListener('resize',(e)=>{
//     clientWith = window.innerWidth;
//     resize();
//     console.log(clientWith);
// })
