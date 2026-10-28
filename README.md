# Cinai-Projeto-Bilheteria-SENAI
Proposta 6: Sistema de Bilheteria e Mapeamento de Assento.

## Objetivos Gerais:
1. Exibição gráfica em HTML e CSS
2. Controle de Reserva de Ingressos
3. Gerenciar a Fila Virtual de Espera para Eventos Concorridos
4. Permitir o Cancelamento/Estorno de Compras Recentes
5. Apresentar o Mapa de Poltronas Ocupadas/Livres

### Exigências de Aplicação
| Estrutura     | Mapeamento do Sistema |
| --------------------- |:-------------:|
|   Matriz (2D)         |Representação do mapa de  assentos do teatro (Linhas = Fileiras de A a Z, Colunas = Números de poltronas). Cada célula registra se o assento está [Livre, Reservado, VIP].|
|   Fila (FIFO)         |Fila virtual de compradores aguardando liberação de carrinho/guichê para compra de ingressos em dias de alta demanda.|
|   Pilha (LIFO)        |Histórico de transações de compra da sessão atual. Permite desfazer (Undo) a última compra realizada e devolver o ingresso ao mapa de assentos.|
|   Vetor (1D)          |Vetor de categorias de ingressos (Inteira, Meia-Entrada, VIP) e taxas/valores associados.|
|   Busca & Ordenação   |Ordenação do relatório de vendas por valor ou nome do cliente (QuickSort/Bubble). Busca por código do e-ticket/CPF do comprador (Linear/Binária).|
|   Persistência        |Gravação e leitura da matriz de assentos e bilhetes vendidos em arquivos (.csv ou .txt) para garantir o estado ao fechar e abrir o programa.|
