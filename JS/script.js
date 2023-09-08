const subForm = document.querySelector("#notif-subscribe");
subForm.onsubmit = (event) => {

    const input = document.querySelector('#notif-subscribe [name="email"]');
    const message = document.querySelector('#subscribed');
    if(input.value == "")
        return;
    message.innerHTML = "Successfully subscribed!";
}