document.addEventListener('DOMContentLoaded', function() {
    const tramiteSelect = document.getElementById('tramite');
    const tipoTramiteContainer = document.getElementById('tipoTramiteContainer');
    const tipoTramiteSelect = document.getElementById('tipoTramite');
    const documentosContainer = document.getElementById('documentosContainer');
    const tramiteForm = document.getElementById('tramiteForm');
    const errorMessageContainer = document.getElementById('errorMessage');

    let tramitesData = [];

    // Cargar los trámites desde el archivo PHP
    fetch('../procesos/tramites.php')
        .then(response => response.json())
        .then(data => {
            tramitesData = data;
            data.forEach(tramite => {
                const option = document.createElement('option');
                option.value = tramite.id;
                option.textContent = tramite.nombre;
                tramiteSelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error al cargar los trámites:', error));

    // Manejar el cambio en el select de trámites
    tramiteSelect.addEventListener('change', function() {
        const tramiteId = parseInt(this.value, 10);
        const tramite = tramitesData.find(t => t.id === tramiteId);

        if (tramite) {
            tipoTramiteSelect.innerHTML = '<option value="">Seleccionar...</option>';
            tramite.tipos.forEach(tipo => {
                const option = document.createElement('option');
                option.value = tipo.id;
                option.textContent = tipo.nombre;
                tipoTramiteSelect.appendChild(option);
            });
            tipoTramiteContainer.style.display = 'block';
            documentosContainer.style.display = 'none';
        } else {
            tipoTramiteContainer.style.display = 'none';
            documentosContainer.style.display = 'none';
        }
    });

    // Manejar el cambio en el select de tipos de trámites
    tipoTramiteSelect.addEventListener('change', function() {
        const tipoTramiteId = parseInt(this.value, 10);
        const tramiteId = parseInt(tramiteSelect.value, 10);
        const tramite = tramitesData.find(t => t.id === tramiteId);
        const tipoTramite = tramite ? tramite.tipos.find(t => t.id === tipoTramiteId) : null;

        if (tipoTramite) {
            documentosContainer.innerHTML = '';
            tipoTramite.documentos.forEach(doc => {
                const fileUploadDiv = document.createElement('div');
                fileUploadDiv.className = 'file-upload';
                const fileLabel = document.createElement('div');
                fileLabel.className = 'file-label';
                fileLabel.textContent = `Copia de ${doc.nombre} ${doc.requerido ? '*' : ''}`;
                const fileInput = document.createElement('input');
                fileInput.type = 'file';
                fileInput.name = `documentos[]`; // Reemplazar espacios por guiones bajos y poner en minúscula
                if (doc.requerido) {
                    fileInput.required = true; // Marcar como requerido si es obligatorio
                }
                const fileSmall = document.createElement('small');
                fileSmall.textContent = 'Se permiten archivos JPG y PDF. Tamaño máximo: 10 MB.';
                const fileNameSpan = document.createElement('span');
                fileNameSpan.className = 'file-name';
                fileInput.addEventListener('change', function() {
                    fileNameSpan.textContent = `Archivo cargado: ${this.files[0].name}`;
                });
                fileUploadDiv.appendChild(fileLabel);
                fileUploadDiv.appendChild(fileInput);
                fileUploadDiv.appendChild(fileNameSpan);
                fileUploadDiv.appendChild(fileSmall);
                documentosContainer.appendChild(fileUploadDiv);
            });
            documentosContainer.style.display = 'block';
        } else {
            documentosContainer.style.display = 'none';
        }
    });

    // Manejar el envío del formulario con validación
    tramiteForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar el envío normal del formulario
        errorMessageContainer.innerHTML = ''; // Limpiar cualquier mensaje de error previo

        // Validar si los campos requeridos están completos
        const inputs = documentosContainer.querySelectorAll('input[required]');
        let valid = true;
        inputs.forEach(input => {
            if (!input.value) {
                valid = false;
                const error = document.createElement('div');
                error.className = 'error-message';
                error.textContent = `El documento ${input.name.replace(/_/g, ' ')} es obligatorio.`;
                errorMessageContainer.appendChild(error);
            }
        });

        if (valid) {
            const formData = new FormData(tramiteForm);
            fetch(tramiteForm.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                openModal(data.message);
                
            })
            .catch(error => {
                openModal('Ocurrió un error al crear el trámite.');
                console.error('Error al crear el trámite:', error);
            });
        }
    });
});

function limpiarFormulario() {
    document.getElementById('tramiteForm').reset();
    document.getElementById('tipoTramiteContainer').style.display = 'none';
    document.getElementById('documentosContainer').style.display = 'none';
}
