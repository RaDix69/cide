var vec=(array,tam)=>{
    for (let i = 0; i < tam; i++) {
        array.push(Math.round(Math.random()*100));         
    }
    return array;
}
v=[];
x=5;

/*       ----------------------- promedio -------------- */
/*console.log(vec(v,x));*/
var arr= vec(v,x); 
arr = [15,8,11,2,19];
let suma = arr.reduce((previous, current) => current += previous);
let avg = suma/arr.length;
console.log(avg);



/* ----------------- mediana --------------------- */
/*
var arr= vec(v,x); 
arr.sort((a, b) => a - b);
let manoyor = Math.floor((arr.length - 1) / 2);
let mayorigual = Math.ceil((arr.length - 1) / 2);
let mediana = (arr[manoyor] + arr[mayorigual]) / 2;
console.log(mediana);
*/


/* ----------------- minimo --------------------- */
/*
var arr = vec(v,x);
let mayor = (a)=> Math.min.apply(null,a);
console.log(vec(v,x));
console.log(mayor(arr));
*/
/* ----------------- maximo --------------------- */
/*
var arr = vec(v,x);
let mayor = (a)=> Math.max.apply(null,a);
console.log(vec(v,x));
console.log(mayor(arr));
*/