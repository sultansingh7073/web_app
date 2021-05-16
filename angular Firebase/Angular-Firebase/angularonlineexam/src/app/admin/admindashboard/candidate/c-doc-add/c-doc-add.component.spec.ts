import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CDocAddComponent } from './c-doc-add.component';

describe('CDocAddComponent', () => {
  let component: CDocAddComponent;
  let fixture: ComponentFixture<CDocAddComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CDocAddComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CDocAddComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
