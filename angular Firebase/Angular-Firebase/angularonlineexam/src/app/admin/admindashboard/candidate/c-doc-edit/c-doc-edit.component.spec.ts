import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CDocEditComponent } from './c-doc-edit.component';

describe('CDocEditComponent', () => {
  let component: CDocEditComponent;
  let fixture: ComponentFixture<CDocEditComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CDocEditComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CDocEditComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
