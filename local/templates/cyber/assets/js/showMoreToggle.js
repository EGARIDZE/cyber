document.addEventListener('DOMContentLoaded', () => {
    const showMoreBtn = document.querySelector('.show-more-btn');
    const hiddenContent = document.querySelector('.hidden-content');

    showMoreBtn.addEventListener('click', () => {
        const isExpanded = hiddenContent.style.maxHeight && hiddenContent.style.maxHeight !== '0px';
        if (isExpanded) {
            hiddenContent.style.maxHeight = '0px';
            showMoreBtn.textContent = 'View More';
        } else {
            hiddenContent.style.maxHeight = hiddenContent.scrollHeight + 'px';
            showMoreBtn.textContent = 'Hide';
        }
    });
});
