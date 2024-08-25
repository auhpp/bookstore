function Validator(options) {
    var formElement = document.querySelector(options.form);
    if (formElement) {
        options.rules.forEach(rule => {
            var inputElement = formElement.querySelector(rule.selector);
            var formGroup = inputElement.parentElement;
            if(inputElement) {
                inputElement.onblur = function(e) {
                    validate(formGroup, inputElement, rule);
                }

                inputElement.oninput = function(e) {
                    formGroup.classList.remove('form_group-error');
                    formGroup.querySelector(options.errorMessage).innerText = '';
                }
            }
        });
    }

    function validate(formGroup, inputElement, rule) {
        var errorMessage = rule.test(inputElement.value)
        if(errorMessage) {
            formGroup.classList.add('form_group-error');
            formGroup.querySelector(options.errorMessage).innerText = errorMessage;
        } else {
            formGroup.classList.remove('form_group-error');
            formGroup.querySelector(options.errorMessage).innerText = '';
        }
        return !errorMessage;
    }
    var btnSubmit = formElement.querySelector(options.submit);
    btnSubmit.onclick = function() {
        var formCheck = true;
        options.rules.forEach(rule => {
            var inputElement = formElement.querySelector(rule.selector);
            var formGroup = inputElement.parentElement;
            var check = validate(formGroup, inputElement, rule);
            if(!check) {
                formCheck = false;
            }
        });
        var data = {}
        if(formCheck) {
            var inPuts = Array.from(formElement.querySelectorAll('input'));
            for(let i = 0; i < inPuts.length; i++) {
                data[inPuts[i].id] = inPuts[i].value;
            }
            console.log(data);
        }
    }
}

Validator.isEmpty = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.length > 0 ? undefined : message;
        }
    }
}

Validator.isEmail = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : message;
        }
    }
}

Validator.isPassword = function (selector, minLenght, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.length >= minLenght ? undefined : message || `Mật khẩu phải nhiều hơn ${minLenght} kí tự`;
        }
    }
}

Validator.isPasswordConfirmation = function(selector, getConfirmValue, message) {
    return {
        selector: selector,
        test: function (value) {
            return value === getConfirmValue() ? undefined : message;
        }
    }
}



