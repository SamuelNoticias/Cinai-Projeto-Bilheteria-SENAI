# Cinai-Projeto-Bilheteria-SENAI
Proposta 6: Sistema de Bilheteria e Mapeamento de Assento.

## Objetivos Gerais:
1. Exibição gráfica em HTML e CSS
2. Controle de Reserva de Ingressos
3. Gerenciar a Fila Virtual de Espera para Eventos Concorridos
4. Permitir o Cancelamento/Estorno de Compras Recentes
5. Apresentar o Mapa de Poltronas Ocupadas/Livres

## Processos
1. Exibição gráfica em HTML e CSS\
   - Por meio do HMTL juntamente com o CSS e Figma, criaremos uma interface gráfica de fácil entendimento intuitivo e responsiva para executar nosso local host
2. Controle de Reserva de Ingressos\
   - Uma fila(FIFO) que ao exceder seu tamanho automaticamente coloca as pessoas na reserva\
4. Gerenciar a Fila Virtual de Espera para Eventos Concorridos\
   - Caso alguém desistir de seu ingresso, a primeira pessoa da fila de reservas irá receber uma notificação e ocupará o lugar do desistente\
6. Permitir o Cancelamento/Estorno de Comprass Recentes\
   - Utilizaremos a moeda Gabriel$ para compra dos ingressos, e caso alguém desista de sua compra terá suas moedas automaticamente estornadas de volta para seu cofre virtual.
8. Apresentar o Mapa de Poltronas Ocupadas/Livres\
   - Junto a interface gráfica interativa, será exibida todas as poltronas livres, ocupadas e assentos vips, bem como uma pequena e simplificada sala de cinema..

## Exigências de Aplicação
| Estrutura     | Mapeamento do Sistema |
| --------------------- |:-------------:|
|   Matriz (2D)         |Representação do mapa de  assentos do teatro (Linhas = Fileiras de A a Z, Colunas = Números de poltronas). Cada célula registra se o assento está [Livre, Reservado, VIP].|
|   Fila (FIFO)         |Fila virtual de compradores aguardando liberação de carrinho/guichê para compra de ingressos em dias de alta demanda.|
|   Pilha (LIFO)        |Histórico de transações de compra da sessão atual. Permite desfazer (Undo) a última compra realizada e devolver o ingresso ao mapa de assentos.|
|   Vetor (1D)          |Vetor de categorias de ingressos (Inteira, Meia-Entrada, VIP) e taxas/valores associados.|
|   Busca & Ordenação   |Ordenação do relatório de vendas por valor ou nome do cliente (QuickSort/Bubble). Busca por código do e-ticket/CPF do comprador (Linear/Binária).|
|   Persistência        |Gravação e leitura da matriz de assentos e bilhetes vendidos em arquivos (.csv ou .txt) para garantir o estado ao fechar e abrir o programa.|

## Interface
Web simplificada em HTML e CSS (PHP + HTML/CSS)
1. Pretendendo desenhar os objetos da interface de forma geral
2. Senão, usar comandos HTML/CSS para simplificar a interface

## Funções de cada integrante:
1. exibição gráfica e tela de login - Gabriel Gonzaga
2. Controle de Reserva de Ingressos - Guilherme
3. Gerenciamento de eventos concorridos - Guilherme
4. Permitir o estorno e fazer o cofre virtual - Davi
5. apresentar o mapa de poltronas - Beatriz
6. UI - Beatriz

AEP
- Cadastrar o Cliente (Gabriel)
- Assentos
  1. Ocupar Assentos (Beatriz)
  2. Assentos VIP
  3. Fila
- Ingressos
  1. Categoria (Beatriz)
     * Inteira
     * Meia-entrada
     * VIP
  3. Código
- Financeiro
  1. Histórico de Compras
     * Undo
     * Devolver Ingresso ao mapa de assentos
  3. Relatório de Vendas
     * QuickSort
     * Busca por código
  5. Conta de Usurário
- Front-end
  1. HTML e CSS
     * Tela de Login (Gabriel)
     * Filmes
       + Página dos filmes
       + Página de Assentos e tipagem de Ingressos (Beatriz)
       + Página de pagamento
     * Usuário
       + Perfil de usuário
       + Banco Digital
       + Histórico de Compras
     * Relatório de Vendas
