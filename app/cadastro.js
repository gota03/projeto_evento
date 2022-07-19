let nome = document.querySelector("#nome")
let asteriscoNome = document.querySelector("#asteriscoNome")
let sobrenome = document.querySelector("#sobrenome")
let asteriscoSobreNome = document.querySelector("#asteriscoSobreNome")
let emailCadastro = document.querySelector("#criarEmail")
let telefone = document.querySelector("#telefone")
let msgTelefone = document.querySelector("#msgTelefone")
let senhaCadastro = document.querySelector("#criarSenha")
let msgSenhaCadastro = document.querySelector("#msgSenhaCadastro")
let iconEyeCadastro = document.querySelector("#criarSenha + span")

nome.addEventListener("blur", ()=>{
    if(nome.value == ""){
        nome.classList.remove("border-dark")
        nome.classList.add("border-danger")
        asteriscoNome.textContent = "*"
        asteriscoNome.classList.add("text-white")
    }
    else{
        nome.classList.remove("border-danger")
        nome.classList.add("border-success")
    }
})

sobrenome.addEventListener("blur", ()=>{
    if(sobrenome.value == ""){
        sobrenome.classList.remove("border-dark")
        sobrenome.classList.add("border-danger")
        asteriscoSobreNome.textContent = "*"
        asteriscoSobreNome.classList.add("text-white")
     }
     else{
        sobrenome.classList.remove("border-danger")
        sobrenome.classList.add("border-success")
    }
})

emailCadastro.addEventListener("blur", ()=>{
    if(emailCadastro.value.indexOf("@") == -1 || emailCadastro.value.indexOf(".com") == -1 || emailCadastro.value == ""){
        emailCadastro.classList.remove("border-dark")
        emailCadastro.classList.add("border-danger")
    }
    else{
        emailCadastro.classList.remove("border-danger")
        emailCadastro.classList.add("border-success")
    }
})

telefone.addEventListener("blur", ()=>{
    if(telefone.value.length < 9 || telefone.value == ""){
        msgTelefone.textContent = "Por favor informe um numero de telefone que tenha 9 digitos"
        msgTelefone.classList.add("text-white")
        msgTelefone.classList.add("fs-5")
        msgTelefone.classList.add("fw-semibold")
        msgTelefone.classList.add("mt-2")
        telefone.classList.remove("border-dark")
        telefone.classList.add("border-danger")
    }
    else{
        msgTelefone.textContent = ""
        telefone.classList.remove("border-danger")
        telefone.classList.add("border-success")
    }
})

senhaCadastro.addEventListener("blur", ()=>{
    if(senhaCadastro.value == "" || senhaCadastro.value.length < 4){
        msgSenhaCadastro.textContent = "Crie uma senha com no minimo 4 caracteres"
        msgSenhaCadastro.classList.add("text-white")
        msgSenhaCadastro.classList.add("mt-2")
        msgSenhaCadastro.classList.add("fs-5")
        msgSenhaCadastro.classList.add("fw-semibold")
        senhaCadastro.classList.remove("border-dark")
        senhaCadastro.classList.add("border-danger")
    }
    else{
        msgSenhaCadastro.textContent = ""
        senhaCadastro.classList.remove("border-danger")
        senhaCadastro.classList.add("border-success")
    }
})

iconEyeCadastro.addEventListener("click", ()=>{
    if(iconEyeCadastro.textContent == "visibility"){
        iconEyeCadastro.textContent = "visibility_off"
        senhaCadastro.setAttribute("type", "password")
    }
    else{
        iconEyeCadastro.textContent = "visibility"
        senhaCadastro.setAttribute("type", "text")
    }
})