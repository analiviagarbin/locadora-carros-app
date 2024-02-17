### Sistema de Aluguel de Carros

Este é um aplicativo web para um sistema de aluguel de carros, construído para fins educacionais para estudo de desenvolvimento web full-stack.
Este projeto foi inspirado no curso "Desenvolvimento Web Avançado com PHP, Laravel e Vue.JS" da Udemy, ministrado por Jorge Sant Ana.

#### Tecnologias Utilizadas

- **Backend**: Laravel
- **Frontend**: Vue.js
- **Banco de Dados**: MySQL

#### Funcionalidades

- Autenticação e autorização de usuários
- Operações CRUD para gerenciar carros, clientes, locações, marcas e modelos.

#### Instalação

1. Clone o repositório:

   ```bash
   git clone https://github.com/analiviagarbin/locadora-carros-app.git
   ```

2. Navegue até o diretório do projeto:

   ```bash
   cd locadora-carros-app
   ```

3. Instale as dependências do backend:

   ```bash
   composer install
   ```

4. Instale as dependências do frontend:

   ```bash
   npm install
   ```

5. Configure as variáveis de ambiente:

   - Copie o arquivo `.env.example` para `.env`:

     ```bash
     cp .env.example .env
     ```

   - Atualize o banco de dados e outras variáveis de configuração no arquivo `.env`.

6. Gere a chave da aplicação:

   ```bash
   php artisan key:generate
   ```

7. Execute as migrações do banco de dados:

   ```bash
   php artisan migrate
   ```

8. Compile os recursos do frontend:

   ```bash
   npm run dev
   ```

9. Inicie o servidor da aplicação:

    ```bash
    php artisan serve
    ```

10. Acesse a aplicação em seu navegador em `http://localhost:8000`.