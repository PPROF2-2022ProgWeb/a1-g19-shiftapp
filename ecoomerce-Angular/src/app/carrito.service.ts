import { Injectable } from '@angular/core';
import { productos } from 'src/productos';

@Injectable({
  providedIn: 'root'
})
export class CarritoService {
  productos=productos;
  items=[];
  constructor() { }
  adicionarCarrito()
  {
    this.items.push();
  }
  LimpiarCarrito() {
    this.items=[];
    return this.items;
  }
  ListarCarrito() {
    return this.items;
  }
}
