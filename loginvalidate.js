document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
    let isValid = true;

    
    document.querySelectorAll('.error').forEach(e => e.innerText = '');

   
    const loginEmail = document.getElementById('loginEmail').value;
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(loginEmail)) {
        document.getElementById('loginEmailError').innerText = 'Invalid email format';
        isValid = false;
    }

   
    const loginPassword = document.getElementById('loginPassword').value;
    if (loginPassword.length < 8) {
        document.getElementById('loginPasswordError').innerText = 'Password must be at least 8 characters';
        isValid = false;
    }

    if (isValid) {
        alert('Login successful!');
        this.submit(); 
    }
});
