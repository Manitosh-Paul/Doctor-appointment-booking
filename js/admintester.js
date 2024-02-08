let password = document.getElementById('pass');
let text = document.getElementById('p_text');
let strong = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})');
let medium = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))');

password.addEventListener("input", () => {
    text.style.fontSize = '14px';
    if (password.value.length == 16) {
        password.style.color = '#0984e3';
        text.innerHTML = 'Max Limit: 16';
        text.style.color = '#0984e3';
    }
    else {
        if (password.value == "") {
            password.style.borderBottom = '2px solid red';
            text.innerHTML = 'Password cannot be empty';
            text.style.color = 'red';
        }
        else if (strong.test(password.value)) {
            password.style.borderBottom = '2px solid green';
            password.style.color = 'green';
            text.innerHTML = 'Password Strength: Strong';
            text.style.color = 'green';
        }
        else if (medium.test(password.value)) {
            password.style.borderBottom = '2px solid #ffae00';
            password.style.color = '#ffae00';
            text.innerHTML = 'Password Strength: Medium';
            text.style.color = '#ffae00';
        }
        else {
            password.style.borderBottom = '2px solid red';
            password.style.color = 'red';
            text.innerHTML = 'Password Strength: Weak';
            text.style.color = 'red';
        }
    }
})