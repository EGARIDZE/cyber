document.querySelectorAll('.product__memory ul li a').forEach(function (item) {
    item.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelectorAll('.product__memory ul li a').forEach(function (link) {
            link.classList.remove('selected');
        });
        item.classList.add('selected');
    });
});
