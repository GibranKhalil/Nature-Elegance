<style>
    * {
        font-family: 'Montserrat';
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    main{
        margin-bottom: 200px;
    }

    #index-container {
        min-height: 100vh;
        min-width: 100%;
    }

    #banner-container {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px 0;

    }

    #banner-img {
        width: 80%;
        height: auto;
        padding: 150px;
        border-radius: 20px;
        background-image: url('img/Banner.png');
        background-size: cover;
        background-position: center;
    }


    #navbar #logo {
        position: absolute;
        left: 10%;
    }

    #navbar {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #228B22;
        padding: 25px;
    }

    .navlist-item {
        margin: 0 10px;
        padding: 5px;
        text-transform: uppercase;
        color: #fff;
        text-decoration: none;
        transition: .5s;
    }

    .navlist-item:hover {
        color: #FFD700;
    }

    #logo img {
        width: 80px;
    }

    #button-nav {
        display: flex;
        gap: 10px;
        position: absolute;
        right: 2.5%;

    }

    #button-nav a {
        text-decoration: none;
    }

    #button-nav button {
        background-color: #fff;
        color: #000;
        padding: 9px 20px;
        display: flex;
        align-items: center;
        border: 1px solid #FFD700;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    }

    #button-nav button:hover {
        background-color: #FFD700;
        color: #fff;
        border-color: #fff;
    }


    /*Login e Cadastro*/

    #content-login {
        width: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url('img/test1.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

    }

    #login-container {
        margin: 50px 0;
        width: 80%;
        height: 720px;
        display: flex;
        flex-direction: row;
        background-color: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    #form-title img {
        position: absolute;
        top: 22%;
        right: 24%;
        width: 80px;
        height: 80px;
    }

    #img-container {
        width: 60%;
        height: 100%;

    }

    #img-container img {
        width: 100%;
        height: 100%;

    }

    #form-container {
        width: 40%;
        display: flex;
        flex-direction: column;
        justify-content: left;
    }

    #form-title {
        text-align: center;
        width: 100%;
    }

    #form-title h1 {
        margin-top: 100px;
    }

    #form-title p {
        margin-top: 15px;
        color: #9E9E9E;
    }

    #form-login {
        width: 100%;
        text-align: center;
        align-items: center;
        margin-top: 50px;
    }

    .form-elements {
        margin-top: 20px;
    }

    .form-elements input,
    .form-elements button {
        width: 80%;
        padding: 10px;
        font-size: 18px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-elements input {
        background: none;
        border: none;
        border-bottom: 2px solid #616161;
        transition: 1s;
    }

    .form-elements input:focus {
        border-bottom: 4px solid #4CAF50;

    }

    .label-icon {
        display: flex;
        flex-direction: row;
        align-items: center;
        position: relative;
        left: 10%;
    }

    .form-elements label {
        text-align: left;
        display: block;
        font-size: 18px;
        margin: 0px 0px;
    }

    .form-elements button {
        background-color: #FFD700;
        color: #000;
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s;
        border-radius: 20px;
    }

    .form-elements button:hover {
        background-color: #FFC800;
    }

    #redirect {
        text-align: center;
        margin: 20px 0;
    }

    #redirect a {
        color: #000;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s;
    }

    #redirect a:hover {
        color: #6d6d6d;
    }

    /*INDEX*/


    #cards-container{
        width: 100%;
    }

    .cards{
        width: 300px;
        height: auto;
        min-height: 330px;
        background-color: #f2f2f2;
        overflow: hidden;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .cards img{
        width: 100%;
        transition:  0.3s;
    }

    .cards img:hover{
        transform: scale(1.1);
    }

    .cards h1{
        font-size: 22px;
        margin: 10px 20px;
    }

    .cards p del{
        font-size: 14px;
    }

    .cards #price{
        font-size: 18px;
        color: #000;
        font-weight: 600;
    }

    .cards p{
        margin: 0px 20px;
    }

    .desconto{
        width: 100%;
        background-color: #4CAF50;
        opacity: 70%;
        text-align: center;
    }

    .desconto p{
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
    }

    /*FOOTER*/

    footer{
        padding: 25px;
        width: 100%;
        color: #fff;
        background-color: #228B22;
        text-align: center;
    }
</style>