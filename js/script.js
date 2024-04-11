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
