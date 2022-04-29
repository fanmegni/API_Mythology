const submits = document.querySelectorAll("button")
for ( submit of submits) {
    submit.addEventListener('click',function (e) {
        e.preventDefault()
        console.log("hi")
        const id = submit.innerText
        console.log(id)
        const form = document.createElement("form")
        form.method ='post'
        const input = document.createElement('input')
        input.value = id;
        input.name = "id"
        form.appendChild(input)
        document.querySelector('body').appendChild(form)
        form.submit()
    })
}