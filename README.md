# PHP - Teste Invest Bank [Estágio de Dev. Web - 2021]  <img  alt="skills"  width="35" height="35" src="https://user-images.githubusercontent.com/59892368/109432650-ebc81a80-79ea-11eb-9a86-31a0f95a5695.png">

>Desenvolvi um projetinho CRUD utilizando a linguagem PHP. A ideia do CRUD se baseia em um sistema de 4 operações básicas relacionado ao Banco de Dados que se está trabalhando, são elas: Criar (Create), Ler (Read), Atualizar (Update) e Deletar (Delete). Utilizei aqui ferramentas como HTML, CSS E JavaScript para o desenvolvimento da Interface Web (FrontEnd), já para o Banco de Dados trabalhei com o phpMyAdmin responsável pela administração do MySQL e por último o PHP como ponte para a conexão entre as duas partes (BackEnd).

#### FERRAMENTAS:
<p align="left">
<img  alt="skills"  width="120" height="50" src="https://user-images.githubusercontent.com/59892368/109433254-37c88e80-79ee-11eb-93a1-28f178e89bc0.png">
<img  alt="skills"  width="120" height="70" src="https://user-images.githubusercontent.com/59892368/109433396-e240b180-79ee-11eb-8ec2-33e8501f38e7.png">
<img  alt="skills"  width="120" height="30" src="https://user-images.githubusercontent.com/59892368/109433439-0e5c3280-79ef-11eb-824c-a6cd3dd48346.png">
<img  alt="skills"  width="35" height="52" src="https://user-images.githubusercontent.com/59892368/109433965-bd9a0900-79f1-11eb-9c3f-79a9bc5b393c.png">
<img  alt="skills"   width="55" height="55" src="https://user-images.githubusercontent.com/59892368/109433834-2df45a80-79f1-11eb-9204-43d92be71250.png">
<img  alt="skills"  width="55" height="55" src="https://user-images.githubusercontent.com/59892368/109433839-32b90e80-79f1-11eb-992f-56ac09e1c291.png">
 <img  alt="skills"  width="50" height="50" src="https://user-images.githubusercontent.com/59892368/109434187-d5be5800-79f2-11eb-91e8-b265d1796698.png">
</p>


   <h1 align="rigth"> <img  alt="skills"  width="40" height="40" src="https://user-images.githubusercontent.com/59892368/107999728-e6b8a380-6fc6-11eb-82d1-aa090feabaf3.png"></img> Sumário (Passos para a rodar este projeto)</h1>
<ul>
 <li>
  <h3><a href="https://github.com/DIGOARTHUR/Py-01-DesafioTunts-CRUDGoogleSheets-#--topic-for-the-selection-process-">Xampp</a></h3>
 </li>
 
 <li>
  <h3><a href="https://github.com/DIGOARTHUR/Py-01-DesafioTunts-CRUDGoogleSheets-#--creating-your-application-"> Banco de Dados (phpMyAdmin)</a></h3>
 
 </li>
 
  <li>
  <h3><a href="https://github.com/DIGOARTHUR/Py-01-DesafioTunts-CRUDGoogleSheets-#--gspread-">Acessando a Interface Web</a></h3>

  </li>
  </ul>
  
  
  
  <p>
    <h2 align="rigth"> <img  alt="skills"  width="35" height="35" src="https://user-images.githubusercontent.com/59892368/109436749-d1e50280-79ff-11eb-8f0f-ecb4b1aba204.png"></img>Xampp </h2>
</p>

 <ul>
   <li><img  alt="icone_Download"  width="25" height="25" src="https://user-images.githubusercontent.com/59892368/106370136-08166000-6336-11eb-8327-6fabcd50044a.png"></img>
 Baixe o Xampp por meio deste link (Escolha a versão adequada para o seu sistema operacional) e logo em seguida instale em sua máquina: <a href="https://www.apachefriends.org/pt_br/download.html">Download XAMPP</a>  
  <p align="center">
   <img  alt="gif_"  width="580" height="390" src="https://user-images.githubusercontent.com/59892368/109435014-e670cd00-79f6-11eb-8212-cadc277cd18a.PNG"></img>
</p>

