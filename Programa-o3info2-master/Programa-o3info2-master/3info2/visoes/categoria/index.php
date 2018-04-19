
    <meta charset="utf-8"/>

    <link rel="stylesheet" type="text/css" href=" ../assets/semantic/semantic.css">
<div class="ui  aligned divided list" >

    <h1 style="margin-left: 40%;"> <i class="address book outline icon"></i> Listagem de Categorias</h1>

    <div class="ui inverted section divider"></div>

    <?php foreach($categorias as $categoria) : ?>
        <div class="item">
            <div class="content">
                <a style="margin-left: 1%; color: #FFFAFA" href="?acao=show&id=<?= $categoria->getId()?>">
                    <button class="ui inverted white button"></button>

                    <?= utf8_encode($categoria->getNome()) ?>

                </a>
            </div>
        </div>

    <?php endforeach; ?>



</div>






