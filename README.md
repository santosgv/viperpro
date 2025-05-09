<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://i.ibb.co/t84wtb7/p6-UVIf-Jyzbp-Sz-Bt-Kl-Xdg-P4i34-An-NOAp3rmck-DUe-S.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Viper Pro

>Viperpro é um projeto de código aberto desenvolvido em PHP utilizando o Framework Laravel 10 e Vue 3,
com várias integrações com diferentes provedores de iGaming. Este projeto é destinado para fins de estudo.
Use-o com responsabilidade e consciência, e não o utilize para fins fraudulentos. 

>Viperpro is an open-source project developed in PHP using the Laravel 10 Framework and Vue 3,
featuring multiple integrations with different iGaming providers. This project is intended for educational purposes.
Use it responsibly and ethically, and do not use it for fraudulent activities.

<div align="center">
  <img src="https://i.postimg.cc/ZYy3qz0R/01.jpg" alt="Descrição da imagem" />
</div>

## PLATAFORMAS DE QUALIDADES
>Se você busca plataformas de qualidade com excelente custo-benefício, acesse o site! Lá, você encontrará soluções completas e avançadas, incluindo documentação detalhada. 
E o melhor: ao adquirir o código-fonte, você ganha 90 dias de suporte gratuito. Aproveite!

>If you're looking for high-quality platforms with excellent cost-effectiveness, visit our website! There, you'll find complete and advanced solutions, including detailed documentation.
And the best part: when you purchase the source code, you get 90 days of free support. Take advantage of it!

Contato Oficial:

https://wa.me/37256054826

Instagram:

https://www.instagram.com/venix.app/

## Login Admin
> Para acessar o painel de administração, basta acessar a URL que termina com /admin e inserir suas credenciais de acesso.
> To access the admin panel, simply navigate to the URL ending with /admin and enter your login credentials.
```php
E-mail: admin@demo.com
Senha: 123456
```
## Trocando a rota do admin

Se você deseja alterar a rota do painel administrativo, é muito simples: basta acessar o arquivo de configuração correspondente e modificar o caminho desejado.
```
app/Providers/Filament/AdminPanelProvider.php
```

Altere:
```php
->id('admin')
->path('admin')
```

## ATUALIZAÇÔES
### Versão 1.6.1
Esta versão conta com diversas correções e melhorias, deixando a plataforma totalmente pronta para o seu uso. Já está integrada ao provedor de jogos Venix, com jogos carregados, e também com o gateway de pagamento da Sharkpay, que já está configurado. Basta acessar o site, criar sua conta e dar o start.

This version includes several fixes and improvements, making the platform fully ready for you to start. It is already integrated with our game provider Venix, with games loaded, and the payment gateway from Sharkpay is also configured. Just visit the website, create your account, and get started.

>Caso queiram novos gateway e provedores, fazemos também esse tipo de serviço, consulte no whatsapp https://wa.me/37256054826

## BAIXEM A VERSÂO RELEASE AO LADO -------------->


### Versão 1.6.0

### SISTEMA DE VIP

#### O que é?
O **Sistema VIP** foi reformulado e agora possui uma mecânica que contabiliza bônus com base na quantidade de pontos VIP. Esses pontos são acumulados de acordo com as definições de multiplicação estabelecidas na seção Configurações/Bônus VIP, onde cada ponto é equivalente a 1 real depositado.

#### Como funciona?
O **Sistema VIP** é uma mecânica de bônus promocional oferecida aos jogadores, permitindo definir um valor de bônus para cada quantidade de pontos acumulados.

#### Implementação
Para integrar facilmente, adicione o seguinte trecho de código no método de finalização de pagamento.
```php
 \App\Helpers\Core::payBonusVip($wallet, $price);
```

### HISTÓRICO DE AÇÃO
Foi criado um novo módulo que permite monitorar detalhadamente as ações no seu painel administrativo. Dessa forma, você terá um relatório completo das atividades da sua equipe.

Coloque o código abaixo onde deseja monitorar
```php
 \App\Helpers\Core::CreateReport($action, $description)
```

### DETALHES PARA AFILIADOS
Agora, quando o administrador visualiza um usuário, ele pode ver detalhes das indicações, como depósitos (confirmados ou pendentes) e suas quantidades, tanto do afiliado quanto dos indicados.

<hr>

### 1.5.2
* Detalhes de usuário foram melhorados, agora você pode ver a lista de depositos de indicações.
* Pasta do Filamentphp foi organizada, e também seus namespaces.

<hr>

## Baixar os jogos da Venix Games
Para baixar os jogos, é bem simples. Basta acessar o terminal da sua VPS ou hospedagem e, no diretório do projeto, digitar o comando php artisan venix:games. Você também pode configurar o CRON para isso, seguindo o exemplo abaixo.

