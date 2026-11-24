
const trilha = document.querySelector('#carrocelEmCartaz');
const wrapper = document.querySelector('.carrossel-wrapper');

const next = wrapper.querySelector('.next');
const prev = wrapper.querySelector('.prev');

let animando = false;

function calcularMovimento() {
    const filme = trilha.querySelector('.filme');
    const gap = parseFloat(getComputedStyle(trilha).gap) || 0;

    return filme.getBoundingClientRect().width + gap;
}

// AVANÇAR
next.addEventListener('click', () => {
    if (animando) return;

    animando = true;

    trilha.style.transition = 'transform 0.4s ease';
    trilha.style.transform = `translateX(-${calcularMovimento()}px)`;
});

// VOLTAR
prev.addEventListener('click', () => {
    if (animando) return;

    animando = true;

    const movimento = calcularMovimento();

    trilha.style.transition = 'none';
    trilha.prepend(trilha.lastElementChild);
    trilha.style.transform = `translateX(-${movimento}px)`;

    trilha.offsetHeight;

    trilha.style.transition = 'transform 0.4s ease';
    trilha.style.transform = 'translateX(0px)';
});

// FINAL DA ANIMAÇÃO
trilha.addEventListener('transitionend', (evento) => {
    if (evento.propertyName !== 'transform') return;
    if (!animando) return;

    // Só reorganiza quando avançar
    if (parseFloat(trilha.style.transform.replace('translateX(', '')) < 0) {

        trilha.style.transition = 'none';

        trilha.append(trilha.firstElementChild);

        trilha.style.transform = 'translateX(0px)';

        trilha.offsetHeight;
    }

    animando = false;
});
