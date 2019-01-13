const url = 'http://localhost:8000/js/process.php';
const form = document.querySelector('#register');

form.addEventListener('click', e => {
    e.preventDefault();

    const files = document.querySelector('[type=file]').files;
    const formData = new FormData();
	
	if (files.length > 1) {
        alert("1 file maximum.");
        e.preventDefault();
		files.length = 0;
    } else {
    for (let i = 0; i < 1; i++) {
        let file = files[i];

        formData.append('files[]', file);
		i = 0;
    }

    fetch(url, {
        method: 'POST',
        body: formData
    }).then(response => {
        console.log(response);
    });


    }


});