// Contraseña de administrador (puedes cambiarla)
        const ADMIN_PASSWORD = "admin123";
        let attempts = 3;

        document.getElementById('adminForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('errorMessage');
            const attemptsLeft = document.getElementById('attemptsLeft');
            const loginContainer = document.getElementById('loginContainer');
            
            if (password === ADMIN_PASSWORD) {
                // Login exitoso
                loginContainer.style.display = 'none';
                document.getElementById('adminPanel').style.display = 'block';
                errorMessage.style.display = 'none';
            } else {
                // Login fallido
                attempts--;
                attemptsLeft.textContent = attempts;
                
                errorMessage.style.display = 'block';
                loginContainer.classList.add('shake');
                
                setTimeout(() => {
                    loginContainer.classList.remove('shake');
                }, 500);
                
                document.getElementById('password').value = '';
                document.getElementById('password').focus();
                
                if (attempts <= 0) {
                    document.getElementById('adminForm').style.display = 'none';
                    errorMessage.textContent = 'Demasiados intentos fallidos. Por favor, contacte al administrador del sistema.';
                    errorMessage.style.display = 'block';
                }
            }
        });

        function logout() {
            document.getElementById('adminPanel').style.display = 'none';
            document.getElementById('loginContainer').style.display = 'block';
            document.getElementById('password').value = '';
            document.getElementById('statsContainer').style.display = 'none';
            attempts = 3;
            document.getElementById('attemptsLeft').textContent = attempts;
            document.getElementById('adminForm').style.display = 'block';
            document.getElementById('errorMessage').style.display = 'none';
        }

        // Efecto de focus en el input de contraseña al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('password').focus();
        });