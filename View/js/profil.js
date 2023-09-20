           
const formProfil = document.forms['formProfil'];
const alert = document.querySelector('.alert');
            
 formProfil.addEventListener('submit', async (e) => {
    e.preventDefault();
            
    let formData = new FormData(formProfil);
        
    let response = await fetch('../Controller/ControllerProfilUser.php',
    {
        method: 'post',
        headers:{
            'Accept': 'application/json'
        },
        body: formData
    })
            
    let data = await  response.json();
            
    console.log(data);

    alert.innerHTML = '';

    let message = '';
            
    if(data.ok === 'Profil ok !'){

    alert.innerHTML = 'successfully changed profile';
    alert.style.color = 'green';

    setTimeout(function() {
        window.location = "./";
    }, 2000)

    } else {
    
        message += '<ul>';
        
        for (const key in data) {
            if (data.hasOwnProperty(key)) {
                const element = data[key];
                message += `<li>${key} : ${element}</li>`;
                }
            }
            message += '</ul>';

            alert.style.color = 'red';
            
            alert.insertAdjacentHTML('beforeend', message);
        }
});
            