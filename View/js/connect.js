{/* <form action="" method="post" id="formConnect"> */}
            {/*  */}
            {/* <h1>Connexion</h1> */}
            {/*  */}
            {/* <label for="login">Login</label> */}
            {/* <input type="login" name="login"  */}
            // <?php
                // if(isset($_SESSION['login'])){ ?>
                // value="<?= $_SESSION['login'];?>"
                // <?php } else { ?>
// 
                // placeholder="Your login ...">
                // <?php }; ?>
            // 
            // <label for="password">Password</label>
            {/* <input type="password" name="password" placeholder="Your  Password ..."> */}
            {/*  */}
            {/* <button class="btn">Connexion</button> */}
{/*  */}

const formConnect = document.forms['formConnect'];
const alert = document.querySelector('.alert');

formConnect.addEventListener('submit', async (e) => {

    e.preventDefault();

    let formData = new FormData(formConnect);

    let response = await fetch('../Controller/ControllerConnectUser.php',
    {
        method: 'post',
        headers: {
            'Accept': 'application/json'
        },
        body: formData
    })

    let data = await response.json();

    console.log(data);

    alert.innerHTML = '';

    let message = '';

    if(data.response === 200){

        alert.innerHTML = 'Successful connection !';
        alert.style.color = 'green';
    
        setTimeout(function() {
            window.location = "./profil.php";
        }, 2000)
    
    } else {
        alert.innerHTML = data;
        alert.style.color = 'red';

    }


})

