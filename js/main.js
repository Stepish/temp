document.getElementById('button').addEventListener('click', vieworders);
async function vieworders() {
    data = Array[1, 'weqff'];
    let response = await fetch('../php/server.php', {
        method: "POST",
        body: data
    });
    let result = await response.json();
    if (result.status == 'error') {
        document.getElementById('error').innerText = result.message;
    }
    else {
        console.log(result.products);
    }
}