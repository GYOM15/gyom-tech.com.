document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.card');
    const hoverMessage = document.getElementById('hover-message');

    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            hoverMessage.style.display = 'block';
            hoverMessage.style.left = e.pageX + 'px';
            hoverMessage.style.top = e.pageY + 'px';
        });

        card.addEventListener('mouseleave', () => {
            hoverMessage.style.display = 'none';
        });

        card.addEventListener('click', () => {
            if (card.classList.contains('is-flipped')) {
                card.classList.remove('is-flipped');
            } else {
                cards.forEach(c => c.classList.remove('is-flipped'));
                card.classList.add('is-flipped');
            }
        });
    });
});



  