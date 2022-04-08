let contact = {
    name: document.getElementById('name'),
    email: document.getElementById('email'),
    subject: document.getElementById('subject'),
    message: document.getElementById('message'),

    send(obj) {
        let errors = 0;

        if(!this.name.value) {
            this.name.parentNode.classList.add('error');
            errors++;
        } else {
            this.name.parentNode.classList.remove('error');
        }

        if(!this.email.value) {
            this.email.parentNode.classList.add('error');
            errors++;
        } else {
            this.email.parentNode.classList.remove('error');
        }

        if(!this.subject.value) {
            this.subject.parentNode.classList.add('error');
            errors++;
        } else {
            this.subject.parentNode.classList.remove('error');
        }

        if(!this.message.value) {
            this.message.parentNode.classList.add('error');
            errors++;
        } else {
            this.message.parentNode.classList.remove('error');
        }

        return !errors;
    }
}