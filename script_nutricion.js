document.getElementById('nutricion-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const btn = document.getElementById('submit-btn');
    const formData = {
        nombre: document.getElementById('nombre').value,
        email: document.getElementById('email').value,
        objetivo: document.getElementById('objetivo').value,
        mensaje: document.getElementById('mensaje').value
    };

    btn.disabled = true;
    btn.innerText = 'Enviando...';

    try {
        const response = await fetch('nutricion_action.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(formData)
        });

        const result = await response.json();

        if (result.ok) {
            alert(result.msg);
            document.getElementById('nutricion-form').reset();
        } else {
            alert(result.msg);
        }
    } catch (error) {
        alert('Error de conexión.');
    } finally {
        btn.disabled = false;
        btn.innerText = 'Enviar solicitud de contacto';
    }
});