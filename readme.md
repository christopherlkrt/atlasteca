
# Avaliação de skills

Toda informação necessária para realização do teste está presente neste arquivo. <br>
Caso ainda haja dúvidas envie um email para [join@atlastechnol.com](mailto:join@atlastechnol.com) com o assunto **"DÚVIDAS ATLASTECA"**.

O tempo da avaliação é de 7 dias contados a partir do momento que foi liberado o acesso a esse repositório.

Para entrega da avaliação é necessário criar um repositório **PRIVADO** e compartilhar o mesmo com nosso email, [join@atlastechnol.com](mailto:join@atlastechnol.com).

Não é obrigatório realizar todas as tarefas. 
Iremos considerar tudo que for enviado!

**Lembrem-se**, utilizamos como padrão toda a documentação oficial do Laravel, ([Laravel Docs](https://laravel.com/docs/5.2)).

###Importante: É obrigatório o uso da versão 5.2 do Laravel!

###Ao clonar o projeto execute o comando:

```
php artisan migrate --seed
```


## Tarefas 

### Ez Task's:

1. **Diferenciar os usuários** 
     - Esconder algumas informações na página de visualização individual de cada filme. Mostrar somente se os usuários estiverem logados (Data de Lancamento e Sinopse)

2. **Criar uma regra pra diferenciar usuários normais de administradores**
    
    - Usuários que não são administradores não podem ter acesso a dashboard 
    - Limitar registros, ações de editar e deletar filmes somente para administradores
    
3. **Página Editar Filmes**  
     - Adicionar atributo duração do filme e mostrar na página individual de cada filme para o usuário;
    
4. **Modificar Listagem da Home**
     - Exibir um contador com todos filmes registrados no sistema
     - Utilizar paginação padrão do Laravel

### Normal Task's:

1. **Ordenar listagem da HOME**
     - Ordenar listagem da home por data de lançamento do filme de forma descendente (Utilizar globalscopes)

2. **Criar página contato**
     - Criar uma página de contato e salvar os dados do formulário em banco de dados (criar tabela e página)

3. **Alterar estrutura do banco**  
     - Poder escolher mais de um gênero para cada filme
     - Quando deletar um filme não deletar ele do banco, somente desativar da listagem.

4. **Adicionar imagens nos filmes**
     - Criar um model de imagens e relacionar com o de filmes
     - Adicionar a possibilidade de administrador cadastrar a imagem nos filmes

### Premium Task's

1. **Adicionar sistema de doação**
     - Criar um modal pedindo doações com 2 botões (Doar, Cancelar), sempre que usuário cadastrado navegar
     - Se clicar em doar ir para uma página de doação pedindo os dados e salvando eles em uma tabela no banco de dados (Criar tabela e página)
     - Se clicar em cancelar, fechar o modal e não aparecer mais no site até ele fechar a janela
     - Ainda se o usuário realizar doação, não mostrar modal de doação durante um mês para este usuário.

2. **Adicionar sistema de popularidade**
     - Criar um sistema de likes e dislikes nos filmes com um sistema de popularidade.
     - Cada usuário deve conseguir dar somente um like ou dislike por filme (não precisa estar logado). Dica: fingerprint valve
     - Utilizar sistema de cache para salvar os likes. Dica: redis
     - Poder ordenar a listagem principal por popularidade removendo a listagem padrão