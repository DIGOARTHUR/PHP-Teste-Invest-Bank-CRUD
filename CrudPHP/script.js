
// section_Cadastro = 0
// section_ListarDados = 1
function mudaSection(indice){

if(indice==0){
    var sectionCSS = document.querySelector("#section_ListaDados");
    sectionCSS.style.display = "none";
    var sectionCSS = document.querySelector("#section_Cadastro");
    sectionCSS.style.display = "block";

}

if(indice==1){
    var sectionCSS = document.querySelector("#section_Cadastro");
    sectionCSS.style.display = "none";
    var sectionCSS = document.querySelector("#section_ListaDados");
    sectionCSS.style.display = "block";
}


}