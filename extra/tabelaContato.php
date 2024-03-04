<div class="row">

<div class="table-responsive">
    <table class="table table-hover table-striped">
        <tbody>
            <?php
            $contatosDao = new ContatosDAO;

            if (isset($_GET['search'])) {
            $contatos = $contatosDao->buscarTodosPorPesquisa($_GET['search']);
            } else {
                $contatos = $contatosDao->buscarTodos();
            }

            foreach($contatos as $contato) {
                $nome = utf8_encode($contato['nome']);
                echo "
                <tr>
                <td>{$nome}</td>
                <td>{$contato['email']}</td>
                <td>{$contato['telefone']}</td>
                </td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
        </div>
        </div>