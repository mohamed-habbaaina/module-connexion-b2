window.addEventListener('DOMContentLoaded', async() =>{

    const displayUser = document.getElementById('displayUser');
    let response = await fetch('../Controller/ControllerAdmin.php');
    let data = await response.json();

    console.log(data);

    let html = '';

    html += `<table>
    <thead>
        <th>ID</th>
        <th>Login</th>
        <th>First name</th>
        <th>Last name</th>
    </thead>
    <tbody>
    `;
    data.forEach(item => {
        html += `
        <tr>
            <td>${item.id}</td>
            <td>${item.login}</td>
            <td>${item.firstname}</td>
            <td>${item.lastname}</td>
        </tr>`;
    });

    html += `</tbody>
        </table>`;

        displayUser.insertAdjacentHTML('beforeend', html);
})
