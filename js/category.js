"use strict";

let btnEditar = document.querySelector("#btnEditar");
btnEditar.addEventListener("submit", function(e){
    e.preventDefault();
    let id = this.dateset.id;
    let inputNombre = document.querySelector("#nombre").value;
    redirectUpdateCategory(id, inputNombre);
})

function redirectUpdateCategory(id, nombre){
    let res = await fetch("admin/editCategoryId/"+ id + nombre);
}