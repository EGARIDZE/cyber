document.addEventListener('DOMContentLoaded', () => {
    const select = document.querySelector('.select');
    const title = select.querySelector('.select-title');
    const options = select.querySelectorAll('.select-option');

    title.addEventListener('click', () => {
        select.classList.toggle('open');
    });

    options.forEach(option => {
        option.addEventListener('click', () => {
            if (!option.classList.contains('disabled')) {
                title.textContent = option.textContent;
                select.classList.remove('open');
            }
        });
    });

    document.addEventListener('click', (e) => {
        if (!select.contains(e.target)) {
            select.classList.remove('open');
        }
    });
});