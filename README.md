# magento1.9-instagram-feed
<h1>Magento free extension to display last items from your instagram account</h1>

<h3>Instruções de instalação:</h3>
<p>1. Desabilite o cache de sua loja (reabilitar após a conclusão da instalação)</p>
<p>2. Copie as pastas /app e /skin do módulo para a raíz do seu site magento.</p>
<p>3. Em <strong>Sistema > Permissões > Blocos</strong> clique em adicionar novo bloco, preencha com Nome do Bloco: instagramfeed/instagramfeed e Marque a opção "sim"</p>
<p><img src="https://codebaby.tech/readmefiles/instafeedextension/2-instafeed_instructions-open_block.jpg" /></p>
<p>Para adicionar o feed dentro de uma Página CMS, usar:</p>
<p>{{block type="instagramfeed/instagramfeed" name="instagramfeed" alias="insta_block_new" template="codebaby/instafeed.phtml"}}</p>
<p>Para adicionar o feed dentro de uma arquivo .phtml, usar:</p>
```
echo "$this->getLayout()->createBlock('instagramfeed/instagramfeed')->setTemplate('codebaby/instafeed.phtml')->toHtml();
```
<br>
<br>
<h3>Configurações:</h3>
<p><img src="https://codebaby.tech/readmefiles/instafeedextension/1-instafeed_instructions-conf.jpg" /></p>
<p><strong>Instagram Acess Token:</strong> Seu token de acesso do instagram. Dúvidas para tirar o token? <a href="#tokeninsta">Clique aqui</a></p>
<p><strong>Qtde de Itens a mostrar:</strong> Quantos itens vão aparecer dentro do bloco (máx 20)</p>
<p><strong>Título da Seção:</strong> Título que vai aparecer acima do bloco</p>
<p><strong>Tamanho da miniatura:</strong> tamanhos padrão do instagram (standard_resolution/low_resolution/thumbnail)</p>
<p>Se você deixar os campos abaixo vazios, serão carregadas as classes e css padrão do módulo. Se preferir usar classes próprias, como do bootstrap, por exemplo, basta preencher os campos abaixo com as classes desejadas.</p>
<p><strong>Classe da div do Título:</strong> A classe da div que envolve o título.</p>
<p><strong>Classe do Título Html:</strong> A classe do elemento h2 do tíitulo.</p>
<p><strong>Classe dos itens no Html:</strong> A classe para cada imagem individual do instagram.</p>
<p><strong>Wrapper Html class:</strong> A classe da div que envolve o bloco inteiro, inclusive a div do título.</p>
<p><strong>Itens Wrapper Html class:</strong> A classe que envolve os itens, ou seja o grupo de miniaturas de imagens do Instagram.</p>
<br>
<br>
<h3 id="tokeninsta">Conseguindo o token do Instagram:</h3>
<p>Acesse o link: <a href="https://www.instagram.com/developer/" target="_blank">https://www.instagram.com/developer/</a> e clique em <strong>Register your Application</strong>:</p>
<p><img src="https://codebaby.tech/readmefiles/instafeedextension/3-instafeed_instructions-token1.jpg" /></p>
<p>Clique em register a new client:</p>
<p>Preencha os itens conforme a imagem de exemplo, substituindo seusite.com.br pelo seu site de fato, assim como o e-mail:</p>
<p><img src="https://codebaby.tech/readmefiles/instafeedextension/4-instafeed_instructions-token2.jpg" /></p>
<p>Vá para a aba Security e deixe a opção Disable implicit OAuth <strong>desmarcada</strong> e confirme o registro da aplicação.</p>
<p><img src="https://codebaby.tech/readmefiles/instafeedextension/5-instafeed_instructions-token3.jpg" /></p>
<p>A próxima tela mostra o client ID da aplicação criada:</p>
<p><img src="https://codebaby.tech/readmefiles/instafeedextension/6-instafeed_instructions-token4.jpg" /></p>
<p>**Recentemente o registro do token do Instagram passou a dar erro para navegadores configurados em outras línguas que não o inglês. Para ter certeza que vai funcionar, use o <strong>FIREFOX</strong> e mude o idioma do seu navegador para inglês apenas para acessar a URL.</p>
<p>Nas configurações do Firefox:</p>
<p><img src="https://codebaby.tech/readmefiles/instafeedextension/7-instafeed_instructions-token5.jpg" /></p>
<p>Agora é só acessar esta URL pelo navegador para resgatar seu token:</p>
<p>https://api.instagram.com/oauth/authorize/?client_id=AQUI-VEM-A-SUA-CLIENT-ID&redirect_uri=https://seusite.com.br&response_type=token&scope=likes+public_content</p>
<p>Apenas mude a Client ID para a da aplicação recém criada e a redirect_uri para a url definida na configuração (no exemplo usamos https://seusite.com.br)</p>
<p><img src="https://codebaby.tech/readmefiles/instafeedextension/8-instafeed_instructions-token6.jpg" /></p>
<p>Após clicar em autorizar, você será redirecionado à página escolhida como 'redirect_uri'. O token de acesso estará na própria URL da página, como neste exemplo: </p>
<p><img src="https://codebaby.tech/readmefiles/instafeedextension/9-instafeed_instructions-token7.jpg" /></p>



