/* const listaNumeros = [12, 21, 38, 45, 72, 122, 205];

const [valor1, valor2, valor3, ...restoDeElementos] = listaNumeros;

console.log(valor1, valor2, valor3, restoDeElementos); */

/* const cliente = {
    nombre: 'Alejandro',
    apellido: 'Córdova',
    tipo: 'Premium',
    codigo: 'AC001',
    direccion: {
        calle: 'Calle Falsa 505',
        codigoPostal: 48080
    }
}

function getFullName({nombre, apellido}){
    return `${nombre} ${apellido}`
}

console.log(getFullName(cliente)); */

/* function getSalary(){
    return [970, 1020, 980, 1123]
}

const [salario1, salario2, salario3, salario4] = getSalary();
console.log(salario1, salario2, salario3, salario4) */

/* const Lista1 = [1,2,3]
const Lista2 = [4,5,6]

function suma(valor1, valor2, valor3){
    let suma= valor1 + valor2 + valor3;
    console.log(suma);
}

suma(...Lista1); */


/* const ListaTotal = [...Lista1, ...Lista2]
console.log(ListaTotal); */

/* const Lista1 = [1,2,3]
const Lista2 = [4,5,6]

function suma(...numeros){
    let suma = numeros.reduce((a, b) => a +b);
    console.log(suma);
}

suma(...Lista1);
suma(...Lista1, ...Lista2);
suma(14, 18,  47, 100, 9, 32, 16); */

/* const personaje = {
    nombre: 'Luis',
    apellido: 'Castillo',
    alergias: {
        trigo: true,
        lactosa: false
    }
}

const direccion ={
    calle: 'Calle Falsa 123',
    localidad: 'Paris',
    pais: 'Francia'
}

const persona ={
    ...personaje,
    ...direccion,
    edad: 45
} */

/* console.log(persona); */

/* personaje.nombre = 'Jesús';
console.log("Objeto personaje");
console.log(personaje);
console.log("===================");
console.log("Objeto copia persona");
console.log(persona); */

/* personaje.alergias.lactosa = true
console.log("Objeto personaje");
console.log(personaje);
console.log("===================");
console.log("Objeto copia persona");
console.log(persona); */

/* const perfil = {
    nombre: 'Gerardo',
    info: {
        direccion: 'Calle 100'
    }
}

const region = {
    pais: 'México',
    info: {
        coordenas: 'Norte 500 - Sur 200'
    }
}

const social = {
    twitter : '@luxfenix',
    nombre: 'Ninja Pro'
}
 
const resultado = Object.assign(
    {},
    perfil,
    region,
    social,
    {
        info: Object.assign(
            {},
            perfil.info,
            region.info
        )
    }
)

console.log(resultado); */

const perfil = {
    nombre: 'Gerardo',
    info: {
        direccion: 'Calle 100'
    }
}

const region = {
    pais: 'México',
    info: {
        coordenas: 'Norte 500 - Sur 200'
    }
}

const social = {
    twitter : '@luxfenix',
    nombre: 'Ninja Pro'
}

const resultado = {
    ...perfil,
    ...region,
    ...social,
    info: {
        ...perfil.info,
        ...region.info
    }
}

console.log(resultado);