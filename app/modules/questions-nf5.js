document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('nf5-questions');
    const resultDisplay = document.getElementById('result2');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o recarregamento da página

      
        let score = 0;

       
        const answers = {
            q1: 'A', 
            q2: 'A', 
            q3: 'B'  
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
