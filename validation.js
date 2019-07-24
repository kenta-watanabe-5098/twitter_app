function emailCheck() {
    const element = document.forms.twitter.email.value;
    var regexp = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/;
    
    if(regexp.test(element)) {
        email.className = "form-control is-valid";
    } else {
        email.className = "form-control is-invalid";
    }
}

function passwordCheck() {
    const passlength = document.forms.twitter.password.value;
    
    if(passlength.length > 7) {
        password.className = "form-control is-valid";
    } else {
        password.className = "form-control is-invalid";
    }
}

function nameCheck() {
    const namelength = document.forms.twitter.username.value;
    
    if(namelength.length > 3) {
        username.className = "form-control is-valid";
    } else {
        username.className = "form-control is-invalid";
    }
}
