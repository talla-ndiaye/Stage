<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SENEGALWEB</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!--  les CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/css/glightbox.css" rel="stylesheet"  >
    <style>
      a,a:hover {
        text-decoration: none;
      }
    </style>
</head>
<body>
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center" style="text-decoration: none">
            <h1>SENEGALWEB<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
            <li><a href="#hero" >Acceuil</a></li>
            <li><a href="/#about">A propos</a></li>
            <li><a href="/#portfolio">Blogues</a></li>
            <li><a href="/#services">Quizz</a></li>
            <li><a href="/#contact">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>

  <div class="quiz-container">
    <form id="quizForm" class="formulaire">
      @foreach ($questions_sport as $index => $question)
        <div class="quiz-question {{ $index === 0 ? 'active' : '' }}" id="question{{ $index + 1 }}">
          <h2>{{ $question->question }}</h2>
          <label style="font-size: 1.5rem;">
            <input type="radio" name="question{{ $index + 1 }}" value="a">
            {{ $question->a }}
          </label>
          <label style="font-size: 1.5rem;">
            <input type="radio" name="question{{ $index + 1 }}" value="b">
            {{ $question->b }}
          </label>
          <label style="font-size: 1.5rem;">
            <input type="radio" name="question{{ $index + 1 }}" value="c">
            {{ $question->c }}
          </label>
          <label style="font-size: 1.5rem;">
            <input type="radio" name="question{{ $index + 1 }}" value="d">
            {{ $question->d }}
          </label>
          <hr>
          <span class="correct-answer" style="display:none;">{{ $question->correct }}</span>
        </div>
      @endforeach
      <div id="quiz-controls" style="display: flex; justify-content: space-between;">
        <button type="button" id="next">Suivant</button>
        <button type="button" id="submit" style="display: none;">Soumettre</button>
        <button type="button" id="restart" style="display: none;">Recommencer</button>
        <button type="button" id="choose-another" style="display: none;">Quitter</button>
      </div>
    </form>
  </div>

  <div id="results"></div>

  <script >
        document.addEventListener('DOMContentLoaded', function() {
      const nextButton = document.getElementById('next');
      const submitButton = document.getElementById('submit');
      const restartButton = document.getElementById('restart');
      const chooseAnotherButton = document.getElementById('choose-another');
      const resultsContainer = document.getElementById('results');
      const questions = document.querySelectorAll('.quiz-question');

      let currentQuestionIndex = 0;
      const totalQuestions = {{ count($questions_sport) }};

      showQuestion(currentQuestionIndex);

      function showQuestion(index) {
        questions.forEach((question, idx) => {
          if (idx === index) {
            question.classList.add('active');
          } else {
            question.classList.remove('active');
          }
        });

        if (index === totalQuestions - 1) {
          nextButton.style.display = 'none';
          submitButton.style.display = 'block';
        } else {
          nextButton.style.display = 'block';
          submitButton.style.display = 'none';
        }
      }

      nextButton.addEventListener('click', () => {
        currentQuestionIndex++;
        showQuestion(currentQuestionIndex);
      });

      submitButton.addEventListener('click', () => {
        const formData = new FormData(document.getElementById('quizForm'));
        let score = {{ count($questions_sport) }};

        const answers = {};
        formData.forEach((value, key) => {
          answers[key] = value;
        });

        const correctAnswers = @json($questions_sport->pluck('correct', 'id'));

        for (let key in correctAnswers) {
          if (correctAnswers.hasOwnProperty(key)) {
            const questionIndex = 'question' + key;
            const selectedOption = answers[questionIndex];
            const questionElement = document.getElementById(questionIndex);
            const correctAnswer = questionElement.querySelector('.correct-answer').innerText.trim();

            if (selectedOption === correctAnswers[key]) {
              questionElement.classList.add('correct');
            } else {
              questionElement.classList.add('incorrect');
              score--;
            }
          }
        }

        resultsContainer.innerHTML = `<h2>Vous avez répondu correctement à ${score} sur ${Object.keys(correctAnswers).length} questions.</h2>`;

        restartButton.style.display = 'block';
        chooseAnotherButton.style.display = 'block';

        nextButton.style.display = 'none';
        submitButton.style.display = 'none';
      });

      restartButton.addEventListener('click', () => {
        location.reload();
      });

      chooseAnotherButton.addEventListener('click', () => {
        window.location.href = 'index.html#services';
      });
    });
  

  </script>

  
</body>

</html>
