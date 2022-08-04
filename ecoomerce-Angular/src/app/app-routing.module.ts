import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ListaProductoComponent } from './lista-producto/lista-producto.component';
import { ListaCarritoComponent } from './lista-carrito/lista-carrito.component';

const routes: Routes = [
  {path: '', component:ListaProductoComponent},
  {path: 'carrito', component:ListaCarritoComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
