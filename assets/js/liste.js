const submits = document.querySelectorAll("button.supp")
for (let i = 0; i< submits.length; i++) {
    submits[i].addEventListener('click',function (e) {
        e.preventDefault()
        const id = submits[i].innerText
        console.log(id)
        const form = document.createElement("form")
        form.method ='post'
        form.action = "../assets/php/formSupp.php"
        const input = document.createElement('input')
        input.value = id;
        input.name = "id"
        form.appendChild(input)
        document.querySelector('body').appendChild(form)
        form.submit()
    })
}

const mods = document.querySelectorAll("button.mod")
for ( let i = 0; i<mods.length; i++) {
    mods[i].addEventListener("click",function (e) {
        e.preventDefault();
        console.log(2)
        const form = document.createElement("form")
        form.action = "../assets/php/formMod.php"
        form.method = "post"
        form.id = "modForm"

        const input1 = document.createElement("input")
        input1.name = "text"

        const input2 =  document.createElement("input")
        input2.name = "id"
        const id = mods[i].nextElementSibling.innerText
        input2.value = id
        input2.style.display="none"

        const button = document.createElement("button")
        button.type = "submit"
        button.addEventListener("click",() => document.getElementById("modForm").submit())
        button.innerText = "Valider"

        form.appendChild(input1)
        form.appendChild(input2)
        mods[i].insertAdjacentElement("beforebegin",form)
        mods[i].insertAdjacentElement("beforebegin",button)
        console.log(id)
    })
}