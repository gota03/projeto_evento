let btnSenha = document.querySelector("#senha + span")
let senha = document.querySelector("#senha")

btnSenha.addEventListener("click", ()=>{
    if(btnSenha.textContent == "visibility"){
        btnSenha.textContent = "visibility_off"
        senha.setAttribute("type", "password")
    }
    else{
        btnSenha.textContent = "visibility"
        senha.setAttribute("type", "text")
    }
})