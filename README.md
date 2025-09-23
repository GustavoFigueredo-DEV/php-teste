# 📂 Estrutura Base para Projetos em PHP Puro

Este repositório serve como **modelo inicial** para qualquer projeto em **PHP puro**, sem frameworks.  
A ideia é ser uma base organizada e fácil de entender, para que consigam separar as responsabilidades do código e manter boas práticas desde o início.

---

## 🚀 Estrutura de Pastas

```bash
BASE/
│
├── app/                 # Código-fonte da aplicação
│   ├── data/            # Dados simulados (arrays, configs, JSON ou simulação de banco)
│   └── components/      # Componentes reutilizáveis (estáticos ou dinâmicos)
│       ├── header.php   # Exemplo de componente estático
│       ├── footer.php   # Exemplo de componente estático
│       └── cardProduto.php # Exemplo de componente dinâmico (recebe props/variáveis)
│
├── public/              # Arquivos acessíveis pelo navegador
│   ├── assets/          # Arquivos estáticos (front-end)
│   │   ├── css/         # Estilos CSS
│   │   ├── imgs/        # Imagens
│   │   └── js/          # Scripts JavaScript
│   └── index.php        # Entrada principal do site
│
└── README.md            # Documentação do projeto
