<style>
    * {
        font-family: 'Montserrat';
        box-sizing: border-box;
        padding: 0;
        margin: 0;
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

    #button-nav a{
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
        background-color: #E0E0E0;

    }

    #login-container {
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

    #redirect{
        position: absolute;
        bottom: 10%;
        right: 16%;
    }

    #redirect a{
        color: #000;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s;
    }

    #redirect a:hover{
        color: #6d6d6d;
    }
    
    /*INDEX*/
        summary {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            cursor: pointer;
        }

</style>