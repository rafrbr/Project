
document.addEventListener('DOMContentLoaded', function () {
    // Selecione o elemento que você deseja animar
    const cardElement = document.querySelector('.card');

    // Crie uma animação com GSAP
    gsap.from(cardElement, {
        x: -100, // Deslocamento inicial
        opacity: 0, // Opacidade inicial
        duration: 1, // Duração da animação (em segundos)
    });
});


