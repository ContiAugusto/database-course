document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('nf4-questions');
    const resultDisplay = document.getElementById('result');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o recarregamento da página

      
        let score = 0;

       
        const answers = {
            q1: 'A', // Resposta correta para a pergunta 1
            q2: 'A', // Resposta correta para a pergunta 2
            q3: 'B'  // Resposta correta para a pergunta 3
        };


        for (let question in answers) {
            const selectedAnswer = form.querySelector(`input[name="${question}"]:checked`);
            if (selectedAnswer && selectedAnswer.value === answers[question]) {
                score++;
            }
        }

       
        resultDisplay.textContent = `Você acertou ${score} de ${Object.keys(answers).length} perguntas.`;
    });
});
