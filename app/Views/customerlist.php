<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Lucky Mart</title>
    <meta name="description" content="The small framework with powerful features" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Parkinsans" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Chelsea+Market" />
    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition:
                background-color 300ms ease,
                color 300ms ease;
        }

        *:focus {
            background-color: rgba(255, 255, 255, 0.2);
            outline: none;
        }

        html,
        body {
            color: rgba(33, 37, 41, 1);
            font-family:
                "Parkinsans", "Segoe UI", Helvetica, Arial, sans-serif,
                "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        body {
            display: grid;
        }

        header {
            background-color: #2a2987;
            padding: 0.4rem 0 0;
        }

        .menu {
            padding: 0.4rem 2rem;
        }

        h1 {
            font-family: "Chelsea Market";
        }

        header ul {
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }

        header li {
            font-family: "Chelsea Market";
            display: inline-block;
        }

        header li a {
            border-radius: 5px;
            color: rgb(243, 239, 254);
            display: block;
            height: 44px;
            text-decoration: none;
        }

        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: 0.4rem 0.65rem;
            text-align: center;
        }

        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(11, 10, 87, 0.4);
            color: rgb(182, 204, 255);
            font-weight: bold;
        }

        header .logo {
            font-family: "Chelsea Market";
            font-weight: bold;
            font-size: 2rem;
            float: left;
            height: 44px;
            padding: 0.4rem 0.5rem;
        }

        .logo img {
            height: 2rem;
        }

        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }

        header .menu-toggle button {
            background-color: rgba(255, 255, 255, 1);
            border: none;
            border-radius: 3px;
            color: rgb(27, 59, 154);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }

        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(55, 90, 195, 0.6);
            color: rgba(255, 255, 255, 1);
        }

        .hero {
            margin: 0 auto;
            padding: 1rem 2rem;
            font-family: "Chelsea Market";
        }

        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }

        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }

        .hero-section {
            min-height: 50vh;
            width: auto;
            background:
                linear-gradient(rgba(64, 41, 41, 0.2), rgba(48, 61, 75, 0.7)),
                url("public/assets/hero.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            overflow-wrap: break-word;
        }

        .about-section {
            min-height: 40vh;
            width: auto;
            margin: 2rem 5rem;
            background: url("../public/assets/about.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            overflow-wrap: break-word;
        }

        .hero-text {
            text-align: center;
            margin: 5rem 2rem;
            color: #f4f8fb;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            font-weight: bold;
            font-size: 1.5rem;
            text-shadow: 2px 2px 2px black;
            overflow-wrap: break-word;
        }

        .hero-text h1 {
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .hero-text h2 {
            margin-top: 0;
            padding-top: 0;
        }

        section {
            text-align: center;
            margin: auto;
            max-width: 100vw;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }

        section h1 {
            margin-bottom: 2.5rem;
        }

        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }

        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: 0.9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }

        section code {
            display: block;
        }

        section a {
            text-decoration: none;
            color: rgb(33, 33, 34);
        }

        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }

        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }

        .further h2:first-of-type {
            padding-top: 0;
        }

        .svg-stroke {
            fill: none;
            stroke: #000;
            stroke-width: 32px;
        }

        .products {
            display: flex;
            flex-direction: row;
            flex-shrink: 1;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .category {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            border: 1px solid #00000081;
            border-radius: 7px;
            padding: 1rem;
            margin: 1rem;
            box-shadow: 2px 2px 1px #0000002d;
        }

        .category img {
            height: 14rem;
            width: 10rem;
            object-fit: cover;
            border: 1px solid;
            border-radius: 7px;
        }

        footer {
            background-color: rgba(221, 72, 20, 0.8);
            text-align: center;
        }

        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }

        footer .copyrights {
            background-color: rgb(46, 53, 109);
            color: rgb(249, 245, 245);
            padding: 0.25rem 1.75rem;
        }

        table {
            text-align: center;
            margin: 4rem auto;
            border-collapse: collapse;
        }

        td {
            height: 2rem;
            min-width: 20rem;
            border: 1px solid black;
            margin: 0 auto;
        }

        th {
            height: 2rem;
            border: 1px solid black;
            background-color: #8be77f;
            font-weight: bold;
        }

        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }

            header .menu-toggle {
                padding: 0 1rem;
            }

            header .menu-item {
                margin: 0.5rem 15px;
                width: calc(100% - 30px);
            }

            header .menu-toggle {
                display: block;
            }

            header .hidden {
                display: none;
            }

            header li.menu-item a {
                background-color: rgba(227, 226, 226, 0.1);
            }

            header li.menu-item a:hover,
            header li.menu-item a:focus {
                color: rgba(255, 255, 255, 0.8);
                font-weight: bold;
            }
        }
    </style>
</head>

<body>
    <!-- HEADER: MENU + HEROE SECTION -->
    <header>
        <!-- NAVIGATION -->
        <!-- NOTES: CHANGE LOGO + DESIGN -->
        <div class="menu">
            <ul>
                <li class="logo">
                    <a href="<?= url_to('landing') ?>">
                        <img src="../public/lucky_mart.png" class="logo" />Lucky Mart
                    </a>
                </li>
                <li class="menu-toggle">
                    <button id="menuToggle">&#9776;</button>
                </li>
                <li class="menu-item hidden">
                    <a href="<?= url_to('landing') ?>">Home</a>
                </li>
                <li class="menu-item hidden">
                    <a href="<?= url_to('about') ?>">About</a>
                </li>
                <li class="menu-item hidden">
                    <a href="<?= url_to('customers') ?>">Customers</a>
                </li>
                <li class="menu-item hidden">
                    <a href="<?= url_to('staff') ?>">Users</a>
                </li>
            </ul>
        </div>
    </header>

    <!-- CONTENT -->

    <section>
        <h1>Lucky Mart Customers</h1>
        <p>A list of our dear customers that help our mart thrive.</p>


        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
            </tr>
            <tr>
                <?php foreach ($customers as $customer => $cust) {
                    echo "<tr><td>" . $cust["name"] . "</td>";
                    echo "<td>" . $cust["email"] . "</td>";
                    echo "<td>" . $cust["phone"] . "</td></tr>";
                } ?>
            </tr>
        </table>
    </section>

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
    <footer>
        <!-- FOOTER -->
        <div class="copyrights">
            <p>&copy; <?= date('Y') ?> Lucky Mart. All rights reserved.</p>
        </div>
    </footer>

    <!-- SCRIPTS -->

    <script {csp-script-nonce}>
        document
            .getElementById("menuToggle")
            .addEventListener("click", toggleMenu);
        function toggleMenu() {
            var menuItems = document.getElementsByClassName("menu-item");
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
    </script>

    <!-- -->
</body>

</html>