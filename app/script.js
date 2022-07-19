let email = document.querySelector("#email")
let senha = document.querySelector("#senha")
let msgSenha = document.querySelector("#msgSenha")
let iconEye = document.querySelector("#senha + span")

email.addEventListener("blur", ()=>{
    if(email.value.indexOf("@") == -1 && email.value.indexOf(".com") == -1 || email.value == ""){
        email.classList.remove("border-dark")
        email.classList.add("border-danger")
    }
    else{
        email.classList.remove("border-danger")
        email.classList.add("border-success")
    }
})

senha.addEventListener("blur", ()=>{
    if(senha.value == "" || senha.value.length < 4){
        senha.classList.remove("border-dark")
        senha.classList.add("border-danger")
        msgSenha.textContent = "A senha precisa ter no minimo 4 caracteres"
        msgSenha.classList.add("text-dark")
        msgSenha.classList.add("fw-semibold")
        msgSenha.classList.add("fs-5")
        msgSenha.classList.add("mt-2")
    }
    else{
        senha.classList.remove("border-danger")
        senha.classList.add("border-success")
        msgSenha.textContent = ""
    }
})

iconEye.addEventListener("click", ()=>{
    if(iconEye.textContent == "visibility"){
        iconEye.textContent = "visibility_off"
        senha.setAttribute("type", "password")
    }
    else{
        iconEye.textContent = "visibility"
        senha.setAttribute("type", "text")
    }
})