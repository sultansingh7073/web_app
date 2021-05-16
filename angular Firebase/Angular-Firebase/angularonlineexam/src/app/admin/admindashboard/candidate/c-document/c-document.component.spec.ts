import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CDocumentComponent } from './c-document.component';

describe('CDocumentComponent', () => {
  let component: CDocumentComponent;
  let fixture: ComponentFixture<CDocumentComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CDocumentComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CDocumentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