Primeiro você precisa configurar a fila, defina no tempo que desejar:
```
/usr/bin/php8.3 /home/caminho/artisan queue:work 1>> /dev/null 2>&1
```

Depois para baixar os jogos, você pode definir uma vez por dia.

```
/usr/bin/php8.3 /home/caminho/artisan venix:games 1>> /dev/null 2>&1
```
[Precisa de recarga? Clique aqui](https://venix.games/)

## CUIDADO COM UM NOVO GOLPISTA
**Eu há um tempo após alguns haters, mudei o meu usuário do instagram, porem não sei como fizeram isso, pra mim não era
possivel, alguem trocou, pegou o mesmo usuário meu anterior. Já denunciei, e peço a vocês que façam o mesmo, por que esse
bandido está dando inumeros golpes utilizando meu nome e meu produto.**

ESSE PERFIL NÂO SOU EU. DENUNCIEM!!!

https://www.instagram.com/victormsalatiel

## Recursos:

- Autenticação com Google.
- Sistema de Afiliados com RevShare e CPA.
- Integração com Games Slotegrator.
- Integração com Games Salsa.
- Integração com Games Ever.
- Integração com Games Worldslote.
- Integração com Games Fivers, método Seamless
- Sistema de Notificação.
- Painel de Controle.
- Painel Administrativo.
- Painel de Afiliados.
- Sistema de customização
- Gateway de Pagamento DigitoPay. 
- Customização dos Banners e Slide.

Muitas pessoas buscam desenvolvedores para trabalhar em projetos e acabam sendo vítimas de golpes. 
Ao procurar um programador, solicite referências e um portfólio para garantir a segurança e a qualidade do serviço. Ou
Solicite um orçamento com os [Desenvolvedores Oficiais](https://wa.me/37256054826)

## Melhorias e Correções

O Viper Pro está passando por diversas melhorias para prevenir ataques hackers e proteger os usuários contra ações maliciosas.
Caso você detecte algum bug ou falha de segurança, por favor, entre em contato através do site oficial. Resolveremos
o problema imediatamente e sem nenhum custo. Algumas falhas, listadas abaixo, já foram corrigidas.

### Problemas com rotas do admin, sendo acessadas pelo painel de afiliados.

Esse problema ocorria devido à ausência de uma validação separada, permitindo que algumas páginas do 
administrador fossem acessadas pelo painel de afiliado usando a mesma sessão e função. A seguir, explicamos as 
medidas que tomamos para resolver essa questão.

#### Novos middlewares foram criados para permitir bloqueios e validações individuais nos painéis.
- CheckAdmin 
- CheckAffiliate


## [VIPER PRO 2.0 e outros MODELOS - PREMIUM](https://wa.me/37256054826)

The Viper Pro 2 project has undergone a complete restructuring, offering enhanced performance, cutting-edge security, state-of-the-art technology, and continuous improvements.

The Viper Pro 2.3 project has been completely revamped by the new Viper team, of which I’m no longer a part. However, I can confidently say that the project is in excellent hands — with some of the finest professionals in the iGaming industry.

🚀 If you’re not a developer and you're looking for a high-quality platform, with ongoing improvements, frequent updates, a modern interface and a rock-solid backend, get your code now and take your business to the next level.

* Source code
* No obfuscation
* No encryption
* Translation system EN, BR, TR

# $ 350 USD
All models below

## MODELO VIPER 2.0

<a target="_blank" href="https://viperpro2.venixserver.cloud/">
    <div align="center">
      <img src="https://uploaddeimagens.com.br/images/004/885/763/full/03.jpg?1742307340" alt="Descrição da imagem" />
    </div>
</a>

## MODELO VIPER 2.0 RED

<a target="_blank" href="https://viperpro2.venixserver.cloud/">
    <div align="center">
      <img src="https://uploaddeimagens.com.br/images/004/885/765/full/04.jpg?1742307455" alt="Descrição da imagem" />
    </div>
</a>

[COMPRAR AQUI](https://wa.me/37256054826)

## MODELO CACTUS

<a target="_blank" href="https://cactus.venixserver.cloud/">
    <div align="center">
      <img src="https://uploaddeimagens.com.br/images/004/885/760/full/01.jpg?1742307056" alt="Descrição da imagem" />
    </div>
</a>

[COMPRAR AQUI](https://wa.me/37256054826)

## MODELO CHINESA

<a target="_blank" href="https://chinesa.venixserver.cloud/">
    <div align="center">
      <img src="https://uploaddeimagens.com.br/images/004/885/761/full/02.jpg?1742307245" alt="Descrição da imagem" />
    </div>
</a>

[COMPRAR AQUI](https://wa.me/37256054826)


### ------------------------------------------------------------------------------------

## Aggregator System - GAME API PLATFORM 
Tired of constantly reloading and want games that are exclusively yours? We now offer a complete platform for GGR management, featuring over 117 games, all optimized with RTP control, demo mode, and influencer mode. In addition to enjoying your games without extra costs, you can also resell them with ease.

# $ 2000 USD

* Source code API
* Source code Games


<a target="_blank" href="https://chinesa.venixserver.cloud/">
    <div align="center">
      <img src="https://venixserver.cloud/storage/01JHPM2EDE49Z7ESXHN2RD5G8Z.jpg" alt="Descrição da imagem" />
    </div>
</a>

### Demo
https://venix.games/

## PGSOFT

* Honey Trap of Diao Chan
* Fortune Gods
*  Medusa 1: The Curse of Athena
* Reel Love
*  Win Win Won
*  Plushie Frenzy
*  Mr. Hallow-Win
*  Prosperity Lion
*  Santa's Gift Rush
*  Piggy Gold
*  Jungle Delight
*  Emperor's Favour
*  Journey to the Wealth
*  Fortune Mouse
*  Fortune Ox
*  Fortune Tiger
*  Fortune Rabbit
* Lucky Clover Lady
* Fortune Dragon
* Cash Mania

* Luva Melhor do Mundo
* Luva Mines


* Narcos

### PRAGMATIC

*  Gates of Olympus
* Book of the Fallen
* Dragons 888
* Ancient Egypt
* Aztec Gems
* Great Rhino
*  Ancient Egypt
*  Book of Tut PM
* Fortune of Giza
*  Big Bass Splash
*  Ancient Egypt Classic
*  Aztec King
*  Big Bass Bonanza
*  Big Bass Keeping it Reel
*  Bigger Bass Blizzard
*  Bigger Bass Bonanza
*  Bonanza Gold
*  Book of Aztec King
*  Book Of ELDorado
*  Book of Kingdoms
*  BookofTutRespin
*  Book of Vikings
*  Bubble Pop
*  Bull Fiesta
*  Candy Village
*  Cash Patrol
*  Chilli Heat
*  Christmas Big Bass Bonanza
*  Cleocatra
*  Clover Gold
*  Cowboys Gold
*  Day of Dead
*  Egyptian Fortunes
*  Extra Juicy
*  Eye of the Storm
* Fire Hot - 5
*  Fire Hot - 20
*  Fire Hot - 40
*  Fire Hot - 100
*  Fruit Party
*  Fruit Party 2
*  Fruit Rainbow
*  Heart of Rio
*  Glorious Rome
*   Golden Ox
*   Gold Rush
*   Great Reef
*  Great Rhino Deluxe
*   Hercules son of Zeus
*   Hockey League
*   Hot Safari
*   Hot To Burn
*   Hotto Burn Extreme
*   John Hunter And The Mayan Gods
*   John Hunter and the Tomb of the Scarab Queen
*   Joker King
*   Juicy Fruits
*   Kingdom Of Asgard
*   Lady Godiva
*   Lucky New Year
*   Lucky New Year Tiger Treasures
*   Madame Destiny
*   Money Mouse
*   7 Monkeys
*   Mustang Gold
*   Pandas Fortune
*   Pandas Fortune 2
*   Pirate Gold
*  Pirate Gold Deluxe
*   Pirate Golden Age
*  Pyramid Bonanza
*  Pyramid King
*  Return Of The Dead
*   Safari King
*   Starlight Princess
*   Striking Hot - 5
*   Sugar Rush
*  Super 7s
*   Sweet Bonanza
*   Sweet Bonanza Xmas
*   Tales of Egypt
*   The Dog House
*   The Tiger Warrior
*   Tweety House
*   Wild Beach Party
*   7 Piggie
*   Fire Strike
*   Fishin Reels
*   Rise of Samurai 3
*   Shining Hot 5
*   Chicky Run
*   Wings of Iguazu

# $ 2000 USD

* Source code API
* Source code Games


## MODELO BLUERUSH - PREMIUM VIP 2025

A platform developed with a focus on conversion, designed with attractive elements and strategic triggers to boost your business results. It features a unilevel structure, along with infinite CPA and revshare. Additionally, it provides an advanced control panel and a comprehensive affiliate management system to optimize your performance.

Plataforma desenvolvida com foco em conversão, projetada com elementos atraentes e gatilhos estratégicos para impulsionar os resultados do seu negócio. Ela conta com uma estrutura unilevel, além de CPA e revshare infinitos. Também oferece um painel de controle avançado e uma gestão de afiliados completa para otimizar seu desempenho.

## $1000 USD
## R$ 6000 BRL

[COMPRAR AQUI](https://wa.me/37256054826)

[![Watch the video](https://i.postimg.cc/ZnBQgmC4/bluerush.jpg)](https://www.youtube.com/watch?v=ebgxWaCgV5E)

https://bluerush.venixserver.cloud/
## Correções
Para qualquer dúvida ou relato de bugs, por favor, deixe-os aqui no GitHub. Farei o possível para resolver o mais rápido possível.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
