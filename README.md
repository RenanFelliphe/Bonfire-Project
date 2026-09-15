# Bonfire

Bonfire é uma rede social voltada para o público gamer — um espaço para acompanhar eventos, explorar conteúdo, interagir com amigos e organizar sua presença no mundo dos jogos.

> Protótipo front-end em desenvolvimento (projeto acadêmico). As páginas hoje são **apenas visuais**: não há backend, autenticação real ou persistência de dados conectados ainda.

## Páginas

| Arquivo         | Descrição                                                              |
|-----------------|--------------------------------------------------------------------------|
| `home.html`    | Feed principal, com menu de navegação (Home, Eventos, Explorar, Amigos, News, Shopping, Cofre, Estatísticas). |
| `login.html`    | Tela de login (redesign) — cadastro/acesso apenas visual, sem integração com banco. |
| `config.html`   | Página de configurações do usuário.                                     |
| `trends.html`   | Página de tendências/conteúdo em alta.                                  |

## Estrutura do projeto

```
├── assets/              # Imagens, logos e artes usadas nas páginas
├── documents/           # Documentação do projeto
│   ├── diagrams/         # DER, DTR, UML e scripts SQL do modelo de dados
│   ├── Links.txt         # Links de ferramentas usadas pelo time (Figma, Notion, GitHub...)
│   ├── propostaBonfire.pdf
│   └── tarefas.txt       # Backlog de tarefas por prioridade
├── js/                  # Scripts de cada página (login.js, index.js, config.js, trends.js)
├── styles/              # Folhas de estilo
│   ├── variable.css      # Sistema de variáveis (cores, fontes, modo claro/escuro) usado em todo o site
│   ├── login.css
│   └── styles.css
├── templates/           # Partes reaproveitáveis em PHP (menu.php, aside.php, quickMessages.php)
└── *.html               # Páginas do site
```

## Como rodar localmente

O projeto é estático (HTML/CSS/JS), então basta servir a pasta com qualquer servidor HTTP simples. Por exemplo:

```bash
python3 -m http.server 8000
```

Depois acesse `http://localhost:8000/home.html` (ou `login.html`) no navegador.

> Evite abrir os arquivos `.html` direto do sistema de arquivos (`file://`) — alguns caminhos de imagem e o `background-image` do login usam caminhos relativos que dependem de um servidor.

## Sistema de cores e variáveis

Todo o site importa `styles/variable.css`, que centraliza:

- Cores de modo claro/escuro (`--white-to-black-color`, `--body-color`, etc.);
- Paleta principal da marca (`--org-color1` a `--org-color5`, com verde `#00EB00` como padrão);
- Classes utilitárias de cor (`.G-green`, `.G-pink`, `.G-red`, `.G-blue`, `.G-orange`, `.G-cyan`, `.G-purple`, `.G-yellow`, `.G-white`) que sobrescrevem a paleta principal para qualquer elemento;
- Fontes, tamanhos e transições padrão do projeto.

Qualquer página nova deve importar esse arquivo antes de seu próprio CSS.

## Ícones

O projeto usa dois pacotes de ícones já carregados via CDN:

- [Bootstrap Icons](https://icons.getbootstrap.com/) (`bi-*`)
- [Boxicons](https://boxicons.com/) (`bx-*`, `bxl-*`)

## Documentação e modelagem

O modelo de dados do projeto (DER, DTR, diagrama de classes UML e scripts SQL) está em `documents/diagrams/`. O histórico de tarefas por prioridade está em `documents/tarefas.txt`, e os links de ferramentas do time (Figma, Notion, Miro, GitHub etc.) estão em `documents/Links.txt`.

## Status atual

- [x] Redesign visual da tela de login (`login.html` / `styles/login.css`), com header e footer.
- [ ] Autenticação real (validação, envio de formulário, login social).
- [ ] Responsividade completa em todas as páginas.
- [ ] Integração com backend/banco de dados.