// "{} objetos"
// "[] arrays"

var dados = []

function PopulaTabela () {
    if (Array.isArray(dados)){

        $("#tblDados span").php("")

        dados.forEach(function (item){
            //TEMPLATES STRING
            $("#tblDados span").append(`<tr>
                <td>${item.ID}</td>
                <td>${item.Nome}</td>
                <td>${item.E-mail}</td>
                <td>${item.CPF}</td>
                <td>${item.Senha}</td>
            </tr>`)
        })
    }
}

$(function () {
    //EXECUTA AO CARREGAR DA TELA
    dados =  JSON.parse(localStorage.getItem("__dados__"))
    
    if (dados) {
        PopulaTabela()
    }


})