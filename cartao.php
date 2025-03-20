<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartão</title>
    <link rel="stylesheet" href="cartao.css">
</head>

<body>
    <nav>
        <div class="imagem">
            <img id="bolo" src="imagens/bolo.jpg" alt="">
            <img id="confete"
                src="imagens/pngtree-exploding-party-popper-and-birthday-cap-with-confetti-png-image_6894909.png"
                width="80px" alt="">
            <div class="cartao">
                <h2>Festivite</h2>
                <p>Crie um convite digital para seu evento</p>
            </div>
        </div>
    </nav>
    <main>
        <h2>Crie seu convite</h2>

        <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-calendar">
                <path d="M8 2v4" />
                <path d="M16 2v4" />
                <rect width="18" height="18" x="3" y="4" rx="2" />
                <path d="M3 10h18" />
            </svg>Sobre o convite</p>

        <article>
            <form action="" method="post">
                <label for="nome">Título</label>
                <input placeholder="Nome do evento" type="text" name="nome" id="nome" required>
                <label for="data">Data:</label>
                <input type="date" name="data" id="data" required>
                <label for="hora">Hora:</label>
                <input type="time" name="hora" id="hora" required>
                <label for="local">Local:</label>
                <input placeholder="Link ou endereço" type="text" name="local" id="local" required>
                <label for="descricao">Descrição:</label>
                <textarea placeholder="Escreva sobre os detalhes do evento" name="descricao" id="descricao" cols="30" rows="10" required></textarea>

                <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-paintbrush-vertical">
                        <path d="M10 2v2" />
                        <path d="M14 2v4" />
                        <path d="M17 2a1 1 0 0 1 1 1v9H6V3a1 1 0 0 1 1-1z" />
                        <path
                            d="M6 12a1 1 0 0 0-1 1v1a2 2 0 0 0 2 2h2a1 1 0 0 1 1 1v2.9a2 2 0 1 0 4 0V17a1 1 0 0 1 1-1h2a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1" />
                    </svg>Personalização</p>

                <p>Cor principal</p>
                
            <div class="colors">
                <div class="color blue" data-cor="#007bff"></div>
                <div class="color purple" data-cor="#6f42c1"></div>
                <div class="color pink" data-cor="#e83e8c"></div>
                <div class="color red" data-cor="#dc3545"></div>
                <div class="color orange" data-cor="#fd7e14"></div>
                <div class="color yellow" data-cor="#ffc107"></div>
                <div class="color green" data-cor="#28a745"></div>
                <div class="color cyan" data-cor="#17a2b8"></div>
            </div>

                <p>Tema do evento</p>
                <div class="temas1">
                    <label for="aniversario">Aniversário</label>
                    <input type="checkbox" name="aniversario" id="idniver">
                    <label for="casamento">Casamento</label>
                    <input type="checkbox" name="casamento" id="idcasamento">
                    <label for="formatura">Formatura</label>
                    <input type="checkbox" name="formatura" id="idformatura">
                    <label for="chadebebe">Chá de bebê</label>
                    <input type="checkbox" name="chadebebe" id="idchadebebe">
                </div>
                <div class="temas2">
                    <label for="chadecozinha">Chá de cozinha</label>
                    <input type="checkbox" name="chadecozinha" id="idchadecozinha">
                    <label for="infantil">Infantil</label>
                    <input type="checkbox" name="infantil" id="idinfantil">
                    <label for="carnaval">Carnaval</label>
                    <input type="checkbox" name="carnavak" id="idcarnaval">
                    <label for="natal">Natal</label>
                    <input type="checkbox" name="natal" id="idnatal">
                </div>
                <div class="temas3">
                    <label for="pascoa">Pascoa</label>
                    <input type="checkbox" name="pascoa" id="idpascoa">
                    <label for="halloween">Halloween</label>
                    <input type="checkbox" name="halloween" id="idhalloween">
                    <label for="saojoao">São João</label>
                    <input type="checkbox" name="saojoao" id="idjoao">
                    <label for="outros">Outros</label>
                    <input type="checkbox" name="outros" id="idoutros">
                </div>


                <label class="switch">
                    <input type="checkbox" id="meuSwitch">
                    <span class="slider"></span>
                </label>

                <p>Foto de capa</p>
                <label for="arquivo" class="botao-personalizado">Selecionar arquivo</label>
                <input type="file" id="arquivo" style="display: none;">

                <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>Dados para contato</p>

                <label for="nome">Nome</label>
                <input placeholder="Nome completo" type="text" name="nome" id="nomecontato" required>

                <label for="email">E-mail</label>
                <input placeholder="E-mail" type="email" name="email" id="email" required>

                <label for="telefone">Telefone</label>
                <input placeholder="Telefone" type="tel" name="telefone" id="telefone" required>

                <label for="termo1">Li e concordo com os <a href="#">termos de uso</a> e com as <a href="#">política de privacidade</a></label>
                <input type="radio" name="termos1" id="termo1" required>
                <label for="termo2">Aceito receber atualizações e promoções por e-mail</label>
                <input type="radio" name="termos2" id="termo2" required>
                <label for="termo3">Aceito receber atualizações e promoções por SMS</label>
                <input type="radio" name="termos3" id="termo3" required>

                <button type="submit">Gerar Convite</button>
            </form>
        </article>
    </main>
</body>

</html>