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