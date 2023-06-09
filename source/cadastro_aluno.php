<h3 class="container">Cadastro de Aluno: </h3>

<!--Enviando ação para SALVAR-->

<div class="container mt-5">
    <form id="formulario" action="?page=salvar" method="POST">
        <!-- Cria um campo de formulário oculto com o nome "acao" e o valor "cadastrar" -->
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Nome Completo</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>CPF</label>
            <input type="text" name="cpf" class="form-control" maxlength="11" required>
        </div>
        <div class="mb-3">
            <label>Endereço</label>
            <input type="text" name="endereco" class="form-control" required>
        </div>
        <div class="mb-3 float-end">
            <button type="button" id="btnIniciarCamera" class="btn btn-primary">Iniciar Câmera</button>
            <button type="button" id="btnCapturarFoto" class="btn btn-primary" disabled>Capturar Foto</button>
            <br><br>
            <video id="video" width="320" height="240" autoplay></video>
            <canvas id="canvas" style="display: none;"></canvas>
            <img id="imagemCapturada" style="display: none;" class="img-thumbnail">
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
            <a class="btn btn-outline-secondary" href="?page=listar" role="button">VOLTAR</a>
        </div>
    </form>
</div>


<script>
    //Variaveis e suas relações com o HTML
    var formulario = document.getElementById('formulario');
    var video = document.getElementById('video');
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');
    var imagemCapturada = document.getElementById('imagemCapturada');
    var btnIniciarCamera = document.getElementById('btnIniciarCamera');
    var btnCapturarFoto = document.getElementById('btnCapturarFoto');
    var btnFinalizarCamera = document.getElementById('btnFinalizarCamera');
    var mediaStream;

    //Evento de click
    btnIniciarCamera.addEventListener('click', function() {
        // Verificar se o navegador suporta a API de mídia e se o método getUserMedia está disponível
        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            // Solicitar acesso à câmera
            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function(stream) {
                    mediaStream = stream;
                    video.srcObject = stream;
                    //Iniciando câmera
                    video.play();
                    //Desativando e ativando botões
                    btnIniciarCamera.disabled = true;
                    btnCapturarFoto.disabled = false;
                })
                //Caso o acesso da camera sejá negado
                .catch(function(error) {
                    console.error('Erro ao acessar a câmera: ', error);
                });
        }
    });

    btnCapturarFoto.addEventListener('click', function() {
        //Capturar uma imagem do vídeo da câmera
        //Usando a API Canvas para renderizar a variavel VIDEO nas coordenadas 0,0
        //canvas.width, canvas.height são as dimensões do vídeo que serão desenhadas no canvas.
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        var dataURL = canvas.toDataURL('image/jpeg');
        //Define a imagem capturada como a tag <img> para exibi-la na página
        imagemCapturada.src = dataURL;
        imagemCapturada.style.display = 'block';
        canvas.style.display = 'none';
        btnCapturarFoto.disabled = true;
    });

    formulario.addEventListener('submit', function(e) {
        e.preventDefault(); // Impede o envio padrão do formulário
        
        if (!imagemCapturada.src) {
            alert('Por favor, capture uma foto antes de enviar o formulário.');
            return;
        }
        var formData = new FormData(formulario);

        //Base64 imagem 
        var imagemBase64 = imagemCapturada.src;
        formData.append('imagem', imagemBase64);

        //Servidor
        fetch(formulario.action, {
            method: 'POST',
            body: formData
        })
        .then(function(response) {
            console.log('Dados enviados com sucesso!');
            alert('Dados enviados com sucesso!')
            window.location.href = '?page=listar';
        })
        .catch(function(error) {
            console.error('Erro ao enviar os dados: ', error);
        });
    });

</script>
