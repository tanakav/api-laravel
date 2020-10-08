## API Laravel

API simples que tem como recursos usuário, endereço, cidade e estados. Os recursos terão os seguintes endpoints:

- CRUD de usuário
- Obter endereços
- Obter endereço por id
- Obter Cidades
- Obter Cidades por id
- Obter Estados
- Obter Estado por id
- Obter total de usuários cadastrados por cidade
- Obter total de usuários cadastrados por estado

# Instalação

Como nenhuma dependência adicional foi utilizada, a instalação é padrão do Laravel. Já foi criado os factories para cada model facilitando os testes.

    composer install
    php artisan migrate --seed
