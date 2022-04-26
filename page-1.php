<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>

<body>
    <div>
        <div>
            <?php
            include 'includes/header.html';
            ?>

            <h1>Pàgina 1 TOMEU CANVI 2</h1>

            <div class="div-vermell">
                <div>
                    <h1>Insertar nou client TOMEU</h1>
                    <h2>H2</h2>
                </div>
                <div>
                    <form action="insertar-client.html" method="POST">
                        <formfield>
                            <div>
                                <label>DNI</label>
                                <input type="text" name="DNI" required maxlength="12" minlength="6">
                            </div>
                            <div>
                                <label>Nom i llinatges</label>
                                <input type="text" name="nom-llinatges" required maxlength="150" minlength="10">
                            </div>
                            <div>
                                <label>Adreça</label>
                                <input type="text" name="adreca" required maxlength="150" minlength="10">
                            </div>
                            <div>
                                <label>Data de naixement</label>
                                <input type="date" name="data-naixement">
                            </div>
                            <div>
                                <button type="submit">Enviar</button>
                            </div>
                        </formfield>

                    </form>
                </div>
            </div>

            <div class="div-verd">
                <div>
                    <h1>Edita un client</h1>
                    <h2>H2</h2>
                </div>
                <div>
                    <form action="insertar-client.html" method="POST">
                        <formfield>
                            <div>
                                <label>DNI</label>
                                <input type="text" name="DNI" required maxlength="12" minlength="6">
                            </div>
                            <div>
                                <label>Nom i llinatges</label>
                                <input type="text" name="nom-llinatges" required maxlength="150" minlength="10">
                            </div>
                            <div>
                                <label>Adreça</label>
                                <input type="text" name="adreca" required maxlength="150" minlength="10">
                            </div>
                            <div>
                                <label>Data de naixement</label>
                                <input type="date" name="data-naixement">
                            </div>
                            <div>
                                <button type="submit">Enviar</button>
                            </div>
                        </formfield>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        Peu de pàgina
    </footer>
</body>

</html>