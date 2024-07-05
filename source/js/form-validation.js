document.addEventListener('DOMContentLoaded', function() {
    let form = document.querySelectorAll('.needs-validation')
    let nick = document.getElementById('nickname')
    let content = document.getElementById('content')
    nick.addEventListener("submit", function (event){
        if(!nick.checkValidity() || nick.validate().patternMismatch || nick.getAttribute('value').trim().length===0)
        {
            event.preventDefault()
            event.stopPropagation()
        }
        nick.classList.add('was-validated')
    },false)
});


/*// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    let forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity() || form.validate().patternMismatch ) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
})()*/
