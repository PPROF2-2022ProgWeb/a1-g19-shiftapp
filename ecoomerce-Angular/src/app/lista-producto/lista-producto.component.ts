import { Component, OnInit } from '@angular/core';

import {productos} from '../../productos';
import{CarritoService} from '../carrito.service';

@Component({
  selector: 'app-lista-producto',
  templateUrl: './lista-producto.component.html',
  styleUrls: ['./lista-producto.component.css']
})
export class ListaProductoComponent implements OnInit {
  productos=productos;
  carrito= new CarritoService();
  constructor() { }



  ngOnInit(): void {
  }

  adicionarCarrito(){
    this.carrito.adicionarCarrito();
    window.alert("Producto adicionado con el id ");
  }
}