</li>

   <li><img  alt="icone_Configurando"  width="30" height="30" src="https://user-images.githubusercontent.com/59892368/109435220-23898f00-79f8-11eb-944e-a546b38a673e.png"></img> Abra o Xampp e configure-o habilitando as opções Apache e MySQL :
   <p align="center">
   <img  alt="gif_"  width="516" height="400" src="https://user-images.githubusercontent.com/59892368/109440851-5b9dcb80-7a12-11eb-9161-4197b24e25ee.gif"></img>
</p>
   </li>

</ul>


  <p>
    <h2 align="rigth"> <img  alt="skills"  width="40" height="40" src="https://user-images.githubusercontent.com/59892368/109436996-55ebba00-7a01-11eb-8764-ce648c946cdf.png"></img>Banco de Dados (phpMyAdmin)</h2>
</p>



 <ul>
  <li><img  alt="icone_BancoDeDados"  width="30" height="30" src="https://user-images.githubusercontent.com/59892368/109437584-43bf4b00-7a04-11eb-8152-70cbe0f6737d.png"></img> Acesse o phpMyAdmin por meio do endereço (localhost/phpmyadmin/): <a href="http://localhost/phpmyadmin/">phpMyAdmin</a> e crie uma base de dados nomeando como >>> crudpdo <<< : 
   <p align="center">
   <img  alt="gif_"  width="1200" height="550" src="https://user-images.githubusercontent.com/59892368/109440900-7bcd8a80-7a12-11eb-985b-23e6d2b0c6df.gif"></img>
</p>
   </li>

   <li><img  alt="icone_Arquivo"  width="30" height="30" src="https://user-images.githubusercontent.com/59892368/109438047-d365f900-7a06-11eb-84d7-0d081c1a54ec.png"></img> Ainda dentro do phpMyAdmin, clique na base de dados criada anteriormente com o nome >>> crudpdo <<< e nas abas superiores acesse a opção "Importar" e logo após "Escolher arquivo". Selecione o arquivo contido aqui na pasta (BancoDeDados/crudpdo.sql).
   <p align="center">
   <img  alt="gif_"  width="1200" height="550"  src="https://user-images.githubusercontent.com/59892368/109440927-87b94c80-7a12-11eb-9b3e-b67cf937f0c6.gif"></img>
</p>
   </li>
   
   <li><img  alt="icone_Arquivo"  width="30" height="30" src="https://user-images.githubusercontent.com/59892368/109438095-145e0d80-7a07-11eb-8a8d-47f9288ea1a3.png"></img> Insira a pasta com arquivos da Interface Web e o PHP que se encontra neste repositório chamada de (CrudPHP) para que você tenha acesso Local por meio do Xampp pelo o caminho (C:\xampp\htdocs):
    
   <p align="center">
   <img  alt="gif_"  width="1200" height="550"  src="https://user-images.githubusercontent.com/59892368/109441141-3198d900-7a13-11eb-819b-e1d49688ad04.gif"></img>
</p>
   </li>
   
   
   
   <li>
 PRONTO! Agora podemos acessar a página e testar as funcionalidades.
   </li>

</ul>

 <p>
<h2 align="rigth"> <img  alt="skills"  width="40" height="40" src="https://user-images.githubusercontent.com/59892368/109438345-5c316480-7a08-11eb-9b09-f0dd5c2d3fbc.png"></img>Acessando a Interface Web</h2>
</p>

<ul>
 
  <li><img  alt="icone_Arquivo"  width="30" height="30" src="https://user-images.githubusercontent.com/59892368/109438593-70c22c80-7a09-11eb-8586-2e347dee0c86.png"></img> Digite na barra de endereço o seguinte (localhost/CrudPHP) : <a href="http://localhost/CrudPHP/">Acesso a Interface Web CRUD</a>  
   <p align="center">
   <img  alt="gif_"  width="1200" height="550"  src="https://user-images.githubusercontent.com/59892368/109441154-3f4e5e80-7a13-11eb-8e46-fb4eae383599.gif"></img>
</p>
   </li>
 
</ul>

<p>
<h1> <img  alt="icon_Sources"  width="35" height="35" src="https://user-images.githubusercontent.com/59892368/108534741-3fcf5280-72b9-11eb-9d14-e7679c5d81ec.png"></img> Quero agradecer a Invest Bank por este desafio que me proporcionou aprender mais e mais. </h1>
<h2>FEITO! </h2>
</p>
