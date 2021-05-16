import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { QImportComponent } from './q-import.component';

describe('QImportComponent', () => {
  let component: QImportComponent;
  let fixture: ComponentFixture<QImportComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QImportComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QImportComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
