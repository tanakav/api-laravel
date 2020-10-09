# API Laravel

API simples que tem como recursos usuário, endereço, cidade e estados.

## Recursos

### Usuário

- id: Unsigned BigInt
- nome: String(varchar)
- endereco_id: Unsigned BigInt
- cidade_id : Unsigned BigInt
- estado_id: Unsigned BigInt

### Endereço

- id: Unsigned BigInt
- logradouro: String(varchar)

### Cidade

- id: Unsigned BigInt
- nome: String(varchar)

### Estado

- id: Unsigned BigInt
- abreviacao: String(varchar)

## Endpoints

Como não alterei no RouteServiceProvider, por padrão, todos os endpoints do Laravel de api são precedidos pelo prefixo /api. 

### Usuário
- Lista de usuários

    `GET /api/usuarios`

- Usuários por id

    `GET /api/usuarios/{id}`

- Criar novo usuário

    `POST /api/usuarios`

- Atualizar usuário
    
    `PATCH /api/usuarios/{id}`

- Deletar usuário

    `DELETE /api/usuarios/{id}`

### Endereços
- Obter endereços

    `GET /api/enderecos`

- Obter endereço por id

    `GET /api/enderecos/{id}`

### Cidades
- Obter Cidades

    `GET /api/cidades`

- Obter Cidades por id

    `GET /api/cidades/{id}`

- Obter total de usuários cadastrados por cidade

    `GET /api/cidades/numero-usuarios`

- Obter total de usuários cadastrados por id da cidade

    `GET /api/cidades/{id}/numero-usuarios`

### Estados
- Obter Estados

    `GET /api/estados`

- Obter Estado por id

    `GET /api/estados/{id}`

- Obter total de usuários cadastrados por estado

    `GET /api/estados/numero-usuarios`

- Obter total de usuários cadastrados por id de estado

    `GET /api/estados/{id}/numero-usuarios`

## Instalação

Como nenhuma dependência adicional foi utilizada, a instalação é padrão do Laravel. Já foi criado os factories para cada model facilitando os testes.

    composer install
    php artisan migrate --seed
    
## Testes

Para os testes utilizei o Insomnia rodando no servidor local com:
    
    php artisan serve
