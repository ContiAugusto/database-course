document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('nfbc-questions');
    const resultDisplay = document.getElementById('result');

    if (form && resultDisplay) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); 

            let score = 0;

            // Respostas corretas
            const answers = {
                q1: 'A',
                q2: 'A',
                q3: 'B'
            };

            // Verifica cada questão
            for (let question in answers) {
                const selectedAnswer = form.querySelector(`input[name="${question}"]:checked`);
                if (selectedAnswer && selectedAnswer.value === answers[question]) {
                    score++;
                }
            }

            // Atualiza o texto do resultado
            resultDisplay.textContent = `Você acertou ${score} de ${Object.keys(answers).length} perguntas.`;
        });
    } else {
        console.error('Formulário ou elemento de resultado não encontrado.');
    }
});

window.onscroll = function() {
    const navbar = document.querySelector('.navbar-layer');
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.style.backgroundColor = "rgba(8, 18, 36, 0.8)";
    } else {
        navbar.style.backgroundColor = "rgba(8, 18, 36, 1)"; 
    }
};

