const form = document.getElementById('form ');
const password = document.getElementById('password ');
const expreciones = {
    password: /^[a-zA-Z0-9\!@#$%^&*()\\[\]{}\-_+=|:;"'<>,./?]{8,16}$/,
}

const validar = (e) => {
    if (expreciones.password.test(e.target.value)) {
        document.getElementById('btnLogin ').removeAttribute('disabled');
        document.getElementById('resp ').classList.add('ng-hide');
    } else {
        document.getElementById('btnLogin ').setAttribute("disabled", "disabled");
        document.getElementById('resp ').classList.remove('ng-hide');
    }
}

password.addEventListener('keyup', validar);
password.addEventListener('blur', validar);