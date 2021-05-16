import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { QEditComponent } from './q-edit.component';

describe('QEditComponent', () => {
  let component: QEditComponent;
  let fixture: ComponentFixture<QEditComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QEditComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QEditComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
