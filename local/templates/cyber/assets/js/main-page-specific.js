document.addEventListener('DOMContentLoaded', () => {
    // Helper function to create IntersectionObserver
    const createObserver = (elements, callback, options = { threshold: 0.1 }) => {
        const observer = new IntersectionObserver(callback, options);
        elements.forEach(element => observer.observe(element));
    };

    // Category row animation with delay for each item
    const categoryRow = document.querySelector('.category__row');
    const categoryItems = document.querySelectorAll('.category__row li');
    createObserver([categoryRow], (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                categoryItems.forEach((item, index) => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                    item.style.transitionDelay = `${index * 0.2}s`;
                });
                observer.unobserve(entry.target);
            }
        });
    });

    // Card visibility animation
    const cards = document.querySelectorAll('.card');
    createObserver(cards, entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.5 });

    // Popular block visibility animation
    const blocks = document.querySelectorAll('.popular__block');
    createObserver(blocks, (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Stop observing after it becomes visible
            }
        });
    }, { threshold: 0.5 });

    // Advertising container visibility
    const advertisingContainer = document.querySelector('.advertising__container');
    createObserver([advertisingContainer], ([entry]) => {
        if (entry.isIntersecting) {
            advertisingContainer.classList.add('visible');
        }
    });
});