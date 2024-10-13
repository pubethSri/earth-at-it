document.addEventListener('DOMContentLoaded', () => {
    const modalOverlay = document.getElementById('modalOverlay');
    const openModalButton = document.getElementById('openModal');
    const closeModalButton = document.getElementById('closeModal');

    // Open modal function
    openModalButton.addEventListener('click', () => {
        modalOverlay.classList.remove('hidden');
    });

    // Close modal function
    closeModalButton.addEventListener('click', () => {
        modalOverlay.classList.add('hidden');
    });

    // Close modal when clicking outside the modal content
    modalOverlay.addEventListener('click', (event) => {
        if (event.target === modalOverlay) {
            modalOverlay.classList.add('hidden');
        }
    });
});
