document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
    let isValid = true;

    
    document.querySelectorAll('.error').forEach(e => e.innerText = '');

    
    const name = document.getElementById('name').value;
    if (name.trim() === '') {
        document.getElementById('nameError').innerText = 'Name is required';
        isValid = false;
    }

   
    const email = document.getElementById('email').value;
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        document.getElementById('emailError').innerText = 'Invalid email format';
        isValid = false;
    }

    
    const password = document.getElementById('password').value;
    if (password.length < 8) {
        document.getElementById('passwordError').innerText = 'Password must be at least 8 characters';
        isValid = false;
    }

    const confirmPassword = document.getElementById('confirmPassword').value;
    if (password !== confirmPassword) {
        document.getElementById('confirmPasswordError').innerText = 'Passwords do not match';
        isValid = false;
    }

   
    const age = document.getElementById('age').value;
    if (isNaN(age) || age < 18 || age > 100) {
        document.getElementById('ageError').innerText = 'Age must be between 18 and 100';
        isValid = false;
    }


    const gender = document.querySelector('input[name="gender"]:checked');
    if (!gender) {
        document.getElementById('genderError').innerText = 'Gender is required';
        isValid = false;
    }

   
    const country = document.getElementById('country').value;
    if (country === '') {
        document.getElementById('countryError').innerText = 'Country is required';
        isValid = false;
    }

    const terms = document.getElementById('terms').checked;
    if (!terms) {
        document.getElementById('termsError').innerText = 'You must accept the terms and conditions';
        isValid = false;
    }

    if (isValid) {
        alert('Registration successful!');
        window.location.href = "login.html"; 
    }
});

