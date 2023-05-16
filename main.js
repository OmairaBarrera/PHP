let btn = document.querySelector('#btn');
let URI = "http://localhost/SpUkM01-074/PHP";

btn.addEventListener("click", async(e) => {
    let res = await(await fetch(`${URI}/api.php`)).json();
    console.log(res); 
})