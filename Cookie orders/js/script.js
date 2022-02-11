const orderForm = document.querySelector('order')
//terms check box
const termsInput = document.querySelector('#terms')
const btn = document.querySelector('#submit')
// terms disabled submit button
termsInput.addEventListener('change', function (e) {
    // console.log('you clicked me')
    if (termsInput.checked) {
        btn.disabled = false
    } else {
        btn.disabled = true
    }

})

orderForm, addEventListener('submit', function (e) {
    //errornames
    const firstInput = document.querySelector('#first')
    const errorFirst = document.querySelector('#errorFirst')
    const lastInput = document.querySelector('#last')
    const errorLast = document.querySelector('#errorLast')
    const houseInput = document.querySelector('#house')
    const errorHouse = document.querySelector('#errorHouse')


    //show error
    const showErrors = document.querySelector('#showErrors')
    const errorBucket = []
    showErrors.innerHTML = ''
    //red text
    const errors = document.querySelectorAll('.error')
    errors.forEach(function (element) {
        element.classList.add('hide')
        element.classList.remove('error')
    })
    //if statements for input errors
    if (firstInput.value.trim() == '') {
        errorBucket.push([firstInput, errorFirst, "First Name Required"])
    }
    if (lastInput.value.trim() == '') {
        errorBucket.push([lastInput, errorLast, "Last Name Required"])
    }
    if (houseInput.value.trim() == '--') {
        errorBucket.push([houseInput, errorHouse, "house number is Required"])
    }

    //error bucket
    if (errorBucket.length > 0) {
        e.preventDefault()
        const ul = document.createElement('ul')
        showErrors.append(ul)
        errorBucket.forEach(function (element) {
            const li = document.createElement('li')
            li.innerText = element[2]
            ul.appendChild(li)
            element[1].classList.remove('hide')
            element[1].classList.add('error')

        })
        errorBucket[0][0].focus()
    }
})