const statuses = document.querySelectorAll('.statusText');

document.addEventListener('DOMContentLoaded', function() {
    for (let i = 0; i < statuses.length; i++) {
  
        const status = statuses[i].innerText;

        if (status === "новое") {
            statuses[i].classList.add('text-black');
        } else if (status === "подтверждено") {
            statuses[i].classList.add('text-blue-500');
        } else {
            statuses[i].classList.add('text-red-500')
        }
    }
})