<main>
    
        
    <div class="center">
        <form id="formulario" action="apidados.php" method="post">
        <div class="row mb-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="Primeiro nome" name="nome" required aria-label="Primeiro nome">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Sobrenome" name="nome2" required aria-label="Sobrenome">
            </div>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"
                required>
            <label for="floatingInput">Endereço de E-mail</label>
            <span id="emailFeedback" style="color: red; display: none;">
      O email deve terminar com .com
    </span>

        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" name="comentario" id="floatingTextarea2"
                style="height: 100px" required></textarea>
            <label for="floatingTextarea2">Comentário</label>
        </div>
        <button type="submit" class="btn btn-primary btn-lg" value="Enviar">Enviar</button> 
    </div>
</form>
<script>
    document.getElementById('formulario').addEventListener('submit', function(event) {
      var emailField = document.getElementById('email');
      var emailFeedback = document.getElementById('emailFeedback');
      var emailValue = emailField.value;

      
      emailFeedback.style.display = 'none';

      
      if (!emailValue.endsWith('.com')) {
        emailFeedback.style.display = 'inline';
        event.preventDefault();
      }
    });
  </script>
</main>