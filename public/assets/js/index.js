// Auto-save draft functionality
    let autoSaveTimeout;
    const form = document.getElementById('form-atualizacao');
    const titleInput = form.querySelector('input[name="titulo"]');
    const noteTextarea = form.querySelector('textarea[name="nota"]');

    function saveDraft() {
        const noteId = form.querySelector('input[name="id"]').value;
        const draftData = {
            titulo: titleInput.value,
            nota: noteTextarea.value
        };
        localStorage.setItem(`draft_${noteId}`, JSON.stringify(draftData));
    }

    [titleInput, noteTextarea].forEach(input => {
        input?.addEventListener('input', () => {
            clearTimeout(autoSaveTimeout);
            autoSaveTimeout = setTimeout(saveDraft, 1000);
        });
    });

    // Confirm before delete
    document.querySelector('.delete-form')?.addEventListener('submit', (e) => {
        if (!confirm('Tem certeza que deseja deletar esta nota? Esta ação não pode ser desfeita.')) {
            e.preventDefault();
        }
    });

    // Add loading state to buttons
    form?.addEventListener('submit', (e) => {
        const submitBtn = document.querySelector('.btn-primary');
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner"></span> Salvando...';
    });