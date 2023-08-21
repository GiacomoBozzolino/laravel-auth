import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const deleteSubmitButton = document.querySelectorAll('.delete-project-form button[type="submit"]');

deleteSubmitButton.forEach((button)=> {
    event.preventDefault();

    const modal =document.getElementById('ConfirmProjectDelete');

    const project_name =button.getAttribute('data-project-name');


    const bootstrapModal= new bootstrap.Modal(modal);
    bootstrapModal.show();

    const projectNameYield = modal.querySelector('#modal-project-name')

    projectNameYield.textContent =project_name;



    const ButtonDelete =document.querySelector('.confirm-delete-button');
    ButtonDelete.addEventListener ('click',()=>{
        button.parentElemetn.submit();
    })



})