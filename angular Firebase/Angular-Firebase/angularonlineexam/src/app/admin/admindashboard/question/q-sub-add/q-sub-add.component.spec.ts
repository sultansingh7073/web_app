import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { QSubAddComponent } from './q-sub-add.component';

describe('QSubAddComponent', () => {
  let component: QSubAddComponent;
  let fixture: ComponentFixture<QSubAddComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QSubAddComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QSubAddComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
