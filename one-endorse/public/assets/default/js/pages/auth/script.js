document.addEventListener('DOMContentLoaded', function() {
    const toggleButtons = document.querySelectorAll('.password-toggle');
    
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Get the input field and image
            const input = this.previousElementSibling;
            const img = this.querySelector('.password-toggle-img');
            
            // Toggle password visibility
            if (input.type === 'password') {
                input.type = 'text';
                img.src = 'assets/img/icon/eye.png'; // Show password image
            } else {
                input.type = 'password';
                img.src = 'assets/img/icon/eye-cross.png'; // Hide password image
            }
        });
    });
});