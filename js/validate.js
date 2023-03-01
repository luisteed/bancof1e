const form = document.getElementById('form ');
const username = document.getElementById('username ');
const password = document.getElementById('password');
const expreciones = {
    username: /^[a-zA-Z0-9]{6,16}$/,
    password: /(?=(.*[0-9]))(?=.*[\!@#$%^&*()\\[\]{}\-_+=|:;"'<>,./?])(?=.*[a-z])(?=(.*[A-Z]))(?=(.*)).{8,15}/
}

const validar = (e) => {
    if (expreciones.username.test(e.target.value)) {
        document.getElementById('ch ').classList.add('has-success');
        document.getElementById('btnLogin ').removeAttribute('disabled');
        document.getElementById('resp ').classList.add('ng-hide');
    } else {
        document.getElementById('ch ').classList.remove('has-success');
        document.getElementById('btnLogin ').setAttribute("disabled", "disabled");
        document.getElementById('resp ').classList.remove('ng-hide');
    }
}

username.addEventListener('keyup', validar);
username.addEventListener('blur', validar);



// form.addEventListener('submit', function(event) {
//     event.preventDefault();

//     const fomdata = new FormData(this)
//         //Iniciar un loader
//     fetch('clave.php', {
//         method: 'POST',
//         body: fomdata

//     }).then(response => {
//         //window.location.href = 'email.html';
//         return response.text()
//     }).then(text => {
//         console.log(text)
//     }).catch(error => {
//         console.log(error)
//     })

//     console.log(this);
// });