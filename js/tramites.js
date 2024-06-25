document.addEventListener('DOMContentLoaded', function() {
    const tramiteSelect = document.getElementById('tramite');
    const tipoTramiteContainer = document.getElementById('tipoTramiteContainer');
    const tipoTramiteSelect = document.getElementById('tipoTramite');
    const documentosContainer = document.getElementById('documentosContainer');

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
                const fileInput = document.createElement('input');
                fileInput.type = 'file';
                fileInput.name = doc.replace(/\s+/g, '_').toLowerCase(); // Reemplazar espacios por guiones bajos y poner en minúscula
                fileInput.required = true;
                const fileLabel = document.createElement('div');
                fileLabel.className = 'file-label';
                fileLabel.textContent = `Copia de ${doc} *`;
                const fileSmall = document.createElement('small');
                fileSmall.textContent = 'Se permiten archivos JPG y PDF. Tamaño máximo: 10 MB.';
                fileUploadDiv.appendChild(fileInput);
                fileUploadDiv.appendChild(fileLabel);
                fileUploadDiv.appendChild(fileSmall);
                documentosContainer.appendChild(fileUploadDiv);
            });
            documentosContainer.style.display = 'block';
        } else {
            documentosContainer.style.display = 'none';
        }
    });
});

function limpiarFormulario() {
    document.getElementById('tramiteForm').reset();
    document.getElementById('tipoTramiteContainer').style.display = 'none';
    document.getElementById('documentosContainer').style.display = 'none';
}
