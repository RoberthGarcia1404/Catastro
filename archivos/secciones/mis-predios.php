<?php include_once 'header.php'; ?>

<?php include_once 'header2.php'; ?>

<section style="margin-top:-15px;">
    <h3 class="titulo-tramites titulos-principales">Consultar Predios </h3>
    <p class=" parrafos-principales" style="margin-top:-1.5rem;">A continuación podrá consultar los predios que tiene asociados.</p>
    <div class="grid-tramites">
        <table>
            <thead>
                <tr>
                    <th>Número Predial</th>
                    <th>Avalúo</th>
                    <th>Área Terreno</th>
                    <th>Área Construcción</th>
                    <th>Matrícula</th>
                    <th>Dirección</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>13001010100000108001500000000000</td>
                    <td>405785000</td>
                    <td>129</td>
                    <td>182</td>
                    <td>060-37835</td>
                    <td>C 38 9 92</td>
                    <td>
                        <button class="action-btn">
                            <span class="icon-search">&#128269;</span>
                        </button>
                        <button class="action-btn">
                            <span class="icon-add">&#10133;</span>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>13001010500002780709000000000000</td>
                    <td>1341000</td>
                    <td>5</td>
                    <td>0</td>
                    <td>060-189082</td>
                    <td>C 31 80B 144 SE 1 343</td>
                    <td>
                        <button class="action-btn">
                            <span class="icon-search">&#128269;</span>
                        </button>
                        <button class="action-btn">
                            <span class="icon-add">&#10133;</span>
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>




</section>

<?php include_once 'footer.php'; ?>