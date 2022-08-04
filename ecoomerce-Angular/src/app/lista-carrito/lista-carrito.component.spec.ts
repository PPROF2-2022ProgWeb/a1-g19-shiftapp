import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListaCarritoComponent } from './lista-carrito.component';

describe('ListaCarritoComponent', () => {
  let component: ListaCarritoComponent;
  let fixture: ComponentFixture<ListaCarritoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListaCarritoComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListaCarritoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
