<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Invisível</title>
</head>
<body>
    <label for="toggleInput">Clique para Mostrar:</label>
    <input type="checkbox" id="toggleInput">
    <input type="text" id="hiddenInput" style="display: none;">
    <script>
        let toggleInput = document.getElementById('toggleInput');
        let hiddenInput = document.getElementById('hiddenInput');

        toggleInput.addEventListener('change', function() {
            if (toggleInput.checked) {
                hiddenInput.style.display = 'block'; // Torna o campo visível
            } else {
                hiddenInput.style.display = 'none'; // Oculta o campo
            }
        });

    </script>

</body>
</html>
