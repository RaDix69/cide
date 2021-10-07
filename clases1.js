class persona{
    constructor(nombre,apellido){
        this._nombre=nombre;
        this._apellido=apellido;
    }
    get nombre(){
        return this._nombre;
    }

    set nombre(nombre){
        return this._nombre;
    }
    get apellido(){
        return this._nombre;
    }
    set apellido(apellido){
        return this._nombre;
    }
    nombreCompleto(){
        return this._nombre+' '+ this._apellido;
    }

}





































class Aprendiz extends persona{
    constructor(nombre,apellido,programa,ficha){
    super(nombre,apellido);
    this._programa=programa;
    this._ficha=ficha;
}
get programa(){
    return this._programa;
}
set programa(programa){
    return this._programa;
}
get ficha(){
    return this._ficha;
}
set ficha(programa){
    return this._ficha;
}

datosCompletos(){
    return this._nombre+' '+ this._apellido+' '+ this._programa+' '+ this._ficha
}

}


var ap=new Aprendiz('Luis','Castro','ADSI',2142329);
console.log(ap.datosCompletos());



var ob=new persona('Sandra','Mora');
console.log(ob.nombre);
ob.nombre='Maria';
console.log(ob.nombre);
console.log(ob.nombreCompleto());
