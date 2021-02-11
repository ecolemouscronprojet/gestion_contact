<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <!-- <button onclick="document.getElementById('form-contact').style.display = 'none';" type="button" class="btn btn-danger mt-4">CACHER</button>-->
                <form id="form-contact" action="save_contact.php" method="post" novalidate>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom">
                    </div>
                    <div class="form-group">
                        <label for="date_de_naissance">Date de naissance</label>
                        <input type="date" name="date_de_naissance" class="form-control" id="date_de_naissance">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="civilite" id="civilite1" value="1">
                        <label class="form-check-label" for="civilite1">
                            Monsieur
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="civilite" id="civilite2" value="2">
                        <label class="form-check-label" for="civilite2">
                            Madame
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Enregistrer</button>
                </form>
            </div>
        </div>

<script type="text/javascript">

</script>
</body>

</html>