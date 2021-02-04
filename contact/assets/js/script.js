// check reCAPTCHA, remove disabled attribute from submit button
function recaptchaCallback() {
    document.getElementById('submitForm').removeAttribute('disabled');
};