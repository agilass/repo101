document.getElementById("login").focus();
document.getElementById("login").select();
document.getElementById("ppr").focus();
document.getElementById("ppr").select();

nomEns = document.getElementById("nomEns");
prenomEns = document.getElementById("prenomEns");
matiereEns = document.getElementById("matiereEns");

const formAddEns = document.getElementById("formAddEns");
formAddEns.addEventListener('submit',(e)=>{
    if(nomEns =="" || nomEns == null){
        alert("nom ne doit pas etre vide ");
    }
    
})
function doReload(){
document.addEventListener('DOMContentLoaded',()=>{
    const el = document.getElementsByTagName('select')[0];
    if (el) {
        addEventListener('change', (e) =>{
            location = 'index.php?action=listeEtudiants&layout=Admin&selectclass='+ e.target.options[e.target.selectedIndex].value;
        });
    }  
});
}
function confirm_del() {
    // var agree=confirm("Êtes vous sûr de vouloir effectuer cette action ?");
    //         if (agree) {
    //                 return true ;
    //         }
    //         else {
    //                 return false ;
    //         }
    // window.confirm("Do you really want to delete?")
}
const editBtn = document.getElementById('editBtn');
editBtn.addEventListener('click', function() {
    window.confirm("Do you really want to Edit?")
});
const delBtn = document.getElementById('delBtn');
delBtn.addEventListener('click', function() {
    window.confirm("Do you really want to Delete?")
});