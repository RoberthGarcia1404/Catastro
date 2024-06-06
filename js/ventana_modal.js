// ventana_modal.js
function openModal(message) {
    document.getElementById('modalMessage').textContent = message;
    document.getElementById('customModal').style.display = "block";
}

function closeModal() {
    document.getElementById('customModal').style.display = "none";
}
