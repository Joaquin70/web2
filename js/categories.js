"use strict"

//BOTON BORRAR CATEGORIA
let botonesBorrar = document.querySelectorAll(".btnBorrar");
for (const btnBorrar of botonesBorrar) {
    btnBorrar.addEventListener("click", function(e){
        e.preventDefault();
        let idCategory = this.dataset.id;
        redirectDeleteCategory(idCategory);
    });
}

async function redirectDeleteCategory(id){
    let res = await fetch("admin/deleteCategory/"+id);
}

//BOTON AGREGAR CATEGORIA
let form = document.querySelector("#form");
form.addEventListener("submit", function (e){
    e.preventDefault();
    let inputNombre = document.querySelector("#nombre").value;
    redirectAddCategory(inputNombre);
})

async function redirectAddCategory(nombre){
    let res = await fetch("admin/addCategory/"+nombre);
}

//BOTON EDITAR CATEGORIA
let botonesEditar = document.querySelectorAll(".btnEditar");
for (const btnEditar of botonesEditar) {
    let idCategory = this.dateset.id;
    let nombre = this.dateset.nombre;
    redirectEditCategory(idCategory, nombre);
}
async function redirectEditCategory(id, nombre){
    let res = await fetch("admin/editCategory/"+id+"/"+nombre);
}







