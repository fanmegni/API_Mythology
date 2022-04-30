const submit = document.getElementById("subButton")
submit.addEventListener('click',function (e) {
    e.preventDefault();
    const text = document.getElementById('question')
    if (text.value === ''){
        alert("Il n'y a pas de question")
    }
    else
        document.querySelector('form').submit();
})