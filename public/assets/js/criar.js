(function () {
    const form = document.getElementById('createNoteForm');
    const saveBtn = document.getElementById('saveBtn');
    const tituloInput = document.getElementById('tituloInput');
    const notaTextarea = document.getElementById('notaTextarea');

    // Loading state on form submit
    form?.addEventListener('submit', function (e) {
        saveBtn.disabled = true;
        saveBtn.innerHTML = '<span class="create-spinner"></span> Salvando...';
    });

    // Auto-save draft to localStorage
    let draftTimer;
    const DRAFT_KEY = 'lockbox_new_note_draft';
    const DRAFT_EXPIRY = 24 * 60 * 60 * 1000; // 24 hours

    function saveDraft() {
        const draftData = {
            titulo: tituloInput.value,
            nota: notaTextarea.value,
            timestamp: Date.now()
        };
        localStorage.setItem(DRAFT_KEY, JSON.stringify(draftData));
    }

    function loadDraft() {
        try {
            const draft = localStorage.getItem(DRAFT_KEY);
            if (draft) {
                const data = JSON.parse(draft);
                const age = Date.now() - data.timestamp;

                if (age < DRAFT_EXPIRY) {
                    tituloInput.value = data.titulo || '';
                    notaTextarea.value = data.nota || '';
                } else {
                    localStorage.removeItem(DRAFT_KEY);
                }
            }
        } catch (e) {
            console.error('Error loading draft:', e);
        }
    }

    function handleInput() {
        clearTimeout(draftTimer);
        draftTimer = setTimeout(saveDraft, 1000);
    }

    tituloInput?.addEventListener('input', handleInput);
    notaTextarea?.addEventListener('input', handleInput);

    // Load draft on page load
    loadDraft();

    // Clear draft on successful submit
    form?.addEventListener('submit', function () {
        localStorage.removeItem(DRAFT_KEY);
    });

    // Character counter for textarea
    const charCounter = document.createElement('div');
    charCounter.style.cssText = 'text-align: right; color: rgba(203, 213, 225, 0.5); font-size: 0.875rem; margin-top: 0.5rem;';
    notaTextarea?.parentElement.appendChild(charCounter);

    function updateCharCount() {
        const count = notaTextarea.value.length;
        charCounter.textContent = `${count} caracteres`;
    }

    notaTextarea?.addEventListener('input', updateCharCount);
    updateCharCount();
})();