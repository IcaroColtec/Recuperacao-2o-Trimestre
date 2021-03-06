<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Página</title>
    
    <!-- Estilização -->
    <style>
        /*//
        //Estilização da Sidebar
        //*/
         
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a, a:hover, a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }
        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }
        #sidebar.active {
            margin-left: -250px;
        }
        a[data-toggle="collapse"] {
            position: relative;
        }
        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
        }
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
            background: #0C4C46;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #234C48;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #234C48;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }
        #sidebar ul li a:hover {
            color: #0C4C46;
            background: #fff;
        }

        #sidebar ul li.active > a, a[aria-expanded="true"] {
            color: #fff;
            background: #08302C;
        }
        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #0C4C46;
        }

        .container_cadastrar{
            margin-top: 3% !important;
        }

        #titleuser{
            color: whitesmoke;
            margin-right: 2%;
        }

        
        /*Search Bar*/

        #custom-search-input{
            padding: 3px;
            border: solid 1px #E4E4E4;
            border-radius: 6px;
            background-color: #fff;
        }

        #custom-search-input input{
            border: 0;
            box-shadow: none;
        }

        #formsearch{
            margin: 0px;
        }

        /*Estilização dos Componentes da Lista*/
        
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        /*Botão Logout*/
            
        #logoutButton{
            color:white;
            border-radius:3px !important;
            border: solid white;
            background-color:#343a40;
        }
        #logoutButton:hover{
            color:#343a40;
            background-color:white;
            transition: 0.3s;
        } 
        
        /*Texto de Boas-Vindas*/
        
        #ola{
            margin: 0 2%;
        }

    </style>
</head>
<body>
    
    @include('includes.menu')

    <div class="wrapper">

        @include('includes.sidebar')
        

        <div class="container-fluid">
            @yield('content')
        </div>

    </div>
    @include('includes.scripts')
</body>
</html>