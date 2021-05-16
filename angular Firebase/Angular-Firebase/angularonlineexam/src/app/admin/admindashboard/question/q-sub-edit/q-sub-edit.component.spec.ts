import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { QSubEditComponent } from './q-sub-edit.component';

describe('QSubEditComponent', () => {
  let component: QSubEditComponent;
  let fixture: ComponentFixture<QSubEditComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QSubEditComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QSubEditComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
