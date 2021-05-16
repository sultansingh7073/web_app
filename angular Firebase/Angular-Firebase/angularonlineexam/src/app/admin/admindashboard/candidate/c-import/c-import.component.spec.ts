import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CImportComponent } from './c-import.component';

describe('CImportComponent', () => {
  let component: CImportComponent;
  let fixture: ComponentFixture<CImportComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CImportComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CImportComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
